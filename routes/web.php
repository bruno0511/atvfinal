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

Route::get('/', 'MedicController@index');

//Chamando o controllador
Route::get('/sobre', 'PaginaBasicaController@sobre');
Route::get('/contato', 'PaginaBasicaController@contato');

//Rotas para parte de Index
Route::get('/index', 'MedicController@index');
Route::get('/index/form-adicionar', 'MedicController@formAdicionar');
Route::post('/index/adicionar', 'MedicController@adicionar');
Route::get('/index/excluir/{id}', 'MedicController@excluir');
Route::get('/index/editar/{id}', 'MedicController@form_editar');
Route::post('/index/editar', 'MedicController@editar');

//Rotas para parte de CATEGORIA
Route::get('/categorias', 'CategoriaController@categorias');
Route::get('/categorias/form-adicionar', 'CategoriaController@formAdicionar');
Route::post('/categorias/adicionar', 'CategoriaController@adicionar');
Route::get('/categorias/excluir/{id}', 'CategoriaController@excluir');
Route::get('/categorias/editar/{id}', 'CategoriaController@form_editar');
Route::post('/categorias/editar', 'CategoriaController@editar');
