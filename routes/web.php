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

Route::resource('/books', 'App\Http\Controllers\BookController');
Route::resource('/authors', 'App\Http\Controllers\AuthorController');
Route::resource('/publishers', 'App\Http\Controllers\PublisherController');
Route::resource('/genres', 'App\Http\Controllers\GenreController');

//Route::post('/authors', array('App\Http\Controllers\AuthorController', 'store'));
//Route::post('/books', array('App\Http\Controllers\BookController', 'store'));
//Route::post('/publishers', array('App\Http\Controllers\PublisherController', 'store'));
//Route::post('/genres', array('App\Http\Controllers\GenreController', 'store'));