<?php

require_once 'classes/dao/LicencieDAO.php';
require_once 'classes/dao/CategorieDAO.php';
require_once 'classes/dao/ContactDAO.php';

// Création d'une instance de Connexion
$connexion = new Connexion();
$db = $connexion->pdo;

// Création d'une instance de LicencieDAO
$licencieDAO = new LicencieDAO($db);

// Création d'une instance de CategorieDAO
$categorieDAO = new CategorieDAO($db);

// Création d'une instance de ContactDAO
$contactDAO = new ContactDAO($db);

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numeroLicence'], $_POST['nom'], $_POST['prenom'], $_POST['categorie_id'], $_POST['email'], $_POST['numeroTel'])) {
            // Récupérer les données du formulaire
            $numeroLicence = (int)$_POST['numeroLicence'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $categorieId = (int)$_POST['categorie_id'];
            $email = $_POST['email'];
            $numeroTel = $_POST['numeroTel'];

            // Créer un nouveau contact
            $contact = new Contact(null, $nom, $prenom, $email, $numeroTel);
            $contactDAO->create($contact); // Enregistrez le contact et obtenez son ID
            $contactId = $contact->getId();

                // Créer un nouveau licencié avec l'ID du contact
            $licencie = new Licencie(null, $numeroLicence, $nom, $prenom, $categorieId, $contactId);

            // Enregistrer le nouveau licencié dans la base de données
            $licencieDAO->create($licencie);

            // Rediriger vers la page des licenciés avec un message de succès
            header('Location: /index.php?page=licencie&success=Le licencié a été créé avec succès');
            exit();
        }
        break;

    case 'edit':
        // Gérer la modification d'un licencié ici
        break;

    case 'delete':
        // Gérer la suppression d'un licencié ici
        break;

    default:
        // Afficher la liste des licenciés existants
        $licencies = $licencieDAO->findAll();
        $categories = $categorieDAO->findAll();
        require 'views/licencie.php';
        break;
}
