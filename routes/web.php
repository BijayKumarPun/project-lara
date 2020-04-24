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
//Route for home as well as root
Route::get('/', 'NavigationController@home');
Route::get('/home','NavigationController@home');

//Route for blog
Route::get('/blog','NavigationController@blog');

//Route for about
Route::get('/about','NavigationController@about');


