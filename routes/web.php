<?php

Auth::routes();

Route::get('/', 'WelcomeController@index');
Route::get('/universes', 'WelcomeController@universes');
Route::get('/designers', 'WelcomeController@designers');
Route::get('/allies', 'WelcomeController@allies');
Route::get('/creators', 'WelcomeController@creators');
Route::get('/login', 'WelcomeController@login')->name('login');
Route::get('/details', 'WelcomeController@details');
Route::get('/contact', 'WelcomeController@contact');
Route::get('/profile', 'WelcomeController@profile')->middleware('auth');
Route::get('/cart', 'WelcomeController@cart');
Route::post('update-profile', 'WelcomeController@updateProfile');
Route::get('/home', 'HomeController@index')->name('home');

Route::post('auth/register', 'AuthController@register');
Route::post('auth/login', 'AuthController@login');

