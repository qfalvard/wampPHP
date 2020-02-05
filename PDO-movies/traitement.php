<?php

require_once('config.php');

$query = "INSERT INTO movie (title, release_year, duration, cover, director, category) 
            VALUES ( :title, :release_year, :duration, :cover, :director, :category )";
            // :truc => pseudo variable de 'title'

$request = $bdd->prepare($query);

$request->execute([
    "title"         => $_POST['title'],
    "release_year"  => $_POST['release_year'],
    "duration"      => $_POST['duration'],
    "cover"         => $_POST['cover'],
    "director"      => $_POST['director'],
    "category"      => $_POST['category'],
]);

$_SESSION['alert'] = [
    'message' => 'le film a bien été enregistré',
    'type' => 'success',
];

header('Location: form.php'); // TODO truc a faire
