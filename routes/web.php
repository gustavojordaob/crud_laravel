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
    return view('index');
});


Route::get('/produtos','ControllerProduto@index');
Route::get('/produtos/create','ControllerProduto@create');
Route::post('/produtos','ControllerProduto@store');
Route::get('/produtos/excluir/{id}','ControllerProduto@destroy');
Route::get('/produtos/editar/{id}','ControllerProduto@edit');
Route::post('/produtos/editar/{id}','ControllerProduto@update');

