<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/url', function () {
    return [
        'current' => url()->current(),
        'full' => url()->full(),
        'path' => request()->path(),
        'current-url' => request()->url(),
    ];
});

Route::get('/dashboard', function () {
    return 'This dashboard';
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/secure', function () {
    if (request()->secure()) {
        return  'This is the secure Route';
    } else {
        return 'Use HTTPS to access this route';
    }
});

Route::domain('admin.mysite.com')->group(function () {
    Route::get('/', function () {
        return 'This is my normal route';
    });
    Route::get('/dashboard', function () {
        return 'This is my dashboard route';
    });
});

Route::get('/user/{id}/{name}', function ($id, $name) {
    return "User ID: $id,\nUser Name: $name";
})->where(['id' => '[0-9]+', 'name' => '[a-zA-Z]+']);

Route::controller(StudentController::class)->middleware('auth')->group(function () {
    Route::get('/student/profile/{id}', 'profile', function ($id) {
        return "Student ID: $id";
    })->where('id', '[0-9]+');
    Route::get('/student/details', 'details');
});

Route::get('/student', function () {
    return view('student');
});






require __DIR__ . '/auth.php';
