<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
// use App\Http\Requests\RegisterRequest;
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

    public function register(Request $request): RedirectResponse  {
        
        // $this->user = User::create([
            //     'email' => $_POST['email'],
            //     'nama' => $_POST['nama'],
            //     'password' => $_POST['password']
            // ]);
            // if($request->validated()) {

            //     $email = $request->email;
            //     if($this->findEmail($email)) {
                    
                    
            //         $user = new User;
            //         $user->email = $request->email;
            //         $user->nama = $request->nama;
            //         $user->password = Hash::make($request->password);
            //         $user->save();
            //         return redirect('/pages/login');

            //     } else {
            //         return redirect('/pages/index');
            //     }
            // } else {
            //     $data = [
            //         'errors' => $validator->validated()
            //     ];
            //     return view('/pages/register', $data);
            // }

         $data = $request->validate([
                'email' => 'required|unique:users',
                'nama' => ['required', 'max:255'],
                'password' => 'required'
            ]);
            // $data['password'] = bcrypt($data['password']);
            $data['password'] = Hash::make($data['password']);
        User::create($data);
        $request->session()->flash('success', 'registrasi akun berhasil');
        
        
        return redirect('/pages/register');
    }
}