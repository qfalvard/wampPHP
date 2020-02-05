<?php require_once('config.php');


$query = "DELETE FROM movie WHERE id = :id";
$request = $bdd->prepare($query);
$response = $request->execute([
    'id' => $_GET['id'],
]);

header('Location: form.php');
