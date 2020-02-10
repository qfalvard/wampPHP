<?php

// On enlève le service router car il est maintenant dans le serviceContainer.
// use Bramus\Router\Router;
// $router = new Router;

$router = $container->getRouter();

// Quand je vais sur "/hello", j'effectue l'action suivante, qui est définie
// dans la fonction anonyme notée juste après : function() { /* action */ }
$router->get('/hello', function(){
    echo 'hello world!!';
});

$router->run(); // NE JAMAIS OUBLIE SINON LE ROUTER NE SE LANCE PAS!!!