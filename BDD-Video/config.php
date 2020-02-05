<?php

//config.php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=sakila;charset=utf8;port=3306', 'root', '');
} catch (Exception $e) {
    $_SESSION['alert'] = [
        'message' => 'Erreur de connexion',
        'type' => 'danger',
    ];
    die;
    header('Location: show.php');
}
