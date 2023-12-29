<?php

namespace App\Entity;

use App\Repository\MailContactRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MailContactRepository::class)]
class MailContact
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateEnvoi = null;

    #[ORM\Column(length: 255)]
    private ?string $objet = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $message = null;

    #[ORM\ManyToOne(inversedBy: 'mailContacts')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Contact $idContact = null;

    #[ORM\ManyToMany(targetEntity: Categorie::class, inversedBy: 'mailContacts2')]
    private Collection $destinataires;

    public function __construct()
    {
        $this->destinataires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateEnvoi(): ?\DateTimeInterface
    {
        return $this->dateEnvoi;
    }

    public function setDateEnvoi(\DateTimeInterface $dateEnvoi): static
    {
        $this->dateEnvoi = $dateEnvoi;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): static
    {
        $this->objet = $objet;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): static
    {
        $this->message = $message;

        return $this;
    }

    public function getIdContact(): ?Contact
    {
        return $this->idContact;
    }

    public function setIdContact(?Contact $idContact): static
    {
        $this->idContact = $idContact;

        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */
    public function getDestinataires(): Collection
    {
        return $this->destinataires;
    }

    public function addDestinataire(Categorie $destinataire): static
    {
        if (!$this->destinataires->contains($destinataire)) {
            $this->destinataires->add($destinataire);
        }

        return $this;
    }

    public function removeDestinataire(Categorie $destinataire): static
    {
        $this->destinataires->removeElement($destinataire);

        return $this;
    }

}
