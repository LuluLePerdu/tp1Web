<?php
//spl_autoload_register();
require_once('../mvc/controller/Usager_controller.php');


//si mes get ne sont pas set, afficher l'acceuil ici sinon, page erreur

if (!isset($_GET['controller'])){
    $controllerUsager = new \controller\Usager_controller();
    $controllerUsager->index();
}
else if ($_GET['controller'] == "Usager_controller") {
    $controllerUsager = new \controller\Usager_controller();

    if ($_GET['action'] == 'connexion'){
        $controllerUsager->login();
    }
    else if(($_GET['action'] == 'inscription')){
        $controllerUsager->inscription();
    }
}
