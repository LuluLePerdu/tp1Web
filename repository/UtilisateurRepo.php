<?php

namespace Repository;

use PDO;
use Model\Utilisateur;

class UtilisateurRepo
{
    protected PDO $bd;

    function getParNom(string $nomUtilisateur): Utilisateur|bool {
        $bd = BD::getBD();
        $query = $bd->prepare("SELECT * FROM utilisateurs WHERE utilisateur = ?");
        $query->bindValue(1, $nomUtilisateur);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, "\model\Utilisateur");
        return $query->fetch();
    }
    function getMdp(string $nomUtilisateur): Utilisateur|bool {
        $bd = BD::getBD();
        $query = $bd->prepare("SELECT mdp FROM utilisateurs WHERE utilisateur = ?");
        $query->bindValue(1, $nomUtilisateur);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, "\model\Utilisateur");
        return $query->fetch();
    }

    public function sauvegarder(){

    }
    function insert(Utilisateur $utilisateur): void{
        $bd = BD::getBD();
        $query = $bd->prepare('INSERT INTO utilisateurs (utilisateur, mdp) VALUES (?, ?)');
        $query->bindValue(1, $utilisateur->nomUtilisateur);
        $query->bindValue(2,password_hash($utilisateur->motDePasse, PASSWORD_DEFAULT));
        $query->execute();
    }
    public function creationTable():void{
        $query = $this->bd->query('CREATE TABLE IF NOT EXISTS utilisateurs (id int auto_increment, )');
        $query->execute();
    }
}