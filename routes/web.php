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

Route::get('/', 'HomeController@index');

Route::name('validator.')->group(function () {
    Route::get('/validator', 'Validator\DashboardController@index')->name('dashboard');
    Route::resource('/validator/contents', 'Validator\ContentController');
});

Route::name('admin.')->group(function() {
    Route::get('/backoffice', 'Admin\DashboardController@index')->name('dashboard');
    Route::resource('/backoffice/medias', 'Admin\MediaController');
    Route::resource('/backoffice/contents', 'Admin\ContentController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/medias', 'MediaController@index')->name('medias');
Route::get('/contents', 'ContentController@index')->name('contents');
