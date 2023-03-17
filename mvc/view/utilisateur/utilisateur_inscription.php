<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
<?php require "../template/en-tete.html"?>
<div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
            <form>
                <!--Utilisateur-->
                <div class="form-outline mb-4">
                    <label class="form-label" for="">Nom d'utilisateur</label>
                    <input type="text" id="" class="form-control form-control-lg">
                </div>

                <!--MDP-->
                <div class="form-outline mb-4">
                    <label class="form-label" for="">Mot de passe</label>
                    <input type="password" class="form-control form-control-lg">
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="">Confirmation du mot de passe</label>
                    <input type="password" class="form-control form-control-lg">
                </div>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Créer son compte</button>
            </form>
        </div>
        <div class="col-md-8 col-lg-7 col-xl-6">
            <img src="../../../public_html/images/garfield_register.png" alt="garfield et ses amis" class="img-fluid">
        </div>
    </div>
</div>
</body>
</html>