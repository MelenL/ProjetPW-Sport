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
            max-width: 600px;
            text-align: center;
        }
        .btn-green {
            background-color: #28a745;
            color: white;
            margin: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>LeCoach | Admin</h1>

    <a href="/index.php?page=licencie" class="btn btn-green">Gestion des Licenciés</a>
    <a href="/index.php?page=educateur" class="btn btn-green">Gestion des Éducateurs</a>
    <a href="/index.php?page=categories" class="btn btn-green">Gestion des Catégories</a>

    <br>

    <a href="/index.php?page=logout" class="btn btn-danger">Déconnexion</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
