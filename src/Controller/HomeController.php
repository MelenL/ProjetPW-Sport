<?php

// src/Controller/HomeController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\LicencieRepository;
use App\Repository\CategorieRepository;
use App\Repository\EducateurRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(LicencieRepository $licencieRepository, CategorieRepository $categorieRepository, EducateurRepository $educateurRepository): Response
    {
        $NombreLicencies = $licencieRepository->count([]);
        $NombreEducateurs = $educateurRepository->count([]);
        $NombreCategories= $categorieRepository->count([]);


        return $this->render('home/index.html.twig', [
            'NombreLicencies' => $NombreLicencies,
            'NombreEducateurs' => $NombreEducateurs,
            'NombreCategories' => $NombreCategories
        ]);
    }
}

