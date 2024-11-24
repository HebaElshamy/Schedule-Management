<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    //
    public function index()
    {
        $teachers = Teacher::with('subject')->get();


        $teachers = $teachers->map(function ($teacher) {
            return [
                'id' => $teacher->id,
                'name' => $teacher->name,
                'email' => $teacher->email,
                'subject' => $teacher->subject ? $teacher->subject->name : null,
                'subject_id' => $teacher->subject_id,
            ];
        });

        return response()->json($teachers);
    }

}
