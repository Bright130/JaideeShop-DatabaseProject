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
Route::get('/logout','HomeController@logout')->name('logout');

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
  Route::get('/shop/{id?}','ShopController@index')->where(['id'=>'[0-9]+']);
//  Route::get('/','BuyerController@index')->name('admin.dashboard');

});
Route::get('/imageupload','ImageUploaderController@upload') ;
Route::post('/imageupload','ImageUploaderController@uploadpost')->name('uploadimage.submit') ;


Route::get('/slipform','SlipController@getSlipForm');
Route::post('/slipform','SlipController@postSlipForm');

Route::get('/addproduct','ProductController@getNewProduct')->name('product.add');
Route::post('/addproduct','ProductController@postNewProduct');

Route::get('/shopcreate','ShopController@getNewShop')->name('shop.create');
Route::post('/shopcreate','ShopController@postNewShop');
Route::get('/table','TempleteTableController@getTable');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/elec', 'HomeController@showElect')->name('show.elec');
Route::get('/profile', 'ProfileController@profile')->name('profile.view');
Route::get('/mainsignup', 'SignupController@index')->name('mainsignup');
Route::get('/checkout', 'HomeController@checkout')->name('checkout');
