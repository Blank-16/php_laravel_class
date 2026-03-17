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
    
    public function Id($id)
    {
        $students = [
            1 => ['name' => 'Blank', 'course' => 'B.tech'],
            2 => ['name' => 'Hollow', 'course' => 'MBA'],
        ];

        if (!array_key_exists($id, $students)) {
            abort(404); 
        }

        $student = $students[$id];
        return view('student_profile', ['student' => $student, 'id' => $id]);
    }
    
    public function index()
    {
        $students = [
            1 => ['name' => 'Blank', 'course' => 'B.tech'],
            2 => ['name' => 'Hollow', 'course' => 'MBA'],
            3 => ['name' => 'Ghost', 'course' => 'M.Tech'],
        ];
        
        return view('student_list', ['students' => $students]);
    }
}