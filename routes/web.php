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
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
Route::match(['GET','POST'],'/post-ride', 'RideController@postRide')->middleware('auth')->name('post-ride');
Route::match(['GET','POST'],'/view-my-ride', 'RideController@viewMyRides')->middleware('auth')->name('view-my-ride');
Auth::routes();

Route::get('personbookride','HomeController@personBookRide')->name('personbookride');
Route::get('about-us','PagesController@ShowAboutUs')->name('about-us');

Route::get('/home', 'HomeController@index')->name('home');
