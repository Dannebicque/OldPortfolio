<?php

namespace App\Controller\portfolio;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/etudiant/portfolio', name: 'portfolio_student_')]
class PortfolioStudentController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('portfolio/student/index.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }

    #[Route('/gestion', name: 'settings_public_portfolio')]
    public function settingsPublicPortfolio(): Response
    {
        return $this->render('portfolio/student/settingsPublicPortfolio.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }

    #[Route('/apercu', name: 'preview_public_portfolio')]
    public function preview(): Response
    {
        return $this->render('portfolio/student/preview.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }
}
