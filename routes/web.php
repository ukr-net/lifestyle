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
Route::get('/features/{alias}', 'FeatureController@index')->name('features');

Route::post('/comment/add', 'CommentController@addComment')->name('addComment');
Route::post('/form/send-email', 'FormController@contactForm')->name('contactForm');

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/password/reset', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');

Route::post('/login', 'Auth\LoginController@login');
Route::post('/password/email', 'FormController@contactForm')->name('password.email');

Route::namespace('Admin')->prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', 'IndexController@index')->name('admin.home');

    Route::resource('/features', 'FeatureController')->names([
        'index' => 'admin.features.index',
        'edit' => 'admin.features.edit',
        'create' => 'admin.features.create',
        'store' => 'admin.features.store',
        'destroy' => 'admin.features.destroy',
        'update' => 'admin.features.update'
    ])->except(['show']);
    
    Route::resource('/menu', 'MenuController')->names([
        'index' => 'admin.menu.index',
        'edit' => 'admin.menu.edit',
        'create' => 'admin.menu.create',
        'store' => 'admin.menu.store',
        'destroy' => 'admin.menu.destroy',
        'update' => 'admin.menu.update',
        'show' => 'admin.menu.show'
    ]);

    Route::resource('/permissions', 'PermissionController')->names([
        'index' => 'admin.permissions.index',
        'store' => 'admin.permissions.store'
    ])->only(['index', 'store']);
});

Route::get('/{page}', 'PageController@index')->name('pages');