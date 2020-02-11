<?php

namespace APP\Model;

class Car {
    
    private $brand;
    private $model;
    private $id;

    /**
     * @return ind
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param int $id
     * @return void
     */
    public function setID(int $id) {
        $this->id = $id;
    }    

    public function getBrand() {
        return $this->brand;
    }

    public function setBrand(string $brand) {
        $this->id = $brand;
    }
    
    public function setModel(string $model) {
        $this->id = $model;
    }    
    
    public function getModel() {
        return $this->model;
    }
}
