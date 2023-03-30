<?php

namespace repository;

use PDO;
use model\Utilisateur;

class UtilisateurRepo
{
    protected PDO $bd;

    public  function __construct(){
        $this->bd = BD::getBD();
    }
    public function getParNom(string $nomUtilisateur): Utilisateur|bool {
        $query = $this->bd->prepare("SELECT * FROM utilisateurs WHERE utilisateur = ?");
        $query->bindValue(1, $nomUtilisateur);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, '\model\Utilisateur');
        return $query->fetch();
    }

    public function getparID(string $id){

    }

    public function sauvegarder(\model\Utilisateur $utilisateur){

    }

    public function insert(Utilisateur $utilisateur): void{
        $query = $this->bd->prepare('INSERT INTO utilisateurs (utilisateur, mdp) VALUES (?, ?)');
        $query->bindValue(1, $utilisateur->nomUtilisateur);
        $query->bindValue(2,password_hash($utilisateur->motDePasse,PASSWORD_DEFAULT));
        $query->execute();
    }
}