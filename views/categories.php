<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LeCoach | Catégories</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #ffd544;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            margin: 50px auto;
            max-width: 800px;
        }
        .btn-green {
            background-color: #28a745;
            color: white;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>LeCoach | Gestion des Catégories</h1>

    <h2>Liste des Catégories</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Nom de la Catégorie</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($categories as $categorie) : ?>
            <tr>
                <td><?= $categorie->getNomCategorie(); ?></td>
                <td>
                    <a href="/index.php?page=categories&action=edit&id=<?= $categorie->getId(); ?>" class="btn btn-primary">Modifier</a>
                    <a href="/index.php?page=categories&action=delete&id=<?= $categorie->getId(); ?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Créer une nouvelle Catégorie</h2>
    <form action="/index.php?page=categories&action=create" method="post">
        <div class="form-group">
            <label for="nom">Nom de la Catégorie :</label>
            <input type="text" id="nom" name="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="code_raccourci">Code Raccourci :</label>
            <input type="text" id="code_raccourci" name="code_raccourci" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <textarea id="description" name="description" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-green">Créer Catégorie</button>
    </form>

    <br>
    <a href="/index.php?page=home" class="btn btn-primary">Retour à l'Accueil</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
