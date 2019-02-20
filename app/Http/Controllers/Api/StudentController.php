<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{

    public function filter(Request $request)
    {
        $data = $request->all();
        $gender = $data['gender'];

        if (empty($gender))
        {
            return response()->json([
                'error' => 'Guarda che gender era vuoto',
                'results' => []
            ]);
        }

        $filteredStudents = [];

        foreach (config('students') as $student)
        {
            if ($student['gender'] == $gender)
            {
                $filteredStudents[] = $student;
            }
        }

        return response()->json($filteredStudents);
    }

}
