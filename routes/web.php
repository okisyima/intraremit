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

Route::get('/user','UserController@index');
Route::get('/jsonMessage','UserController@jsonMessage');
Route::get('/dataBalance','UserController@dataBalance');
Route::get('/dataInquiry','UserController@dataInquiry');
Route::get('/dataTransactionTwo','UserController@dataTransactionTwo');
Route::get('/dataCheck','UserController@dataCheck');
Route::get('/balance','UserController@balance');
Route::get('/history','UserController@history');
Route::get('/login','UserController@login');
Route::get('/login2','UserController@login2');
Route::get('/forbidden','UserController@forbidden');