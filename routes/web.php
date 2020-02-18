<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::redirect('/','/EM');
Route::get('/EM','EmController@home')->name('index');
Route::get('/about','EmController@about')->name('about');
Route::get('/service','EmController@service')->name('service');
Route::get('/contact','EmController@contact')->name('contact');
Route::get('/emshop','EmController@emShop')->name('emshop');
Route::get('/news','EmController@news')->name('news');
Route::get('/add-to-cart/{id}','API\ProductController@addToCart');
Route::patch('/update-cart','EmController@updateCart');
Route::delete('/remove-from-cart','EmController@remove');
Route::get('/cart','API\ProductController@showCart');
Route::get('/all-cart','EmController@cart');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

