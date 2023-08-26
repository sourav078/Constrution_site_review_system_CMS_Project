<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class TeacherDashboardController extends Controller
{
    public function index()
    {
        return view('teacher.home.index');
    }

    public function logout()
    {
        Session::forget('teacher_id');
        Session::forget('teacher_name');

        return redirect('/');
    }


}
