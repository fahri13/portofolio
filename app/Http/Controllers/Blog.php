<?php 

namespace App\Http\Controllers;

class Blog extends Controller
{
    public function index()
    {
        return view('blog/index');
    }
}