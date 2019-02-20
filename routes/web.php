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

Route::get('/', 'HomeController@index')->name('home');

//Pagine Studenti
Route::get('/studenti', 'StudentController@index')->name('students.index');
Route::get('/studenti/{slug}', 'StudentController@show')->name('students.show');

//Pagine Statiche
Route::get('/privacy-policy', 'StaticPageController@privacyPolicy')->name('static.privacy');
Route::get('/lavora-con-noi', 'StaticPageController@workWithUs')->name('static.work');
