<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::view('/', 'welcome');
Route::view('/about-us','about');
Route::view('/book-now','book');
Route::post('/bookings/store', function (Request $request) {
    $booking = Booking::create($request->all());
    return redirect('/otp');
});
Route::view('/otp','otp');
Route::view('/pay-bill','pay-bill');




Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        $bookings= Booking::all();
        $payments = Payment::all();
        return Inertia::render('Dashboard', compact('bookings','payments'));
    })->name('dashboard');
    Route::resource('bookings', BookingController::class);
    Route::resource('payments', PaymentController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
