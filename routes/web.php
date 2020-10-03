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

Route::get('/', "HomeController@index");
Route::get('/categorias', function () {
    return view('pages.categories');
});
Route::get('/pesquisar', function () {
    return view('pages.search');
});
Route::get('/post/{id}', "PostController@show");
