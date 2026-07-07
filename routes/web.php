<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/step-2', function () {
    return view('terms');
});

Route::get('/step-3', function () {
    return view('step2');
});

Route::get('/step-4', function () {
    return view('step3');
});

Route::get('/success', function () {
    return view('success');
});

// Registration Flow Actions
Route::post('/register/start', [RegistrationController::class, 'start'])->name('register.start');
Route::post('/register/decline', [RegistrationController::class, 'decline'])->name('register.decline');
Route::post('/register/step-2', [RegistrationController::class, 'storeStep2'])->name('register.step2');
Route::post('/register/upload-proof', [RegistrationController::class, 'uploadProof'])->name('register.upload-proof');
Route::get('/register/finish', [RegistrationController::class, 'finish'])->name('register.finish');

// Dashboard Actions
Route::get('/dashboard', [RegistrationController::class, 'dashboardOverview'])->name('dashboard.overview');
Route::get('/dashboard/export-excel', [RegistrationController::class, 'exportExcel'])->name('dashboard.export-excel');

Route::get('/dashboard/registrations', [RegistrationController::class, 'dashboardIndex'])->name('dashboard.registrations');
Route::patch('/dashboard/registrations/{id}/status', [RegistrationController::class, 'updateStatus'])->name('dashboard.registrations.update-status');
Route::delete('/dashboard/registrations/{id}', [RegistrationController::class, 'destroy'])->name('dashboard.registrations.destroy');

