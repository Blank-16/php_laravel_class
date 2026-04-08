<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calcController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\bookapicontroller;
use Illuminate\Routing\RouteUri;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/users/{id}', function ($id) {
//     return 'User Id is: ' . $id;
// });

// Route::get('/cal', [calcController::class, 'index']);

// Route::get('/calc/{op}/{num1}/{num2}', function ($op, $num1, $num2) {
//     switch ($op) {
//         case 'add':
//             $result = $num1 + $num2;
//             return 'Addition: ' . $result;
//         case 'sub':
//             $result = $num1 - $num2;
//             return 'Subtraction: ' . $result;
//         case 'mul':
//             $result = $num1 * $num2;
//             return 'Multiplication: ' . $result;
//         case 'div':
//             $result = $num1 / $num2;
//             return 'Division: ' . $result;
//         default:
//             return 'Invalid op';
//     }
// });

// // Route::get('/student/{name}', function($name){
// //         return view('student', ['name'=>$name]);
// // });

// // Route::get('/course/{course?}', function($course = "B.tech"){
// //         return view('course', ['course'=>$course]);
// // })->whereAlpha('course');


// Route::get('/student/{name}', [StudentController::class, 'showName']);
// Route::get('/course/{course?}', [StudentController::class, 'showCourse']);
// Route::get('/student/profile/{id}', [StudentController::class, 'Id'])->whereNumber('id');
// Route::get('/students', [StudentController::class, 'index']);



// Route::get('/login', function () {
//     return redirect()->action([StudentController::class, 'student_function']);
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dash');

// Route::get('/login/{email}/{pass}', function ($email, $pass) {
//     if ($email == "admin@example.com" && $pass == "password") {
//         return redirect()->route('dash')->with('email', $email);
//     }
//     return "Invalid credentials";
// });

// Route::get('/books', [bookapicontroller::class, 'index']);
// Route::get('/books/{id}', [bookapicontroller::class, 'show']);


// Route::get(
//     '/test',
//     [StudentController::class, 'test']
// )->middleware('checkUser');


// Route::get('test1', [StudentController::class , 'profile']);
// Route::get('/test3', function () {
//     return view('home');
// });

// Route::get('layout', function () {
//     return view('layout');
// });

Route::get('/student-details', [StudentController::class , 'student_details'])->name('student.details');

// Advance Routing in laravel


// url()->current(); --> returns the current URL without query parameters
// url()->full(); --> returns the full URL including query parameters
// $request->url(); --> returns the current URL without query parameters
// $request->fullUrl(); --> returns the full URL including query parameters
// $request->path(); --> returns the path of the current URL (without the domain)
// url()->previous(); --> returns the URL of the previous page (referrer)


Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/home', function() {
    return view('home');
})->name('H');
Route::get('/about', function() {
    return view('about');
})->name('A');
Route::get('/services', function() {
    return view('services');
})->name('S');

