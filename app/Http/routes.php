<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/home');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/logins', 'Main\LoginController@index');
Route::post('/logins', 'Main\LoginController@store');
Route::post('/logins/show', 'Main\LoginController@show');
Route::get('/logins/delete/{id}', 'Main\LoginController@destroy');



Route::get('/test', 'Main\LoginController@test');
