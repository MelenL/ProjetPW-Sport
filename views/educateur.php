<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LeCoach | Éducateurs</title>
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
    <h1>LeCoach | Gestion des Éducateurs</h1>

    <h2>Liste des Éducateurs</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Nom de l'Éducateur</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($educateurs as $educateur) : ?>
            <tr>
                <td>
                    <?php
                    $nom = $educateurDAO->getNom($educateur->getId());
                    $prenom = $educateurDAO->getPrenom($educateur->getId());
                    ?>
                    <?= $nom; ?> <?= $prenom; ?>
                </td>
                <td><?= $educateur->isEstAdmin() ? 'Admin' : 'Non-Admin'; ?></td>
                <td>
                    <a href="/index.php?page=educateur&action=edit&id=<?= $educateur->getId(); ?>" class="btn btn-primary">Modifier</a>
                    <a href="/index.php?page=educateur&action=delete&id=<?= $educateur->getId(); ?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Créer un nouvel Éducateur</h2>
    <form action="/index.php?page=educateur&action=create" method="post">
        <div class="form-group">
            <label for="licencie_id">Licencié :</label>
            <select id="licencie_id" name="licencie_id" class="form-control" required>
                <option value="">Sélectionner un licencié</option>
                <?php foreach ($licencies as $licencie) : ?>
                    <option value="<?= $licencie->getId(); ?>"><?= $licencie->getNom() . ' ' . $licencie->getPrenom(); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="isAdmin">Statut :</label>
            <select id="isAdmin" name="isAdmin" class="form-control" required>
                <option value="1">Admin</option>
                <option value="0">Non-Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-green">Créer Éducateur</button>
    </form>

    <br>
    <a href="/index.php?page=home" class="btn btn-primary">Retour à l'Accueil</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
