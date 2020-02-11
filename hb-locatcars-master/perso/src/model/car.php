<?php

namespace App\Model;

class Car {
    
    private $brand;
    private $model;
    private $id;

    /**
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param int $id
     * @return void
     */
    public function setId(int $id) {
        $this->id = $id;
    }    

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand(string $brand) {
        $this->brand = $brand;
    }
    
    public function setModel(string $model) {
        $this->model = $model;
    }    
    
    public function getModel() {
        return $this->model;
    }
}
