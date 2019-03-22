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

Route::get('/', 'IndexController@index');
Route::post('/', 'IndexController@post')->name('index.post');

Route::get('/test', function () {
    return view('test');
});

Route::get('/works', function () {
    return view('works');
});

Route::get('/edit/{id}', 'IndexController@edit')->name('index.edit');
Route::post('/update/{id}', 'IndexController@update')->name('index.update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hello2', function () {
    return view('hello2/index');
});
Route::get('/hello2', function () {
    return view('hello2/index');
});
Route::get('/hello2', 'Hello2Controller@index')->middleware('auth');
