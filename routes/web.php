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

Route::get('Plat', 'PlatController@index')->name('plat');
Route::get('/add', "PlatController@create")->name('add');
Route::post("/saveLivre", "PlatController@store")->name("savePlat");
Route::post('/update/{id}', "PlatController@update")->name("update");
Route::get("/delete/{id}", "PlatController@destroy")->name("delete");