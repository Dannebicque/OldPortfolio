<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/etudiant', name: 'student_')]
class StudentController extends AbstractController
{
    #[Route('/profil', name: 'profile')]
    public function profil(): Response
    {
        return $this->render('student/profile.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }

    #[Route('/parametres', name: 'settings')]
    public function settings(): Response
    {
        return $this->render('student/settings.html.twig', [
            'controller_name' => 'EtudiantController',
        ]);
    }
}
