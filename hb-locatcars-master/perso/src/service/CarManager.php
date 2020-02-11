<?php

namespace App\Service;
use PDO;
use APP\Model\Car;

class CarManager {

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @return Car[]
     */
    public function finAll(){

        $query = "SELECT * FROM car";
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;

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
