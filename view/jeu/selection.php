<?php
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selection de personnage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
<?php require "../view/template/en-tete.php"?>

<div class="d-flex justify-content-around mt-2 flex-row container">
    <p> Bienvenue :  </p>
</div>

<div class="container-fluid">
    <h1>Débuter la contre attaque</h1>
    <p>Choississez votre héro pour aller manger des lasagnes!</p>

    <form method="post" id="">
        <div class="row">
            <div class="col">
                <h4>Héros disponible</h4>

                <div>
                    <input onclick="displayHero(1)" type="radio" id="1" name="hero" value="Garfield">
                    <label for="1"> Garfield </label>
                </div>
                <div>
                    <input onclick="displayHero(2)" type="radio" id="2" name="hero" value="George">
                    <label for="2"> Odie </label>
                </div>
                <div>
                    <input onclick="displayHero(3)" type="radio" id="3" name="hero" value="Nermal">
                    <label for="3"> Nermal </label>
                </div>

                <button type="submit" class="btn btn-primary" > Combattre !</button>

            </div>

            <div class="col" id="Garfield" style="display:none">
                <h4>Garfield</h4>
                <p>Paresseux, Gros, gourmands, egoiste, qui aime la nourriture (surtout la lasagne) et adore dormir.</p>
                <p>Pouvoir spécial: Mange son adversaire sans demander de reste</p>
                <p>Pouvoir passif: Dors pour regagner ses points de vie entre chaque combat</p>
                <img src="/images/garfield.jpg" alt="" height="250px">
            </div>

            <div class="col" id="Odie" style="display:none">
                <h4>Odie</h4>
                <p>Souffre-douleur de Garfield</p>
                <p>Pouvoir spécial: Super-Odie, boost ses stats de x2</p>
                <p>Pouvoir passif: Meilleur ami</p>
                <img src="/images/odie.png" alt="" height="250px">
            </div>

            <div class="col" id="Nermal" style="display: none">
                <h4>Nermal</h4>
                <p>Rival de Garfield auto-procalamée</p>
                <p>Pouvoir spécial: Livraison vers Abu Dhabi, permet de s'échapper d'une situation délicate</p>
                <p>Pouvoir passif: Il est juste mignon</p>
                <img src="/images/nermal.jpg" alt="" height="250px">
            </div>


        </div>
    </form>

</div>
<script src="/javascript/selection.js" ></script>
</body>
</html>
