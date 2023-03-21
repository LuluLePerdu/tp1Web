<?php

namespace controller;

class Usager_controller
{

    function index(){
            include '../mvc/view/accueil.php';
        }


    function login(){


        include '../mvc/view/utilisateur/utilisateur_connexion.php';

    }

    function inscription() {
        include '../mvc/view/utilisateur/utilisateur_inscription.php';
    }


}