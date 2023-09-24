<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pages extends Controller
{
    public function index()
    {
        return view('halaman/index');
    }

    public function login()
    {
        return view('form/login');
    }
    public function register()
    {
        return view('form/register');
    }
}
