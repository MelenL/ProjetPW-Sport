<!-- edit_educateur.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LeCoach | Admin</title>
</head>
<body>
<h1>Modifier un Éducateur</h1>

<?php
// Vérifier s'il y a des messages d'erreur ou de succès à afficher
if (isset($_GET['error'])) {
    echo '<p class="error">' . $_GET['error'] . '</p>';
} elseif (isset($_GET['success'])) {
    echo '<p class="success">' . $_GET['success'] . '</p>';
}
?>

<form action="/index.php?page=educateur&action=edit" method="post">
    <input type="hidden" name="id" value="<?php echo $educateur->getId(); ?>">

    <label for="licencie_id">Licencié:</label>
    <select id="licencie_id" name="licencie_id">
        <?php foreach ($licencies as $licencie) : ?>
            <option value="<?php echo $licencie->getId(); ?>" <?php echo $educateur->getLicencieId() == $licencie->getId() ? 'selected' : ''; ?>>
                <?php echo htmlspecialchars($licencie->getPrenom() . ' ' . $licencie->getNom(), ENT_QUOTES, 'UTF-8'); ?>
            </option>
        <?php endforeach; ?>
    </select>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="<?php echo $educateur->getEmail(); ?>">

    <label for="isAdmin">Est Admin:</label>
    <select id="isAdmin" name="isAdmin">
        <option value="1" <?php echo $educateur->isEstAdmin() ? 'selected' : ''; ?>>Oui</option>
        <option value="0" <?php echo !$educateur->isEstAdmin() ? 'selected' : ''; ?>>Non</option>
    </select>

    <label for="new_password">Nouveau mot de passe:</label>
    <input type="password" id="new_password" name="new_password">

    <button type="submit">Mettre à jour</button>
</form>
</body>
</html>
