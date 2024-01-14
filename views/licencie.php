<!-- licencie.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LeCoach | Licenciés</title>
</head>
<body>
<header>
    <h1>Gestion des Licenciés</h1>
</header>

<h2>Liste des Licenciés</h2>
<ul>
    <?php foreach ($licencies as $licencie) : ?>
        <li>
            <?= $licencie->getNom(); ?> <?= $licencie->getPrenom(); ?>
            <a href="/index.php?page=licencie&action=edit&id=<?= $licencie->getId(); ?>">Modifier</a>
            <a href="/index.php?page=licencie&action=delete&id=<?= $licencie->getId(); ?>">Supprimer</a>
        </li>
    <?php endforeach; ?>
</ul>

<h2>Créer un nouveau Licencié</h2>
<form action="/index.php?page=licencie&action=create" method="post">
    <div class="form-group">
        <label for="numeroLicence">Numéro de Licence :</label>
        <input type="text" id="numeroLicence" name="numeroLicence" required>
    </div>
    <div class="form-group">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
    </div>
    <div class="form-group">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
    </div>
    <div class="form-group">
        <label for="categorie_id">Catégorie :</label>
        <select id="categorie_id" name="categorie_id" required>
            <option value="">Sélectionner une catégorie</option>
            <?php foreach ($categories as $categorie) : ?>
                <option value="<?= $categorie->getId(); ?>"><?= $categorie->getNomCategorie(); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="numeroTel">Numéro de Téléphone :</label>
        <input type="text" id="numeroTel" name="numeroTel" required>
    </div>
    <button type="submit">Créer Licencié</button>
</form>

</body>

<br>
<a href="/index.php?page=home">Retour à l'Accueil</a>
</html>
