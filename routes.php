<?php

// Create Router instance
$router = new Router();


$router->get('', 'PagesController@home' );
$router->get('clients/add', 'ClientsController@add');
$router->get('clients/list', 'ClientsController@list');

// Run it!
$router->run();