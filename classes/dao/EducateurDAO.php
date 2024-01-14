<?php

require_once 'classes/models/Educateur.php'; // Assurez-vous d'importer la classe Educateur

class EducateurDAO {
    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    // Méthode pour créer un éducateur
    public function create(Educateur $educateur): void {
        $stmt = $this->db->prepare("INSERT INTO educateur (licencie_id, email, password, est_admin, roles) VALUES (:licencie_id, :email, :password, :est_admin, :roles)");
        $stmt->execute([
            'licencie_id' => $educateur->getLicencieId(),
            'email' => $educateur->getEmail(),
            'password' => $educateur->getPassword(),
            'est_admin' => $educateur->isEstAdmin(),
            'roles' => json_encode($educateur->getRoles())
        ]);
    }

    // Méthode pour supprimer un éducateur par son ID
    public function delete(int $id): void {
        $stmt = $this->db->prepare("DELETE FROM educateur WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

    // Méthode pour mettre à jour un éducateur
    public function update(Educateur $educateur): void {
        $stmt = $this->db->prepare("UPDATE educateur SET licencie_id = :licencie_id, email = :email, password = :password, est_admin = :est_admin, roles = :roles WHERE id = :id");
        $stmt->execute([
            'id' => $educateur->getId(),
            'licencie_id' => $educateur->getLicencieId(),
            'email' => $educateur->getEmail(),
            'password' => $educateur->getPassword(),
            'est_admin' => $educateur->isEstAdmin(),
            'roles' => json_encode($educateur->getRoles())
        ]);
    }

    // Méthode pour trouver un éducateur par son ID
    public function findById(int $id): ?Educateur {
        $stmt = $this->db->prepare("SELECT * FROM educateur WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        return new Educateur(
            $row['id'],
            $row['licencie_id'],
            $row['email'],
            json_decode($row['roles'], true),
            $row['password'],
            (bool)$row['est_admin']
        );
    }

    // Méthode pour trouver tous les éducateurs
    public function findAll(): array {
        $stmt = $this->db->query("SELECT * FROM educateur");
        $educateurs = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $educateurs[] = new Educateur(
                $row['id'],
                $row['licencie_id'],
                $row['email'],
                json_decode($row['roles'], true),
                $row['password'],
                (bool)$row['est_admin']
            );
        }

        return $educateurs;
    }
}
