<?php

namespace App\Controller\cv;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/etudiant/curriculum-vitae', name: 'cv_student_')]
class StudentController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('cv/student/index.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }
}
