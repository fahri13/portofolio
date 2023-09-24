<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class Auth extends Controller {
    
    // public function __construct() {
    //     $user = new User;
    // }
    
    public function register(Request $request): RedirectResponse  {
        
        // $this->user = User::create([
            //     'email' => $_POST['email'],
            //     'nama' => $_POST['nama'],
            //     'password' => $_POST['password']
            // ]);
            
        $user = new User;
        $user->email = $request->email;
        $user->nama = $request->nama;
        $user->password = $request->password;
        $user->save();
        
        
        
        return redirect('/pages/register');
    }
}