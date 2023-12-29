<?php

namespace App\Entity;

use App\Repository\MailEduRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MailEduRepository::class)]
class MailEdu
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateEnvoie = null;

    #[ORM\Column(length: 255)]
    private ?string $objet = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $message = null;

    #[ORM\ManyToOne(inversedBy: 'mailEdus')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Educateur $idEducateur = null;

    #[ORM\ManyToMany(targetEntity: Educateur::class, inversedBy: 'mailEdu')]
    private Collection $destinaires;

    public function __construct()
    {
        $this->destinaires = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateEnvoie(): ?\DateTimeInterface
    {
        return $this->dateEnvoie;
    }

    public function setDateEnvoie(\DateTimeInterface $dateEnvoie): static
    {
        $this->dateEnvoie = $dateEnvoie;

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

    public function getIdEducateur(): ?Educateur
    {
        return $this->idEducateur;
    }

    public function setIdEducateur(?Educateur $idEducateur): static
    {
        $this->idEducateur = $idEducateur;

        return $this;
    }

    /**
     * @return Collection<int, Educateur>
     */
    public function getDestinaires(): Collection
    {
        return $this->destinaires;
    }

    public function addDestinaire(Educateur $destinaire): static
    {
        if (!$this->destinaires->contains($destinaire)) {
            $this->destinaires->add($destinaire);
        }

        return $this;
    }

    public function removeDestinaire(Educateur $destinaire): static
    {
        $this->destinaires->removeElement($destinaire);

        return $this;
    }

}
