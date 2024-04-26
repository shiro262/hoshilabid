<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function openRegisterPage()
    {
        return view('register');
    }

    public function registration(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:users|min:5|max:20',
            'email' => 'required|unique:users',
            'password' => 'required|min:5|max:20',
            'confirm_password' => 'required|min:5|max:20|same:password'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/login')->with('success', 'Registration Succesfull! Please Login');
    }
}
