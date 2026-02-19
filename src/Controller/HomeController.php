<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

final class HomeController extends AbstractController
{
    // On garde '/' pour que le prof arrive direct sur ton travail
    #[Route('/', name: 'app_home')]
    // Correction A1 : Seuls les utilisateurs avec ROLE_USER peuvent voir cette page
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        // On charge ton fichier Twig au lieu du texte brut
        return $this->render('home/index.html.twig');
    }
}