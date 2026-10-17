<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
})->name('home');

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route Booking
Route::get('/booking/{id}', [BookingController::class, 'create'])
    ->name('booking.create');

Route::post('/booking/{id}', [BookingController::class, 'store'])
    ->name('booking.store');
