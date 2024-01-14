<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LeCoach | Admin</title>
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
    <h1>LeCoach | Modifier une catégorie</h1>

    <?php
    if (isset($_GET['error'])) {
        echo '<p class="alert alert-danger">' . $_GET['error'] . '</p>';
    } elseif (isset($_GET['success'])) {
        echo '<p class="alert alert-success">' . $_GET['success'] . '</p>';
    }
    ?>

    <form action="/index.php?page=categories&action=edit" method="post">
        <!-- Champ caché pour l'ID de la catégorie -->
        <input type="hidden" name="id" value="<?php echo $category->getId(); ?>">

        <div class="form-group">
            <label for="nom">Nom de la catégorie :</label>
            <input type="text" id="nom" name="nom" class="form-control" value="<?php echo $category->getNomCategorie(); ?>" required>
        </div>
        <div class="form-group">
            <label for="code_raccourci">Code raccourci :</label>
            <input type="text" id="code_raccourci" name="code_raccourci" class="form-control" value="<?php echo $category->getCodeRaccourci(); ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description :</label>
            <textarea id="description" name="description" class="form-control" required><?php echo $category->getDescription(); ?></textarea>
        </div>
        <button type="submit" class="btn btn-green">Enregistrer les modifications</button>
    </form>

    <br>
    <a href="/index.php?page=categories" class="btn btn-primary">Retour à la liste</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
