<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
class Auth extends Controller {
    
    // public function __construct() {
    //     $user = new User;
    // }
    
    public function findEmail($email) {
        $user = new User;
        $data =  User::where('email', $email)->get(); 
        if ($data) {
            return false;
        } else {
            return true;
        }
    }

    public function register(RegisterRequest $request): RedirectResponse  {
        
        // $this->user = User::create([
            //     'email' => $_POST['email'],
            //     'nama' => $_POST['nama'],
            //     'password' => $_POST['password']
            // ]);
            if($request->validated()) {

                $email = $request->email;
                if($this->findEmail($email)) {
                    
                    
                    $user = new User;
                    $user->email = $request->email;
                    $user->nama = $request->nama;
                    $user->password = Hash::make($request->password);
                    $user->save();
                    return redirect('/halaman/login');
                } else {
                    return redirect('/halaman/index');
                }
            } else {
                return redirect('/halaman/jalan');
            }
        
        
        
        
        // return redirect('/pages/register');
    }
}