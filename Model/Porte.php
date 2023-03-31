<?php

namespace Model;

class Porte
{
    public string $nom;
    public bool $ouvert;

    public function __construct()
    {
        $this->ouvert = false;
    }
    public function estOuvert():bool{
        return $this->ouvert;
    }
}