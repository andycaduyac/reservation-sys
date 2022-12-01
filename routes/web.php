e<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\AccommodationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Frontend\FrontendController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/dashboard', function () {
//     return view('dashboard');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [FrontendController::class, 'index']);
Route::get('/contact-us', [FrontendController::class, 'contactus']);


Route::prefix('admin')->group(function() {
    //LOGIN
    Route::get('/login', [AdminController::class, 'login']);
    Route::post('/login', [AdminController::class, 'check_login']);

    Route::middleware(['auth'])->group(function () {

        Route::get('/logout', [AdminController::class, 'logout']);
        Route::get('dashboard', [AdminController::class, 'dashboard']);
        Route::resource('/accommodations', AccommodationController::class);
        Route::resource('/bookings', BookingController::class);
        Route::resource('/customers', CustomerController::class);
    });
});
