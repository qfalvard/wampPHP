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
    public function findAll(){

        $query = "SELECT * FROM car";
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);

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
    public function findOneById(int $id){



    }

    /**
     * @param string $field
     * @param string $value
     * @return Car[]
     */
    public function findByField(string $field, string $value){



    }
}
