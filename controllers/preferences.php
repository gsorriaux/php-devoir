<?php
session_start();

$_SESSION['genre'] = $_POST['genre'];
$_SESSION['annee'] = $_POST['annee'];
$_SESSION['cible'] = $_POST['cible'];

header('Location: /info.php');
