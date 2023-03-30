<?php

namespace controller;

class Home_controller
{
    public function index():void {
        if (isset($_SESSION['utilisateur'])){
            header('/Jeu/selection');
        }
            require __DIR__ . '/../view/accueil.php';

    }
}