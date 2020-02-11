<?php

namespace App\Controller;

class CarsController extends AbstractController {

    public function index() {

        $cars = $this->container->getCarManager()->findAll();


        include __DIR__ . '/../../template/cars/index.php';
    }
}