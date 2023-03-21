<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>

<?php require 'template/en-tete.html'?>

<div class="container-fluid">
    <div class="row justify-content-md-center bg-secondary mx-5 my-5 rounded p-5 text-light">
        <div>
            <h1 class="text-center">Lasagne contre-attaque</h1>
            <p class="text-center">Description du jeu en bref :)</p>
        </div>
        <div class="btn-group">
            <a href="index.php?controller=Usager_controller&action=connexion" class="btn btn-primary btn-lg"> Connexion</a>

            <a href="index.php?controller=Usager_controller&action=inscription" class="btn btn-warning btn-lg"> Inscription</a>
        </div>
    </div>
    <div>
        image VS image
    </div>
</div>
</body>
</html>