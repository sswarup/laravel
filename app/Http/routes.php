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

Route::get('/', 'WelcomeController@index');

Route::get('/signup', 'UserController@signup');

Route::post('/signup','UserController@register');

Route::get('/login', 'UserController@login');

Route::post('/login','UserController@getIn');

Route::get('/logout', 'UserController@logout');

Route::get('/contact', 'WelcomeController@contact');

Route::get('/about', 'WelcomeController@about');

Route::get('/articles', 'ArticlesController@index');

Route::get('/articles/create', 'ArticlesController@create');

Route::get('/articles/{id}', 'ArticlesController@show');

Route::post('/articles', 'ArticlesController@add');

Route::get('/articles/edit/{id}', 'ArticlesController@edit');

Route::get('/articles/remove/{id}', 'ArticlesController@remove');

Route::post('/articles/edit/{id}', 'ArticlesController@update');


