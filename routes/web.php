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

// Plat

Route::get('Plat', 'PlatController@index')->name('plat');
Route::get('/add', "PlatController@create")->name('add');
Route::post("/savePlat", "PlatController@store")->name("savePlat");
Route::post('/update/{id}', "PlatController@update")->name("update");
Route::get("/delete/{id}", "PlatController@destroy")->name("delete");

// Saveur 

Route::get('/addSaveur', "SaveurController@create")->name('addSaveur');
Route::post("/saveSaveur", "SaveurController@store")->name("saveSaveur");
Route::get("/show/{id}", "SaveurController@show")->name("show");

// Commande 

Route::get('/commande', 'CommandeController@index')->name('commande');
Route::post("/saveCommande/{plat}", "CommandeController@store")->name("saveCommande");
Route::get("/delete/{id}", "CommandeController@destroy")->name("delete");