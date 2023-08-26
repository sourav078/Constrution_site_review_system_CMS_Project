<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }

    public function about()
    {
        return view('website.about.index');
    }

    public function course()
    {
        return view('website.course.index');
    }

    public function detail()
    {
        return view('website.course.detail');
    }

    public function contact()
    {
        return view('website.contact.index');
    }

    public function login()
    {
        return view('website.auth.login');
    }

    public function registration()
    {
        return view('website.auth.registration');
    }
}
