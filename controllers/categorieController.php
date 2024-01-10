<?php

require_once 'classes/dao/CategorieDAO.php';

// Création d'une instance de Connexion
$connexion = new Connexion();
$db = $connexion->pdo;

// Création d'une instance de CategorieDAO
$categorieDAO = new CategorieDAO($db);

$action = $_GET['action'] ?? '';

switch ($action) {
    case 'create':
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nom'], $_POST['code_raccourci'], $_POST['description'])) {
            // Récupérer les données du formulaire
            $nom = $_POST['nom'];
            $codeRaccourci = $_POST['code_raccourci'];
            $description = $_POST['description'];

            // Créer une nouvelle catégorie
            $categorie = new Categorie(null, $nom, $codeRaccourci, $description);

            // Enregistrer la nouvelle catégorie dans la base de données
            $categorieDAO->create($categorie);

            // Rediriger vers la page des catégories avec un message de succès
            header('Location: /index.php?page=categories&success=La catégorie a été créée avec succès');
            exit();
        }
        break;

    case 'edit':
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
            $categoryId = $_GET['id'];
            $category = $categorieDAO->findById($categoryId);

            if ($category) {
                // Afficher le formulaire de modification pré-rempli
                require 'views/edit_category.php';
            } else {
                // Rediriger avec un message d'erreur si la catégorie n'existe pas
                header('Location: /index.php?page=categories&error=Category not found');
                exit();
            }
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['nom'], $_POST['code_raccourci'], $_POST['description'])) {
            // Récupérer les données du formulaire de modification
            $categoryId = $_POST['id'];
            $nom = $_POST['nom'];
            $codeRaccourci = $_POST['code_raccourci'];
            $description = $_POST['description'];

            // Vérifier si la catégorie existe
            $existingCategory = $categorieDAO->findById($categoryId);

            if ($existingCategory) {
                // Mettre à jour la catégorie dans la base de données
                $updatedCategory = new Categorie($categoryId, $nom, $codeRaccourci, $description);
                $categorieDAO->update($updatedCategory);

                // Rediriger vers la page des catégories avec un message de succès
                header('Location: /index.php?page=categories&success=La catégorie a été modifiée avec succès');
                exit();
            } else {
                // Rediriger avec un message d'erreur si la catégorie n'existe pas
                header('Location: /index.php?page=categories&error=La catégorie n\'existe pas');
                exit();
            }
        }
        break;

    case 'delete':
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
            $categoryId = $_GET['id'];

            // Vérifier si la catégorie existe
            $existingCategory = $categorieDAO->findById($categoryId);

            if ($existingCategory) {
                // Supprimer la catégorie de la base de données
                $categorieDAO->delete($categoryId);

                // Rediriger vers la page des catégories avec un message de succès
                header('Location: /index.php?page=categories&success=La catégorie a été supprimée avec succès');
                exit();
            } else {
                // Rediriger avec un message d'erreur si la catégorie n'existe pas
                header('Location: /index.php?page=categories&error=La catégorie n\'existe pas');
                exit();
            }
        }
        break;

    default:
        // Afficher la liste des catégories existantes
        $categories = $categorieDAO->findAll();
        require 'views/categories.php';
        break;
}
