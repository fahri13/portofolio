<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Halaman;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halaman', [Halaman::class, 'index']);
Route::get('/posts', [Posts::class, 'index']);
Route::get('/login', [Login::class, 'index']);
