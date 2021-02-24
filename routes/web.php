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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/classInfo', 'ClassInfoController@index')->name('classInfo');
Route::get('/classInfo/{user}', 'ClassInfoController@show')->name('classInfo.show');

Route::get('/changeInfo', 'ChangeInfoController@index')->name('changeInfo');
Route::get('/homework', 'HomeworkController@index')->name('homework');
Route::get('/challenge', 'ChallengeController@index')->name('challenge');
