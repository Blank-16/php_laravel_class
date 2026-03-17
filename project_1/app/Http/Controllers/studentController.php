<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showName($name)
    {
        return view('student', ['name' => $name]);
    }

    public function showCourse($course = "B.tech")
    {
        return view('course', ['course' => $course]);
    }
}
