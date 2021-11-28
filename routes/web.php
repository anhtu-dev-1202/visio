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

Route::get('/','HomeController@home')->name('home');

Route::fallback(function () {
    return Redirect::route('home');
});

//Route::post('/', 'HomeController@addData');

//Product
Route::get('/tat-ca-san-pham', 'ProductController@products')->name('products');
Route::get('/san-pham/{slug}.html', 'ProductController@product')->name('product');
Route::get('/san-pham/chi-tiet/{slug}.html', 'ProductController@detailProduct')->name('detailP');
Route::get('/san-pham/tim-kiem', 'ProductController@search')->name('search');

//News
Route::get('/tin-tuc', 'NewsController@news')->name('news');
Route::get('/tin-tuc/chi-tiet/{slug}.html', 'NewsController@detailNews')->name('detailN');

//Service
Route::get('/dich-vu', 'ServiceController@service')->name('service');

//Contact
Route::get('/lien-he', 'ContactController@contact')->name('contact');

//Video
Route::get('/video', 'VideoController@video')->name('video');


