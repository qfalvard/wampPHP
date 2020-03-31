<?php

namespace App\Service;

use PDO;
use App\Model\Location;

class LocationManager extends AbstractManager implements ManagerInterface
{

    private $pdo;

    public function __construct(PDO $pdo)
    {
        parent::__construct();
        $this->pdo = $pdo;
    }

    public function findByField(string $field, string $value)
    {
    }

    public function arrayToObject(array $array)
    {
        $location = new Location;
        $location->setId($array['id']);
        $location->setUserId($array['user_id']);
        $location->setCarId($array['car_id']);
        $location->setDate($array['date']);
        $location->setCity($array['city']);

        $userObject = $this->container->getUserManager()->findOneById($array['user_id']);
        $carObject = $this->container->getCarManager()->findOneById($array['car_id']);

        $location->setUser($userObject);
        $location->setCar($carObject);


        return $location;
    }

    public function findAll()
    {
        $query = "SELECT * FROM location";
        $statement = $this->pdo->prepare($query);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        $locations = [];

        foreach ($data as $value) {
            $locations[] = $this->arrayToObject($value);
        }

        return $locations;
    }

    public function findOneById(int $id)
    {
        $query = "SELECT * FROM location where id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->execute([
            'id' => $id
        ]);
        $data = $statement->fetch(PDO::FETCH_ASSOC);
        $location = $this->arrayToObject($data);

        return $location;
    }

    public function create(array $data)
    {
        $query = "INSERT INTO location(user_id, car_id, date, city) VALUES (:userId, :carId, :date, :city)";  // La requête SQL
        $statement = $this->pdo->prepare($query);
        $statement->execute([
            'userId' => $_POST['user_id'],
            'carId' => $_POST['car_id'],
            'date' => $_POST['date'],
            'city' => $_POST['city'],
        ]);
    }

    public function delete(int $id)
    {
        $query = "DELETE FROM location WHERE id = :id";
        $statement = $this->pdo->prepare($query);
        $statement->execute([
            'id' => $id
        ]);
    }

    // public function add()
    // {
    //     $query = "INSERT INTO user(firstname, lastname) VALUES (:firstname, :lastname)";   // La requête SQL
    //     $response = $this->pdo->prepare($query);  // On demande à la bdd de se préparer  à une requête
    //     $response->execute([
    //         'firstname' => $_POST['firstname'],
    //         'lastname' => $_POST['lastname'],
    //     ]);
    // }

    // public function supp(int $id)
    // {
    //     $query = "DELETE FROM user WHERE id = :id";
    //     $response = $this->pdo->prepare($query);

    //     // On indique à quoi correspondent les pseudo-variables
    //     $response->execute([
    //         'id'    => $id,
    //     ]);
    // }

    // public function edit(int $id, array $data)
    // {
    //     $query = "UPDATE user SET firstname = :firstname, lastname = :lastname WHERE id = :id";
    //     $response = $this->pdo->prepare($query);

    //     // On exécute la requête en indiquant à quoi correspondent les pseudo-variables
    //     $response->execute([
    //         'id'    => $id,
    //         'firstname'    => $data['firstname'],
    //         'lastname'    => $data['lastname'],
    //     ]);
    // }
}
