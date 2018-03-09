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

Route::get('/portal' , function (){
    return view('users/user');
});

Route::get('/insert','Users\UsersController@InsertUserInput');
Route::get('/list','Users\UsersController@list');
Route::post('/insert', 'Users\UsersController@InsertUserInput');
