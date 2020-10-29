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

Route::get('/profile', 'App\Http\Controllers\ProfileController@index');
Route::resource('article', 'App\Http\Controllers\ArticleController');

// CRUD
// Route::get('/article', 'App\Http\Controllers\ArticleController@index');
// Route::get('/article/create', 'App\Http\Controllers\ArticleController@create');
// Route::get('/article/{slug}', 'App\Http\Controllers\ArticleController@show');
// Route::post('/article', 'App\Http\Controllers\ArticleController@store');
// Route::get('/article/{id}/edit', 'App\Http\Controllers\ArticleController@edit');
// Route::put('/article/{id}', 'App\Http\Controllers\ArticleController@update');
// Route::delete('/article/{id}', 'App\Http\Controllers\ArticleController@destroy');