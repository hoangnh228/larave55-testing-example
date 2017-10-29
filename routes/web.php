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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('links', 'LinksController@index');
Route::get('links/detail/{link}', 'LinksController@show');
Route::get('links/create', 'LinksController@create');
Route::post('links/insert', 'LinksController@insert');
Route::get('links/edit/{link}', 'LinksController@edit');
Route::post('links/update/{link}', 'LinksController@update');
Route::get('links/delete/{link}', 'LinksController@delete');
