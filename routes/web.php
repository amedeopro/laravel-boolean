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

Route::get('/', 'HomeController@index')->name('home');
Route::get('privacy', 'StaticPage@privacy')->name('privacy');
Route::get('lavora-con-noi', 'StaticPage@lavoraConNoi')->name('lavora-con-noi');
Route::get('studenti', 'StudentController@index')->name('studenti');
Route::get('studenti/{slug}', 'StudentController@show')->name('studenti.show');
