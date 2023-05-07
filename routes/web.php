<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/form', 'StrayDogController@index');
Route::post('store', 'StrayDogController@store')->middleware(['auth']);
Route::get('/view', 'StrayDogController@viewList')->middleware(['auth']);
Route::get('/show', 'StrayDogController@show')->name('show');
Route::get('/detail/{id}','StrayDogController@detail')->name('detail')->middleware(['auth']);;
Route::get('/straydog/search/all', 'StrayDogController@search');
Route::post('/straydog/request', 'StrayDogController@contact');
Route::get('/user/dashboard', 'StrayDogController@userDashboard');
Route::get('/straydog/search/{id}', 'StrayDogController@searchMine')->name('search');
Route::get('/straydog/search/post/{id}', 'StrayDogController@searchPost')->name('searchPost');

Route::get('/admin/dashboard', 'StrayDogController@adminDashboard');
Route::get('/sendAlert', 'StrayDogController@sendAlert');
Route::get('/finishRescue', 'StrayDogController@finishRescue');

Route::get('/vetForm', 'VetController@form');
Route::post('storeVet', 'VetController@store');
Route::get('listVet', 'VetController@list');
