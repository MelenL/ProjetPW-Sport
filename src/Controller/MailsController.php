<?php

namespace App\Controller;

use App\Service\MailService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MailsController extends AbstractController
{
    private MailService $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    #[Route('/mails', name: 'app_mails')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $mailData = $this->mailService->getMailData($this->getUser());

        return $this->render('mails/mails.html.twig', $mailData);
    }

    #[Route('/mails/new', name: 'app_new')]
    public function create(Request $request): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        [$form, $formContact] = $this->mailService->prepareMailForms($this->getUser());

        if ($this->mailService->handleMailForms($form, $formContact, $request)) {
            return $this->redirectToRoute('app_mails');
        }

        return $this->render('mails/new.html.twig', [
            'form' => $form->createView(),
            'formContact' => $formContact->createView(),
        ]);
    }
}
