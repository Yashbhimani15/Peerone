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

Route::get('/signin', function () {
    return view('login');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {

	Route::resource('mentees','MenteeController');

});


// MENTEE
Route::prefix('mentee')->group(function(){
	Route::get('login','Auth\MenteeLoginController@showLoginForm')->name('mentee.login-form');
	Route::post('login','Auth\MenteeLoginController@login')->name('mentee.login');
	Route::get('/','MenteeHomeController@index')->name('mentee.dashboard');
	Route::post('logout','Auth\MenteeLoginController@logout')->name('mentee.logout');

	Route::group(['middleware' => ['auth:mentee']], function () {
		Route::resource('mentors', 'MentorController');

	});
});


// MENTOR
Route::prefix('mentor')->group(function(){
	Route::get('login','Auth\MentorLoginController@showLoginForm')->name('mentor.login-form');
	Route::post('login','Auth\MentorLoginController@login')->name('mentor.login');
	Route::get('/','MentorHomeController@index')->name('mentor.dashboard');
	Route::post('logout','Auth\MentorLoginController@logout')->name('mentor.logout');

	Route::group(['middleware' => 'auth:mentor'], function () {

	});
});

// COMMON ROUTES FOR MENTEE AND MENTOR GUARD
Route::group(['middleware' => 'auth:mentor,mentee,web'], function () {
	});

