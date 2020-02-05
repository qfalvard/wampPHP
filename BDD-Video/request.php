<?php require_once('config.php');


// commencer par la requête SQL. Join rental, customer, inventory, film
// customer : nom prenom
// nom du film

$query = "SELECT first_name, last_name, title from rental
join customer on customer.customer_id = rental.customer_id
join inventory on rental.inventory_id = inventory.inventory_id
join film on inventory.film_id = film.film_id";
$request = $bdd->prepare($query);
$request->execute();

$data = $request->fetchAll(PDO::FETCH_ASSOC);
