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

// Route::get('helloworld', function () {
//     return '<h1>Hello World</h1>';
// });

Route::get('/izzy', function () {
    return view('izzy');
});

Route::get('/about', function () {
    return '<h1>This is the About page</h1>';
});

Route::get('/hello', 'HelloController@hello');
