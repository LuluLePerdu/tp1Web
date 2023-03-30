<?php

namespace model;

class Utilisateur
{
    public int $id;
    public string $nomUtilisateur;
    public int $stats;
    public string $motDePasse;
    public bool $admin;

}