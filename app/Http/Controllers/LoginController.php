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
        $cred = $req->only('email', 'password');
        $rememberMe = true;
        if($req->remember == null) $rememberMe = false;
        if(Auth::attempt($cred, $rememberMe)){
            if($rememberMe == true) Cookie::queue('last_logged', $req->email);
            if(Auth::user()->role == 'member') return redirect()->route('member.viewPage');
            return redirect()->route('admin.viewAdmin');
        }
        return redirect()->back()->withErrors('Wrong Email or Passsword!');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('guest.viewLogin');
    }
}
