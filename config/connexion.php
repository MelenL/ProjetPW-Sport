<?php
// Inclusion du fichier de configuration
$host = "host"; // hôte de la base de données
$database = "database"; // nom de la base de données
$username = "utilisateur"; // nom d'utilisateur MySQL
$password = "mot_de_passe"; // mot de passe MySQL


try {
    // Création d'une connexion à la base de données avec PDO
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);

} catch (PDOException $e) {
    // En cas d'erreur de connexion, affichage de l'erreur
    echo "Erreur de connexion : " . $e->getMessage();
}
