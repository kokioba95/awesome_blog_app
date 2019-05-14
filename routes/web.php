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
Route::post('/post', 'HomeController@post')->name('post');
Route::get('/blog/{id}/delete', 'BlogController@delete');
Route::get('/blog/{id}/edit', 'BlogController@edit');
Route::get('/blog/{id}/update', 'BlogController@update');
Route::get('/users', 'UserController@users');
Route::get('/user/{id}/home', 'UserController@user_home');
Route::get('/user/{id}/edit', 'UserController@user_edit');
Route::get('/user/{id}/update', 'UserController@user_update');
Route::get('/user/{id}/follow', 'UserController@follow');
Route::get('/user/{id}/unfollow', 'UserController@unfollow');
Route::get('/user/{id}/following', 'UserController@following');
Route::get('/user/{id}/follower', 'UserController@follower');
Route::get('/blog/{id}/like', 'BlogController@like');
Route::get('/blog/{id}/deslike', 'BlogController@deslike');
