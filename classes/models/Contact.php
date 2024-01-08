<?php

class Contact {
    private ?int $id;
    private ?string $nom;
    private ?string $prenom;
    private ?string $email;
    private ?string $numeroTel;

    // Constructeur
    public function __construct(?int $id, ?string $nom, ?string $prenom, ?string $email, ?string $numeroTel) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->numeroTel = $numeroTel;
    }

    // Getters
    public function getId(): ?int {
        return $this->id;
    }

    public function getNom(): ?string {
        return $this->nom;
    }

    public function getPrenom(): ?string {
        return $this->prenom;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function getNumeroTel(): ?string {
        return $this->numeroTel;
    }

    // Setters
    public function setNom(?string $nom): void {
        $this->nom = $nom;
    }

    public function setPrenom(?string $prenom): void {
        $this->prenom = $prenom;
    }

    public function setEmail(?string $email): void {
        $this->email = $email;
    }

    public function setNumeroTel(?string $numeroTel): void {
        $this->numeroTel = $numeroTel;
    }
}
