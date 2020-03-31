<?php

namespace App\Controller;

class CarsController extends AbstractController {

    public function index() {

        $cars = $this->container->getCarManager()->findAll();
        $users = $this->container->getUserManager()->findAll();

        // header("Content-Type: application/json");
        // echo json_encode($cars);

        //include __DIR__ . '/../../template/cars/index.php';

        echo $this->container->getTwig()->render('/cars/index.html.twig', [
            'cars' => $cars, // On envoie la variable $cars à notre template. Il la recevra nommée "cars".
            'users' => $users,
        ]);
    }

    public function show(int $id)
    {
        $car = $this->container->getCarManager()->findOneById($id);

        echo $this->container->getTwig()->render('/cars/show.html.twig', [
            'car' => $car,
        ]);
    }

    public function new()
    {
        echo $this->container->getTwig()->render('/cars/new.html.twig');
    }

    public function create()
    {
        $car = $this->container->getCarManager()->add();
        header('Location: ' . $this->config['env']['base_path'] . '/cars/');
    }

    public function delete(int $id)
    {

        $car = $this->container->getCarManager()->supp($id);


        header('Location: ' . $this->config['env']['base_path'] . '/cars/');
    }

    public function showEdit(int $id)
    {
        $car = $this->container->getCarManager()->findOneById($id);

        echo $this->container->getTwig()->render('/cars/showedit.html.twig', [
            'car' => $car,
        ]);
    }

    public function edit(int $id)
    {
        $data = $_POST;
        $car = $this->container->getCarManager()->edit($id, $data);
        header('Location: ' . $this->config['env']['base_path'] . '/car/');
    }
}