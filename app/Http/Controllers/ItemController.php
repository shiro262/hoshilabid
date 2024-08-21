<?php

namespace App\Http\Controllers;

use App\Models\Artifact;
use App\Models\Planar;
use App\Models\Relic;
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
        $stigmata = Stigmata::orderBy('name')->paginate(1000);

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
    //genshin impact
    public function artifactindexguest()
    {
        $artifact = Artifact::orderBy('name')->paginate(1000);

        return view('gi.guest.artifact', compact('artifact'));
    }
    public function showartifactguest($id)
    {
        $artifact = Artifact::all()->find($id);

        return view('gi.guest.viewartifact', compact('artifact'));
    }
    public function searchartifactforguest(Request $request)
    {
        $query = $request->search;
        $artifact = Artifact::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('gi.guest.artifact', compact('artifact', 'query'));
    }
    //honkai: star rail
    public function relicindexguest()
    {
        $relic = Relic::orderBy('name')->paginate(100);

        return view('hsr.guest.relic', compact('relic'));
    }
    public function showrelicguest($id)
    {
        $relic = Relic::all()->find($id);
        $planar = Planar::all()->find($id);

        return view('hsr.guest.viewrelic', compact('relic'));
    }
    public function searchrelicforguest(Request $request)
    {
        $query = $request->search;
        $relic = Relic::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hsr.guest.relic', compact('relic', 'query'));
    }
    public function planarindexguest()
    {
        $planar = Planar::orderBy('name')->paginate(100);

        return view('hsr.guest.planar', compact('planar'));
    }
    public function showplanarguest($id)
    {
        $planar = Planar::all()->find($id);

        return view('hsr.guest.viewplanar', compact('planar'));
    }
    public function searchplanarforguest(Request $request)
    {
        $query = $request->search;
        $planar = Planar::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hsr.guest.planar', compact('planar', 'query'));
    }

    //member
    //genshin impact
     public function artifactindexmember()
     {
         $artifact = Artifact::orderBy('name')->paginate(1000);

         return view('gi.member.artifact', compact('artifact'));
     }
     public function showartifactmember($id)
     {
         $artifact = Artifact::all()->find($id);

         return view('gi.member.viewartifact', compact('artifact'));
     }
     public function searchartifactformember(Request $request)
     {
         $query = $request->search;
         $artifact = Artifact::where('name', 'like', '%'.$query.'%')
         ->orderBy('name')->paginate(10)->withQueryString();

         return view('gi.member.artifact', compact('artifact', 'query'));
     }
     //honkai: star rail
    public function relicindexmember()
    {
        $relic = Relic::orderBy('name')->paginate(100);

        return view('hsr.member.relic', compact('relic'));
    }
    public function showrelicmember($id)
    {
        $relic = Relic::all()->find($id);
        $planar = Planar::all()->find($id);

        return view('hsr.member.viewrelic', compact('relic'));
    }
    public function searchrelicformember(Request $request)
    {
        $query = $request->search;
        $relic = Relic::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hsr.member.relic', compact('relic', 'query'));
    }
    public function planarindexmember()
    {
        $planar = Planar::orderBy('name')->paginate(100);

        return view('hsr.member.planar', compact('planar'));
    }
    public function showplanarmember($id)
    {
        $planar = Planar::all()->find($id);

        return view('hsr.member.viewplanar', compact('planar'));
    }
    public function searchplanarformember(Request $request)
    {
        $query = $request->search;
        $planar = Planar::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hsr.member.planar', compact('planar', 'query'));
    }
    //honkai impact
    public function stigmataindexmember()
    {
        $stigmata = Stigmata::orderBy('name')->paginate(1000);

        return view('hi3.member.stigmata', compact('stigmata'));
    }
    public function showstigmatamember($id)
    {
        $stigmata = Stigmata::all()->find($id);

        return view('hi3.member.viewstigmata', compact('stigmata'));
    }
    public function searchstigmataformember(Request $request)
    {
        $query = $request->search;
        $stigmata = Stigmata::where('name', 'like', '%'.$query.'%')
        ->orWhere('detail', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hi3.member.stigmata', compact('stigmata', 'query'));
    }

    //admin
    //honkai: star rail
    public function relicindexadmin()
    {
        $relic = Relic::orderBy('name')->paginate(100);

        return view('hsr.admin.relic', compact('relic'));
    }
    public function showrelicadmin($id)
    {
        $relic = Relic::all()->find($id);
        $planar = Planar::all()->find($id);

        return view('hsr.admin.viewrelic', compact('relic'));
    }
    public function searchrelicforadmin(Request $request)
    {
        $query = $request->search;
        $relic = Relic::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hsr.admin.relic', compact('relic', 'query'));
    }
    public function planarindexadmin()
    {
        $planar = Planar::orderBy('name')->paginate(100);

        return view('hsr.admin.planar', compact('planar'));
    }
    public function showplanaradmin($id)
    {
        $planar = Planar::all()->find($id);

        return view('hsr.admin.viewplanar', compact('planar'));
    }
    public function searchplanarforadmin(Request $request)
    {
        $query = $request->search;
        $planar = Planar::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hsr.admin.planar', compact('planar', 'query'));
    }
    //genshin impact
    public function artifactindexadmin()
    {
        $artifact = Artifact::orderBy('name')->paginate(1000);

        return view('gi.admin.artifact', compact('artifact'));
    }
    public function showartifactadmin($id)
    {
        $artifact = Artifact::all()->find($id);

        return view('gi.admin.viewartifact', compact('artifact'));
    }
    public function searchartifactforadmin(Request $request)
    {
        $query = $request->search;
        $artifact = Artifact::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('gi.admin.artifact', compact('artifact', 'query'));
    }
    //honkai impact
    public function stigmataindexadmin()
    {
        $stigmata = Stigmata::orderBy('name')->paginate(1000);

        return view('hi3.admin.stigmata', compact('stigmata'));
    }
    public function showstigmataadmin($id)
    {
        $stigmata = Stigmata::all()->find($id);

        return view('hi3.admin.viewstigmata', compact('stigmata'));
    }
    public function searchstigmataforadmin(Request $request)
    {
        $query = $request->search;
        $stigmata = Stigmata::where('name', 'like', '%'.$query.'%')
        ->orWhere('detail', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hi3.admin.stigmata', compact('stigmata', 'query'));
    }

}
