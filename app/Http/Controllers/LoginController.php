<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    public function loginindex()
    {
        return view('login');
    }
    public function login(Request $req)
    {
        $cred = $req->only('username', 'password');
        $rememberMe = true;
        if($req->remember == null) $rememberMe = false;
        if(Auth::attempt($cred, $rememberMe)){
            if($rememberMe == true) Cookie::queue('last_logged', $req->username);
            if(Auth::user()->role == 'member') return redirect()->route('member.viewPage');
            return redirect()->route('admin.viewAdmin');
        }
        return redirect()->back()->withErrors('Username atau Password Salah!');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('guest.viewLogin');
    }
}
