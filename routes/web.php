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

Route::get('/', 'MainController@index');
Route::post('/', 'MainController@index');

Route::get('/signup', 'MainController@signup');
Route::post('/signup', 'MainController@signup');

Route::get('/signin', 'MainController@signin');
Route::post('/signin', 'MainController@signin');

Route::get('/about', 'MainController@abou');
Route::post('/about', 'MainController@about');

Route::get('/completed/{id?}', 'MainController@completed');

Route::get('/cancel/{id?}', 'MainController@cancel');

Route::get('/edit/{id?}', 'MainController@edit');
Route::post('/edit/{id?}', 'MainController@edit');

Route::get('/logout', function(){
	Auth::logout();
	return redirect('/')->with('success', 'Logged out successfully!');
});
