<?php require_once('config.php');

$query =  " UPDATE movie
            SET title = :title, release_year = :release_year, duration = :duration, cover = :cover, director = :director, category = :category
            WHERE id = :id";
$update = $bdd->prepare($query);

$update->execute([
    "id"            => $_GET['id'],
    "title"         => $_POST['title'],
    "release_year"  => $_POST['release_year'],
    "duration"      => $_POST['duration'],
    "cover"         => $_POST['cover'],
    "director"      => $_POST['director'],
    "category"      => $_POST['category'],
]);

header('Location: form.php');
?>
