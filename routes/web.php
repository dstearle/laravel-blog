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

## Basic Examples ##

    // For: http://laravel-blog.me/hello
    // Route::get('/hello', function () {
    //     return '<h1>Hello World!</h1>';
    // });

    // For: http://laravel-blog.me/users/dallas
    // Route::get('/users/{id}', function ($id) {
    //     return 'This is user ' . $id;
    // });

    // For: http://laravel-blog.me/users/2/dallas
    // Route::get('/users/{id}/{name}', function ($id, $name) {
    //     return 'This is user ' . $name . ' with an ID of ' . $id;
    // });

# End Of Basic Examples

// For: http://laravel-blog.me/about
Route::get('/about', function () {
    return view('pages.about');
});