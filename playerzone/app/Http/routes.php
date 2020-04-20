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
    return view('welcome');
});

Route::get('/data','DataController@index'); 

Route::get('/data/create','DataController@create');
Route::post('/data/store','DataController@store');

Route::get('/data/edit/{id}','DataController@edit');
Route::post('/data/update','DataController@update');

Route::get('/data/delete/{id}','DataController@delete');