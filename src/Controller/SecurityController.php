<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
         if ($this->getUser()) {
             return $this->redirectToRoute('app_home');
         }

        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
    }
    
    private function calculerEntropie($password) {
        $longueur = strlen($password);
        $alphabet = 0;
        if (preg_match('/[a-z]/', $password)) $alphabet += 26;
        if (preg_match('/[A-Z]/', $password)) $alphabet += 26;
        if (preg_match('/[0-9]/', $password)) $alphabet += 10;
        if (preg_match('/[^a-zA-Z0-9]/', $password)) $alphabet += 33;
        
        return $longueur * log($alphabet, 2);
    }
    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}
