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
    return view('index');
});
// for redirect to facebook auth.
Route::any('auth/login/facebook', 'SocialLoginController@facebookAuthRedirect');
// facebook call back after login success.
Route::any('auth/login/facebook/index', 'SocialLoginController@facebookSuccess');
Route::any('newsindex', 'news\NewsController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/chack', 'Auth\ForgotPasswordController@repassword');
