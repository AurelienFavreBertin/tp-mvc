<?php

// Create Router instance
$router = new Router();


$router->get('', 'PagesController@home' );
$router->get('clients/add', 'ClientsController@add');
$router->post('clients/add', 'ClientsController@save');
$router->get('clients/list', 'ClientsController@list');
$router->get('clients/{id}/delete', 'ClientsController@delete');
$router->get('clients/{id}/edit', 'ClientsController@edit');
$router->post('clients/{id}/edit', 'ClientsController@update');
$router->get('clients/{id}', 'ClientsController@show');

$router->get('produits/add', 'ProduitsController@add');
$router->post('produits/add', 'ProduitsController@save');
$router->get('produits/list', 'ProduitsController@list');
$router->get('produits/{id}/delete', 'ProduitsController@delete');
$router->get('produits/{id}/edit', 'ProduitsController@edit');
$router->post('produits/{id}/edit', 'ProduitsController@update');
$router->get('produits/{id}', 'ProduitsController@show');

$router->get('paniers/add', 'PaniersController@add');

// Run it!
$router->run();