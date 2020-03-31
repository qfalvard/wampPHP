<?php

namespace App\Service;

use App\Model\User;
use PDO;

class UserManager implements ManagerInterface
{

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function arrayToObject(array $array)
    {
        $user = new User;
        $user->setId($array['id']);
        $user->setFirstname($array['firstname']);
        $user->setLaststname($array['lastname']);

        return $user;
    }

    public function findAll()
    {
        $query = "SELECT * FROM user";
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        $users = [];

        foreach ($data as $value) {
            $users[] = $this->arrayToObject($value);
        }

        return $users;
    }

    public function findOneById(int $id)
    {
        $query = "SELECT * FROM user where id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->execute([
            'id' => $id
        ]);
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        $user = $this->arrayToObject($data);

        return $user;
    }

    public function findByField(string $field, string $value)
    {
    }

    public function create()
    {
        $query = "INSERT INTO user(firstname, lastname) VALUES (:firstname, :lastname)";   // La requête SQL
        $response = $this->pdo->prepare($query);  // On demande à la bdd de se préparer  à une requête
        $response->execute([
            'firstname' => $_POST['firstname'],
            'lastname' => $_POST['lastname'],
        ]);
    }

    public function supp(int $id)
    {
        $query = "DELETE FROM user WHERE id = :id";
        $response = $this->pdo->prepare($query);

        // On indique à quoi correspondent les pseudo-variables
        $response->execute([
            'id'    => $id,
        ]);
    }

    public function edit(int $id, array $data)
    {
        $query= "UPDATE user SET firstname = :firstname, lastname = :lastname WHERE id = :id";
        $response = $this->pdo->prepare($query);

        // On exécute la requête en indiquant à quoi correspondent les pseudo-variables
        $response->execute([
            'id'    => $id,
            'firstname'    => $data['firstname'],
            'lastname'    => $data['lastname'],
        ]);
    }

}
