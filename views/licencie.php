<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LeCoach | Licenciés</title>
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
    <h1>LeCoach | Gestion des Licenciés</h1>

    <h2>Liste des Licenciés</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($licencies as $licencie) : ?>
            <tr>
                <td><?= $licencie->getNom(); ?></td>
                <td><?= $licencie->getPrenom(); ?></td>
                <td>
                    <a href="/index.php?page=licencie&action=edit&id=<?= $licencie->getId(); ?>" class="btn btn-primary">Modifier</a>
                    <a href="/index.php?page=licencie&action=delete&id=<?= $licencie->getId(); ?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    <a href="/index.php?page=licencie&action=export" class="btn btn-green">Exporter les Licenciés (CSV)</a>


    <h2>Créer un nouveau Licencié</h2>
    <form action="/index.php?page=licencie&action=create" method="post">
        <div class="form-group">
            <label for="numeroLicence">Numéro de Licence :</label>
            <input type="text" id="numeroLicence" name="numeroLicence" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="categorie_id">Catégorie :</label>
            <select id="categorie_id" name="categorie_id" class="form-control" required>
                <option value="">Sélectionner une catégorie</option>
                <?php foreach ($categories as $categorie) : ?>
                    <option value="<?= $categorie->getId(); ?>"><?= $categorie->getNomCategorie(); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="numeroTel">Numéro de Téléphone :</label>
            <input type="text" id="numeroTel" name="numeroTel" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-green">Créer Licencié</button>
    </form>

    <br>

    <form action="/index.php?page=licencie&action=import" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="csvFile">Importer un / des licenciés (fichier CSV) :</label>
            <input type="file" id="csvFile" name="csvFile" class="form-control-file" accept=".csv" required>
        </div>
        <button type="submit" class="btn btn-green">Importer</button>
    </form>

    <br>
    <a href="/index.php?page=home" class="btn btn-primary">Retour à l'Accueil</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
