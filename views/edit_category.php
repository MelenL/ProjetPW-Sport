<!-- edit_category.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>LeCoach | Admin</title>
</head>
<body>
<h1>Modifier une catégorie</h1>

<?php
// Vérifier s'il y a des messages d'erreur ou de succès à afficher
if (isset($_GET['error'])) {
    echo '<p class="error">' . $_GET['error'] . '</p>';
} elseif (isset($_GET['success'])) {
    echo '<p class="success">' . $_GET['success'] . '</p>';
}
?>

<form action="/index.php?page=categories&action=edit" method="post">
    <!-- Champ caché pour l'ID de la catégorie -->
    <input type="hidden" name="id" value="<?php echo $category->getId(); ?>">

    <div class="form-group">
        <label for="nom">Nom de la catégorie :</label>
        <input type="text" id="nom" name="nom" value="<?php echo $category->getNomCategorie(); ?>" required>
    </div>
    <div class="form-group">
        <label for="code_raccourci">Code raccourci :</label>
        <input type="text" id="code_raccourci" name="code_raccourci" value="<?php echo $category->getCodeRaccourci(); ?>" required>
    </div>
    <div class="form-group">
        <label for="description">Description :</label>
        <textarea id="description" name="description" required><?php echo $category->getDescription(); ?></textarea>
    </div>
    <button type="submit">Enregistrer les modifications</button>
</form>

<a href="/index.php?page=categories">Retour à la liste des catégories</a>
</body>
</html>
