<?php

namespace App\Controller\portfolio;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/etudiant/trace', name: 'trace_student_')]
class TraceStudentController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('portfolio/trace/index.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }

    #[Route('/depot', name: 'depot')]
    public function depot(): Response
    {
        return $this->render('portfolio/trace/depot.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }
}
