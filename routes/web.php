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

Route::get('/', 'IndexController@index')->name('home');
Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');
Route::get('/blog', 'BlogController@list')->name('blogList');
Route::get('/blog/{alias}', 'BlogController@single')->name('blogSingle');
Route::get('/{page}', 'PageController@index')->name('pages');
Route::get('/features/{alias}', 'FeatureController@index')->name('features');
Route::post('/comment/add', 'CommentController@addComment')->name('addComment');
