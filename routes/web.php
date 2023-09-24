<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Pages;
use App\Http\Controllers\Posts;
use App\Http\Controllers\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[Pages::class, 'index']);
Route::get('/pages/index', [Pages::class, 'index']);
Route::get('/posts', [Posts::class, 'index']);
Route::get('/pages/login', [Pages::class, 'login']);
Route::get('/pages/register', [Pages::class, 'register']);
Route::Post('/auth/register', [Auth::class, 'register']);
