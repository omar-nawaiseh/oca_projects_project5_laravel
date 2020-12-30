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

Route::get('/hi', function () {
    return view('dashboard.admin');
});

Route::get('/haaa', function () {
    return view('web.index');
});
Route::get('categories', function () {
    return view('/dashboard/category');
});

Route::resource("/categories", "categoryController");
//Route::resource("/users", "userController");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
