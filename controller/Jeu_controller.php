<?php

namespace controller;

class jeu_controller
{
    function selection():void{
        include '../view/jeu/selection.php';
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