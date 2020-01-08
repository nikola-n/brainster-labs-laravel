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
// Auth::routes(['verify'=>true]);
Route::get('/home','CompanyController@index')->name('home');
Route::get('/','AdminController@index')->name('adminHome');
Route::get('/cardhome','CardsController@index')->name('cardHome');
Route::post('/companies','CompanyController@store')->name('companies');
Route::get('/admin','AdminController@create')->name('admin');
Route::get('/cards','AdminController@login')->name('adminLogin');
Route::get('/cards/add','CardsController@create')->name('add');
Route::post('/cards','CardsController@store')->name('store');
Route::get('/cards/edit/{id}','CardsController@edit')->name('edit');
Route::get('/index','CardsController@view')->name('cards');
Route::post('/cards/edit/{id}','CardsController@update')->name('save');
Route::get('/cards/edit/cards/edit/{id}','CardsController@view');
Route::get('/cards/delete/{id}','CardsController@destroy');
Route::get('/cards/edit/cards/edit/{id}','CardsController@destroy');




