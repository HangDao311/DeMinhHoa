<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    use HasFactory;
    function get_all_student()
    {
        $students = DB::table('Student')->get();
        return $students;
    }
    function get_student_by_id($id)
    {
        $student = DB::table('Student')->where('id', $id)->first();
        return $student;
    }
    function edit($id, $fullname, $birthday, $address)
    {
        DB::table('Student')
            ->where('id', $id)
            ->update(
                ['fullname' => $fullname,
                'birthday' => $birthday,
                'address' => $address]
            );
    }
}
