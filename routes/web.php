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
    return view('home', ['title' => 'Home']);
})->name('home');

Route::resource('checkin', 'CheckinController');

Route::get('/measure', 'Development\\MeasureController@index')->name('measure.index');
Route::get('/measure/{measure}', 'Development\\MeasureController@show')->name('measure.show');

Route::get('/serving-styles', 'Development\\ServingStyleController@index')->name('serving_style.index');
Route::get('/serving-styles/{serving_style}', 'Development\\ServingStyleController@show')->name('serving_style.show');

Auth::routes();
