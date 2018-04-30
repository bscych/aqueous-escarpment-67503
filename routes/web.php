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

Route::resource('/courseCategory', 'CourseCategoryController');

Route::resource('/paymentCategory', 'PaymentCategoryController');

Route::resource('/school', 'SchoolController');

Route::resource('/course', 'CourseController');

Route::resource('/classRoom', 'ClassRoomController');

Route::resource('/student', 'StudentController');

Route::resource('/teacher', 'TeacherController');

Route::resource('/user', 'UserController');

Route::resource('/account', 'AccountController');

// Route::get('/account/{student_id}', 'AccountController@addDetails');