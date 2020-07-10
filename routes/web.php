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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('pertanyaan', 'PertanyaanController@index')->name('pertanyaan.index');
Route::get('pertanyaan/index/{id}', 'PertanyaanController@show')->name('pertanyaan.show');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('tag', 'TagController')->except(['show', 'create']);
    Route::resource('pertanyaan', 'PertanyaanController')->except(['index', 'show']);
});