<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonnalDataController extends AbstractController
{
    #[Route('/personnal/data', name: 'personnal_data')]
    public function index(): Response
    {
        return $this->render('personnal_data/index.html.twig', [
            'controller_name' => 'PersonnalDataController',
        ]);
    }
}
