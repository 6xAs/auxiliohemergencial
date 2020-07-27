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


// Routes Authentication
Auth::routes();

############ Routes Brasileiro ############
Route::get('/solicitar-auxilio', 'BrasileiroController@create')->name('solicitar-auxilio');
Route::post('/solicitar-auxilio', 'BrasileiroController@store')->name('solicitar-auxilio');
Route::get('/home-auxilio', 'BrasileiroController@index')->name('home-auxilio');
Route::get('/meus-dados/{id}/auxilio', 'BrasileiroController@show')->name('/meus-dados/{id}/auxilio');
Route::get('/meus-dados/{id}/edit', 'BrasileiroController@edit')->name('/meus-dados/{id}/edit');
Route::put('/update/{id}', 'BrasileiroController@update')->name('/auxilioupdate');
Route::get('/consultar-auxilio', 'BrasileiroController@consultarAuxilio')->name('/consultar-auxilio');



Route::get('/home', 'HomeController@index')->name('home');
