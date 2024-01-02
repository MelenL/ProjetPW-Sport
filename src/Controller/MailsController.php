<?php

namespace App\Controller;

use App\Entity\MailContact;
use App\Entity\MailEdu;
use App\Service\MailService;
use Doctrine\ORM\EntityManagerInterface;
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

    #[Route('/mails/delete/{type}/{id}', name: 'app_mails_delete')]
    public function delete(string $type, int $id, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        if ($type === 'Edu') {
            $mail = $entityManager->getRepository(MailEdu::class)->find($id);
        } elseif ($type === 'Contact') {
            $mail = $entityManager->getRepository(MailContact::class)->find($id);
        } else {
            throw $this->createNotFoundException('Type de mail invalide.');
        }

        if (!$mail) {
            throw $this->createNotFoundException('Le mail avec l\'id ' . $id . ' n\'existe pas.');
        }

        $entityManager->remove($mail);
        $entityManager->flush();

        return $this->redirectToRoute('app_mails');
    }

    #[Route('/mails/view/{type}/{id}', name: 'app_mail_view')]
    public function viewMail(string $type, int $id, MailService $mailService): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $mail = $mailService->getMailDetails($type, $id);

        if (!$mail) {
            throw $this->createNotFoundException('Le mail demandé n\'existe pas ou le type est invalide.');
        }

        if($type === 'Edu') {
            $vue = 'mails/viewEdu.html.twig';
        }
        else {
            $vue = 'mails/view.html.twig';
        }

        return $this->render($vue, [
            'mail' => $mail,
        ]);
    }

}
