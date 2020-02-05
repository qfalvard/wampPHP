<?php require_once('config.php');
$query = "SELECT * FROM movie";
$response = $bdd->prepare($query);
$response->execute();
$movies = $response->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">

<head>
    <title>PDOmovies</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<header>
    <div class="container">
        <h1 class="text-center">HBflix</h1>
    </div>
</header>

<body class="container">
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <?php if (isset($_SESSION['alert'])) : ?>
                    <div class=" text-center alert alert-<?= $_SESSION['alert']['type'] ?>"><?= $_SESSION['alert']['message'] ?></div>
                    <?php unset($_SESSION['alert']); ?>
                <?php endif; ?>

                <form action="traitement.php" method="post" class="form">
                    <a class="btn btn-info" href="list.php"> Liste des films</a>
                    <div class="form-group">
                        <label for="formTitle">Titre</label>
                        <input id="formTtile" type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="formRelease">Année de sortie</label>
                        <select id="formRelease" name="release_year" class="form-control">
                            <?php for ($i = 1990; $i < 2030; $i++) : ?>
                                <option value="<?php echo $i ?>"><?php echo $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formDuration">Durée</label>
                        <input id="formDuration" name="duration" max='999' type="number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="formCover">Affiche</label>
                        <input id="formCover" name="cover" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="formDirector">Réalisateur</label>
                        <input id="formDirector" name="director" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="formCategory">Catégorie</label>
                        <select name="category" id="formCategory" class="form-control">
                            <option value=""></option>
                            <option value="comedie">comedie</option>
                            <option value="thriller">thriller</option>
                            <option value="action">action</option>
                            <option value="aventure">aventure</option>
                            <option value="horreur">horreur</option>
                            <option value="documentaire">documentaire</option>
                            <option value="fantastique">fantastique</option>
                        </select>
                    </div>
                    <input type="submit" value="ajouter film">

                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>