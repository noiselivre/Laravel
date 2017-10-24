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

Route::group(["prefix" => "alunos"], function () {
    Route::get("/", "AlunosController@index");
    Route::get("/novo", "AlunosController@novoView");    
    Route::get("/{id}/editar", "AlunosController@editarView");
    Route::get("/{id}/excluir", "AlunosController@excluirView");
    Route::get("/{id}/destroy", "AlunosController@destroy");
    Route::post("/store", "AlunosController@store");
    Route::post("/update", "AlunosController@update");
});
