<?php

class Educateur {
    private ?int $id;
    private ?int $licencieId;
    private ?string $email;
    private array $roles;
    private ?string $password;
    private ?bool $estAdmin;

    // Constructeur
    public function __construct(?int $id, ?int $licencieId, ?string $email, array $roles, ?string $password, ?bool $estAdmin) {
        $this->id = $id;
        $this->licencieId = $licencieId;
        $this->email = $email;
        $this->roles = $roles;
        $this->password = $password;
        $this->estAdmin = $estAdmin;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function getLicencieId(): ?int {
        return $this->licencieId;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function getRoles(): array {
        return $this->roles;
    }

    public function getPassword(): ?string {
        return $this->password;
    }

    public function isEstAdmin(): ?bool {
        return $this->estAdmin;
    }

// Setters
    public function setLicencieId(?int $licencieId): void {
        $this->licencieId = $licencieId;
    }

    public function setEmail(?string $email): void {
        $this->email = $email;
    }

    public function setRoles(array $roles): void {
        $this->roles = $roles;
    }

    public function setPassword(?string $password): void {
        $this->password = $password;
    }

    public function setEstAdmin(?bool $estAdmin): void {
        $this->estAdmin = $estAdmin;
    }

}
