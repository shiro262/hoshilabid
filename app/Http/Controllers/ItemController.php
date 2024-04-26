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

class ItemController extends Controller
{
    //guest
    //honkai impact
    public function stigmataindexguest()
    {
        $stigmata = Stigmata::orderBy('name')->paginate(10);

        return view('hi3.guest.stigmata', compact('stigmata'));
    }
    public function showstigmataguest($id)
    {
        $stigmata = Stigmata::all()->find($id);

        return view('hi3.guest.viewstigmata', compact('stigmata'));
    }
    public function searchstigmataforguest(Request $request)
    {
        $query = $request->search;
        $stigmata = Stigmata::where('name', 'like', '%'.$query.'%')
        ->orWhere('detail', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hi3.guest.stigmata', compact('stigmata', 'query'));
    }
}
