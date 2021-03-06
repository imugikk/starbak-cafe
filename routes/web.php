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

Route::get('/', 'LandingController@index');
Route::get('/dashboard', 'LandingController@admin');


Route::get('/food', 'FoodController@index');
Route::post('/food/store', 'FoodController@store');
Route::get('/food/delete/{id}', 'FoodController@delete');
Route::post('/food/update/{id}', 'FoodController@updateModal');
Route::get('/food/show/{id}', 'FoodController@showModal');
Route::get('/food/purchase/{id}', 'FoodController@purchaseItem');


Route::get('/drink', 'DrinkController@index');
Route::post('/drink/store', 'DrinkController@store');
Route::get('/drink/delete/{id}', 'DrinkController@delete');
Route::post('/drink/update/{id}', 'DrinkController@updateModal');
Route::get('/drink/show/{id}', 'DrinkController@showModal');
Route::get('/drink/purchase/{id}', 'DrinkController@purchaseItem');

Route::get('/merchandise', 'MerchandiseController@index');
Route::post('/merchandise/store', 'MerchandiseController@store');
Route::get('/merchandise/delete/{id}', 'MerchandiseController@delete');
Route::post('/merchandise/update/{id}', 'MerchandiseController@updateModal');
Route::get('/merchandise/show/{id}', 'MerchandiseController@showModal');
Route::get('/merchandise/purchase/{id}', 'MerchandiseController@purchaseItem');

Route::get('/staff', 'StaffController@index');
Route::post('/staff/store', 'StaffController@store');
Route::get('staff/delete/{id}', 'StaffController@delete');
Route::post('/staff/update/{id}', 'StaffController@updateModal');
Route::get('/staff/show/{id}', 'StaffController@showModal');
