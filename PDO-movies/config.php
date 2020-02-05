<?php

//config.php

session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=hbflix;charset=utf8;port=3306', 'root', '');
} catch (Exception $e) {
    $_SESSION['alert'] = [
        'message' => 'Erreur de connexion',
        'type' => 'danger',
    ];
    die;
    header('Location: form.php');
}