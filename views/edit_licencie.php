<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Licencié</title>
</head>
<body>
<h1>Modifier un Licencié</h1>
<form action="/index.php?page=licencie&action=update" method="post">
    <input type="hidden" name="id" value="<?= $licencie->getId() ?>">
    <label for="numeroLicence">Numéro de Licence :</label>
    <input type="text" name="numeroLicence" id="numeroLicence" value="<?= $licencie->getNumeroLicence() ?>" required><br>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" value="<?= $licencie->getNom() ?>" required><br>
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" value="<?= $licencie->getPrenom() ?>" required><br>
    <label for="categorieId">Catégorie :</label>
    <select name="categorieId" id="categorieId" required>
        <?php foreach ($categories as $categorie) : ?>
            <option value="<?= $categorie->getId() ?>" <?= $categorie->getId() === $licencie->getCategorieId() ? 'selected' : '' ?>>
                <?= $categorie->getNomCategorie() ?>
            </option>
        <?php endforeach; ?>
    </select><br>
    <input type="submit" value="Mettre à jour">
</form>
</body>
</html>
