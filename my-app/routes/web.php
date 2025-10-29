<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employess\AttendanceController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;


Route::get('/', function () {
    return view('auth.login');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [AuthenticatedSessionController::class, 'userdashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/calender', [ProfileController::class, 'calender'])->name('calender');
});

Route::middleware('auth')->group(function () {
    Route::get('/calender', [AttendanceController::class, 'calender'])->name('calender');
    Route::get('/profile-setting', [AttendanceController::class, 'profilePage'])->name('profile');
    Route::post('/attendance/punch-out', [AttendanceController::class, 'punchOut'])->name('attendance.punch_out');
});

require __DIR__.'/auth.php';
