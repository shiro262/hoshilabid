<?php

namespace App\Http\Controllers;

use Sentinel;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function indexforgot()
    {
        return view('forgotpassword');
    }
    public function indexrecoveryquestion()
    {
        return view('recoveryquestion');
    }
    public function confirm(Request $req){
        $username = User::where("username", "=", $req->username)->first();

        if($username != NULL){
            return view('changePassword', compact('username'));
        }else{
            return redirect()->back()->withErrors(['Username tidak ditemukan']);
        }
    }
    public function recover(Request $req){
        $recoveryanswer = User::where("recovery_answer", "=", $req->recoveryanswer)->first();

        if($recoveryanswer != NULL){
            return view('changePassword', compact('recoveryanswer'));
        }else{
            return redirect()->back()->withErrors(['Jawaban Keamanan salah']);
        }
    }
    public function updatePassword(Request $req){
        $req->validate([
            'new_pass' => 'required|min:5|max:20',
        ]);

        try{
            User::where('username', '=', $req->username_id)->update([
                'password' => Hash::make($req->new_pass)
            ]);
        } catch(QueryException){
            return redirect()->back()->withErrors(['Something went wrong']);
        }

        return redirect('/login')->with('success', 'Password Reset Success!');
    }
}
