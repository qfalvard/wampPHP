<?php

class Ship
{

    private $name = '';
    private $weaponPower = 0;
    private $spatioDriveBooster = 0;
    private $strength = 0;
    private $isUnderRepair;

//Contructeur

public function __construct() {
    $this->isUnderRepair = mt_rand(1, 100) < 30;
}

// Fonction Setter
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setWeaponPower(int $weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    public function setSpatioDriveBooster(int $spatioDriveBooster)
    {
        $this->spatioDriveBooster = $spatioDriveBooster;
    }

    public function setStrength(int $strength)
    {
        $this->strength = $strength;
    }

    public function setRepair(bool $isUnderRepair)
    {
        $this->isUnderRepair = $isUnderRepair;
    }

// Fonction Getter
    public function getName()
    {
        return $this->name;
    }
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }
    public function getSpatioDriveBooster()
    {
        return $this->spatioDriveBooster;
    }
    public function getStrength()
    {
        return $this->strength;
    }
    public function getRepair()
    {
        $this->isUnderRepair;
    }


    // function getNameAndSpecs() {
    // return "Vaisseau : " . $this->name . '(Force :' . $this->weaponPower . ', Booster spatiodrive : ' . $this->spatioDriveBooster . ', Résistance : ' . $this->strength . ').';
    // }

    // public function getNameAndSpecs(bool $userShortFormat)
    // {
    //     if ($userShortFormat) {
    //         return $this->name . "(F:" . $this->weaponPower . ", BS: " . $this->spatioDriveBooster . ", R : " . $this->strength . ")";
    //     } else {
    //         return "Vaisseau :" . $this->name . "(Force:" . $this->weaponPower . ", Booster spatiodrive: " . $this->spatioDriveBooster . ", Résistance : " . $this->strength . ")";
    //     }
    // }

    /**
     * @param bool $useShortFormat
     */
    public function getNameAndSpecs(bool $userShortFormat = false)
    {
        if ($userShortFormat) {
            return sprintf(
                '%s (F: %s, BS: %s, R: %s)',
                $this->name,
                $this->weaponPower,
                $this->spatioDriveBooster,
                $this->strength
            );
        } else {
            return sprintf(
                'Vaisseau : (Force: %s, Booster spatiodrive: %s, Résistance: %s)',
                $this->name,
                $this->weaponPower,
                $this->spatioDriveBooster,
                $this->strength
            );
        }
    }

    /**
     * @param Ship $ship
     */
    public function doesThisShipHasMoreStrengthThanMe(ship $ship)
    {
        return $ship->strength > $this->strength;
    }
};
