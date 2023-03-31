<?php

namespace Controller;

class Jeu_controller
{
    function selection():void{
        require_once __DIR__ . '/../view/jeu/selection.php';
    }

    public function demarrerPartie():void{

    }

    public function portes():void{

    }
    public function combat(){

    }

    public function deconnexion():void{
        session_unset();
        session_destroy();
        //redirection
    }
}