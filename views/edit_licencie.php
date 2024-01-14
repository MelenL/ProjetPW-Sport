<!-- edit_licencie.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LeCoach | Admin</title>
</head>
<body>
<h1>Modifier un Licencie</h1>

<?php
// Vérifier s'il y a des messages d'erreur ou de succès à afficher
if (isset($_GET['error'])) {
    echo '<p class="error">' . $_GET['error'] . '</p>';
} elseif (isset($_GET['success'])) {
    echo '<p class="success">' . $_GET['success'] . '</p>';
}
?>

<form action="/index.php?page=licencie&action=edit" method="post">
    <input type="hidden" name="id" value="<?php echo $licencie->getId(); ?>">

    <label for="numeroLicence">Numéro de Licence:</label>
    <input type="text" id="numeroLicence" name="numeroLicence" value="<?php echo $licencie->getNumeroLicence(); ?>">

    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" value="<?php echo $licencie->getNom(); ?>">

    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" value="<?php echo $licencie->getPrenom(); ?>">

    <label for="categorie_id">Catégorie:</label>
    <select id="categorie_id" name="categorie_id">
        <?php foreach ($categories as $categorie) : ?>
            <option value="<?php echo $categorie->getId(); ?>" <?php echo $licencie->getCategorie() == $categorie->getId() ? 'selected' : ''; ?>>
                <?php echo htmlspecialchars($categorie->getNomCategorie(), ENT_QUOTES, 'UTF-8'); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $contact->getEmail(); ?>">

    <label for="numeroTel">Numéro de Téléphone:</label>
    <input type="text" id="numeroTel" name="numeroTel" value="<?php echo $contact->getNumeroTel(); ?>">

    <button type="submit">Mettre à jour</button>
</form>
</body>
</html>
