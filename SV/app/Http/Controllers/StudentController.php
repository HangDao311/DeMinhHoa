<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $studentModel;

    public function __construct()
    {
        $this->studentModel = new Student();
    }

    function index()
    {

        $students = $this->studentModel->get_all_student();

        return view(
            'student_manage',
            ['students' => $students]
        );
    }

    function findStudentById($id)
    {
        $student = $this->studentModel->get_student_by_id($id);

        return view(
            'student',
            ['student' => $student]
        );
    }

    function edit(Request $request)
    {
        $this->studentModel->edit(
            $request->id,
            $request->fullname,
            $request->birthday,
            $request->address
        );

        $students = $this->studentModel->get_all_student();

        return view(
            'student_manage',
            ['students' => $students]
        );
    }
}
