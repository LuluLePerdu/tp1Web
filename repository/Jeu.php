<?php

namespace repository;

use model\Monstre;
use PDO;

class Jeu
{
    protected PDO $bd;

    public  function __construct(){
        $this->bd = BD::getBD();
    }
    public static function creationMonstre() {

    }
    public static function creationBoss(){

    }
}