<?php

namespace App\Http\Controllers;

class Posts extends Controller
{
    public function index()
    {
        return view('posts/index');
    }
}