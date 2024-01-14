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
    <h1>LeCoach | Modifier un Éducateur</h1>

    <?php
    if (isset($_GET['error'])) {
        echo '<p class="alert alert-danger">' . $_GET['error'] . '</p>';
    } elseif (isset($_GET['success'])) {
        echo '<p class="alert alert-success">' . $_GET['success'] . '</p>';
    }
    ?>

    <form action="/index.php?page=educateur&action=edit" method="post">
        <input type="hidden" name="id" value="<?php echo $educateur->getId(); ?>">

        <div class="form-group">
            <label for="licencie_id">Licencié :</label>
            <select id="licencie_id" name="licencie_id" class="form-control">
                <?php foreach ($licencies as $licencie) : ?>
                    <option value="<?php echo $licencie->getId(); ?>" <?php echo $educateur->getLicencieId() == $licencie->getId() ? 'selected' : ''; ?>>
                        <?php echo htmlspecialchars($licencie->getPrenom() . ' ' . $licencie->getNom(), ENT_QUOTES, 'UTF-8'); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo $educateur->getEmail(); ?>">
        </div>

        <div class="form-group">
            <label for="isAdmin">Est Admin :</label>
            <select id="isAdmin" name="isAdmin" class="form-control">
                <option value="1" <?php echo $educateur->isEstAdmin() ? 'selected' : ''; ?>>Oui</option>
                <option value="0" <?php echo !$educateur->isEstAdmin() ? 'selected' : ''; ?>>Non</option>
            </select>
        </div>

        <div class="form-group">
            <label for="new_password">Nouveau mot de passe :</label>
            <input type="password" id="new_password" name="new_password" class="form-control">
        </div>

        <button type="submit" class="btn btn-green">Mettre à jour</button>
    </form>
    <br>
    <a href="/index.php?page=educateur" class="btn btn-primary">Retour à la liste</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
