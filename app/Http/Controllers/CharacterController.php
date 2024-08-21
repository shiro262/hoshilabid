<?php

namespace App\Http\Controllers;

use App\Models\CharacterGenshin;
use App\Models\CharacterHsr;
use App\Models\Lightcone;
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

class CharacterController extends Controller
{
    //guest
    //honkai impact
    public function charaindexguest()
    {
        $chara = Valkryie::orderBy('name')->paginate(1000);

        return view('hi3.guest.character', compact('chara'));
    }
    public function showcharaguest($id)
    {
        $chara = Valkryie::all()->find($id);

        return view('hi3.guest.viewcharacter', compact('chara'));
    }
    public function searchforguest(Request $request)
    {
        $query = $request->search;
        $chara = Valkryie::where('name', 'like', '%'.$query.'%')
        ->orWhere('detail', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hi3.guest.character', compact('chara', 'query'));
    }
    public function sortbiovalkguest()
    {
        $chara = Valkryie::where('type', 'BIO')->orderBy('name')->paginate(1000);

        return view('hi3.guest.character', compact('chara'));
    }
    public function sortimgvalkguest()
    {
        $chara = Valkryie::where('type', 'IMG')->orderBy('name')->paginate(1000);

        return view('hi3.guest.character', compact('chara'));
    }
    public function sortmechvalkguest()
    {
        $chara = Valkryie::where('type', 'MECH')->orderBy('name')->paginate(1000);

        return view('hi3.guest.character', compact('chara'));
    }
    public function sortpsyvalkguest()
    {
        $chara = Valkryie::where('type', 'PSY')->orderBy('name')->paginate(1000);

        return view('hi3.guest.character', compact('chara'));
    }
    public function sortquavalkguest()
    {
        $chara = Valkryie::where('type', 'QUA')->orderBy('name')->paginate(1000);

        return view('hi3.guest.character', compact('chara'));
    }
    public function sortsdvalkguest()
    {
        $chara = Valkryie::where('type', 'SD')->orderBy('name')->paginate(1000);

        return view('hi3.guest.character', compact('chara'));
    }
    public function tierlistguest()
    {
        $sptier = Valkryie::where('tier', 'S+')->orderBy('name')->get();
        $stier = Valkryie::where('tier', 'S')->orderBy('name')->get();
        $atier = Valkryie::where('tier', 'A')->orderBy('name')->get();
        $btier = Valkryie::where('tier', 'B')->orderBy('name')->get();
        $ctier = Valkryie::where('tier', 'C')->orderBy('name')->get();

        return view('hi3.guest.tierlist', compact('sptier', 'stier', 'atier', 'btier', 'ctier'));
    }
    //genshin impact
    public function charagenshinindexguest()
    {
        $chara = CharacterGenshin::orderBy('name')->paginate(1000);

        return view('gi.guest.character', compact('chara'));
    }
    public function showcharagenshinguest($id)
    {
        $chara = CharacterGenshin::all()->find($id);

        return view('gi.guest.viewcharacter', compact('chara'));
    }
    public function searchgenshinforguest(Request $request)
    {
        $query = $request->search;
        $chara = CharacterGenshin::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(1000)->withQueryString();

        return view('gi.guest.character', compact('chara', 'query'));
    }
    public function sortanemogenshinforguest()
    {
        $chara = CharacterGenshin::where('element', 'Anemo')->orderBy('name')->paginate(1000);

        return view('gi.guest.character', compact('chara'));
    }
    public function sortcryogenshinforguest()
    {
        $chara = CharacterGenshin::where('element', 'Cryo')->orderBy('name')->paginate(1000);

        return view('gi.guest.character', compact('chara'));
    }
    public function sortdendrogenshinforguest()
    {
        $chara = CharacterGenshin::where('element', 'Dendro')->orderBy('name')->paginate(1000);

        return view('gi.guest.character', compact('chara'));
    }
    public function sortelectrogenshinforguest()
    {
        $chara = CharacterGenshin::where('element', 'Electro')->orderBy('name')->paginate(1000);

        return view('gi.guest.character', compact('chara'));
    }
    public function sortgeogenshinforguest()
    {
        $chara = CharacterGenshin::where('element', 'Geo')->orderBy('name')->paginate(1000);

        return view('gi.guest.character', compact('chara'));
    }
    public function sorthydrogenshinforguest()
    {
        $chara = CharacterGenshin::where('element', 'Hydro')->orderBy('name')->paginate(1000);

        return view('gi.guest.character', compact('chara'));
    }
    public function sortpyrogenshinforguest()
    {
        $chara = CharacterGenshin::where('element', 'Pyro')->orderBy('name')->paginate(1000);

        return view('gi.guest.character', compact('chara'));
    }
    public function tierlistgenshinguest()
    {
        $sptier = CharacterGenshin::where('tier', 'S+')->orderBy('name')->get();
        $stier = CharacterGenshin::where('tier', 'S')->orderBy('name')->get();
        $atier = CharacterGenshin::where('tier', 'A')->orderBy('name')->get();
        $btier = CharacterGenshin::where('tier', 'B')->orderBy('name')->get();
        $ctier = CharacterGenshin::where('tier', 'C')->orderBy('name')->get();

        return view('gi.guest.tierlist', compact('sptier', 'stier', 'atier', 'btier', 'ctier'));
    }
    //honkai star rail
    public function charahsrindexguest()
    {
        $chara = CharacterHsr::orderBy('name')->paginate(1000);

        return view('hsr.guest.character', compact('chara'));
    }
    public function showcharahsrguest($id)
    {
        $chara = CharacterHsr::all()->find($id);

        return view('hsr.guest.viewcharacter', compact('chara'));
    }
    public function searchhsrforguest(Request $request)
    {
        $query = $request->search;
        $chara = CharacterHsr::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hsr.guest.character', compact('chara', 'query'));
    }
    public function sortfirehsrforguest()
    {
        $chara = CharacterHsr::where('element', 'Fire')->orderBy('name')->paginate(1000);

        return view('hsr.guest.character', compact('chara'));
    }
    public function sorticehsrforguest()
    {
        $chara = CharacterHsr::where('element', 'Ice')->orderBy('name')->paginate(1000);

        return view('hsr.guest.character', compact('chara'));
    }
    public function sortimaginaryhsrforguest()
    {
        $chara = CharacterHsr::where('element', 'Imaginary')->orderBy('name')->paginate(1000);

        return view('hsr.guest.character', compact('chara'));
    }
    public function sortlightninghsrforguest()
    {
        $chara = CharacterHsr::where('element', 'Lightning')->orderBy('name')->paginate(1000);

        return view('hsr.guest.character', compact('chara'));
    }
    public function sortphysicalhsrforguest()
    {
        $chara = CharacterHsr::where('element', 'Physical')->orderBy('name')->paginate(1000);

        return view('hsr.guest.character', compact('chara'));
    }
    public function sortquantumhsrforguest()
    {
        $chara = CharacterHsr::where('element', 'Quantum')->orderBy('name')->paginate(1000);

        return view('hsr.guest.character', compact('chara'));
    }
    public function sortwindhsrforguest()
    {
        $chara = CharacterHsr::where('element', 'Wind')->orderBy('name')->paginate(1000);

        return view('hsr.guest.character', compact('chara'));
    }
    public function tierlistmochsrguest()
    {
        $sptier = CharacterHsr::where('tier_moc', 'S+')->orderBy('name')->get();
        $stier = CharacterHsr::where('tier_moc', 'S')->orderBy('name')->get();
        $atier = CharacterHsr::where('tier_moc', 'A')->orderBy('name')->get();
        $btier = CharacterHsr::where('tier_moc', 'B')->orderBy('name')->get();
        $ctier = CharacterHsr::where('tier_moc', 'C')->orderBy('name')->get();
        $dtier = CharacterHsr::where('tier_moc', 'D')->orderBy('name')->get();

        return view('hsr.guest.tierlistmemoryofchaos', compact('sptier', 'stier', 'atier', 'btier', 'ctier', 'dtier'));
    }
    public function tierlistpfhsrguest()
    {
        $sptier = CharacterHsr::where('tier_pf', 'S+')->orderBy('name')->get();
        $stier = CharacterHsr::where('tier_pf', 'S')->orderBy('name')->get();
        $atier = CharacterHsr::where('tier_pf', 'A')->orderBy('name')->get();
        $btier = CharacterHsr::where('tier_pf', 'B')->orderBy('name')->get();
        $ctier = CharacterHsr::where('tier_pf', 'C')->orderBy('name')->get();
        $dtier = CharacterHsr::where('tier_pf', 'D')->orderBy('name')->get();

        return view('hsr.guest.tierlistpurefiction', compact('sptier', 'stier', 'atier', 'btier', 'ctier', 'dtier'));
    }

    //member
    //honkai impact 3
    public function charaindexmember()
    {
        $chara = Valkryie::orderBy('name')->paginate(1000);

        return view('hi3.member.character', compact('chara'));
    }
    public function showcharamember($id)
    {
        $chara = Valkryie::all()->find($id);

        return view('hi3.member.viewcharacter', compact('chara'));
    }
    public function tierlistmember()
    {
        $sptier = Valkryie::where('tier', 'S+')->orderBy('name')->get();
        $stier = Valkryie::where('tier', 'S')->orderBy('name')->get();
        $atier = Valkryie::where('tier', 'A')->orderBy('name')->get();
        $btier = Valkryie::where('tier', 'B')->orderBy('name')->get();
        $ctier = Valkryie::where('tier', 'C')->orderBy('name')->get();

        return view('hi3.member.tierlist', compact('sptier', 'stier', 'atier', 'btier', 'ctier'));
    }
    public function searchformember(Request $request)
    {
        $query = $request->search;
        $chara = Valkryie::where('name', 'like', '%'.$query.'%')
        ->orWhere('detail', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hi3.member.character', compact('chara', 'query'));
    }
    public function sortbiovalkmember()
    {
        $chara = Valkryie::where('type', 'BIO')->orderBy('name')->paginate(1000);

        return view('hi3.member.character', compact('chara'));
    }
    public function sortimgvalkmember()
    {
        $chara = Valkryie::where('type', 'IMG')->orderBy('name')->paginate(1000);

        return view('hi3.member.character', compact('chara'));
    }
    public function sortmechvalkmember()
    {
        $chara = Valkryie::where('type', 'MECH')->orderBy('name')->paginate(1000);

        return view('hi3.member.character', compact('chara'));
    }
    public function sortpsyvalkmember()
    {
        $chara = Valkryie::where('type', 'PSY')->orderBy('name')->paginate(1000);

        return view('hi3.member.character', compact('chara'));
    }
    public function sortquavalkmember()
    {
        $chara = Valkryie::where('type', 'QUA')->orderBy('name')->paginate(1000);

        return view('hi3.member.character', compact('chara'));
    }
    public function sortsdvalkmember()
    {
        $chara = Valkryie::where('type', 'SD')->orderBy('name')->paginate(1000);

        return view('hi3.member.character', compact('chara'));
    }
    //genshin impact
    public function charagenshinindexmember()
    {
        $chara = CharacterGenshin::orderBy('name')->paginate(1000);

        return view('gi.member.character', compact('chara'));
    }
    public function showcharagenshinmember($id)
    {
        $chara = CharacterGenshin::all()->find($id);

        return view('gi.member.viewcharacter', compact('chara'));
    }
    public function searchgenshinformember(Request $request)
    {
        $query = $request->search;
        $chara = CharacterGenshin::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('gi.member.character', compact('chara', 'query'));
    }
    public function sortanemogenshinformember()
    {
        $chara = CharacterGenshin::where('element', 'Anemo')->orderBy('name')->paginate(1000);

        return view('gi.member.character', compact('chara'));
    }
    public function sortcryogenshinformember()
    {
        $chara = CharacterGenshin::where('element', 'Cryo')->orderBy('name')->paginate(1000);

        return view('gi.member.character', compact('chara'));
    }
    public function sortdendrogenshinformember()
    {
        $chara = CharacterGenshin::where('element', 'Dendro')->orderBy('name')->paginate(1000);

        return view('gi.member.character', compact('chara'));
    }
    public function sortelectrogenshinformember()
    {
        $chara = CharacterGenshin::where('element', 'Electro')->orderBy('name')->paginate(1000);

        return view('gi.member.character', compact('chara'));
    }
    public function sortgeogenshinformember()
    {
        $chara = CharacterGenshin::where('element', 'Geo')->orderBy('name')->paginate(1000);

        return view('gi.member.character', compact('chara'));
    }
    public function sorthydrogenshinformember()
    {
        $chara = CharacterGenshin::where('element', 'Hydro')->orderBy('name')->paginate(1000);

        return view('gi.member.character', compact('chara'));
    }
    public function sortpyrogenshinformember()
    {
        $chara = CharacterGenshin::where('element', 'Pyro')->orderBy('name')->paginate(1000);

        return view('gi.member.character', compact('chara'));
    }

    public function tierlistgenshinmember()
    {
        $sptier = CharacterGenshin::where('tier', 'S+')->orderBy('name')->get();
        $stier = CharacterGenshin::where('tier', 'S')->orderBy('name')->get();
        $atier = CharacterGenshin::where('tier', 'A')->orderBy('name')->get();
        $btier = CharacterGenshin::where('tier', 'B')->orderBy('name')->get();
        $ctier = CharacterGenshin::where('tier', 'C')->orderBy('name')->get();

        return view('gi.member.tierlist', compact('sptier', 'stier', 'atier', 'btier', 'ctier'));
    }
    //honkai star rail
    public function charahsrindexmember()
    {
        $chara = CharacterHsr::orderBy('name')->paginate(1000);

        return view('hsr.member.character', compact('chara'));
    }
    public function showcharahsrmember($id)
    {
        $chara = CharacterHsr::all()->find($id);

        return view('hsr.member.viewcharacter', compact('chara'));
    }
    public function searchhsrformember(Request $request)
    {
        $query = $request->search;
        $chara = CharacterHsr::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hsr.member.character', compact('chara', 'query'));
    }
    public function sortfirehsrformember()
    {
        $chara = CharacterHsr::where('element', 'Fire')->orderBy('name')->paginate(1000);

        return view('hsr.member.character', compact('chara'));
    }
    public function sorticehsrformember()
    {
        $chara = CharacterHsr::where('element', 'Ice')->orderBy('name')->paginate(1000);

        return view('hsr.member.character', compact('chara'));
    }
    public function sortimaginaryhsrformember()
    {
        $chara = CharacterHsr::where('element', 'Imaginary')->orderBy('name')->paginate(1000);

        return view('hsr.member.character', compact('chara'));
    }
    public function sortlightninghsrformember()
    {
        $chara = CharacterHsr::where('element', 'Lightning')->orderBy('name')->paginate(1000);

        return view('hsr.member.character', compact('chara'));
    }
    public function sortphysicalhsrformember()
    {
        $chara = CharacterHsr::where('element', 'Physical')->orderBy('name')->paginate(1000);

        return view('hsr.member.character', compact('chara'));
    }
    public function sortquantumhsrformember()
    {
        $chara = CharacterHsr::where('element', 'Quantum')->orderBy('name')->paginate(1000);

        return view('hsr.member.character', compact('chara'));
    }
    public function sortwindhsrformember()
    {
        $chara = CharacterHsr::where('element', 'Wind')->orderBy('name')->paginate(1000);

        return view('hsr.member.character', compact('chara'));
    }
    public function tierlistmochsrmember()
    {
        $sptier = CharacterHsr::where('tier_moc', 'S+')->orderBy('name')->get();
        $stier = CharacterHsr::where('tier_moc', 'S')->orderBy('name')->get();
        $atier = CharacterHsr::where('tier_moc', 'A')->orderBy('name')->get();
        $btier = CharacterHsr::where('tier_moc', 'B')->orderBy('name')->get();
        $ctier = CharacterHsr::where('tier_moc', 'C')->orderBy('name')->get();
        $dtier = CharacterHsr::where('tier_moc', 'D')->orderBy('name')->get();

        return view('hsr.member.tierlistmemoryofchaos', compact('sptier', 'stier', 'atier', 'btier', 'ctier', 'dtier'));
    }
    public function tierlistpfhsrmember()
    {
        $sptier = CharacterHsr::where('tier_pf', 'S+')->orderBy('name')->get();
        $stier = CharacterHsr::where('tier_pf', 'S')->orderBy('name')->get();
        $atier = CharacterHsr::where('tier_pf', 'A')->orderBy('name')->get();
        $btier = CharacterHsr::where('tier_pf', 'B')->orderBy('name')->get();
        $ctier = CharacterHsr::where('tier_pf', 'C')->orderBy('name')->get();
        $dtier = CharacterHsr::where('tier_pf', 'D')->orderBy('name')->get();

        return view('hsr.member.tierlistpurefiction', compact('sptier', 'stier', 'atier', 'btier', 'ctier', 'dtier'));
    }

    //admin
    //honkai impact 3
    public function charaindexadmin()
    {
        $chara = Valkryie::orderBy('name')->paginate(1000);

        return view('hi3.admin.character', compact('chara'));
    }
    public function showcharaadmin($id)
    {
        $chara = Valkryie::all()->find($id);

        return view('hi3.admin.viewcharacter', compact('chara'));
    }
    public function tierlistadmin()
    {
        $sptier = Valkryie::where('tier', 'S+')->orderBy('name')->get();
        $stier = Valkryie::where('tier', 'S')->orderBy('name')->get();
        $atier = Valkryie::where('tier', 'A')->orderBy('name')->get();
        $btier = Valkryie::where('tier', 'B')->orderBy('name')->get();
        $ctier = Valkryie::where('tier', 'C')->orderBy('name')->get();

        return view('hi3.admin.tierlist', compact('sptier', 'stier', 'atier', 'btier', 'ctier'));
    }
    public function searchforadmin(Request $request)
    {
        $query = $request->search;
        $chara = Valkryie::where('name', 'like', '%'.$query.'%')
        ->orWhere('detail', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hi3.admin.character', compact('chara', 'query'));
    }
    public function sortbiovalkadmin()
    {
        $chara = Valkryie::where('type', 'BIO')->orderBy('name')->paginate(1000);

        return view('hi3.admin.character', compact('chara'));
    }
    public function sortimgvalkadmin()
    {
        $chara = Valkryie::where('type', 'IMG')->orderBy('name')->paginate(1000);

        return view('hi3.admin.character', compact('chara'));
    }
    public function sortmechvalkadmin()
    {
        $chara = Valkryie::where('type', 'MECH')->orderBy('name')->paginate(1000);

        return view('hi3.admin.character', compact('chara'));
    }
    public function sortpsyvalkadmin()
    {
        $chara = Valkryie::where('type', 'PSY')->orderBy('name')->paginate(1000);

        return view('hi3.admin.character', compact('chara'));
    }
    public function sortquavalkadmin()
    {
        $chara = Valkryie::where('type', 'QUA')->orderBy('name')->paginate(1000);

        return view('hi3.admin.character', compact('chara'));
    }
    public function sortsdvalkadmin()
    {
        $chara = Valkryie::where('type', 'SD')->orderBy('name')->paginate(1000);

        return view('hi3.admin.character', compact('chara'));
    }
    //honkai star rail
    public function charahsrindexadmin()
    {
        $chara = CharacterHsr::orderBy('name')->paginate(1000);

        return view('hsr.admin.character', compact('chara'));
    }
    public function showcharahsradmin($id)
    {
        $chara = CharacterHsr::all()->find($id);

        return view('hsr.admin.viewcharacter', compact('chara'));
    }
    public function searchhsrforadmin(Request $request)
    {
        $query = $request->search;
        $chara = CharacterHsr::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hsr.admin.character', compact('chara', 'query'));
    }
    public function sortfirehsrforadmin()
    {
        $chara = CharacterHsr::where('element', 'Fire')->orderBy('name')->paginate(1000);

        return view('hsr.admin.character', compact('chara'));
    }
    public function sorticehsrforadmin()
    {
        $chara = CharacterHsr::where('element', 'Ice')->orderBy('name')->paginate(1000);

        return view('hsr.admin.character', compact('chara'));
    }
    public function sortimaginaryhsrforadmin()
    {
        $chara = CharacterHsr::where('element', 'Imaginary')->orderBy('name')->paginate(1000);

        return view('hsr.admin.character', compact('chara'));
    }
    public function sortlightninghsrforadmin()
    {
        $chara = CharacterHsr::where('element', 'Lightning')->orderBy('name')->paginate(1000);

        return view('hsr.admin.character', compact('chara'));
    }
    public function sortphysicalhsrforadmin()
    {
        $chara = CharacterHsr::where('element', 'Physical')->orderBy('name')->paginate(1000);

        return view('hsr.admin.character', compact('chara'));
    }
    public function sortquantumhsrforadmin()
    {
        $chara = CharacterHsr::where('element', 'Quantum')->orderBy('name')->paginate(1000);

        return view('hsr.admin.character', compact('chara'));
    }
    public function sortwindhsrforadmin()
    {
        $chara = CharacterHsr::where('element', 'Wind')->orderBy('name')->paginate(1000);

        return view('hsr.admin.character', compact('chara'));
    }
    public function tierlistmochsradmin()
    {
        $sptier = CharacterHsr::where('tier_moc', 'S+')->orderBy('name')->get();
        $stier = CharacterHsr::where('tier_moc', 'S')->orderBy('name')->get();
        $atier = CharacterHsr::where('tier_moc', 'A')->orderBy('name')->get();
        $btier = CharacterHsr::where('tier_moc', 'B')->orderBy('name')->get();
        $ctier = CharacterHsr::where('tier_moc', 'C')->orderBy('name')->get();
        $dtier = CharacterHsr::where('tier_moc', 'D')->orderBy('name')->get();

        return view('hsr.admin.tierlistmemoryofchaos', compact('sptier', 'stier', 'atier', 'btier', 'ctier', 'dtier'));
    }
    public function tierlistpfhsradmin()
    {
        $sptier = CharacterHsr::where('tier_pf', 'S+')->orderBy('name')->get();
        $stier = CharacterHsr::where('tier_pf', 'S')->orderBy('name')->get();
        $atier = CharacterHsr::where('tier_pf', 'A')->orderBy('name')->get();
        $btier = CharacterHsr::where('tier_pf', 'B')->orderBy('name')->get();
        $ctier = CharacterHsr::where('tier_pf', 'C')->orderBy('name')->get();
        $dtier = CharacterHsr::where('tier_pf', 'D')->orderBy('name')->get();

        return view('hsr.admin.tierlistpurefiction', compact('sptier', 'stier', 'atier', 'btier', 'ctier', 'dtier'));
    }
    public function charahsrstoreindex()
    {
        $lightcone = Lightcone::all();
        $relic = Relic::all();
        $planar = Planar::all();
        return view('hsr.admin.addcharacter', compact('lightcone', 'relic', 'planar'));
    }
    public function storecharahsr(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'image' => 'required|mimes:png,jpg,jpeg',
            'name' => 'required|unique:character_hsrs',
            'path' => 'required',
            'element' => 'required',
            'role' => 'required',
            'detail' => 'required',
            'rarity' => 'required',
            'tier_moc' => 'required',
            'tier_pf' => 'required',
            'lightcone_sign_id' => 'required',
            'lightcone_alt1_id' => 'required',
            'lightcone_alt2_id' => 'required',
            'relic_opt1_id' => 'required',
            'relic_opt2_id' => 'required',
            'planar_opt1_id' => 'required',
            'planar_opt2_id' => 'required'
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $imageFile = $request->file('image');
        $extension = $imageFile->getClientOriginalExtension();
        $imageName = time().'.'.$extension;
        $imageFile->move('storage/characterimagehsr', $imageName);

        // DB::table('character_hsrs')->insert([
        //     'image' => $imageName,
        //     'name' => $request->get('name'),
        //     'path' => $request->get('path'),
        //     'element' => $request->get('element'),
        //     'detail' => $request->get('detail'),
        //     'rarity' => $request->get('rarity'),
        //     'tier_moc' => $request->get('tier_moc'),
        //     'tier_pf' => $request->get('tier_pf'),
        //     'lightcone_sign_id' => $request->get('lightcone_sign_id'),
        //     'lightcone_alt1_id' => $request->get('lightcone_alt1_id'),
        //     'lightcone_alt2_id' => $request->get('lightcone_alt2_id'),
        //     'relic_opt1_id' => $request->get('relic_opt1_id'),
        //     'relic_opt2_id' => $request->get('relic_opt2_id'),
        //     'planar_opt1_id' => $request->get('planar_opt1_id'),
        //     'planar_opt2_id' => $request->get('planar_opt2_id')
        // ]);
        $newcharahsr = new CharacterHsr();
        $newcharahsr->image = $imageName;
        $newcharahsr->name = $request['name'];
        $newcharahsr->path = $request['path'];
        $newcharahsr->element = $request['element'];
        $newcharahsr->role = $request['role'];
        $newcharahsr->detail = $request['detail'];
        $newcharahsr->rarity = $request['rarity'];
        $newcharahsr->tier_moc = $request['tier_moc'];
        $newcharahsr->tier_pf = $request['tier_pf'];
        $newcharahsr->lightcone_sign_id = $request['lightcone_sign_id'];
        $newcharahsr->lightcone_alt1_id = $request['lightcone_alt1_id'];
        $newcharahsr->lightcone_alt2_id = $request['lightcone_alt2_id'];
        $newcharahsr->relic_opt1_id = $request['relic_opt1_id'];
        $newcharahsr->relic_opt2_id = $request['relic_opt2_id'];
        $newcharahsr->planar_opt1_id = $request['planar_opt1_id'];
        $newcharahsr->planar_opt2_id = $request['planar_opt2_id'];
        $newcharahsr->save();

        Alert::success('Selamat', 'Character Berhasil ditambah!');
        return redirect('starrail/admin/character/');
    }
    public function destroycharahsr($id)
    {
        CharacterHsr::all()->find($id)->delete();
        Alert::success('Selamat', 'Character Berhasil Dihapus!');
        return redirect('starrail/admin/character');
    }
    public function updatecharahsrindex($id)
    {
        $chara = CharacterHsr::find($id);
        return view('hsr.admin.updatecharacter', compact('chara'));
    }
    public function updatecharahsr(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg',
            'name',
            'path',
            'element',
            'detail',
            'rarity',
            'tier_moc',
            'tier_pf',
            'lightcone_sign_id',
            'lightcone_alt1_id',
            'lightcone_alt2_id',
            'relic_opt1_id',
            'relic_opt2_id',
            'planar_opt1_id',
            'planar_opt2_id'
        ]);

        $up = CharacterHsr::find($id);
        $up->name = $request['name'];
        $up->path = $request['path'];
        $up->element = $request['element'];
        $up->detail = $request['detail'];
        $up->rarity = $request['rarity'];
        $up->tier_moc = $request['tier_moc'];
        $up->tier_pf = $request['tier_pf'];
        $up->lightcone_sign_id = $request['lightcone_sign_id'];
        $up->lightcone_alt1_id = $request['lightcone_alt1_id'];
        $up->lightcone_alt2_id = $request['lightcone_alt2_id'];
        $up->relic_opt1_id = $request['relic_opt1_id'];
        $up->relic_opt2_id = $request['relic_opt2_id'];
        $up->planar_opt1_id = $request['planar_opt1_id'];
        $up->planar_opt2_id = $request['planar_opt2_id'];
        if($request->hasFile('image'))
        {
            $located = 'storage/characterimagehsr/'.$up->image;
            if(File::exists($located))
            {
                File::delete($located);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/characterimagehsr', $filename);
            $up->image = $filename;
        }
        $up->update();
        Alert::success('Selamat', 'Character Berhasil di Update!');
        return redirect('starrail/admin/character/'.$id);
    }
    //genshin impact
    public function charagenshinindexadmin()
    {
        $chara = CharacterGenshin::orderBy('name')->paginate(1000);

        return view('gi.admin.character', compact('chara'));
    }
    public function showcharagenshinadmin($id)
    {
        $chara = CharacterGenshin::all()->find($id);

        return view('gi.admin.viewcharacter', compact('chara'));
    }
    public function searchgenshinforadmin(Request $request)
    {
        $query = $request->search;
        $chara = CharacterGenshin::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('gi.admin.character', compact('chara', 'query'));
    }
    public function sortanemogenshinforadmin()
    {
        $chara = CharacterGenshin::where('element', 'Anemo')->orderBy('name')->paginate(1000);

        return view('gi.admin.character', compact('chara'));
    }
    public function sortcryogenshinforadmin()
    {
        $chara = CharacterGenshin::where('element', 'Cryo')->orderBy('name')->paginate(1000);

        return view('gi.admin.character', compact('chara'));
    }
    public function sortdendrogenshinforadmin()
    {
        $chara = CharacterGenshin::where('element', 'Dendro')->orderBy('name')->paginate(1000);

        return view('gi.admin.character', compact('chara'));
    }
    public function sortelectrogenshinforadmin()
    {
        $chara = CharacterGenshin::where('element', 'Electro')->orderBy('name')->paginate(1000);

        return view('gi.admin.character', compact('chara'));
    }
    public function sortgeogenshinforadmin()
    {
        $chara = CharacterGenshin::where('element', 'Geo')->orderBy('name')->paginate(1000);

        return view('gi.admin.character', compact('chara'));
    }
    public function sorthydrogenshinforadmin()
    {
        $chara = CharacterGenshin::where('element', 'Hydro')->orderBy('name')->paginate(1000);

        return view('gi.admin.character', compact('chara'));
    }
    public function sortpyrogenshinforadmin()
    {
        $chara = CharacterGenshin::where('element', 'Pyro')->orderBy('name')->paginate(1000);

        return view('gi.admin.character', compact('chara'));
    }
    public function tierlistgenshinadmin()
    {
        $sptier = CharacterGenshin::where('tier', 'S+')->orderBy('name')->get();
        $stier = CharacterGenshin::where('tier', 'S')->orderBy('name')->get();
        $atier = CharacterGenshin::where('tier', 'A')->orderBy('name')->get();
        $btier = CharacterGenshin::where('tier', 'B')->orderBy('name')->get();
        $ctier = CharacterGenshin::where('tier', 'C')->orderBy('name')->get();

        return view('gi.admin.tierlist', compact('sptier', 'stier', 'atier', 'btier', 'ctier'));
    }

}
