<!-- educateur.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LeCoach | Éducateurs</title>
</head>
<body>
<header>
    <h1>Gestion des Éducateurs</h1>
</header>


<h2>Liste des Éducateurs</h2>
<ul>
    <?php foreach ($educateurs as $educateur) : ?>
        <li>
            <?php
            $nom = $educateurDAO->getNom($educateur->getId());
            $prenom = $educateurDAO->getPrenom($educateur->getId());
            ?>

            <?= $nom; ?> <?= $prenom; ?>
            : <?= $educateur->isEstAdmin() ? 'Admin' : 'Non-Admin'; ?>
            <a href="/index.php?page=educateur&action=edit&id=<?= $educateur->getId(); ?>">Modifier</a>
            <a href="/index.php?page=educateur&action=delete&id=<?= $educateur->getId(); ?>">Supprimer</a>
        </li>
    <?php endforeach; ?>
</ul>

<!-- Formulaire pour créer un nouvel Éducateur -->
<h2>Créer un nouvel Éducateur</h2>
<form action="/index.php?page=educateur&action=create" method="post">

    <div class="form-group">
        <label for="licencie_id">Licencié :</label>
        <select id="licencie_id" name="licencie_id" required>
            <option value="">Sélectionner un licencié</option>
            <?php foreach ($licencies as $licencie) : ?>
                <option value="<?= $licencie->getId(); ?>"><?= $licencie->getNom() . ' ' . $licencie->getPrenom(); ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="password">Mot de passe:</label>
    <input type="password" id="password" name="password" required>

    <div class="form-group">
        <label for="isAdmin">Statut :</label>
        <select id="isAdmin" name="isAdmin" required>
            <option value="1">Admin</option>
            <option value="0">Non-Admin</option>
        </select>
    </div>
    <button type="submit">Créer Éducateur</button>
</form>

</body>
</html>
