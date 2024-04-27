<?php

use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;

Route::get('/', function () {
	return view('auth.login');
});

Route::middleware('auth')->group(function () {
	Route::get('/submit_certificate', [CertificateController::class, 'certificate_view'])->name('submit_certificate');
	Route::get('/upload_certificate', [CertificateController::class, 'upload_view'])->name('certificate.upload');
	Route::post('/upload-certificate', [CertificateController::class, 'uploadCertificate'])->name('certificate.upload.pdf');


	Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
	
	Route::get('/courses', [UserController::class, 'courses'])->name('courses');

	Route::middleware(['role:teacher'])->group(function () {
		Route::get('/attendance_management', [UserController::class, 'listClasses'])->name('attendance.management');
		Route::get('/attendance_management/{class_id}', [AttendanceController::class, 'showManageForm'])->name('attendance.form');
		Route::post('/attendance_management/submit', [AttendanceController::class, 'submit'])->name('attendance.submit');
    });

	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
