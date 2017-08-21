<?php

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

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->group(['prefix' => 'forum','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('user','UserController@index');

    $app->get('user/{id}','UserController@getUser');

    $app->post('user','UserController@createUser');

    $app->put('user/{id}','UserController@updateUser');

    $app->delete('user/{id}','UserController@deleteUser');
});


$app->group(['prefix' => 'forum','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('competence','CompetenceController@index');

    $app->get('competence/{id}','CompetenceController@getCompetence');

    $app->post('competence','CompetenceController@createCompetence');

    $app->put('competence/{id}','CompetenceController@updateCompetence');

    $app->delete('competence/{id}','CompetenceController@deleteCompetence');
});


$app->group(['prefix' => 'forum','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('usercompetence','UserCompetenceController@index');

    $app->get('usercompetence/{id}','UserCompetenceController@getUserCompetence');

    $app->post('usercompetence','UserCompetenceController@createUserCompetence');

    $app->put('usercompetence/{id}','CompetenceController@updateUserCompetence');

    $app->delete('usercompetence/{id}','CompetenceController@deleteUserCompetence');
});



$app->group(['prefix' => 'forum','namespace' => 'App\Http\Controllers'], function($app)
{
    $app->get('statistique','StatistiqueController@index');

    $app->get('statistique/{id}','StatistiqueController@getStatistique');

    $app->post('statistique','StatistiqueController@createStatistique');

    $app->put('statistique/{id}','StatistiqueController@updateStatistique');

    $app->delete('statistique/{id}','StatistiqueController@deleteStatistique');
});


$app->group(['prefix' => 'api/v1','namespace' => 'App\Http\Controllers'], function($app)
{
	$app->post('car','CarController@createCar');

	$app->put('car/{id}','CarController@updateCar');

	$app->delete('car/{id}','CarController@deleteCar');

	$app->get('car','CarController@index');
});
