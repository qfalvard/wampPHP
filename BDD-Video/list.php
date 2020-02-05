<?php

include_once('_partials/_header.php');
require_once('config.php');


// commencer par la requête SQL. Join rental, customer, inventory, film
// customer : nom prenom
// nom du film

$pagination = 0;
$currentPage = 0;

if (isset($_GET['page']) && $_GET['page'] > 0) {
    $pagination = $_GET['page'] * 20;
    $currentPage = $_GET['page'];
}

$query = "SELECT first_name AS prenom, last_name AS nom, title As titre, rental_id as rentalId from rental
join customer on customer.customer_id = rental.customer_id
join inventory on rental.inventory_id = inventory.inventory_id
join film on inventory.film_id = film.film_id
order by rental_id
limit $pagination, 20";

$request = $bdd->prepare($query);
$request->execute();

$datas = $request->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="pull-right my-3">
    <a class="btn btn-info" href="./admin/register.php">Déconnecter ></a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Firstname</th>
            <th scope="col">Movie</th>
            <th scope="col">Options</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($datas as $data) : ?>
            <tr>
                <td><?= $data['rentalId'] ?></td>
                <td><?= $data['nom'] ?></td>
                <td><?= $data['prenom'] ?></td>
                <td><?= $data['titre'] ?></td>
                <td>
                    <a href="detail.php?id=<?= $data['rentalId'] ?>" class="btn butn-sm btn-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a href="update.php?id=<?= $data['rentalId'] ?>" class="btn butn-sm btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    <a href="delete.php?id=<?= $data['rentalId'] ?>" class="btn butn-sm btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>

</table>

<div class="d-flex justify-content-between ">
    <a class="btn btn-info" href="list.php?page=<?= $currentPage - 1 ?>">Page précédente</a>
    <a class="btn btn-info " href="list.php?page=<?= $currentPage + 1 ?>">Page suivante</a>
</div>