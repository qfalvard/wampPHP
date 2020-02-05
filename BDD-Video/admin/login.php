<?php require_once('../config.php');

$verif = "SELECT * from staff
            where email = :email or password = :password";

$require = $bdd->prepare($verif);
$require->execute([
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);

$datas = $require->fetch(PDO::FETCH_ASSOC);

if ($datas['email'] == $_POST['email'] && $datas['password'] == $_POST['password']) {
    echo 'super';
} else {
    echo 'nul';
}

include_once('../_partials/_header.php') ?>

<body class="container text-center">
    <div class=" border round-0">
        <h1>Bienvenu sur l'espace utilisateur</h1>
    </div>

</body>

<?php include_once('../_partials/_footer.php') ?>