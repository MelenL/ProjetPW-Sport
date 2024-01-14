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
    <h1>LeCoach | Modifier un Licencié</h1>

    <?php
    if (isset($_GET['error'])) {
        echo '<p class="alert alert-danger">' . $_GET['error'] . '</p>';
    } elseif (isset($_GET['success'])) {
        echo '<p class="alert alert-success">' . $_GET['success'] . '</p>';
    }
    ?>

    <form action="/index.php?page=licencie&action=edit" method="post">
        <input type="hidden" name="id" value="<?php echo $licencie->getId(); ?>">

        <div class="form-group">
            <label for="numeroLicence">Numéro de Licence :</label>
            <input type="text" id="numeroLicence" name="numeroLicence" class="form-control" value="<?php echo $licencie->getNumeroLicence(); ?>">
        </div>

        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" class="form-control" value="<?php echo $licencie->getNom(); ?>">
        </div>

        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" class="form-control" value="<?php echo $licencie->getPrenom(); ?>">
        </div>

        <div class="form-group">
            <label for="categorie_id">Catégorie :</label>
            <select id="categorie_id" name="categorie_id" class="form-control">
                <?php foreach ($categories as $categorie) : ?>
                    <option value="<?php echo $categorie->getId(); ?>" <?php echo $licencie->getCategorie() == $categorie->getId() ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($categorie->getNomCategorie(), ENT_QUOTES, 'UTF-8'); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo $contact->getEmail(); ?>">
        </div>

        <div class="form-group">
            <label for="numeroTel">Numéro de Téléphone :</label>
            <input type="text" id="numeroTel" name="numeroTel" class="form-control" value="<?php echo $contact->getNumeroTel(); ?>">
        </div>

        <button type="submit" class="btn btn-green">Mettre à jour</button>
    </form>

    <br>
    <a href="/index.php?page=licencie" class="btn btn-primary">Retour à la liste</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
