<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\LoginType;
use App\Form\ResetPasswordType;
use App\Form\UserType;
use Dompdf\Dompdf;
use Dompdf\Options;




use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class RegistrationController extends AbstractController
{/*
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager): Response
    {
        $user = new Utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setMotDePasse(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();
            // do anything else you need here, like send an email

            return $this->redirectToRoute('app_login');
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }*/


    #[Route('/utilisateur/signup', name: 'app_register_api')]
    public function signupAction(Request $request,UserPasswordEncoderInterface $PasswordEncoder)
    {

        $email = $request->query->get( "email");
        $Nom = $request->query->get( "nom");
        $Prenom = $request->query->get( "prenom");
        $motDePasse = $request->query->get( "motDePasse");
        $roles= $request->query->get( "role");
      

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {



            return new Response("email invalid.");
            
             
            
            }
            
            $user = new Users();
            
            $user->setNom($Nom_user);
            $user->setPrenom($Prenom_user);
            
            $user->setEmail($email);
            
            $user->setPassword($PasswordEncoder->encodePassword(
                $user,
                $motDePasse));
            $user->setRoles(array($roles));
          /*   $user->setEtat(false);
            $user->setEtatUser("l utilisateur est debloque");
            $user->setStatus("l utilisateur est debloque"); */
            $user->setIsBlocked(false);
          /*   $user->setIsApprouved(false); */
             
            
             
            try {
                $em = $this->getDoctrine()->getManager();
                $em->persist ($user);
                $em->flush();
                
                return new JsonResponse( "Account is created",200);
            }
                catch (\Exception $ex) {
                return new Response("execption ".$ex->getMessage());
                
            
                
                }

        
    }


    #[Route('/register', name: 'app_register')]
    public function ajouter(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = new Utilisateur();
        $form = $this->createForm(RegistrationFormType::class, $user);
        //$form->add('Save', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $passwordCrypte = $encoder->encodePassword($user, $user->getPassword());
            $user->setMotDePasse($passwordCrypte);
            $user = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'notice',
                'vous compte a été creé avec succées veuillez consultez votre compte!'
            );
            return $this->redirectToRoute('app_login');
        }
        return $this->render('registration/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
