<?php
include_once('_partials/_header.php');
require_once('config.php');

$query = "SELECT * from film where film_id = :id";
$request = $bdd->prepare($query);
$request->execute([
    'id' => $_GET['id']
]);


$data = $request->fetch(PDO::FETCH_ASSOC);

?>
<a href="list.php">< retour à la liste</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Release</th>
            <th scope="col">Description</th>
            <th scope="col">Note</th>
        </tr>
    </thead>
    <tbody>
            <tr>
                <td><?= $data['film_id'] ?></td>
                <td><?= $data['title'] ?></td>
                <td><?= $data['release_year'] ?></td>
                <td><?= $data['description'] ?></td>
                <td><?= $data['rental_rate'] ?></td>
                <td>
                    <a href="update.php?id=<?= $data['film_id'] ?>" class="btn butn-sm btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                </td>
            </tr>
    </tbody>
</table>

<?php include_once('_partials/_footer.php') ?>