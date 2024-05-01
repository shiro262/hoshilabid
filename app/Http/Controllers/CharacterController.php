<?php

namespace App\Http\Controllers;

use App\Models\CharacterGenshin;
use App\Models\CharacterHsr;
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
        $chara = Valkryie::orderBy('name')->paginate(10);

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
        $chara = CharacterGenshin::orderBy('name')->paginate(10);

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
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('gi.guest.character', compact('chara', 'query'));
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
        $chara = CharacterHsr::orderBy('name')->paginate(10);

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
    public function tierlisthsrguest()
    {
        $sptier = CharacterHsr::where('tier_moc', 'S+')->orderBy('name')->get();
        $stier = CharacterHsr::where('tier_moc', 'S')->orderBy('name')->get();
        $atier = CharacterHsr::where('tier_moc', 'A')->orderBy('name')->get();
        $btier = CharacterHsr::where('tier_moc', 'B')->orderBy('name')->get();
        $ctier = CharacterHsr::where('tier_moc', 'C')->orderBy('name')->get();
        $dtier = CharacterHsr::where('tier_moc', 'D')->orderBy('name')->get();

        return view('hsr.guest.tierlist', compact('sptier', 'stier', 'atier', 'btier', 'ctier', 'dtier'));
    }

    //member
    public function charaindexmember()
    {
        $chara = Valkryie::orderBy('name')->paginate(10);

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

    //admin
    public function charaindexadmin()
    {
        $chara = Valkryie::orderBy('name')->paginate(10);

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
    public function charastoreindex()
    {
        $weaponhonkai = WeaponHonkai::all();
        $stigmatahonkai = Stigmata::all();
        return view('hi3.admin.addcharacter', compact('weaponhonkai', 'stigmatahonkai'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'image' => 'required|mimes:png,jpg,jpeg',
            'name' => 'required|unique:characters',
            'detail' => 'required',
            'rank' => 'required|in:S,A,B',
            'tier' => 'required|in:S+,S,A,B,C',
            'weapon' => 'required',
            'stigmata' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $imageFile = $request->file('image');
        $imageName = time().'.'.
        $imageFile->getClientOriginalExtension();
        Storage::putFileAs('public/chara', $imageFile,$imageName);

        DB::table('characters')->insert([
            'image' => $imageName,
            'name' => $request->get('name'),
            'detail' => $request->get('detail'),
            'rank' => $request->get('rank'),
            'tier' => $request->get('tier'),
            'weapon' => $request->get('weapon'),
            'stigmata' => $request->get('stigmata')
        ]);
        Alert::success('Congrats', 'Character Added!');
        return redirect('hi3/admin/character/');
    }
    public function destroy($id)
    {
        Valkryie::all()->find($id)->delete();
        Alert::success('Congrats', 'Character Remove!');
        return redirect('hi3/admin/character');
    }
    public function updatecharaindex($id)
    {
        $chara = Valkryie::find($id);
        return view('hi3.admin.updatecharacter', compact('chara'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg',
            'name',
            'detail',
            'rank' => 'in:S,A,B',
            'tier' => 'in:S+,S,A,B,C',
            'weapon',
            'stigmata'
        ]);

        $up = Valkryie::find($id);
        $up->name = $request['name'];
        $up->detail = $request['detail'];
        $up->rank = $request['rank'];
        $up->tier = $request['tier'];
        $up->weapon = $request['weapon'];
        $up->stigmata = $request['stigmata'];
        if($request->hasFile('image'))
        {
            $located = 'storage/chara/'.$up->image;
            if(File::exists($located))
            {
                File::delete($located);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/chara', $filename);
            $up->image = $filename;
        }
        $up->update();
        Alert::success('Congrats', 'Character Updated!');
        return redirect('hi3/admin/character/'.$id);
    }
    public function searchforadmin(Request $request)
    {
        $query = $request->search;
        $chara = Valkryie::where('name', 'like', '%'.$query.'%')
        ->orWhere('detail', 'like', '%'.$query.'%')
        ->orWhere('id', 'like', $query)
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hi3.admin.character', compact('chara', 'query'));
    }
}
