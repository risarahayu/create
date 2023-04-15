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
Route::get('/straydog/search', 'StrayDogController@search');
Route::post('/straydog/request', 'StrayDogController@contact');
Route::get('/admin/dashboard', 'StrayDogController@adminDashboard');
