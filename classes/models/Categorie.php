<?php

class Categorie {
    private ?int $id;
    private ?string $nomCategorie;
    private ?string $codeRaccourci;
    private ?string $description;

    // Constructeur
    public function __construct(?int $id, ?string $nomCategorie, ?string $codeRaccourci, ?string $description) {
        $this->id = $id;
        $this->nomCategorie = $nomCategorie;
        $this->codeRaccourci = $codeRaccourci;
        $this->description = $description;
    }

    // Getters
    public function getId(): ?int {
        return $this->id;
    }

    public function getNomCategorie(): ?string {
        return $this->nomCategorie;
    }

    public function getCodeRaccourci(): ?string {
        return $this->codeRaccourci;
    }

    public function getDescription(): ?string {
        return $this->description;
    }

    // Setters
    public function setNomCategorie(?string $nomCategorie): void {
        $this->nomCategorie = $nomCategorie;
    }

    public function setCodeRaccourci(?string $codeRaccourci): void {
        $this->codeRaccourci = $codeRaccourci;
    }

    public function setDescription(?string $description): void {
        $this->description = $description;
    }
}
