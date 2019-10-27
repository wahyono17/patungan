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
Auth::routes();

Route::get('/', 'WelcomeController@firstpage');
Route::get('/index', 'WelcomeController@index');
Route::get('/search', 'WelcomeController@search');
Route::get('/search/{cari}', 'WelcomeController@searchAjax');

Route::get('/transactionTemp/show/{id}','TransactionTempController@show');
Route::post('/transactionTemp/store','TransactionTempController@store');

Route::get('/home', 'HomeController@index');

Route::get('/post/{user}', 'PostsController@index');
Route::get('/p/create', 'PostsController@create');
Route::post('/p', 'PostsController@store');
Route::get('/p/{id}', 'PostsController@show');
Route::patch('/p/{user}', 'PostsController@update');

Route::get('/home', 'HomeController@index');
Route::get('/profile/{user}', 'ProfilesController@index');
Route::get('/profile/{user}/edit', 'ProfilesController@edit');
Route::patch('/profile/{user}', 'ProfilesController@update');

Route::get('/coba', function(){
    return view('coba');
});
Route::get('/coba2', function(){
    return view('coba2');
});
Route::get('/coba3', function(){
    return view('coba3');
});

Route::post('coba/store','CobaController@store');