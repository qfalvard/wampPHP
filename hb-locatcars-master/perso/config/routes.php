<?php

// On enlève le service router car il est maintenant dans le serviceContainer.
// use Bramus\Router\Router;
// $router = new Router;

$router = $container->getRouter();

$router->setNamespace('App\Controller');

// PAGE
$router->get('', 'PageController@index');

// CARS
$router->get('/cars', 'CarsController@index');
$router->get('/cars', 'CarsController@index');
$router->get('/cars/(\d+)', 'CarsController@show');
$router->get('/cars/new', 'CarsController@new');
$router->post('/cars/create', 'CarsController@create');
$router->get('/cars/(\d+)/delete', 'CarsController@delete');
$router->get('/cars/(\d+)/showedit', 'CarsController@showedit');
$router->post('/cars/(\d+)/edit', 'CarsController@edit');

// USERS
$router->get('/users', 'UsersController@index');
$router->get('/users/(\d+)', 'UsersController@show');
$router->get('/users/new', 'UsersController@new');
$router->post('/users/create', 'UsersController@create');
$router->get('/users/(\d+)/delete', 'UsersController@delete');
$router->get('/users/(\d+)/showedit', 'UsersController@showedit');
$router->post('/users/(\d+)/edit', 'UsersController@edit');

// LOCATIONS
$router->get('/location', 'LocationController@index');
$router->get('/location/new', 'LocationController@new');
$router->post('/location/create', 'LocationController@create');
$router->get('/location/(\d+)/delete', 'LocationController@delete');



$router->run(); // NE JAMAIS OUBLIE SINON LE ROUTER NE SE LANCE PAS!!!