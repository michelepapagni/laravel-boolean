<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        return view('students.index');
    }

    public function show($slug)
    {
        $student = $this->getStudentBySlug($slug);

        if (empty($student))
        {
            return abort(404);
        }

        return view('students.show', compact('student'));
    }

    private function getStudentBySlug($slug)
    {
        $student = [];

        foreach (config('students') as $availableStudent)
        {
            if ($availableStudent['slug'] == $slug)
            {
                $student = $availableStudent;
            }
        }

        return $student;
    }

}
