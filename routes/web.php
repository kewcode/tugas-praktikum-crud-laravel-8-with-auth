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


Route::post('/auth/register', 'AuthController@register');
Route::post('/auth/login', 'AuthController@login');
Route::get('/auth/logout', 'AuthController@logout');


Route::get('/login', function () {
    return view("login");
})->name('login');

Route::get('/register', function () {
    return view("register");
})->name('register');


Route::middleware("auth")->group(function(){

    Route::get('/', 'JadwalController@index');
    Route::get('/jadwal/create', 'JadwalController@create');
    Route::post('/jadwal/create', 'JadwalController@createPost');
    Route::get('/jadwal/update/{id}', 'JadwalController@update');
    Route::post('/jadwal/update/{id}', 'JadwalController@updatePost');

    Route::get('/jadwal/delete/{id}', 'JadwalController@delete');

});

