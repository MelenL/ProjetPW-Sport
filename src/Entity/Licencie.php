<?php

namespace App\Entity;

use App\Repository\LicencieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LicencieRepository::class)]
class Licencie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $numeroLicence = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\ManyToOne(inversedBy: 'licencies')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categorie $idCategorie = null;

    #[ORM\OneToOne(inversedBy: 'licencie', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Contact $idContact = null;

    #[ORM\OneToOne(mappedBy: 'idLicencie', cascade: ['persist', 'remove'])]
    private ?Educateur $educateur = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeroLicence(): ?int
    {
        return $this->numeroLicence;
    }

    public function setNumeroLicence(int $numeroLicence): static
    {
        $this->numeroLicence = $numeroLicence;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getIdCategorie(): ?Categorie
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(?Categorie $idCategorie): static
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    public function getIdContact(): ?Contact
    {
        return $this->idContact;
    }

    public function setIdContact(Contact $idContact): static
    {
        $this->idContact = $idContact;

        return $this;
    }

    public function getEducateur(): ?Educateur
    {
        return $this->educateur;
    }

    public function setEducateur(Educateur $educateur): static
    {
        // set the owning side of the relation if necessary
        if ($educateur->getIdLicencie() !== $this) {
            $educateur->setIdLicencie($this);
        }

        $this->educateur = $educateur;

        return $this;
    }
}
