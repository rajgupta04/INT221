<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/students/dummy', [StudentController::class, 'dummyList']);
Route::post('/students/process', [StudentController::class, 'processList']);

// Demonstration Routes
Route::get('/demo-urls', [StudentController::class, 'showUrls']);
Route::get('/api/v1/students', [StudentController::class, 'apiEndpointOne'])->name('api.v1.students');
Route::get('/api/v2/students', [StudentController::class, 'apiEndpointTwo']);

Route::get('/demo-links', function () {
    return view('demo-links');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
