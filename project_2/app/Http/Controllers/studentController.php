<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentController extends Controller
{
    public function student()
    {
        return response()->json([
            'message' => 'Student list loaded successfully.',
            'total_students' => count($this->students()),
            'students' => array_values($this->students()),
        ]);
    }

    public function profile($id)
    {
        $student = $this->students()[$id] ?? null;

        if (! $student) {
            return response()->json([
                'message' => 'Student not found.',
                'requested_id' => (int) $id,
            ], 404);
        }

        return response()->json([
            'message' => 'Student profile fetched successfully.',
            'student' => $student,
        ]);
    }

    public function details()
    {
        return response()->json([
            'message' => 'Student module details.',
            'routes' => [
                '/students' => 'List all students',
                '/students/profile/{id}' => 'Get a single student profile by ID',
                '/student/details' => 'Show this route summary',
            ],
            'notes' => [
                'The profile route accepts only numeric IDs as defined in web.php.',
                'Use /students/profile/1 to test an existing student.',
            ],
        ]);
    }

    private function students(): array
    {
        return [
            1 => [
                'id' => 1,
                'name' => 'Aarav Singh',
                'department' => 'Computer Science',
                'semester' => 4,
            ],
            2 => [
                'id' => 2,
                'name' => 'Isha Sharma',
                'department' => 'Mechanical Engineering',
                'semester' => 6,
            ],
            3 => [
                'id' => 3,
                'name' => 'Rohan Gupta',
                'department' => 'Electronics',
                'semester' => 2,
            ],
        ];
    }
}
