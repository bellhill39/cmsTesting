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

Route::get('/login/','PostController@login' );




Route::get('/dashboard/','PostController@index');



Route::get('/new_budget', 'PostController@add_new_budget');


Route::get('/unitinfo', function () {
    return "this is unit information page";
});

Route::get('/logout', function () {
    return "this is logout page";
});

Route::resource('post','PostController');

