<?php

namespace App\Http\Controllers;

use App\Models\Stigmata;
use App\Models\Valkryie;
use App\Models\WeaponHonkai;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class WeaponController extends Controller
{
    //guest
    //honkai impact
    public function weaponhonkaiindexguest()
    {
        $weapon = WeaponHonkai::orderBy('name')->paginate(10);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function showweaponguest($id)
    {
        $weapon = WeaponHonkai::all()->find($id);

        return view('hi3.guest.viewweapon', compact('weapon'));
    }
    public function searchweaponforguest(Request $request)
    {
        $query = $request->search;
        $weapon = WeaponHonkai::where('name', 'like', '%'.$query.'%')
        ->orWhere('detail', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hi3.guest.weapon', compact('weapon', 'query'));
    }
}
