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
    return view('welcome');det;
});

Route::get('/test', function () {
    echo date('Y-m-d H:i:s');
});

Route::get('/hello','TestController@hello');
Route::get('/sqli','TestController@sqli');