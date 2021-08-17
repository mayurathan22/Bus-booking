<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\TripController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/user/bus', function() {
    return view('user.bus');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/admin/bus', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin-home');

// Route::get('/user/bus', [App\Http\Controllers\HomeController::class, 'userDashboard'])->name('user-home');


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

// Route::get('/admin/bus', function() {
//     return view('admin.bus');
// })->name('admin-bus');

Route::post('/admin/bus', [BusController::class,'store'])->name('admin-bus');
Route::post('/admin/trip', [TripController::class,'store'])->name('admin-bustrip');
// Route::post('/admin/trip', [TripController::class,'create'])->name('admin-bustripCreate');


// Route::get('/admin/trip', [TripController::class,'getBuses'])->name('admin-getTripbus');
// Route::get('/admin/trip', [BusController::class,'index']);
// Route::get('/admin/trip', [BusController::class,'create']);

// Route::get('/admin/test', 'App\Http\Controllers\BusController@index');


// Route::post('/user/bus', [BusController::class,'store'])->name('user-bus');

// Route::namespace('App\Http\Controllers')->group(function () { Route::resource('admintrip', 'TripController');});


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



