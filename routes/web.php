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


Route::get('/', 'SiteController@index');
Route::get('/about', 'SiteController@about');
Route::get('/services', 'SiteController@services');
Route::get('/pricing', 'SiteController@pricing');
Route::get('/cars', 'SiteController@cars');
Route::get('/blog', 'SiteController@blog');
Route::match(['get', 'post'], '/contact', 'SiteController@contact');
Route::get('/carSingle', 'SiteController@carSingle');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');



Route::any('{error}', 'SiteController@error');


