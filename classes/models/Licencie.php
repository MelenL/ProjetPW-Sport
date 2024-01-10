<?php

class Licencie {
    private ?int $id;
    private ?int $numeroLicence;
    private ?string $nom;
    private ?string $prenom;
    private ?int $categorie;

    private ?int $contactId;

    // Constructeur
    public function __construct(?int $id, ?int $numeroLicence, ?string $nom, ?string $prenom, ?int $categorieId, ?int $contactId) {
        $this->id = $id;
        $this->numeroLicence = $numeroLicence;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->categorie = $categorieId;
        $this->contactId = $contactId;

    }

    // Getters
    public function getCategorie(): ?int {
        return $this->categorie;
    }

    public function setCategorie(?int $categorie): void {
        $this->categorie = $categorie;
    }

    public function getContactId(): ?int {
        return $this->contactId;
    }

    public function setContactId(?int $contactId): void {
        $this->contactId = $contactId;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getNumeroLicence(): ?int {
        return $this->numeroLicence;
    }

    public function getNom(): ?string {
        return $this->nom;
    }

    public function getPrenom(): ?string {
        return $this->prenom;
    }

    // Setters
    public function setNumeroLicence(?int $numeroLicence): void {
        $this->numeroLicence = $numeroLicence;
    }

    public function setNom(?string $nom): void {
        $this->nom = $nom;
    }

    public function setPrenom(?string $prenom): void {
        $this->prenom = $prenom;
    }
}
