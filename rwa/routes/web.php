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

Route::get('/admin', 'AdminController@index')->middleware('AdminMiddleware')->name('admin.index');

Route::get('/admin/users', 'AdminController@users')->middleware('AdminMiddleware')->name('admin.users');

Route::post('/admin/users/update/{userId}', 'AdminController@userUpdate')->middleware('AdminMiddleware')->name('admin.user-update');
