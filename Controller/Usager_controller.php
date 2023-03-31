<?php

namespace Controller;

use Model\Utilisateur;
use Repository\UtilisateurRepo;

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
            return "Veuiller remplir tous les champs";
        }
        $utilisateurRepo = new UtilisateurRepo();
        $utilisateur = $utilisateurRepo->getParNom($nomUtilisateur);
        if ($utilisateur){
            return "Ce nome est déjà pris";
        }

        if ($mdpUtilisateur != $confirmation){
            return "Les mots de passe sont divergeants";
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
    private function verifConnexion():string{
        $nomUtilisateur = $_POST['utilisateur'];
        $mdpUtilisateur = $_POST['mdp'];

        if (empty($nomUtilisateur) || empty($mdpUtilisateur)){
            return "Champs manquants";
        }

        $utilisateurRepo = new UtilisateurRepo();
        $utilisateur = $utilisateurRepo->getParNom($nomUtilisateur);

        if ($utilisateur) {
            if (password_verify($mdpUtilisateur, $utilisateur->mdp)) {
                $_SESSION['joueur'] = true;
                header('Location: /../Jeu/selection');
            } else
                return "Mot de passe non valide";
        }
        exit();
    }
    public function deconnexion(){
        unset($_SESSION['joueur']);
        header('Location: accueil');
        die();
    }
}