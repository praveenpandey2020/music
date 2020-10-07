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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/course', 'CourseController@index')->name('courses.index');
Route::get('/course/create', 'CourseController@create')->name('courses.create');
Route::POST('/course/store', 'CourseController@store')->name('courses.store');
Route::get('/course/{id}/edit', 'CourseController@edit')->name('course.edit');
Route::post('/course/update/{id}', 'CourseController@update')->name('course.update');
Route::get('/course/delete/{id}', 'CourseController@destroy')->name('course.delete');
