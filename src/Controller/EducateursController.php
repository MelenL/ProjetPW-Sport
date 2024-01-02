<?php

namespace App\Controller;

use App\Repository\EducateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EducateursController extends AbstractController
{
    #[Route('/educateurs', name: 'app_educateurs')]
    public function index(EducateurRepository $educateurRepository): Response
    {
        $educateurs = $educateurRepository->findAll();

        return $this->render('educateurs/educateurs.html.twig', [
            'controller_name' => 'EducateursController',
            'educateurs' => $educateurs
        ]);
    }
}
