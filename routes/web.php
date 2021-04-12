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

Route::get('/staff', 'StaffController@index');
Route::post('/staff/store', 'StaffController@store');
Route::get('staff/delete/{id}', 'StaffController@delete');
Route::post('/staff/update/{id}', 'StaffController@updateModal');
Route::get('/staff/show/{id}', 'StaffController@showModal');
