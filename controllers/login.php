<?php
session_start();

$log = [
    "name" => "admin",
    "password" => "root"
];

if ($_POST['login'] == $log['name'] && $_POST['password'] == $log['password']) {
    $_SESSION['name'] = $_POST['login'];
    $_SESSION['genre'] = "yes";
    $_SESSION['annee'] = "yes";
    $_SESSION['cible'] = "yes";
    header('Location: /');
} else {
    header('Location: /connexion.php');
}
