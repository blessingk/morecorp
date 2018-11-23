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
Route::get('/', 'HomeController@login')->name('login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('create/product', 'ProductController@create')->name('create.product');
Route::post('store/product', 'ProductController@store')->name('store.product');
Route::get('/products', 'ProductController@index')->name('products');
Route::get('/product/{id}', 'ProductController@delete')->name('product.delete');
Route::post('update/product/{id}', 'ProductController@update')->name('update.product');
Route::get('edit/product/{id}', 'ProductController@edit')->name('product.edit');
Route::get('product/info/{id}', 'ProductController@product_info')->name('product.info');
Route::get('product/bid/{id}', 'ProductController@product_bid')->name('product.bid');
Route::post('product/user/bid/{id}', 'ProductController@product_biding')->name('product.user.bid');
