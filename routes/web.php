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

Route::get('/','HomeController@index');
Route::get('/logout','HomeController@logout');

//Route::get('/allseller','SellerController@allseller');

Route::prefix('admin')->group(function(){
  Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');

  Route::get('/','BController@index')->name('admin.dashboard');

});

Route::prefix('buyer')->group(function(){
  Route::get('/signup','Auth\BuyerAuthController@signupForm')->name('buyer.signup');
 Route::post('/signup','Auth\BuyerAuthController@signup')->name('buyer.signup.submit');
 Route::get('/login','Auth\BuyerAuthController@loginForm')->name('buyer.login');
Route::post('/login','Auth\BuyerAuthController@login')->name('buyer.login.submit');
  Route::get('/','BuyerController@index')->name('buyer.dashboard');
//  Route::get('/','BuyerController@index')->name('admin.dashboard');

});

Route::prefix('seller')->group(function(){
  Route::get('/signup','Auth\SellerAuthController@signupForm')->name('seller.signup');
 Route::post('/signup','Auth\SellerAuthController@signup')->name('seller.signup.submit');
 Route::get('/login','Auth\SellerAuthController@loginForm')->name('seller.login');
Route::post('/login','Auth\SellerAuthController@login')->name('seller.login.submit');
  Route::get('/','SellerController@index')->name('seller.dashboard');
//  Route::get('/','BuyerController@index')->name('admin.dashboard');

});

Route::get('/slipform','SlipController@getSlipForm');
Route::post('/slipform','SlipController@postSlipForm');

Route::get('/addproduct','ProductController@getNewProduct');
Route::post('/addproduct','ProductController@postNewProduct');

Route::get('/shopcreate','ShopController@getNewShop');
Route::post('/shopcreate','ShopController@postNewShop');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
