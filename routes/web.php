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
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('blog', function () {
    return view('blog');
})->name('blog');


Route::get('car', function () {
    return view('car');
})->name('car');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('details', function () {
    return view('details');
})->name('details');

Route::get('system', function () {
    return view('system');
})->name('system');

Route::get('login', function () {
    return view('login');
})->name('login');

Route::post('/checklogin','LoginController@checklogin');
Route::get('/successlogin','LoginController@successlogin');
Route::get('logout','LoginController@logout');

Route::get('/add-to-cart/{id}', [
    'uses' => 'PriceController@getAddToCart',
    'as' => 'Price.addToCart'
]);

Route::get('/reduce/{id}', [
    'uses' => 'PriceController@getReduceByOne',
    'as' => 'Price.reduceByOne'
]);

Route::get('/remove/{id}', [
    'uses' => 'PriceController@getRemoveItem',
    'as' => 'Price.remove'
]);

Route::get('/shopping-cart', [
    'uses' => 'PriceController@getCart',
    'as' => 'Price.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'PriceController@getCheckout',
    'as' => 'checkout'
]);

Route::post('/checkout', [
    'uses' => 'PriceController@postCheckout',
    'as' => 'checkout'
]);



Route::post('/contact','contactform@insert');

Route::resource('pcs', 'PcController');

Route::resource('/','ShowpcController');

Route::get('view/{id}','ShowpcController@details')->name('view');

Route::get('/editimage/{id}','PcController@edit');

Route::put('/updateimage/{id}','PcController@update');

Route::get('pricing','PriceController@index')->name('pricing');

Route::get('car','PriceController@choosepc')->name('car');











