<?php

require_once './classes/models/Educateur.php';

session_start();

require_once 'classes/models/Connexion.php';

$connexion = new Connexion();
$db = $connexion->pdo;

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        // Vérifier si l'utilisateur est authentifié avant d'afficher la page d'accueil
        if (isAuthenticated()) {
            require 'views/home.php';
        } else {
            // Si non authentifié, rediriger vers la page de connexion
            header('Location: /index.php?page=login');
            exit();
        }
        break;
    case 'login':
        checkLoggedInAndRedirect();
        // Afficher la page de login
        require 'views/login.php';
        break;
    case 'loginHandler':
        // Gérer la connexion
        require 'classes/auth/loginHandler.php';
        break;
    case 'logout':
        // Détruire la session et rediriger vers la page de connexion
        session_destroy();
        header('Location: /index.php?page=login');
        exit();
        break;
    case 'categories':
        // Vérifier si l'utilisateur est authentifié avant d'afficher la page des catégories
        if (isAuthenticated()) {
            require './controllers/CategorieController.php'; // Inclure le contrôleur
        } else {
            // Si non authentifié, rediriger vers la page de connexion
            header('Location: /index.php?page=login');
            exit();
        }
        break;
    case 'licencie':
        // Vérifier si l'utilisateur est authentifié avant d'afficher la page des licenciés
        if (isAuthenticated()) {
            require './controllers/LicencieController.php'; // Inclure le contrôleur
        } else {
            // Si non authentifié, rediriger vers la page de connexion
            header('Location: /index.php?page=login');
            exit();
        }
        break;
    case 'educateur':
        // Vérifier si l'utilisateur est authentifié avant d'afficher la page des éducateurs
        if (isAuthenticated()) {
            require './controllers/EducateurController.php'; // Inclure le contrôleur
        } else {
            // Si non authentifié, rediriger vers la page de connexion
            header('Location: /index.php?page=login');
            exit();
        }
        break;
    default:
        break;
}

function isAuthenticated(): bool
{
    return isset($_SESSION['user']) && $_SESSION['user']->isEstAdmin();
}

function checkLoggedInAndRedirect(): void
{
    if (isAuthenticated()) {
        header('Location: /index.php?page=home');
        exit();
    }
}