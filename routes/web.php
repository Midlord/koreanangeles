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


Auth::routes();
Route::get('logout','LoginController@logout');
Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

    Route::get('profiles','Usercontroller@index')->name('profiles.index');
    Route::resource('profile','Usercontroller')->except('index');

});

Route::group(['prefix' => 'admin', 'middleware' => ['admin'], 'as' => 'admin.' ], function () {
    Route::get('/dashboard','Admin\DashboardController@index')->name('dashboard');
    Route::put('restaurant-restore/{id}','Admin\RestaurantController@rest')->name('restaurants.restore');
    Route::get('restaurants/archive','Admin\RestaurantController@archive')->name('restaurants.archive');
    Route::resource('restaurants','Admin\RestaurantController');
    Route::get('/users/delete/{id}','Admin\UserController@delete')->name('users.delete');
    Route::resource('users','Admin\UserController');
    Route::resource('employees','Admin\EmployeeController');
    Route::resource('logs','Admin\LogController');
});