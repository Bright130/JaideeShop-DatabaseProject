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

Route::get('/','HomeController@home');

Route::get('/allseller','SellerController@allseller');
Route::get('/sellersignup','SellerController@getSellerSignup');
Route::post('/sellersignup','SellerController@postSellerSignup');

Route::get('/buyer-signup','BuyerController@getbuyer');
Route::post('/buyer-signup','BuyerController@postBuyerSignup');

Route::get('/slipform','SlipController@getSlipForm');
Route::post('/slipform','SlipController@postSlipForm');

Route::get('/addproduct','ProductController@getNewProduct');
Route::post('/addproduct','ProductController@postNewProduct');

Route::get('/shopcreate','ShopController@getNewShop');
Route::post('/shopcreate','ShopController@postNewShop');
