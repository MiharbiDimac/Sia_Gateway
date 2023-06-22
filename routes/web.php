<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/users1', 'User1Controller@index'); 
$router->post('/users1', 'User1Controller@add'); 
$router->get('/users1/{id}', 'User1Controller@show'); 
$router->put('/users1/{id}', 'User1Controller@update'); 
$router->patch('/users1/{id}', 'User1Controller@update');
$router->delete('/users1/{id}', 'User1Controller@delete');

$router->get('/users1job', 'User1Controller@indexjob');
$router->get('/users1job/{id}', 'User1Controller@showjob');

$router->get('/users2', 'User2Controller@index'); 
$router->post('/users2', 'User2Controller@add'); 
$router->get('/users2/{id}', 'User2Controller@show'); 
$router->put('/users2/{id}', 'User2Controller@update');
$router->patch('/users2/{id}', 'User2Controller@update');
$router->delete('/users2/{id}', 'User2Controller@delete');

$router->get('/users2job', 'User2Controller@indexjob');
$router->get('/users2job/{id}', 'User2Controller@showjob');