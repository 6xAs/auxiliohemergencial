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
Route::get('/solicitar-auxilio', 'BrasileiroController@create')->name('solicitar-auxilio')->middleware('auth');
Route::post('/solicitar-auxilio', 'BrasileiroController@store')->name('solicitar-auxilio')->middleware('auth');
Route::get('/home-auxilio', 'BrasileiroController@index')->name('home-auxilio')->middleware('auth');
Route::get('/meus-dados/{id}/auxilio', 'BrasileiroController@show')->name('/meus-dados/{id}/auxilio')->middleware('auth');
Route::get('/meus-dados/{id}/edit', 'BrasileiroController@edit')->name('/meus-dados/{id}/edit')->middleware('auth');
Route::put('/update/{id}', 'BrasileiroController@update')->name('/auxilioupdate')->middleware('auth');
Route::get('/consultar-auxilio', 'BrasileiroController@consultarAuxilio')->name('/consultar-auxilio')->middleware('auth');




