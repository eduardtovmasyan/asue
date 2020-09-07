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

Route::group(['middleware' => ['logouted']], function() {
    Route::get('/','LoginController@showLoginPage');
    Route::post('/sign-in','LoginController@signIn')->name('sign-in');
});

Auth::routes(['login' => false, 'register' => false]);
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/profile', 'ProfileController@showProfilePage')->name('profile');
    Route::get('/academic-info', 'AcademicInfoController@showAcademicInfoPage')->name('academic-info');
});
