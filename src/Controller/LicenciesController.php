<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LicenciesController extends AbstractController
{
    #[Route('/licencies', name: 'app_licencies')]
    public function index(Request $request, CategorieRepository $categorieRepository): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $categories = $categorieRepository->findAll();
        $categoryId = $request->query->get('category');
        $selectedCategory = null;
        $licencies = [];

        if ($categoryId) {
            $selectedCategory = $categorieRepository->find($categoryId);
            if ($selectedCategory) {
                $licencies = $selectedCategory->getLicencies();
            }
        }

        return $this->render('licencies/licencies.html.twig', [
            'controller_name' => 'LicenciesController',
            'categories' => $categories,
            'licencies' => $licencies,
            'selectedCategory' => $selectedCategory ?? null,
        ]);
    }
}
