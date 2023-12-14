<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LicenciesController extends AbstractController
{
    #[Route('/licencies', name: 'app_licencies')]
    public function index(): Response
    {
        return $this->render('licencies.html.twig', [
            'controller_name' => 'LicenciesController',
        ]);
    }
}
