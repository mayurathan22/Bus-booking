<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\TicketBookingController;

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
Route::group(['middleware'=>['protectPages']],function(){

    Route::get('/admin/bus', [App\Http\Controllers\BusController::class, 'Index'])->name('adminbus-index');
    Route::post('/admin/bus', [BusController::class,'store'])->name('admin-bus');
    
    
    Route::post('/admin/trip', [TripController::class,'store'])->name('admin-trip');
    Route::get('/admin/trip', [App\Http\Controllers\TripController::class, 'Index'])->name('admintrip-index');
    Route::get('admin/trip/delete/{id}',[TripController::class, 'destroy']);
    
    
    Route::get('/admin/route', function() {
        return view('admin.route');
    })->name('admin-route');

    Route::get('/admin/bus.', 'App\Http\Controllers\HomeController@adminIndex')->name('admin-homeIndex');
    Route::get('admin/bus/delete/{id}',[BusController::class, 'destroy']);


    Route::get('user/bus/{id}/book', [TicketBookingController::class, 'Index'])->name('user-bus-book');
    Route::post('user/bus/{id}/book', [TicketBookingController::class, 'store'])->name('user-bus-book-store');
    Route::get('user/dashboard/delete/{id}',[DashboardController::class, 'destroy']);

    Route::get('/user/dashboard.', 'App\Http\Controllers\HomeController@userIndex')->name('user-homeIndex');
    Route::get('user/bus', [App\Http\Controllers\BusController::class, 'userBusIndex'])->name('user-bus');
    Route::get('/user/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('user-dashboard');
});




// Route::get('/user/bus','App\Http\Controllers\BusController@userBusIndex')->name('user-getBuses');


// Login, Register
Route::get('/', function() {
    return view('auth.login');
});




// user Routes
// Route::get('/user/dashboard', function() {
//     return view('user.dashboard');
// })->name('user-dashboard');

// Route::get('/user/bus', function() {
//     return view('user.bus');
// })->name('user-bus');

// Route::get('/user/bus/book', function() {
//     return view('user.bus-book');
// })->name('user-bus-book');




