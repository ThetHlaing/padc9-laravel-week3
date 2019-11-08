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



Route::get('/home', 'ProductReviewController@index');

Route::get('/product_review/create', 'ProductReviewController@create');
Route::post('/product_review/store', 'ProductReviewController@store');

Route::get('/product_review/{id}/edit', 'ProductReviewController@edit');
Route::post('/product_review/{id}/update', 'ProductReviewController@update');

Route::post('/product_review/{id}/upvote', 'ProductReviewController@upvote');
Route::post('/product_review/{id}/downvote', 'ProductReviewController@downvote');
Route::get('/product_review/{id}', 'ProductReviewController@show');