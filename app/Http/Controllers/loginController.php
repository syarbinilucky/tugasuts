<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;




class loginController extends Controller
{
    public function login()
    {
        return view('autentikasi.login');
    }
    public function loginuser(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/daftarmatkul');
        }
        return redirect('login');
    }
    public function register()
    {
        return view('autentikasi.register');
    }
    public function registeruser(Request $request)
    {
        // dd($request->all());
        User::create ([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        return redirect('/login');
    }
    public function logoutuser()
    {
        Auth::logout();
        return redirect('login');
    }
}

