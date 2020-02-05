<?php require_once('config.php');
$query = "SELECT * FROM movie";
$response = $bdd->prepare($query);
$response->execute();
$movies = $response->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="container">

    <a class="btn btn-info my-3 pull-right" href="form.php"> Accès formulaire</a>

    <div class="col">
        <table class="table" id="listMovies">
            <thead>
                <tr>
                    <th scope="col">Titre</th>
                    <th scope="col">Réalisateur</th>
                    <th scope="col">Durée (min)</th>
                    <th scope="col">Année de sortie</th>
                    <th scope="col">Lien vers l'affiche</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($movies as $movie) : ?>
                    <tr>
                        <td> <?= $movie['title'] ?> </td>
                        <td> <?= $movie['director'] ?> </td>
                        <td> <?= $movie['duration'] ?> </td>
                        <td> <?= $movie['release_year'] ?> </td>
                        <td> <?= $movie['category'] ?> </td>
                        <td> <img src="<?= $movie['cover'] ?>" alt="" height="100"> </td>
                        <td>
                            <a href="show.php?id=<?= $movie['id'] ?>" class="btn butn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a href="update.php?id=<?= $movie['id'] ?>" class="btn butn-sm btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="delete.php?id=<?= $movie['id'] ?>" class="btn butn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>