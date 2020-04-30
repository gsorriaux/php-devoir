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
                <a href="/"><li>Accueil</li></a>
                <a href="listing.php"><li>listing</li></a>
                <?php if (!empty($_SESSION['name'])): ?>
                    <a href="info.php"><li>Info</li></a>
                    <a href="profil.php"><li>Profil</li></a>
                    <a href="controllers/logout.php"><li>Déconnexion</li></a>
                <?php else: ?>
                    <a href="connexion.php"><li>Connexion</li></a>
                <?php endif ?>
            </ul>
        </nav>
    </header>
