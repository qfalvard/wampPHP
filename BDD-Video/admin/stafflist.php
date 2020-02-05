<?php

include_once('../_partials/_header.php');
require_once('../config.php');


// commencer par la requête SQL. Join rental, customer, inventory, film
// customer : nom prenom
// nom du film

$pagination = 0;
$currentPage = 0;

if (isset($_GET['page']) && $_GET['page'] > 0) {
    $pagination = $_GET['page'] * 20;
    $currentPage = $_GET['page'];
}

$query = "SELECT * from staff
limit $pagination, 20";

$request = $bdd->prepare($query);
$request->execute();

$datas = $request->fetchAll(PDO::FETCH_ASSOC);

?>
<a class="btn btn-danger" href="../list.php">liste</a><br><br>
<a class="btn btn-danger" href="register.php">register</a>

<div class="pull-right my-3">
    <a class="btn btn-info" href="./admin/register.php">Register ></a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Prenom</th>
            <th scope="col">Nom</th>
            <th scope="col">email</th>
            <th scope="col">Pseudo</th>
            <th scope="col">Mot de passe</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datas as $data) : ?>
            <tr>
                <td><?= $data['staff_id'] ?></td>
                <td><?= $data['first_name'] ?></td>
                <td><?= $data['last_name'] ?></td>
                <td><?= $data['email'] ?></td>
                <td><?= $data['username'] ?></td>
                <td><?= $data['password'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>

</table>

<div class="d-flex justify-content-between ">
    <a class="btn btn-info" href="list.php?page=<?= $currentPage - 1 ?>">Page précédente</a>
    <a class="btn btn-info " href="list.php?page=<?= $currentPage + 1 ?>">Page suivante</a>
</div>

<?php include_once('../_partials/_header.php'); ?>