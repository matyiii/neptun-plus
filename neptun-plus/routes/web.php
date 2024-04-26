<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;

Route::get('/', function () {
	return view('auth.login');
});

Route::middleware('auth')->group(function () {
	Route::get('/submit-certificate', [CertificateController::class, 'submit'])->name('submit_certificate');

	Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
	
	Route::get('/courses', [UserController::class, 'courses'])->name('courses');

	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
