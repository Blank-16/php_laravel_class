<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FormController;
use App\Http\Controllers\FileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard/url', function () {
    return [
        'current' => url()->current(),
        'full' => request()->fullUrl(),
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


Route::get('/details', function (Request $request) {
    return response([
        'all' => $request->all(),
        'using-input' => $request->input('name'),
        'course' => $request->course,
        'except' => $request->except(['age', 'course']),
        'only' => $request->only(['name', 'age']),
        'filled' => $request->filled('name') ? 'Filled' : 'Not Filled',
        'has' => $request->has('name') ? 'Has Name' : 'Does Not Have Name',
        'isMethod' => $request->isMethod('get') ? 'GET' : 'Not GET',
        'query' => $request->query('name', 'Default Name'),
        'header' => $request->header('Authorization'),
    ]);
});


Route::get('/get-form', [FormController::class, 'showForm']);
Route::post('/submit-form', [FormController::class, 'submitForm']);

Route::get('/file-upload', [FileController::class, 'uploadForm']);
Route::post('/upload-file', [FileController::class, 'upload']);
// we can see the uploaded file in the public folder




require __DIR__ . '/auth.php';
