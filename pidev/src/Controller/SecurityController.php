<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use App\Form\RegistrationFormType;
use Symfony\Contracts\Translation\TranslatorInterface;
use App\Form\LoginType;
use App\Repository\UtilisateurRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Service\MailService;



use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SecurityController extends AbstractController
{
   
    #[Route('/login', name: 'app_login')]
    public function login(Request $request, SessionInterface $session): Response
    {
        
        $utilisateurRepository = $this->getDoctrine()->getRepository(Utilisateur::class);

        $useronline = new Utilisateur();
        $connexion = $this->createForm(LoginType::class, $useronline);
        $connexion->handleRequest($request);
        if ($connexion->isSubmitted() ) {
            $verifuser = $utilisateurRepository->findOneBy(array('email' => $useronline->getEmail()));
            $verifuser = $utilisateurRepository->findOneBy(array('motDePasse' => $useronline->getMotDePasse()));

            if (is_null($verifuser)) {
                return $this->render('security/message.html.twig', ['message' => 'Email ou mot de passe incorrect']);
            } else {
                if ($verifuser->getRole() == "admin") {
                    $session->set('utilisateur', $verifuser);
                    return $this->redirectToRoute('app_utilisateur_index');
                } 
                elseif ($verifuser->getRole() == "Membre") {
                    $session->set('utilisateur', $verifuser);
                    return $this->redirectToRoute('app_membre');
                }
                elseif ($verifuser->getRole() == "Artiste") {
                    $session->set('utilisateur', $verifuser);
                    return $this->redirectToRoute('app_artiste');
                }
                

            }

        }
        return $this->render('login.html.twig', [
            'connexion' => $connexion->createView(),
        ]);

    }
    #[Route(path: '/logout', name: 'app_logout')]
public function logout(): Response
{
    $this->get('session')->invalidate();
    $this->get('security.token_storage')->setToken(null);
    $this->get('request_stack')->getCurrentRequest()->getSession()->invalidate();
    $this->addFlash('success', 'Vous avez été déconnecté.');
    return $this->redirectToRoute('app_login');
}


#[Route( path: '/send-email', name: 'send_email')]
    public function sendEmail(MailService $mailService): Response
    {
        $to = 'mayar.hmidi@esprit.tn';
        $subject = 'Test email';
        $body = 'This is a test email';

        $mailService->sendEmail($to, $subject, $body);

        return $this->render('email.html.twig');
    }
    #[Route( path: '/forget', name: 'forget')]
    public function forget(): Response
    { return $this->render('email.html.twig');
    }

    
     


    
       
}
