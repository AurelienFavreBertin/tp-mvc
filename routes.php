<?php

// Create Router instance
$router = new Router();


$router->get('', 'PagesController@home' );
$router->get('clients/add', 'ClientsController@add');
$router->post('clients/add', 'ClientsController@save');
$router->get('clients/list', 'ClientsController@list');
$routes->get('clients/{id}/delete', 'ClientsController@delete');
$router->get('clients/{id}', 'ClientsController@show');

$router->get('produits/add', 'ProduitsController@add');
$router->post('produits/add', 'ProduitsController@save');
$router->get('produits/list', 'ProduitsController@list');

$router->get('panier', 'PaniersController@list');

// Run it!
$router->run();