<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MailsController extends AbstractController
{
    #[Route('/mails', name: 'app_mails')]
    public function index(): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('home');
        }

        return $this->render('mails/mails.html.twig', [
            'controller_name' => 'MailsController',
        ]);
    }
}
