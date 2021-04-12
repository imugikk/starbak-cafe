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

Route::get('/food', 'FoodController@index');
Route::post('/food/store', 'FoodController@store');
Route::get('/food/delete/{id}', 'FoodController@delete');
Route::post('/food/update/{id}', 'FoodController@updateModal');
Route::get('/food/show/{id}', 'FoodController@showModal');
