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
//Routes for CRUD
//Routes for update user account
Route::get('/', 'MainController@index')->name('home');
Route::get('/create', 'MainController@create')->name('create');
Route::post('/store', 'MainController@store')->name('store');
Route::get('/edit/{id}', 'MainController@edit')->name('edit');
Route::post('/update', 'MainController@update')->name('update');
Route::post('/updateAccount', 'MainController@UpdateUserAccount')->name('updateAccount');
Route::any('/search', 'MainController@search')->name('search');
Route::get('/delete/{id}', 'MainController@delete')->name('delete');
//Route for add to cart
Route::get('/add/{id}', 'MainController@add')->name('add');
//Routes for remove from cart
Route::get('/remove/{id}', 'MainController@remove')->name('remove');
//Routes for account eddit
Route::get('/accountEdit/{id}', 'MainController@accountEdit')->name('accountEdit');
Route::get('/sendmail', 'MainController@sendmail')->name('sendmail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home2');

//Route for redirect google
Route::get ( '/redirect/{service}', 'SocialAuthGoogleController@redirect' );
//Routes for google login callback.
Route::get ( '/callback/{service}', 'SocialAuthGoogleController@callback' );
