<!-- categories.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LeCoach | Catégories</title>
</head>
<body>
<header>
    <h1>Gestion des Catégories</h1>
</header>

<!-- Afficher les messages d'erreur ou de succès ici s'il y en a -->

<!-- Liste des catégories existantes -->
<h2>Liste des Catégories</h2>
<ul>
    <?php foreach ($categories as $categorie) : ?>
        <li>
            <?= $categorie->getNomCategorie(); ?>
            <a href="/index.php?page=categories&action=edit&id=<?= $categorie->getId(); ?>">Modifier</a>
            <a href="/index.php?page=categories&action=delete&id=<?= $categorie->getId(); ?>">Supprimer</a>
        </li>
    <?php endforeach; ?>
</ul>

<!-- Formulaire pour créer une nouvelle catégorie -->
<h2>Créer une nouvelle Catégorie</h2>
<form action="/index.php?page=categories&action=create" method="post">
    <div class="form-group">
        <label for="nom">Nom de la Catégorie :</label>
        <input type="text" id="nom" name="nom" required>
    </div>
    <div class="form-group">
        <label for="code_raccourci">Code Raccourci :</label>
        <input type="text" id="code_raccourci" name="code_raccourci" required>
    </div>
    <div class="form-group">
        <label for="description">Description :</label>
        <textarea id="description" name="description" required></textarea>
    </div>
    <button type="submit">Créer Catégorie</button>
</form>
</body>
</html>
