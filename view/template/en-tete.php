<nav class="navbar navbar-light bg-light justify-content-between">
    <a href="/" class="navbar-brand">Lasagnes Contre-Attaque</a>

    <div>
        <?php if (!$_SESSION['joueur']){ ?>
        <a href="/Usager/connexion" class="btn btn-outline-success my-2 my-sm-0">Connexion</a>
        <a href="/Usager/inscription" class="btn btn-outline-success my-2 my-sm-0">Inscription</a>
        <?php } elseif ($_SESSION['joueur'] == true){ ?>
            <a href="/Usager/deconnexion" class="btn btn-outline-success my-2 my-sm-0">Déconnexion</a>
        <?php } ?>
    </div>
</nav>
