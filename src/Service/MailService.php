<?php

namespace App\Service;

use App\Repository\MailContactRepository;
use App\Repository\MailEduRepository;
use App\Repository\ContactRepository;
use App\Repository\EducateurRepository;
use App\Repository\CategorieRepository;
use App\Repository\LicencieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Form\MailFormType;
use App\Form\MailContactFormType;
use App\Entity\MailEdu;
use App\Entity\MailContact;

class MailService extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private MailContactRepository $mailContactRepository;
    private MailEduRepository $mailEduRepository;
    private ContactRepository $contactRepository;
    private EducateurRepository $educateurRepository;
    private CategorieRepository $categorieRepository;
    private LicencieRepository $licencieRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        MailContactRepository $mailContactRepository,
        MailEduRepository $mailEduRepository,
        ContactRepository $contactRepository,
        EducateurRepository $educateurRepository,
        CategorieRepository $categorieRepository,
        LicencieRepository $licencieRepository
    ) {
        $this->entityManager = $entityManager;
        $this->mailContactRepository = $mailContactRepository;
        $this->mailEduRepository = $mailEduRepository;
        $this->contactRepository = $contactRepository;
        $this->educateurRepository = $educateurRepository;
        $this->categorieRepository = $categorieRepository;
        $this->licencieRepository = $licencieRepository;
    }

    public function getMailData(UserInterface $user): array
    {
        // Récupérer les mails
        $mailsContact = $this->mailContactRepository->findAll();
        $mailsEdu = $this->mailEduRepository->findAll();

        // Récupérer les mails envoyés
        $contactId = $user->getLicencie()->getIdContact();
        $licencie = $user->getLicencie();
        $mailsContactEnvoyes = $this->mailContactRepository->findBy(['idContact' => $contactId]);
        $mailsEduEnvoyes = $this->mailEduRepository->findBy(['idEducateur' => $user->getId()]);

        // Filtrer et trier les mailsContact et mailsEdu
        $mailsContactTrie = $this->filtrerMailsContact($mailsContact, $user);
        $mailsEduTrie = $this->filtrerMailsEdu($mailsEdu, $user);

        // Récupérer les contacts et noms associés aux mails triés
        $mailsContact_contacts = array_map(fn($mail) => $this->contactRepository->find($mail->getIdContact()), $mailsContactTrie);
        $mailsEdu_contacts = array_map(fn($mail) => $this->educateurRepository->find($mail->getIdEducateur()), $mailsEduTrie);
        $mailsEdu_noms = array_map(fn($contact) => $contact->getLicencie(), $mailsEdu_contacts);

        return [
            'mailsContactTrie' => $mailsContactTrie,
            'mailsEduTrie' => $mailsEduTrie,
            'mailsContactEnvoyes' => $mailsContactEnvoyes,
            'mailsEduEnvoyes' => $mailsEduEnvoyes,
        ];
    }

    private function filtrerMailsContact(array $mailsContact, UserInterface $user): array
    {
        $mailsContactTrie = [];

        foreach ($mailsContact as $mail) {
            $destinataires = $mail->getDestinataires();
            $maCategorie = $user->getLicencie()->getIdCategorie();

            foreach ($destinataires as $destinataire) {
                if ($destinataire->getId() == $maCategorie->getId()) {
                    $mailsContactTrie[] = $mail;
                    break;
                }
            }
        }

        return $mailsContactTrie;
    }


    private function filtrerMailsEdu(array $mailsEdu, UserInterface $user): array
    {
        $mailsEduTrie = [];

        foreach ($mailsEdu as $mail) {
            $destinataires = $mail->getDestinaires();

            foreach ($destinataires as $destinataire) {
                if ($destinataire == $user) {
                    $mailsEduTrie[] = $mail;
                    break;
                }
            }
        }

        return $mailsEduTrie;
    }

    public function prepareMailForms(UserInterface $user): array
    {
        $mail = new MailEdu();
        $mail->setIdEducateur($user);
        $mail2 = new MailContact();
        $mail2->setIdContact($user->getLicencie()->getIdContact());

        $form = $this->createForm(MailFormType::class, $mail);
        $formContact = $this->createForm(MailContactFormType::class, $mail2);

        return [$form, $formContact, $mail, $mail2];
    }

    public function handleMailForms($form, $formContact, Request $request): bool
    {
        $form->handleRequest($request);
        $formContact->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $mail = $form->getData();

            $date = new \DateTime('now');
            $mail->setDateEnvoie($date);

            $this->entityManager->persist($mail);
            $this->entityManager->flush();

            return true;
        }

        if ($formContact->isSubmitted() && $formContact->isValid()) {
            $mail2 = $formContact->getData();

            $date = new \DateTime('now');
            $mail2->setDateEnvoi($date);

            $this->entityManager->persist($mail2);
            $this->entityManager->flush();

            return true;
        }

        return false;
    }

    public function getMailDetails(string $type, int $id): ?object
    {
        if ($type === 'Edu') {
            return $this->mailEduRepository->find($id);
        } elseif ($type === 'Contact') {
            return $this->mailContactRepository->find($id);
        }

        return null;
    }

}
