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

Route::get('/', 'FrontController@index')->name('/');


Route::group(['prefix'=>'admin', 'middleware' => 'auth'], function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/home', 'AdminController@index')->name('admin-home');

    Route::get('/create-category','AdminController@addCategory')->name('admin-create-category');
    Route::get('/categories','AdminController@categories')->name('admin-categories');
    Route::post('/categories','AdminController@categoriesPost')->name('admin-categories');
    Route::get('/edit-category/{id}','AdminController@editCategory')->name('admin-edit-categories');
    Route::post('/edit-category','AdminController@editCategoryPost')->name('admin-edit-categories-post');
    Route::get('/delete-category/{id}','AdminController@deleteCategory')->name('admin-delete-categories');

    Route::get('/create-application','AdminController@addApplication')->name('admin-create-application');
    Route::get('/application','AdminController@application')->name('admin-application');
    Route::post('/application','AdminController@applicationPost')->name('admin-application');
    Route::get('/edit-application/{id}','AdminController@editApplication')->name('admin-edit-application');
    Route::post('/edit-application','AdminController@editApplicationPost')->name('admin-edit-application-post');
    Route::get('/delete-application/{id}','AdminController@deleteApplication')->name('admin-delete-application');

    
    

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
