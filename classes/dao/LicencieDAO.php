<?php

require_once 'classes/models/Licencie.php';

class LicencieDAO {
    private PDO $db;

    // Constructeur
    public function __construct(PDO $db) {
        $this->db = $db;
    }

    // Méthode pour trouver un licencié par ID
    public function findById(int $id): ?Licencie {
        $stmt = $this->db->prepare("SELECT * FROM licencie WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Licencie($row['id'], $row['numero_licence'], $row['nom'], $row['prenom']);
        }
        return null;
    }

    // Méthode pour récupérer tous les licenciés
    public function findAll(): array {
        $stmt = $this->db->query("SELECT * FROM licencie");
        $licencies = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $licencies[] = new Licencie($row['id'], $row['numero_licence'], $row['nom'], $row['prenom']);
        }
        return $licencies;
    }

    // Méthode pour créer un licencié
    public function create(Licencie $licencie): void {
        $stmt = $this->db->prepare("INSERT INTO licencie (numero_licence, nom, prenom) VALUES (:numero_licence, :nom, :prenom)");
        $stmt->execute([
            'numero_licence' => $licencie->getNumeroLicence(),
            'nom' => $licencie->getNom(),
            'prenom' => $licencie->getPrenom()
        ]);
    }

    // Méthode pour mettre à jour un licencié
    public function update(Licencie $licencie): void {
        $stmt = $this->db->prepare("UPDATE licencie SET numero_licence = :numero_licence, nom = :nom, prenom = :prenom WHERE id = :id");
        $stmt->execute([
            'id' => $licencie->getId(),
            'numero_licence' => $licencie->getNumeroLicence(),
            'nom' => $licencie->getNom(),
            'prenom' => $licencie->getPrenom()
        ]);
    }

    // Méthode pour supprimer un licencié
    public function delete(int $id): void {
        $stmt = $this->db->prepare("DELETE FROM licencie WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
