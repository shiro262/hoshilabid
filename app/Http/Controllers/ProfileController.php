<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\PasswordChange;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //member
    public function showprofilemember()
    {
        $profiles = User::find(Auth::user()->id);

        return view('membersect.profile', compact('profiles'));
    }
    public function updateprofilememberindex($id)
    {
        $profiles = User::find($id);

        return view('membersect..updateprofile', compact('profiles'));
    }
    public function updateprofilemember(Request $request)
    {
        $request->validate([
            'username' => 'required|min:5|max:20|unique:users',
            'email' => 'required|email|unique:users'
        ]);

        $up = User::find(Auth::user()->id);
        $up->username = $request['username'];
        $up->email = $request['email'];
        $up->update();
        Alert::success('Congrats', 'Profile Change Success!');
        return redirect('member/profile');
    }
    public function updatepasswordmemberindex($id)
    {
        $profiles = User::find($id);

        return view('membersect..updatepassword', compact('profiles'));
    }
    public function updatepasswordmember(Request $request)
    {
        $request->validate([
            'old_password' => ['required', new PasswordChange],
            'new_password' => ['required', 'min:5', 'max:20'],
            'confirm_new_password' => ['required', 'same:new_password']
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        Alert::success('Congrats', 'Password Change Success!');
        return redirect('member/profile')->with('success', 'Password Change Success!');
    }

    //admin
    public function showprofileadmin()
    {
        $profiles = User::find(Auth::user()->id);

        return view('adminsect.profile', compact('profiles'));
    }
    public function updateprofileadminindex($id)
    {
        $profiles = User::find($id);

        return view('adminsect.updateprofile', compact('profiles'));
    }
    public function updateprofileadmin(Request $request)
    {
        $request->validate([
            'username' => 'required|min:5|max:20|unique:users',
            'email' => 'required|email|unique:users'
        ]);

        $up = User::find(Auth::user()->id);
        $up->username = $request['username'];
        $up->email = $request['email'];
        $up->update();
        Alert::success('Congrats', 'Profile Change Success!');
        return redirect('admin/profile');
    }
    public function updatepasswordadminindex($id)
    {
        $profiles = User::find($id);

        return view('adminsect.updatepassword', compact('profiles'));
    }
    public function updatepasswordadmin(Request $request)
    {
        $request->validate([
            'old_password' => ['required', new PasswordChange],
            'new_password' => ['required', 'min:5', 'max:20'],
            'confirm_new_password' => ['required', 'same:new_password']
        ]);

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
        Alert::success('Congrats', 'Password Change Success!');
        return redirect('admin/profile');
    }
}
