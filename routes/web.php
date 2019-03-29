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
});

Route::get('/usuarios','usuario@users');

Route::get('/usuarios/{id}','usuario@index');
//se manda a llamar el controlador con nombreControlador@nombrefuncion y no se mandan las variables