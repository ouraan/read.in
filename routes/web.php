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

Route::get('/', 'MainController@index');
Route::post('/store', 'MainController@store');
Route::get('/edit/{id}', 'MainController@edit');
Route::patch('/update/{id}', 'MainController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
