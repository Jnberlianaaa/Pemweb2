<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('pages.auth.Login');
    }
    
    function login (Request $request)
    {
        $validateUser = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
    

    //cek login
    if (Auth::attempt($validateUser)) 
    {
        return redirect()->to('/tipemobil');
    }
    else {
        return redirect()->to('/login');
    }
    
    }

    function logout(request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->to('/login');
    }
}