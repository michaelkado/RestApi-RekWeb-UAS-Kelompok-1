<?php

/** @var \Laravel\Lumen\Routing\Router $router */
//use App\Http\Controllers\ControllerDataMahasiswa;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->
group(['middleware' => 'basicAuth'], function () use ($router){
    $router->post('/dataMahasiswa','ControllerDataMahasiswa@create');
    $router->get('/dataMahasiswa','ControllerDataMahasiswa@index');
    $router->get('/detaildataMahasiswa/{id}','ControllerDataMahasiswa@detail');
    $router->put('/updatedataMahasiswa/{id}','ControllerDataMahasiswa@update');
    $router->delete('/deletedataMahasiswa/{id}','ControllerDataMahasiswa@delete');
    });


