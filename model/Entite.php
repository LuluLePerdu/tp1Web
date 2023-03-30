<?php

namespace model;

abstract class Entite
{
    protected string $nom;
    protected int $pv;
    protected int $defense;
    protected int $attaque;
    protected int $maxPv;


    public function __construct(){
        $this->pv = $this->maxPv;
    }
    public function getNom():string{
        return $this->nom;
    }
    public function  getDefense():int{
        return $this->defense;
    }
    public function setDefense(int $def):void{
        $this->defense = $def;
    }
    public function getMaxPv():int{
        return $this->maxPv;
    }
    public function setMaxPv(int $maxPv):void{
        $this->maxPv = $maxPv;
    }
    public function getPv():int{
        return $this->pv;
    }
    public function setPv(int $pv):void{
        $this->pv = $pv;
    }
    public function getAttaque():int{
        return $this->attaque;
    }
    public function setAttaque(int $attaque):void{
        $this->attaque = $attaque;
    }

}