<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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
    return "badri";
});
$router->group(['prefix' => 'api'], function () use ($router) {
     $router->get('business','BusinessController@getAll');
     $router->post('business','BusinessController@createBusiness');
     $router->put('business/{id}','BusinessController@updateBusiness');
     $router->delete('business/{id}', 'BusinessController@deleteBusiness');



    $router->get('business_types','BusinessTypeController@getAll');
    $router->post('business_type','BusinessTypeController@createBusinessType');
    $router->put('business_type/{id}','BusinessController@updateBusinessType');
    $router->delete('business_type/{id}', 'BusinessController@deleteBusinessType');


    $router->get('formgroups','FormGroupController@getAll ');
    $router->post('formgroups','FormGroupController@create');
    $router->put('formgroups/{id}','FormGroupController@update');
    $router->delete('formgroups/{id}','FormGroupController@delete');
    $router->get('dairy/sales','FormGroupController@dairySales');
    $router->get('dairy/sales','FormGroupController@dairySales');
    $router->get('food/sales','FormGroupController@foodSales');
    $router->get('dairy/total','FormGroupController@dairytotal');
    $router->get('food/total', 'FormGroupController@foodtotal');


    
  });
