<?php
session_start();

$log = [
    "name" => "johnny",
    "password" => "dc76e9f0c0006e8f919e0c515c66dbba3982f785"
];

if ($_POST['login'] == $log['name'] && sha1($_POST['password']) == $log['password']) {
    $_SESSION['name'] = $_POST['login'];
    $_SESSION['genre'] = "yes";
    $_SESSION['annee'] = "yes";
    $_SESSION['cible'] = "yes";
    header('Location: /');
} else {
    header('Location: /connexion.php');
}
