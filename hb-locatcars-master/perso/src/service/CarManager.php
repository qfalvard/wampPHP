<?php

namespace App\Service;
use PDO;
use App\Model\Car;

class CarManager implements ManagerInterface {

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }


    /**
     * @return Car[]
     */
    public function findAll()
    {

        $query = "SELECT * FROM car";
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        // return $data; => return pour envoyer du JSon dans carsController.
        $cars = [];

        foreach($data as $d) {
            $cars[] = $this->arrayToObject($d);
            // array_push($cars, $this->arrayTooObject($d));
        }

        return $cars;

    }

    /**
     * @param array $array
     */
    public function arrayToObject(array $array){
        $car = new Car;
        $car->setId($array['id']);
        $car->setBrand($array['brand']);
        $car->setModel($array['model']);

        return $car;
    }

    /**
     * @param int
     * @return Car
     */
    public function findOneById(int $id)
    {
        $query = "SELECT * FROM car where id = :id";
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

    public function add()
    {
        $query = "INSERT INTO car(brand, model) VALUES (:brand, :model)";   // La requête SQL
        $response = $this->pdo->prepare($query);  // On demande à la bdd de se préparer  à une requête
        $response->execute([
            'brand' => $_POST['brand'],
            'model' => $_POST['model'],
        ]);
    }

    public function supp(int $id)
    {
        $query = "DELETE FROM car WHERE id = :id";
        $response = $this->pdo->prepare($query);

        // On indique à quoi correspondent les pseudo-variables
        $response->execute([
            'id'    => $id,
        ]);
    }

    public function edit(int $id, array $data)
    {
        $query = "UPDATE car SET brand = :brand, model = :model WHERE id = :id";
        $response = $this->pdo->prepare($query);

        // On exécute la requête en indiquant à quoi correspondent les pseudo-variables
        $response->execute([
            'id'    => $id,
            'brand'    => $data['brand'],
            'model'    => $data['model'],
        ]);
    }
}
