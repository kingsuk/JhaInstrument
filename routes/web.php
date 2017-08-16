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

Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){

    Route::get('/', function () {
        return view('admin.home');
    })->name('admin-home');

    // Route::get('/register', function () {
    //     return view('admin.register');
    // })->name('admin-register');

    // Route::get('/login', function () {
    //     return view('admin.login');
    // })->name('admin-login');

    // Route::post('/login', 'AdminController@login')->name('admin-login');


});




Route::get('/test','AdminController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
