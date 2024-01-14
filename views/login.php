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
        .login-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            margin: 100px auto;
            width: 300px;
        }
    </style>
</head>
<body>
<div class="container text-center">
    <div class="login-container">
        <h1>Admin</h1>

        <?php
        if (isset($_SESSION['login_error'])) {
            echo '<p class="error">' . $_SESSION['login_error'] . '</p>';
            unset($_SESSION['login_error']);
        }
        ?>

        <form action="/index.php?page=loginHandler" method="post">
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
