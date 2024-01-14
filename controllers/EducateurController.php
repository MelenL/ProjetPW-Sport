<?php

require_once 'classes/dao/EducateurDAO.php';
require_once 'classes/dao/LicencieDAO.php';

// Création d'une instance de Connexion
$connexion = new Connexion();
$db = $connexion->pdo;

// Création d'une instance de EducateurDAO
$educateurDAO = new EducateurDAO($db);

// Création d'une instance de LicencieDAO
$licencieDAO = new LicencieDAO($db);

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nom'], $_POST['prenom'], $_POST['licencie_id'], $_POST['isAdmin'])) {
            // Récupérer les données du formulaire
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $licencieId = (int)$_POST['licencie_id'];
            $isAdmin = $_POST['isAdmin'] === 'oui' ? true : false; // Convertir 'oui' en true, sinon false

            // Vérifier si le licencie_id est valide
            $licencie = $licencieDAO->findById($licencieId);
            if (!$licencie) {
                header('Location: /index.php?page=educateur&error=Licencie non trouvé');
                exit();
            }

            // Créer un nouvel éducateur
            $educateur = new Educateur(null, $nom, $prenom, $licencieId, $isAdmin);

            // Enregistrer le nouvel éducateur dans la base de données
            $educateurDAO->create($educateur);

            header('Location: /index.php?page=educateur&success=L\'éducateur a été créé avec succès');
            exit();
        }
        break;

    case 'edit':
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
            $educateurId = (int)$_GET['id'];
            $educateur = $educateurDAO->findById($educateurId);

            if ($educateur) {
                $licencies = $licencieDAO->findAll(); // Récupérer la liste des licenciés
                require 'views/edit_educateur.php';
            } else {
                header('Location: /index.php?page=educateur&error=Éducateur non trouvé');
                exit();
            }
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['nom'], $_POST['prenom'], $_POST['licencie_id'], $_POST['isAdmin'])) {
            // Récupérer les données du formulaire
            $id = (int)$_POST['id'];
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $licencieId = (int)$_POST['licencie_id'];
            $isAdmin = $_POST['isAdmin'] === 'oui' ? true : false;

            // Vérifier si le licencie_id est valide
            $licencie = $licencieDAO->findById($licencieId);
            if (!$licencie) {
                header('Location: /index.php?page=educateur&error=Licencie non trouvé');
                exit();
            }

            // Récupérer l'objet Éducateur existant
            $educateur = $educateurDAO->findById($id);
            if (!$educateur) {
                header('Location: /index.php?page=educateur&error=Éducateur non trouvé');
                exit();
            }

            // Mettre à jour l'éducateur
            $educateur->setNom($nom);
            $educateur->setPrenom($prenom);
            $educateur->setLicencieId($licencieId);
            $educateur->setIsAdmin($isAdmin);

            $educateurDAO->edit($educateur);

            header('Location: /index.php?page=educateur&success=L\'éducateur a été mis à jour avec succès');
            exit();
        }
        break;

    case 'delete':
        if (isset($_GET['id'])) {
            $educateurId = (int)$_GET['id'];
            $educateurDAO->delete($educateurId);

            header('Location: /index.php?page=educateur&success=L\'éducateur a été supprimé avec succès');
            exit();
        }
        break;

    default:
        // Afficher la liste des éducateurs existants
        $educateurs = $educateurDAO->findAll();
        require 'views/educateur.php';
        break;
}
