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


Route::get('/home', function() {
    return view('home');
});

Route::get('/bus', function() {
    return view('bus');
});

Route::get('/bus-book', function() {
    return view('bus-book');
});

Route::get('/admin', function() {
    return view('admin-dashboard');
});

Route::get('/', function() {
    return view('auth.login');
});

Route::get('/signup', function() {
    return view('auth.signup');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
