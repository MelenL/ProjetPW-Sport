<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ContactRepository;

class ContactsController extends AbstractController
{
    #[Route('/contacts', name: 'app_contacts')]
    public function index(Request $request, CategorieRepository $categorieRepository, ContactRepository $contactRepository): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $categories = $categorieRepository->findAll();
        $categoryId = $request->query->get('category');
        $selectedCategory = null;
        $contacts = [];

        if ($categoryId) {
            $selectedCategory = $categorieRepository->find($categoryId);
            if ($selectedCategory) {
                $licencies = $selectedCategory->getLicencies();
                for($i = 0; $i < count($licencies); $i++){
                    $contactId = $licencies[$i]->getIdContact();
                    $contactRepository->find($contactId);
                    $contacts[$i] = $contactRepository->find($contactId);
                }
            }
        }

        return $this->render('contacts/contacts.html.twig', [
            'controller_name' => 'ContactsController',
            'categories' => $categories,
            'contacts' => $contacts,
            'selectedCategory' => $selectedCategory ?? null,
        ]);
    }
}
