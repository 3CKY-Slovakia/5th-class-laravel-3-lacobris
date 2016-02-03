<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * HOME
 */
Route::get('/', function () {
    return view('welcome', [
        'articles' => \App\Article::orderBy('created_at', 'desc')->get()
    ]);
});
Route::get('home', function () {
    return view('welcome', [
        'articles' => \App\Article::orderBy('created_at', 'desc')->get()
    ]);
});


/**
 * BLOG
 */
Route::group(['prefix' => 'blog-post'], function () {
    Route::get('/{id}', function () {
        return view('blog-post');
    });
});

/**
 * AUTH
 */
Route::group(['prefix' => 'auth'], function () {
    // Authentication routes...
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@getLogout');

    // Registration routes...
    Route::get('register', 'Auth\AuthController@getRegister');
    Route::post('register', 'Auth\AuthController@postRegister');

    // Password reset link request routes...
    Route::get('/{id}', function(){ return view('auth/password'); });
    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');

    // Password reset routes...
    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');
});

/**
 * ARTICLES
 */
Route::group(['prefix' => 'article'], function () {
    Route::get('/', 'ArticlesController@index');
    Route::get('show/{id}', 'ArticlesController@show');
    Route::get('create', 'ArticlesController@create');
    Route::get('edit/{id}', 'ArticlesController@edit');

    Route::post('store', 'ArticlesController@store');
    Route::post('update/{id}', 'ArticlesController@update');
});

/**
 * CONTACT
 */
Route::get('contact', 'ContactController@showForm');
Route::post('contact', 'ContactController@sendContactInfo');

/**
 * PROFILE
 */
Route::group(['prefix' => 'user'], function () {
    Route::get('/', 'UsersController@index');
    Route::get('show/{id}', 'UsersController@show');
    Route::get('edit/{id}', 'UsersController@edit');

    Route::post('update/{id}', 'UsersController@update');
});