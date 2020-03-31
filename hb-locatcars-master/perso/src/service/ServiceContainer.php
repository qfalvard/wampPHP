<?php

namespace App\Service;

use Bramus\Router\Router;
use Error;
use PDO;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class ServiceContainer {

    private $router;
    private $pdo;
    private $configuration;
    private $carManager;
    private $userManager;
    private $twig;
    private $locationManager;


    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getPdo() {
        if($this->pdo === null) {
            $this->pdo = new PDO(
                $this->configuration['db']['dsn'],
                $this->configuration['db']['username'],
                $this->configuration['db']['password'],
            );
        }
        return $this->pdo;
    }

    public function getRouter(){
        if ($this->router === null) {            
            $this->router = new Router;
        }
        return $this->router;
    }

    public function getCarManager() {
        if ($this->carManager === null) 
        {
            $this->carManager = new CarManager($this->getPdo());
        }
        return $this->carManager;
    }

    public function getUserManager()
    {
        if ($this->userManager === null)
        {
            $this->userManager = new UserManager($this->getPdo());
        }
        return $this->userManager;
    }

    public function getLocationManager()
    {
        if ($this->locationManager === null)
        {
            $this->locationManager = new LocationManager($this->getPdo());
        }
        return $this->locationManager;
    }

    public function getTwig()
    {
        if ($this->twig === null) {
            try {
                // On dit que nos templates seront dans le dossier template
                $loader = new FilesystemLoader(__DIR__ . '/../../template');
                $twig = new Environment($loader);
                $twig->addGlobal('env', $this->configuration['env']);
                $this->twig = $twig;
            } catch (Error $e) {
                var_dump($e);
            }
        }
        return $this->twig;
    }    
}
