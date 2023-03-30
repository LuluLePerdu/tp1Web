<?php

namespace controller;

use model\Utilisateur;
use repository\UtilisateurRepo;

class Usager_controller
{
    public function index(){
        $this->connexion();
    }
    public function inscription() {

        $message = "";
        if (isset($_POST['utilisateur']) && isset($_POST['mdp']) && isset($_POST['confirmation'])){
            $message = $this->verifInscription();
        }
        require_once __DIR__ . '/../view/utilisateur/utilisateur_inscription.php';
    }
    private function verifInscription() : string {

        $nomUtilisateur = $_POST['utilisateur'];
        $mdpUtilisateur = $_POST['mdp'];
        $confirmation = $_POST['confirmation'];

        if (empty($nomUtilisateur) || empty($mdpUtilisateur) || empty($confirmation)){
            return "Champs non remplis";
        }

        $utilisateurRepo = new UtilisateurRepo();
        if ($utilisateurRepo->getParNom($nomUtilisateur)){
            return "Nom d'utilisateur déjà exisatnt";
        }
        if ($mdpUtilisateur != $confirmation){
            return "Le mdp et la confirmation sont différents";
        }

        $utilisateur = new Utilisateur();
        $utilisateur->nomUtilisateur = $nomUtilisateur;
        $utilisateur->motDePasse = $mdpUtilisateur;
        $utilisateurRepo->insert($utilisateur);

        header('Location: connexion');
        exit();
    }
    public function connexion(){
        $message = "";
        if (isset($_POST['utilisateur']) && isset($_POST['mdp'])){
            $message = $this->verifConnexion();
        }
        require_once __DIR__ . '/../view/utilisateur/utilisateur_connexion.php';
    }
    public function verifConnexion():string{
        $nomUtilisateur = $_POST['utilisateur'];
        $mdpUtilisateur = $_POST['mdp'];

        if (empty($nomUtilisateur) || empty($mdpUtilisateur)){
            return "Champs non valide pour l'utilisateur/mdp";
        }

        $utilisateurRepo = new UtilisateurRepo();
        $utilisateur = $utilisateurRepo->getParNom($nomUtilisateur);
        if ($utilisateur){
            if (password_verify($mdpUtilisateur,$utilisateur->motDePasse)){
                $_SESSION['utilisateur'] = $utilisateur;
            }
        }
        exit();
    }
    public function deconnexion(){
        unset($_SESSION['utilisateur']);
        header('Location: ..');
        die();
    }
}