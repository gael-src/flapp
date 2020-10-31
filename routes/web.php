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

/*
---------------------------------------------------------------------------
TESTS:

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/helloworld', function () {
    return "Hello World";
});

Route::get('/user/{id}', function ($id) {
    return "User Name: $id";
});

Route::get('/user/{name}/{id}', function ($name, $id) {
    return "User Name: $name, ID: $id";
});

---------------------------------------------------------------------------
*/

Route::get('/', 'PagesController@index');

Route::get('/about', function () {
    return view('pages.about');
});



