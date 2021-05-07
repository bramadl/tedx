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


Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/partners', 'HomeController@partners');
Route::get('/faqs', 'HomeController@faqs');
Route::get('/core/{name}/profile', 'HomeController@coreProfile');

Route::group(['middleware' => ['verified']], function () {
  Route::get('/ticket/presale-{number}', 'HomeController@ticket')->where(['number' => '[0-9]+']);
});

Route::group(['prefix' => '/member'], function () {
  Route::get('/confirm', 'MemberController@confirmEmail');
});

Route::group(['middleware' => 'guest'], function () {
  Route::get('/member/verify/{token}', 'AuthController@verifyUser');
  Route::get('/member/confirm', 'AuthController@confirmEmail');

  Route::get('/register', 'AuthController@registerAudience');
  Route::get('/register/core', 'AuthController@registerCore');
  Route::get('/register/volunteer', 'AuthController@registerVolunteer');
  Route::get('/login', 'AuthController@login')->name('login');
  Route::post('/register', 'AuthController@registerAudiencePost');
});