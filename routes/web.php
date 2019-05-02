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
Route::get('/Users', 'UserController@index')->name('users');
Route::post('/blog/store', 'BlogController@store')->name('blog.store');
Route::get('/blog/delete', 'UserController@delete')->name('blog.delete');
Route::get('/blog/{id}/edit', 'BlogController@edit')->name('edit');
Route::post('/blog/{id}/update', 'BlogController@update')->name('blog.update');
Route::post('/client', 'BlogController@client')->name('client');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
