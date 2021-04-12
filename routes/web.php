<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('drink', 'DrinkController@index');
Route::post('/drink/store', 'DrinkController@store');
Route::get('/drink/delete/{id}', 'DrinkController@delete');
Route::post('/drink/update/{id}', 'DrinkController@updateModal');
Route::get('/drink/show/{id}', 'DrinkController@showModal');
