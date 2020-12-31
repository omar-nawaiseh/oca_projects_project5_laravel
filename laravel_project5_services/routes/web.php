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
    return view('web.index');
});

Route::get('/admin', function () {
    return view('dashboard.admin');
});

Route::get('categories', function () {
    return view('/dashboard/category');
});
////////////
Route::get('Health_Care', function () {
    return view('/dashboard/user_health_care');
});

Route::get('House_Cleaning', function () {
    return view('/dashboard/user_house_cleaning');
});

Route::get('Childcare', function () {
    return view('/dashboard/user_childcare');
});
///////////////
Route::get('user_profile', function () {
    return view('/web/user_profile');
});

Route::get('service_provider', function () {
    return view('/web/service_provider');
});

Route::resource("/categories", "categoryController");
//Route::resource("/users", "userController");



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
