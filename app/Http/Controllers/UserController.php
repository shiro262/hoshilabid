<?php

namespace App\Http\Controllers;

use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function usermanagementindex()
    {
        $userm = User::all();
        return view('adminsect.usermanagement', compact('userm'));
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Alert::success('Selamat', 'User berhasil dihapus!');
        return redirect()->back();
    }
}
