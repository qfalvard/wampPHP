<?php

// On enlève le service router car il est maintenant dans le serviceContainer.
// use Bramus\Router\Router;
// $router = new Router;

$router = $container->getRouter();

$router->setNamespace('App\Controller');
$router->get('/cars', 'CarsController@index');

$router->run(); // NE JAMAIS OUBLIE SINON LE ROUTER NE SE LANCE PAS!!!