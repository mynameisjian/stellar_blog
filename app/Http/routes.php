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

Route::get('/', 'BlogFrontendController@index');

Route::get('/blog-details/{id}', 'BlogFrontendController@details');

// Route::get('/', function () {

//     return view('welcome');

// });

Route::resource('blog', 'BlogController');

Route::auth();

// Route::get('/home', 'HomeController@index');
