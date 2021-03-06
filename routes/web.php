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

Route::get('/my_cabinet','HomeController@index');

Route::match(['get','post'],'/add-product','HomeController@addProduct');
Route::match(['get','post'],'/edit-profil','HomeController@editProfil');
Route::match(['get','post'],'/change-password','HomeController@changePassword');
Route::post('/deleteProduct', 'HomeController@deleteProduct')->name('deleteProduct');
Route::match(['get','post'], '/edit-product-info', 'HomeController@editProductInfo');
Route::match(['get','post'], '/add-images', 'HomeController@addNewImages');
Route::match(['get','post'], '/delete-images', 'HomeController@deleteImages');




Route::any('{error}', 'SiteController@error');
