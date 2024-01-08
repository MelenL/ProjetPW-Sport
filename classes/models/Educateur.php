<?php

class Educateur {
    private ?int $id;
    private ?string $email;
    private array $roles;
    private ?string $password;
    private ?bool $estAdmin;

    // Constructeur
    public function __construct(?int $id, ?string $email, array $roles, ?string $password, ?bool $estAdmin) {
        $this->id = $id;
        $this->email = $email;
        $this->roles = $roles;
        $this->password = $password;
        $this->estAdmin = $estAdmin;
    }

    // Getters
    public function getId(): ?int {
        return $this->id;
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
