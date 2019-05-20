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
Auth::routes();

Route::get('/', 'WelcomeController@index');
Route::get('/universes', 'WelcomeController@universes');
Route::get('/designers', 'WelcomeController@designers');
Route::get('/login', 'WelcomeController@login');
Route::get('/details', 'WelcomeController@details');
Route::get('/profile', 'WelcomeController@profile');
Route::get('/home', 'HomeController@index')->name('home');

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');

