<?php

class ShipLoader
{

    private static $pdo;

    private function __construct()//PDO $pdo)
    {
        //$this->pdo = $pdo;
    }

    /**
     * @return PDO
     */
    public static function getPDO()
    {
        /*
        if ($this->pdo === null) {
            $this->pdo = new PDO('mysql:host=localhost;dbname=battleship', 'root', '');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $this->pdo;
        */

        if (self::$pdo === null) {
            self::$pdo = new PDO('mysql:host=localhost;dbname=batlleship', 'root', '');
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$pdo;
    }

    /**
     * Retrouve en BDD la liste des ships sous forme d'un tableau de tableaux de données des ships
     * @return array[] Tableau de tableaux de ships
     */

    private static function queryForShips()
    {
        $recupShips = self::getPDO()->prepare('SELECT * FROM ship');
        $recupShips->execute();

        $shipsArray = $recupShips->fetchAll(PDO::FETCH_ASSOC);

        return $shipsArray;
    }

    /**
     * Retourne tous les ships sous forme d'un tableau d'objets Ship
     * @return Ship[] Tableau d'objets Ship
     */
    public static function getShips() // TODO changement public static
    {

        $shipsKeys = array('starfighter', 'x_wing_fighter',
                        'super_star_destroyer', 'rz1_a_wing_interceptor');

        $ships = [];

        $resultSet = self::queryForShips(); //TODO changement sefl::

        foreach ($resultSet as $result) {
            $ship = new Ship();
            //$ship->setId($result['name']);
            $ship->setName($result['name']);
            $ship->setWeaponPower($result['weapon_power']);
            $ship->setSpatiodriveBooster($result['spatiodrive_booster']);
            $ship->setStrength($result['strength']);
            $ships[$result['id']] = $ship;
        }

        // $ship1 = new Ship();
        // $ship1->setName("Jedi Starfighter");
        // $ship1->setWeaponPower(5);
        // $ship1->setSpatiodriveBooster(15);
        // $ship1->setStrength(30);
        // $ships['starfighter'] = $ship1;

        // $ship2 = new Ship();
        // $ship2->setName("X-Wing Fighter");
        // $ship2->setWeaponPower(2);
        // $ship2->setSpatiodriveBooster(2);
        // $ship2->setStrength(70);
        // $ships['x_wing_fighter'] = $ship2;

        // $ship3 = new Ship();
        // $ship3->setName("Super Star Destroyer");
        // $ship3->setWeaponPower(10);
        // $ship3->setSpatiodriveBooster(0);
        // $ship3->setStrength(500);
        // $ships['super_star_destroyer'] = $ship3;

        // $ship4 = new Ship();
        // $ship4->setName("RZ1 A-Wing Interceptor");
        // $ship4->setWeaponPower(4);
        // $ship4->setSpatiodriveBooster(4);
        // $ship4->setStrength(50);
        // $ships['rz1_a_wing_interceptor'] = $ship4;

        return $ships;
    }
}
