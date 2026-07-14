<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\BookingController;

use App\Http\Controllers\Admin\LayananController as AdminLayananController;
use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\Admin\DetailLayananController;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| FRONTEND
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Login User
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Register
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Kontak
Route::view('/kontak', 'kontak.index')->name('kontak');

// Layanan
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/layanan/{id}', [LayananController::class, 'detail'])->name('detail.layanan');


/*
|--------------------------------------------------------------------------
| BOOKING USER
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/booking', [BookingController::class, 'index'])
        ->name('booking');

    Route::post('/booking', [BookingController::class, 'store'])
        ->name('booking.store');

});


/*
|--------------------------------------------------------------------------
| ADMIN LOGIN
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AdminLoginController::class, 'index'])
    ->name('admin.login');

Route::post('/admin/login', [AdminLoginController::class, 'login']);

Route::post('/admin/logout', [AdminLoginController::class, 'logout'])
    ->name('admin.logout');


/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // CRUD Layanan
    Route::resource('layanan', AdminLayananController::class);

    // Detail Layanan
    Route::get('layanan/{id}/detail', [DetailLayananController::class, 'edit'])
        ->name('detail.edit');

    Route::post('layanan/{id}/detail', [DetailLayananController::class, 'update'])
        ->name('detail.update');

    // Riwayat Booking Admin
    Route::resource('booking', AdminBookingController::class);

});

Route::redirect('/admin', '/admin/layanan');
