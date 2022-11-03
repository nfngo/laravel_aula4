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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('players')->group(function(){
    Route::get('', 'PlayerController@index');
    Route::get('create', 'PlayerController@create');
    Route::post('', 'PlayerController@store');
    Route::get('{player}', 'PlayerController@show');
    Route::get('{player}/edit', 'PlayerController@edit');
    Route::put('{player}', 'PlayerController@update');
    Route::delete('{player}', 'PlayerController@destroy');
});
