<?php require_once('../config.php');

$query = "INSERT into staff(username, first_name, last_name, email, password, store_id, address_id)
            values (:username, :first_name, :last_name, :email, :password, :store_id, :address_id)";

$create = $bdd->prepare($query);
$create->execute([
    'username' => $_POST['username'],
    'first_name' => $_POST['first_name'],
    'last_name' => $_POST['last_name'],
    'email' => $_POST['email'],
    'password' => $_POST['password'],
    'store_id' => $_POST['store_id'],
    'address_id' => $_POST['address_id'],
]);

header('Location: ../list.php');

?>