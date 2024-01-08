<?php

session_start();

// Inclure le fichier Connexion.php
require_once 'classes/models/Connexion.php';

// Inclure la classe EducateurDAO
require_once 'classes/dao/EducateurDAO.php';

// Création d'une nouvelle instance de Connexion
$connexion = new Connexion();
$db = $connexion->pdo; // Accès à l'objet PDO à partir de l'instance Connexion

// Création d'une instance de EducateurDAO
$educateurDAO = new EducateurDAO($db);

// Vérifier si les données du formulaire ont été envoyées
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Utiliser EducateurDAO pour rechercher l'utilisateur par email
    $user = $educateurDAO->findByEmail($email);

    // Vérifier si l'utilisateur existe et si le mot de passe est correct
    if ($user && password_verify($password, $user->getPassword())) {
        // Vérifier si l'utilisateur est un administrateur
        if ($user->isEstAdmin()) {
            // Création de la session utilisateur
            $_SESSION['user'] = $user;
            header('Location: /index.php?page=home');
            exit();
        } else {
            $error = 'Vous devez être administrateur pour vous connecter.';
        }
    } else {
        $error = 'Identifiants incorrects.';
    }
}

// En cas d'erreur, rediriger vers la page de connexion avec un message d'erreur
if (isset($error)) {
    $_SESSION['login_error'] = $error;
    header('Location: /index.php?page=login');
    exit();
}
