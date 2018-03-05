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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('clients','ClientController');
Route::get('/clients/search','ClientController@search')->name('clients.search');
//Route::resource('products','ProductController');
//Route::resource('notes','NoteController');
//Route::resource('invoice','InvoiceController');