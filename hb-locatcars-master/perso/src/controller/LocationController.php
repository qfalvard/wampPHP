<?php

namespace App\Controller;

class LocationController extends AbstractController {

    public function index()
    {

        $locations = $this->container->getLocationManager()->findAll();

        echo $this->container->getTwig()->render('/location/index.html.twig', [
            'locations' => $locations,
        ]);
    }

    public function new()
    {
        $users = $this->container->getUserManager()->findAll();
        $cars = $this->container->getCarManager()->findAll();

        echo $this->container->getTwig()->render('/location/new.html.twig', [
            'users' => $users,
            'cars'  => $cars
        ]);

    }

    public function create() 
    {
        $users = $this->container->getUserManager()->findAll();
        $cars = $this->container->getCarManager()->findAll();

        echo $this->container->getTwig()->render('/location/index.html.twig', [
            'users' => $users,
            'cars'  => $cars
        ]);
        $this->container->getLocationManager()->create($_POST);
        header('Location: ' . $this->config['env']['base_path'] . '/location/');
    }

    public function delete(int $id)
    {
        dd('ok');
        $this->container->getLocationManager()->delete($id);
        dd('Location: ' . $this->config['env']['base_path'] . '/location/');
        
       // header('Location: ' . $this->config['env']['base_path'] . '/location/');
    }

}
