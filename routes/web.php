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

Route::get('/', 'LoginController@index')->name("/");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login', 'LoginController@Login');
// Route::get('/logout', 'LoginController@Logout');
Route::post('/register_coach', 'LoginController@Register_Coach');
Route::post('/register_coachee', 'LoginController@Register_Coachee');

Route::get('/profile', 'UserController@Profile');
Route::get('/coach', 'UserController@Coach');
Route::get('/coachee', 'UserController@Coachee');

/* -------- coach Route ----------*/

Route::get('/program', 'ProgramController@index');
Route::get('/program/add/{id}', 'ProgramController@add');
Route::get('/program/add', 'ProgramController@add');
Route::post('/program/edit', 'ProgramController@edit');
Route::post('/program/new', 'ProgramController@new');
Route::post('/program/delete', 'ProgramController@delete');

Route::get('/payment', 'PaymentController@index');
Route::get('/payment/add/{id}', 'PaymentController@add');
Route::get('/payment/add', 'PaymentController@add');
Route::post('/payment/edit', 'PaymentController@edit');
Route::post('/payment/new', 'PaymentController@new');
Route::post('/payment/delete', 'PaymentController@delete');