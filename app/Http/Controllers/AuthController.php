<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function viewRegister(){
        return view('register');
    }

    public function register(Request $req){
        $req->validate([
            'nama' => 'required|min:3|max:20',
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:10',
        ]);

        User::create([
            'name' => $req->nama,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);
        return redirect('/');
    }

    public function login(){
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
