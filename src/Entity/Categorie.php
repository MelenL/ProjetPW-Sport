<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieRepository::class)]
class Categorie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomCategorie = null;

    #[ORM\Column(length: 10)]
    private ?string $codeRaccourci = null;

    #[ORM\OneToMany(mappedBy: 'idCategorie', targetEntity: Licencie::class)]
    private Collection $licencies;

    #[ORM\OneToMany(mappedBy: 'destinataire', targetEntity: MailContact::class, orphanRemoval: true)]
    private Collection $mailContacts;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\ManyToMany(targetEntity: MailContact::class, mappedBy: 'destinataires')]
    private Collection $mailContacts2;

    public function __construct()
    {
        $this->licencies = new ArrayCollection();
        $this->mailContacts = new ArrayCollection();
        $this->mailContacts2 = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCategorie(): ?string
    {
        return $this->nomCategorie;
    }

    public function setNomCategorie(string $nomCategorie): static
    {
        $this->nomCategorie = $nomCategorie;

        return $this;
    }

    public function getCodeRaccourci(): ?string
    {
        return $this->codeRaccourci;
    }

    public function setCodeRaccourci(string $codeRaccourci): static
    {
        $this->codeRaccourci = $codeRaccourci;

        return $this;
    }

    /**
     * @return Collection<int, Licencie>
     */
    public function getLicencies(): Collection
    {
        return $this->licencies;
    }

    public function addLicency(Licencie $licency): static
    {
        if (!$this->licencies->contains($licency)) {
            $this->licencies->add($licency);
            $licency->setIdCategorie($this);
        }

        return $this;
    }

    public function removeLicency(Licencie $licency): static
    {
        if ($this->licencies->removeElement($licency)) {
            // set the owning side to null (unless already changed)
            if ($licency->getIdCategorie() === $this) {
                $licency->setIdCategorie(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, MailContact>
     */
    public function getMailContacts(): Collection
    {
        return $this->mailContacts;
    }

    public function addMailContact(MailContact $mailContact): static
    {
        if (!$this->mailContacts->contains($mailContact)) {
            $this->mailContacts->add($mailContact);
            $mailContact->setDestinataire($this);
        }

        return $this;
    }

    public function removeMailContact(MailContact $mailContact): static
    {
        if ($this->mailContacts->removeElement($mailContact)) {
            // set the owning side to null (unless already changed)
            if ($mailContact->getDestinataire() === $this) {
                $mailContact->setDestinataire(null);
            }
        }

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection<int, MailContact>
     */
    public function getMailContacts2(): Collection
    {
        return $this->mailContacts2;
    }

    public function addMailContacts2(MailContact $mailContacts2): static
    {
        if (!$this->mailContacts2->contains($mailContacts2)) {
            $this->mailContacts2->add($mailContacts2);
            $mailContacts2->addDestinataire($this);
        }

        return $this;
    }

    public function removeMailContacts2(MailContact $mailContacts2): static
    {
        if ($this->mailContacts2->removeElement($mailContacts2)) {
            $mailContacts2->removeDestinataire($this);
        }

        return $this;
    }
}
