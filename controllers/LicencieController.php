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

            // Créer un nouveau licencié (sans l'ID de contact pour l'instant)
            $licencie = new Licencie(null, $numeroLicence, $nom, $prenom, $categorieId, null);

            // Enregistrer le nouveau licencié et le contact dans la base de données
            $licencieDAO->create($licencie, $contact);

            // Rediriger vers la page des licenciés avec un message de succès
            header('Location: /index.php?page=licencie&success=Le licencié a été créé avec succès');
            exit();
        }
        break;


    case 'edit':
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
            $licencieId = (int)$_GET['id'];
            $licencie = $licencieDAO->findById($licencieId);

            if ($licencie) {
                // Récupérer les catégories et le contact associé ici
                $connexion = new Connexion();
                $db = $connexion->pdo;
                $categorieDAO = new CategorieDAO($db);
                $categories = $categorieDAO->findAll();
                $contactDAO = new ContactDAO($db);
                $Idcontact = $licencie->getContactId();
                $contact = $contactDAO->findById($Idcontact);

                // Afficher le formulaire de modification pré-rempli
                require 'views/edit_licencie.php';
            } else {
                // Rediriger avec un message d'erreur si le licencie n'existe pas
                header('Location: /index.php?page=licencie&error=Licencie non trouvé');
                exit();
            }
        }
        elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['numeroLicence'], $_POST['nom'], $_POST['prenom'], $_POST['categorie_id'], $_POST['email'], $_POST['numeroTel'])) {
            // Récupérer les données du formulaire
            $id = (int)$_POST['id'];
            $numeroLicence = (int)$_POST['numeroLicence'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $categorieId = (int)$_POST['categorie_id'];
            $email = $_POST['email'];
            $numeroTel = $_POST['numeroTel'];

            // Récupérer l'objet Licencie existant et son ID de contact
            $licencie = $licencieDAO->findById($id);
            if (!$licencie) {
                // Gérer l'erreur si le licencie n'est pas trouvé
                header('Location: /index.php?page=licencie&error=Licencie non trouvé');
                exit();
            }

            $contactId = $licencie->getContactId();

            // Créer les objets Licencie et Contact avec les nouvelles données
            $contact = new Contact($contactId, $nom, $prenom, $email, $numeroTel);
            $licencie = new Licencie($id, $numeroLicence, $nom, $prenom, $categorieId, $contactId);

            // Mettre à jour le licencié et le contact dans la base de données
            $licencieDAO->edit($licencie, $contact);

            // Rediriger vers la page des licenciés avec un message de succès
            header('Location: /index.php?page=licencie&success=Le licencié a été mis à jour avec succès');
            exit();
        }
        break;

    case 'delete':
        if (isset($_GET['id'])) {
            $licencieId = (int)$_GET['id'];
            $licencieDAO->deleteWithEducateur($licencieId);
            // Rediriger vers la page des licenciés avec un message de succès
            header('Location: /index.php?page=licencie&success=Le licencié a été supprimé avec succès');
            exit();
        }
        break;


    default:
        // Afficher la liste des licenciés existants
        $licencies = $licencieDAO->findAll();
        $categories = $categorieDAO->findAll();
        require 'views/licencie.php';
        break;
}
