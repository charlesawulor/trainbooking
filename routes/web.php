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
    return view('home');
});

//Route::resource('home','StationController');
Route::get('/result', 'StationController@search')->name('result'); 
Route::get('/booking-cart', 'StationController@getCart')->name('booking-cart'); 
Route::resource('singlepage','StationController');

Route::get('/add-to-cart/{id}',[
    'uses' => 'StationController@getAddToCart',
    'as' => 'singlepage.addToCart'
    
    ]);



    

    Route::get('/checkout', 'StationController@getCheckout')->name('checkout'); 




