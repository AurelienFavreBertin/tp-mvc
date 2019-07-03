<?php

// Create Router instance
$router = new Router();


$router->get('', 'PagesController@home' );
$router->get('clients-add', 'ClientsController@add');
$router->post('clients-add', 'ClientsController@save');
$router->get('clients/list', 'ClientsController@list');
$router->get('produits/add', 'ProduitsController@add');
$router->post('produits/add', 'ClientsController@save');
$router->get('produits/list', 'ProduitsController@list');

// Run it!
$router->run();