<?php
    session_start();
 ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/style.css">
        <title>Mes livres SF</title>
    </head>
    <header>
        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="listing.php">listing</a></li>
                <?php if (!empty($_SESSION['name'])): ?>
                    <li><a href="info.php">Info</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="controllers/logout.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="connexion.php">Connexion</a></li>
                <?php endif ?>
            </ul>
        </nav>
    </header>
    <?php var_dump($_SESSION) ?>
