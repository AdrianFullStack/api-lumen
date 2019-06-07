<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/clients', "ClientController@index");
$router->post('/clients', "ClientController@store");
