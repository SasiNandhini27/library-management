<?php

use Illuminate\Support\Facades\Route;

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

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/books', 'BookController');

Route::get('/subscribe', 'HomeController@subscribe')->name('subscribe');
