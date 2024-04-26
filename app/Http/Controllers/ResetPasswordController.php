<?php

namespace App\Http\Controllers;

use Sentinel;
use App\Models\User;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function indexforgot()
    {
        return view('forgotpassword');
    }
}
