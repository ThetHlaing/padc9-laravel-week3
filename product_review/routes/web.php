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



Route::name('product_review.')->prefix('product_review')->group(function () {
    Route::get('/all', 'ProductReviewController@index')->name('home');

    Route::get('/create', 'ProductReviewController@create')->name('create');
    Route::post('/store', 'ProductReviewController@store')->name('store');

    Route::get('/{review}/edit', 'ProductReviewController@edit')->name('edit');
    Route::post('/{review}/update', 'ProductReviewController@update')->name('update');

    Route::post('/{review}/upvote', 'ProductReviewController@upvote')->name('upvote');
    Route::post('/{review}/downvote', 'ProductReviewController@downvote')->name('downvote');
    Route::get('/{review}', 'ProductReviewController@show')->name('show');
});
