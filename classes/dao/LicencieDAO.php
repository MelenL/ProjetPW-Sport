<?php

require_once 'classes/models/Licencie.php';
require_once 'classes/dao/ContactDAO.php';

class LicencieDAO {
    private PDO $db;


    public function __construct(PDO $db) {
        $this->db = $db;
    }

    // Méthode pour trouver un licencié par ID
    public function findById(int $id): ?Licencie {
        $stmt = $this->db->prepare("SELECT * FROM licencie WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($row) {
            return new Licencie($row['id'], $row['numero_licence'], $row['nom'], $row['prenom'], $row['id_categorie_id'], $row['id_contact_id']);
        }
        return null;
    }

    // Méthode pour récupérer tous les licenciés
    public function findAll(): array {
        $stmt = $this->db->query("SELECT * FROM licencie");
        $licencies = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $licencies[] = new Licencie($row['id'], $row['numero_licence'], $row['nom'], $row['prenom'], $row['id_categorie_id'], $row['id_contact_id']);
        }
        return $licencies;
    }

    // Méthode pour créer un licencié
    public function create(Licencie $licencie, Contact $contact): void {

        $contactDAO = new ContactDAO($this->db);

        $contactId = $contactDAO->createAndGetId($contact);

        $stmt = $this->db->prepare("INSERT INTO licencie (numero_licence, nom, prenom, id_categorie_id, id_contact_id) VALUES (:numero_licence, :nom, :prenom, :categorie_id, :contact_id)");
        $stmt->execute([
            'numero_licence' => $licencie->getNumeroLicence(),
            'nom' => $licencie->getNom(),
            'prenom' => $licencie->getPrenom(),
            'categorie_id' => $licencie->getCategorie(),
            'contact_id' => $contactId
        ]);

        $licencie->setContactId($contactId);

    }


    // Méthode pour mettre à jour un licencié
    public function edit(Licencie $licencie, Contact $contact): void {
        // Tout d'abord, mettez à jour le contact associé
        $contactDAO = new ContactDAO($this->db);
        $contactDAO->update($contact);

        // Ensuite, mettez à jour le licencié
        $stmt = $this->db->prepare("UPDATE licencie SET numero_licence = :numero_licence, nom = :nom, prenom = :prenom, id_categorie_id = :categorie_id WHERE id = :id");
        $stmt->execute([
            'id' => $licencie->getId(),
            'numero_licence' => $licencie->getNumeroLicence(),
            'nom' => $licencie->getNom(),
            'prenom' => $licencie->getPrenom(),
            'categorie_id' => $licencie->getCategorie()
        ]);
    }



    // Méthode pour supprimer un licencié
    public function delete(int $id): void {
        $stmt = $this->db->prepare("SELECT id_contact_id FROM licencie WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row && $row['id_contact_id']) {
            $contactId = $row['id_contact_id'];

            $stmt = $this->db->prepare("DELETE FROM licencie WHERE id = :id");
            $stmt->execute(['id' => $id]);

            $stmt = $this->db->prepare("DELETE FROM contact WHERE id = :contactId");
            $stmt->execute(['contactId' => $contactId]);
        }
    }

}
