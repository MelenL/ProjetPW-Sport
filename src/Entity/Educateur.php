<?php

namespace App\Entity;

use App\Repository\EducateurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EducateurRepository::class)]
class Educateur
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'educateur', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Licencie $idLicencie = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $motDePasse = null;

    #[ORM\Column]
    private ?bool $estAdministrateur = null;

    #[ORM\OneToMany(mappedBy: 'idEducateur', targetEntity: MailEdu::class, orphanRemoval: true)]
    private Collection $mailEdus;

    public function __construct()
    {
        $this->mailEdus = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdLicencie(): ?Licencie
    {
        return $this->idLicencie;
    }

    public function setIdLicencie(Licencie $idLicencie): static
    {
        $this->idLicencie = $idLicencie;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(string $motDePasse): static
    {
        $this->motDePasse = $motDePasse;

        return $this;
    }

    public function isEstAdministrateur(): ?bool
    {
        return $this->estAdministrateur;
    }

    public function setEstAdministrateur(bool $estAdministrateur): static
    {
        $this->estAdministrateur = $estAdministrateur;

        return $this;
    }

    /**
     * @return Collection<int, MailEdu>
     */
    public function getMailEdus(): Collection
    {
        return $this->mailEdus;
    }

    public function addMailEdu(MailEdu $mailEdu): static
    {
        if (!$this->mailEdus->contains($mailEdu)) {
            $this->mailEdus->add($mailEdu);
            $mailEdu->setIdEducateur($this);
        }

        return $this;
    }

    public function removeMailEdu(MailEdu $mailEdu): static
    {
        if ($this->mailEdus->removeElement($mailEdu)) {
            // set the owning side to null (unless already changed)
            if ($mailEdu->getIdEducateur() === $this) {
                $mailEdu->setIdEducateur(null);
            }
        }

        return $this;
    }
}
