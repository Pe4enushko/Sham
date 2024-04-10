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


Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/user/{login}', 'UserController@show')->name('users.show');
Route::get('/user/{login}', 'UserController@edit')->name('users.edit');

Route::post('/user', 'UserController@edit')->name('user.update'); // В контроллере нет ничего и это для users.edit (я за put request)

Route::get('/registration', 'RegistrationController@create')->name('reg.create');
Route::post('/registration', 'RegistrationController@store')->name('reg.store');

Route::get('/login', 'LoginController@create')->name('login.create');
Route::post('/login', 'LoginController@store')->name('login.store');

Route::get('/gender', 'GenderController@index')->name('gender.index');
