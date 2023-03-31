<?php

namespace Model;

class Niveau
{
    public string $nom;
    public array $portes;

    public function __construct(int $niveau){
        $this->nom = "Niveau " . $niveau;
        $this->portes = [1 => null, 2 => null, 3 => null, 4 => null, 5 => null];
        $bossEmplacement = rand(1,5);
        //$this->portes[$bossEmplacement]
        for ($i = 1; $i <= 5; $i++){
            if ($this->portes[$i] === null){

            }
        }
    }
}