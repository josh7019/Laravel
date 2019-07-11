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
Route::get('/lab','LabController@index');
Route::get('/lab/show/{name}{sss}','LabController@show');
Route::get('/lab/param','LabController@param');

Route::get('/lab/form','LabController@getform');
Route::post('/lab/form/{id}','LabController@postform');
Route::get('/lab/xml','LabController@xml');
Route::get('/lab/json','LabController@json');
Route::get('/lab/memberOnly','LabController@memberOnly');

Route::get('/data/about','DataController@about');
Route::resource('/data','DataController');
