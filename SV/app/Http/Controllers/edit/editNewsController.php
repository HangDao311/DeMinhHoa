<?php

    namespace App\Http\Controllers\Admin;

    use App\News;
    use Illuminate\Http\Request;
    use App\Http\Controllers\Controller;

    /**
     *  Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     function index()
    {
        return view('student_edit');
    }