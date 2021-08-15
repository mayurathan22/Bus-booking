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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Login, Register
Route::get('/', function() {
    return view('auth.login');
});

// Route::get('/register', function() {
//     // return view('auth.register');
// });

// Admin Routes
Route::get('/admin/trip', function() {
    return view('admin.trip');
})->name('admin-trip');

Route::get('/admin/bus', function() {
    return view('admin.bus');
})->name('admin-bus');

Route::get('/admin/route', function() {
    return view('admin.route');
})->name('admin-route');


// user Routes
Route::get('/user/dashboard', function() {
    return view('user.dashboard');
})->name('user-dashboard');

Route::get('/user/bus', function() {
    return view('user.bus');
})->name('user-bus');

Route::get('/user/bus/book', function() {
    return view('user.bus-book');
})->name('user-bus-book');



