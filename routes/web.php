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

Route::get('/', 'PageController@index')->name('pages.index');
Route::get('/issues', 'PageController@about')->name('pages.issues');
Route::get('/about', 'PageController@about')->name('pages.about');
Route::get('/contact', 'PageController@about')->name('pages.contact');
