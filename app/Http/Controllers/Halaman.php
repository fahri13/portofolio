<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Halaman extends Controller
{
    public function index()
    {
        return view('halaman/index');
    }
}
