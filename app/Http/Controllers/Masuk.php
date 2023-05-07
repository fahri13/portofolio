<?php

namespace App\Http\Controllers;

class Masuk extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function login()
    {
        return view('halaman/index');
    }
}