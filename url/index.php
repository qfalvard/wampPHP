<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div>
        <strong>Exercice 1 <br></strong>
        <?php
        if (isset($_GET['name'])) {
            echo ($_GET['name']);
            echo '<br>';
        }
        if (isset($_GET['firstname'])) {
            echo ($_GET['firstname']);
            echo '<br>';
        }
        ?>
    </div>

    <div>
        <strong>Exercice 2 <br></strong>
        <?php
        if (isset($_GET['age'])) {
            echo ($_GET['age']);
            echo '<br>';
        } else {
            // throw new Exception("le parametre age n'existe pas");
        }
        ?>
    </div>
    <div>
        <strong>Exercice 3 <br></strong>
        <?php
        if (isset($_GET['startDate'])) {
            echo ($_GET['startDate']);
            echo '<br>';
        }        
        if (isset($_GET['endDate'])) {
            echo ($_GET['endDate']);
            echo '<br>';
        }

        var_dump( gettype($_GET['endDate']));
        var_dump( $_GET);
        ?>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>