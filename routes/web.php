<?php

use Illuminate\Support\Facades\Route;

// Frontend Route
Route::get('/', 'Frontend\HomeController@index');
Route::get('/postlogin', 'Frontend\HomeController@postLogin');
