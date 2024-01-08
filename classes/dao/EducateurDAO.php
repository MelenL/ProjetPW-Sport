<?php

require_once './classes/models/Educateur.php';

class EducateurDAO {
    private PDO $db;

    // Constructeur
    public function __construct(PDO $db) {
        $this->db = $db;
    }

    // Méthode pour trouver un éducateur par ID
    public function findById(int $id): ?Educateur {
        $stmt = $this->db->prepare("SELECT * FROM educateur WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Educateur($row['id'], $row['email'], json_decode($row['roles'], true), $row['password'], $row['est_admin']);
        }
        return null;
    }

    // Méthode pour récupérer tous les éducateurs
    public function findAll(): array {
        $stmt = $this->db->query("SELECT * FROM educateur");
        $educateurs = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $educateurs[] = new Educateur($row['id'], $row['email'], json_decode($row['roles'], true), $row['password'], $row['est_admin']);
        }
        return $educateurs;
    }

    // Méthode pour créer un éducateur
    public function create(Educateur $educateur): void {
        $stmt = $this->db->prepare("INSERT INTO educateur (email, roles, password, est_admin) VALUES (:email, :roles, :password, :est_admin)");
        $stmt->execute([
            'email' => $educateur->getEmail(),
            'roles' => json_encode($educateur->getRoles()),
            'password' => $educateur->getPassword(),
            'est_admin' => $educateur->isEstAdmin()
        ]);
    }

    // Méthode pour mettre à jour un éducateur
    public function update(Educateur $educateur): void {
        $stmt = $this->db->prepare("UPDATE educateur SET email = :email, roles = :roles, password = :password, est_admin = :est_admin WHERE id = :id");
        $stmt->execute([
            'id' => $educateur->getId(),
            'email' => $educateur->getEmail(),
            'roles' => json_encode($educateur->getRoles()),
            'password' => $educateur->getPassword(),
            'est_admin' => $educateur->isEstAdmin()
        ]);
    }

    // Méthode pour supprimer un éducateur
    public function delete(int $id): void {
        $stmt = $this->db->prepare("DELETE FROM educateur WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }

    // Méthode pour trouver un éducateur par email
    public function findByEmail(string $email): ?Educateur {
        $stmt = $this->db->prepare("SELECT * FROM educateur WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Educateur($row['id'], $row['email'], json_decode($row['roles'], true), $row['password'], $row['est_admin']);
        }
        return null;
    }

}
