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
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['licencie_id'], $_POST['email'], $_POST['password'], $_POST['isAdmin'])) {
            // Récupérer les données du formulaire
            $licencieId = (int)$_POST['licencie_id'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $isAdmin = ($_POST['isAdmin'] === '1') ? 1 : 0;

            // Vérifier si le licencie_id est valide
            $licencie = $licencieDAO->findById($licencieId);
            if (!$licencie) {
                header('Location: /index.php?page=educateur&error=Licencie non trouvé');
                exit();
            }

            $role = [];

            // Hacher le mot de passe
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Créer un nouvel éducateur avec email et mot de passe haché
            $educateur = new Educateur(null, $licencieId, $email, $role, $hashedPassword, $isAdmin);

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
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['licencie_id'], $_POST['isAdmin'], $_POST['new_password'], $_POST['email'])) {
            // Récupérer les données du formulaire
            $id = (int)$_POST['id'];
            $licencieId = (int)$_POST['licencie_id'];
            $isAdmin = ($_POST['isAdmin'] === '1') ? 1 : 0;
            $email = $_POST['email'];

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

            $educateur->setEmail($email);

            $educateur->setEstAdmin($isAdmin);

            $educateur->setLicencieId($licencieId);

            // Vérifier si un nouveau mot de passe a été fourni
            if (!empty($_POST['new_password'])) {
                // Hacher le nouveau mot de passe
                $newPasswordHash = password_hash($_POST['new_password'], PASSWORD_DEFAULT);
                $educateur->setPassword($newPasswordHash);
            }

            $educateurDAO->update($educateur);

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
        $licencies = $licencieDAO->findAll();
        $educateurDAO = new EducateurDAO($db);
        $educateurs = $educateurDAO->findAll();
        require 'views/educateur.php';
        break;
}
