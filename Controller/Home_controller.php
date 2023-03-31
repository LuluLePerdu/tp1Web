<?php

namespace Controller;

class Home_controller
{
    public function index():void {
        if (isset($_SESSION['joueur'])){
            header('/Jeu/selection');
        }
            require __DIR__ . '/../view/accueil.php';
    }
}