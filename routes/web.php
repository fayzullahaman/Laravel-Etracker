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

Route::name('/')->group(function () {
    Route::get('/', function () {
        return view('user.pages.home');
    });

    Route::get('about', function () {
        return view('user.pages.about');
    });
    
    Route::get('products', function () {
        return view('user.pages.product');
    });
    
    Route::get('store', function () {
        return view('user.pages.store');
    });
    
    Route::get('contact', function () {
        return view('user.pages.contact');
    });
    
    Route::get('features', function () {
        return view('user.pages.features');
    });
    
    Route::get('blog-article', function () {
        return view('user.pages.blog_article');
    });
    
    Route::get('testimonial', function () {
        return view('user.pages.testimonial');
    });
    
    Route::get('404', function () {
        return view('user.pages.404_page');
    });
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
