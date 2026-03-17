<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\calcController;
use App\Http\Controllers\StudentController;



Route::get('/', function() {
    return view('welcome');
});

Route::get('/users/{id}', function($id) {
    return 'User Id is: '.$id;
});

Route::get('/cal', [calcController::class, 'index']);

Route::get('/calc/{op}/{num1}/{num2}', function($op, $num1, $num2) {
    switch($op) {
        case 'add':
            $result = $num1 + $num2;
            return 'Addition: '.$result;
        case 'sub':
            $result = $num1 - $num2;
            return 'Subtraction: '.$result;
        case 'mul':
            $result = $num1 * $num2;
            return 'Multiplication: '.$result;
        case 'div':
            $result = $num1 / $num2;
            return 'Division: '.$result;
        default:
            return 'Invalid op';
    }
});

// Route::get('/student/{name}', function($name){
//         return view('student', ['name'=>$name]);
// });

// Route::get('/course/{course?}', function($course = "B.tech"){
//         return view('course', ['course'=>$course]);
// })->whereAlpha('course');


Route::get('/student/{name}', [StudentController::class, 'showName']);
Route::get('/course/{course?}', [StudentController::class, 'showCourse']);