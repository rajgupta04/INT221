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

// Gallery Demonstration Routes
Route::view('/gallery', 'gallery')->name('gallery.index');
Route::view('/gallery/flower', 'details.flower')->name('gallery.flower');
Route::view('/gallery/dog', 'details.dog')->name('gallery.dog');
Route::view('/gallery/student', 'details.student')->name('gallery.student');
Route::view('/gallery/teacher', 'details.teacher')->name('gallery.teacher');
Route::view('/gallery/tv', 'details.tv')->name('gallery.tv');

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

use App\Http\Controllers\LanguageController;

Route::get('/monday/{locale?}', [LanguageController::class, 'showMonday']);

use Illuminate\Http\Request;

Route::get('/upload', function () {
    return view('upload');
});

Route::post('/upload', function (Request $request) {
    if ($request->hasFile('file') && $request->file('file')->isValid()) {
        $file = $request->file('file');
        // $filename = time() . '_' . $file->getClientOriginalName();
        $filename = $file->getClientOriginalName();
        // This will save the file to "storage/app/public/uploads" folder
        $path = $file->storeAs('uploads', $filename, 'public');
        
        return back()->with('success', 'File properly uploaded to storage/app/public/uploads/' . $filename);
    }
    
    return back()->withErrors(['file' => 'There was an issue uploading the file.']);
})->name('file.upload');

use Illuminate\Support\Facades\Storage;

Route::get('/display-uploads', function () {
    $files = Storage::disk('public')->files('uploads');
    return view('display_uploads', compact('files'));
});

Route::get('/download-file/{filename}', function ($filename) {
    if (Storage::disk('public')->exists('uploads/' . $filename)) {
        return Storage::disk('public')->download('uploads/' . $filename);
    }
    return back()->withErrors(['file' => 'File not found.']);
});
