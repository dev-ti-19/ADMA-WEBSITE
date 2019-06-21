<?php

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
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::group(['prefix' => 'portfolio'], function () {
    Route::get('/', [
        'uses' => 'PortafolioController@all',
        'as' => 'allProyects',
    ]);

    Route::get('detail/{id}', [
        'uses' => 'PortafolioController@detail',
        'as' => 'proyectsDetail'
    ]);
});