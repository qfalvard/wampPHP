<?php

namespace App\Model;

class Location {
    private $id;
    private $date;
    private $city;
    private $user_id;
    private $car_id;
    private $car;
    private $user;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param int $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }
    /**
     * @param string $date
     * @return void
     */
    public function setDate(string $date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
    /**
     * @param string $city
     * @return void
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }
    /**
     * @param int $id
     * @return void
     */
    public function setUserId(int $user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return int
     */
    public function getCarId()
    {
        return $this->car_id;
    }
    /**
     * @param int $id
     * @return void
     */
    public function setCarId(int $car_id)
    {
        $this->car_id = $car_id;
    }

    /**
     * @return Car
     */
    public function getCar()
    {
        return $this->car;
    }
    public function setCar(Car $car)
    {
        $this->car = $car;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }
    public function setUser(User $user)
    {
        $this->user = $user;
    }

}
