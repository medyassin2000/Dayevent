<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser() && in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
            return $this->redirectToRoute('app_utilisateur_index');
        } elseif ($this->getUser() && in_array('ROLE_Membre', $this->getUser()->getRoles())){
        return $this->redirectToRoute('app_profil');}
        elseif ($this->getUser() && in_array('ROLE_Artiste', $this->getUser()->getRoles())){
        return $this->redirectToRoute('app_profil');}
    

        //if ($this->getUser()) {
         // return $this->redirectToRoute('app_profil');
        //}

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): Response
    {
        $this->session->invalidate();
        $this->get('security.token_storage')->setToken(null);
        $this->get('request_stack')->getCurrentRequest()->getSession()->invalidate();
        $this->addFlash('success', 'Vous avez été déconnecté.');
        return $this->redirectToRoute('app_login');
    }
}
