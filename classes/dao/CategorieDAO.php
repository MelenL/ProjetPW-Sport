<?php

class CategorieDAO {
    private PDO $db;

    // Constructeur
    public function __construct(PDO $db) {
        $this->db = $db;
    }

    // Méthode pour trouver une catégorie par ID
    public function findById(int $id): ?Categorie {
        $stmt = $this->db->prepare("SELECT * FROM categorie WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Categorie($row['id'], $row['nom_categorie'], $row['code_raccourci'], $row['description']);
        }
        return null;
    }

    // Méthode pour récupérer toutes les catégories
    public function findAll(): array {
        $stmt = $this->db->query("SELECT * FROM categorie");
        $categories = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $categories[] = new Categorie($row['id'], $row['nom_categorie'], $row['code_raccourci'], $row['description']);
        }
        return $categories;
    }

    // Méthode pour créer une catégorie
    public function create(Categorie $categorie): void {
        $stmt = $this->db->prepare("INSERT INTO categorie (nom_categorie, code_raccourci, description) VALUES (:nom_categorie, :code_raccourci, :description)");
        $stmt->execute([
            'nom_categorie' => $categorie->getNomCategorie(),
            'code_raccourci' => $categorie->getCodeRaccourci(),
            'description' => $categorie->getDescription()
        ]);
    }

    // Méthode pour mettre à jour une catégorie
    public function update(Categorie $categorie): void {
        $stmt = $this->db->prepare("UPDATE categorie SET nom_categorie = :nom_categorie, code_raccourci = :code_raccourci, description = :description WHERE id = :id");
        $stmt->execute([
            'id' => $categorie->getId(),
            'nom_categorie' => $categorie->getNomCategorie(),
            'code_raccourci' => $categorie->getCodeRaccourci(),
            'description' => $categorie->getDescription()
        ]);
    }

    // Méthode pour supprimer une catégorie
    public function delete(int $id): void {
        $stmt = $this->db->prepare("DELETE FROM categorie WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
