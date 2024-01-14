<?php

// Inclure le fichier Contact.php
require_once 'classes/models/Contact.php';

class ContactDAO {
    private PDO $db;

    // Constructeur
    public function __construct(PDO $db) {
        $this->db = $db;
    }

    // Méthode pour trouver un contact par ID
    public function findById(int $id): ?Contact {
        $stmt = $this->db->prepare("SELECT * FROM contact WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Contact($row['id'], $row['nom'], $row['prenom'], $row['email'], $row['numero_tel']);
        }
        return null;
    }

    // Méthode pour récupérer tous les contacts
    public function findAll(): array {
        $stmt = $this->db->query("SELECT * FROM contact");
        $contacts = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $contacts[] = new Contact($row['id'], $row['nom'], $row['prenom'], $row['email'], $row['numero_tel']);
        }
        return $contacts;
    }

    // Méthode pour créer un contact
    public function create(Contact $contact): void {
        $stmt = $this->db->prepare("INSERT INTO contact (nom, prenom, email, numero_tel) VALUES (:nom, :prenom, :email, :numero_tel)");
        $stmt->execute([
            'nom' => $contact->getNom(),
            'prenom' => $contact->getPrenom(),
            'email' => $contact->getEmail(),
            'numero_tel' => $contact->getNumeroTel()
        ]);
    }

    // Méthode pour mettre à jour un contact
    public function update(Contact $contact): void {
        $stmt = $this->db->prepare("UPDATE contact SET nom = :nom, prenom = :prenom, email = :email, numero_tel = :numero_tel WHERE id = :id");
        $stmt->execute([
            'id' => $contact->getId(),
            'nom' => $contact->getNom(),
            'prenom' => $contact->getPrenom(),
            'email' => $contact->getEmail(),
            'numero_tel' => $contact->getNumeroTel()
        ]);
    }

    // Méthode pour supprimer un contact
    public function delete(int $id): void {
        $stmt = $this->db->prepare("DELETE FROM contact WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

    public function createAndGetId(Contact $contact): int {
        $stmt = $this->db->prepare("INSERT INTO contact (nom, prenom, email, numero_tel) VALUES (:nom, :prenom, :email, :numero_tel)");
        $stmt->execute([
            'nom' => $contact->getNom(),
            'prenom' => $contact->getPrenom(),
            'email' => $contact->getEmail(),
            'numero_tel' => $contact->getNumeroTel()
        ]);
        return $this->db->lastInsertId();
    }

}
