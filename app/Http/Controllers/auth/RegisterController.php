<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\models\user;

class RegisterController extends Controller
{
    function index()
    {
        return view('pages.auth.register');
    }

    //memproses registrasi data
    function register(request $request)
    {
        //validasi data
        $validateuser = $request ->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'contact' => 'required',
        ]);

        //proses registrasi 
        $userData = New User;
        $userData ->name =$request->name;
        $userData ->email =$request->email;
        $userData ->password =bcrypt($request->password);
        $userData ->contact =$request->contact;
        $userData ->save();

        //redirect
        return redirect()->to('/login')->with('/sukses', 'Register Berhasil');
    }
}
