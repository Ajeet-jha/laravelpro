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

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category', 'CategoryController@index');
Route::any('/add_category', 'CategoryController@create')->name('add_category'); 
Route::get('/edit_category/{id}', 'CategoryController@edit')->name('edit_category');
Route::get('/delete_category/{id}', 'CategoryController@destroy')->name('delete_category');

