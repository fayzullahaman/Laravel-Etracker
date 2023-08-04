<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/admin', function () {
    return view('admin.dashboard');
});


// Route::get('/', function () {
//     return view('user.layouts.app');
// });

// Route::get('/', function () {
//     return view('user.pages.home');
// });

// Route::get('/about', function () {
//     return view('user.pages.about');
// });

// Route::get('/products', function () {
//     return view('user.pages.product');
// });

// Route::get('/store', function () {
//     return view('user.pages.store');
// });

// Route::get('/about', function () {
//     return view('user.pages.about');
// });

// Route::get('/about', function () {
//     return view('user.pages.about');
// });

// Route::get('/about', function () {
//     return view('user.pages.about');
// });
