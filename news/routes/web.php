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

// Route::get('/','homeController@index');
// Route::get('/home','homeController@index');
// Route::get('/member/login','memberController@login');
// Route::post('/member/login','memberController@postlogin');
Route::get('/','newsController@index');
Route::post('/news/confirmDelete/{id}','newsController@confirmDelete');
Route::resource('/news','newsController');