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
//llama al controlador y a su vez a su funcion llamada index
Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::get('saludo', function () {
    return '<h1>saludos</h1>';
});

Route::get('about', function () {
    return view('pages.about');
});
//callback con el usuario
Route::get('/user/{id}/{name}', function ($id,$name) {
    return 'este es el usario '.$name. " con un id de ".$id;
});
Route::resource('posts','PostoController');
