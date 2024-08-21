<?php

namespace App\Http\Controllers;

use App\Models\Lightcone;
use App\Models\Stigmata;
use App\Models\Valkryie;
use App\Models\WeaponGenshin;
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
        $weapon = WeaponHonkai::orderBy('name')->paginate(1000);

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
    public function sortbowhonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Bow')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function sortcannonhonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Cannon')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function sortchainbladehonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Chained Blade')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function sortchakramhonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Chakram')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function sortcrosshonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Cross')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function sortdrivecorehonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Drive Cores')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function sortgauntlethonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Gauntlet')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function sortgreatswordhonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Greatsword')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function sortjavelinhonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Javelin')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function sortkatanahonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Katana')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function sortlancehonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Lance')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function sortrapidshotcrossbowhonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Rapid-Shot Crossbows')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function sortrockethammerhonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Rocket Hammers')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function sortscythehonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Scythe')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    public function sortpistolhonkaiforguest()
    {
        $weapon = WeaponHonkai::where('type', 'Pistol')->orderBy('name')->paginate(1000);

        return view('hi3.guest.weapon', compact('weapon'));
    }
    //genshin impact
    public function weapongenshinindexguest()
    {
        $weapon = WeaponGenshin::orderBy('name')->paginate(1000);

        return view('gi.guest.weapon', compact('weapon'));
    }
    public function showweapongenshinguest($id)
    {
        $weapon = WeaponGenshin::all()->find($id);

        return view('gi.guest.viewweapon', compact('weapon'));
    }
    public function searchweapongenshinforguest(Request $request)
    {
        $query = $request->search;
        $weapon = WeaponGenshin::where('name', 'like', '%'.$query.'%')
        ->orWhere('detail', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('gi.guest.weapon', compact('weapon', 'query'));
    }
    public function sortswordgenshinforguest()
    {
        $weapon = WeaponGenshin::where('type', 'Sword')->orderBy('name')->paginate(1000);

        return view('gi.guest.weapon', compact('weapon'));
    }
    public function sortbowgenshinforguest()
    {
        $weapon = WeaponGenshin::where('type', 'Bow')->orderBy('name')->paginate(1000);

        return view('gi.guest.weapon', compact('weapon'));
    }
    public function sortcatalystgenshinforguest()
    {
        $weapon = WeaponGenshin::where('type', 'Catalyst')->orderBy('name')->paginate(1000);

        return view('gi.guest.weapon', compact('weapon'));
    }
    public function sortclaymoregenshinforguest()
    {
        $weapon = WeaponGenshin::where('type', 'Claymore')->orderBy('name')->paginate(1000);

        return view('gi.guest.weapon', compact('weapon'));
    }
    public function sortpolearmgenshinforguest()
    {
        $weapon = WeaponGenshin::where('type', 'Polearm')->orderBy('name')->paginate(1000);

        return view('gi.guest.weapon', compact('weapon'));
    }
    //honkai star rail
    public function lightconeindexguest()
    {
        $lightcone = Lightcone::orderBy('name')->paginate(1000);

        return view('hsr.guest.lightcone', compact('lightcone'));
    }
    public function showlightconeguest($id)
    {
        $lightcone = Lightcone::all()->find($id);

        return view('hsr.guest.viewlightcone', compact('lightcone'));
    }
    public function searchlightconeforguest(Request $request)
    {
        $query = $request->search;
        $lightcone = Lightcone::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hsr.guest.lightcone', compact('lightcone', 'query'));
    }
    public function sortlcabundanceforguest()
    {
        $lightcone = Lightcone::where('path', 'Abundance')->orderBy('name')->paginate(1000);

        return view('hsr.guest.lightcone', compact('lightcone'));
    }
    public function sortlcdestructionforguest()
    {
        $lightcone = Lightcone::where('path', 'Destruction')->orderBy('name')->paginate(1000);

        return view('hsr.guest.lightcone', compact('lightcone'));
    }
    public function sortlceruditionforguest()
    {
        $lightcone = Lightcone::where('path', 'Erudition')->orderBy('name')->paginate(1000);

        return view('hsr.guest.lightcone', compact('lightcone'));
    }
    public function sortlcharmonyforguest()
    {
        $lightcone = Lightcone::where('path', 'Harmony')->orderBy('name')->paginate(1000);

        return view('hsr.guest.lightcone', compact('lightcone'));
    }
    public function sortlcthehuntforguest()
    {
        $lightcone = Lightcone::where('path', 'The Hunt')->orderBy('name')->paginate(1000);

        return view('hsr.guest.lightcone', compact('lightcone'));
    }
    public function sortlcnihilityforguest()
    {
        $lightcone = Lightcone::where('path', 'Nihility')->orderBy('name')->paginate(1000);

        return view('hsr.guest.lightcone', compact('lightcone'));
    }
    public function sortlcpreservationforguest()
    {
        $lightcone = Lightcone::where('path', 'Preservation')->orderBy('name')->paginate(1000);

        return view('hsr.guest.lightcone', compact('lightcone'));
    }

    //member
    //genshin impact
    public function weapongenshinindexmember()
    {
        $weapon = WeaponGenshin::orderBy('name')->paginate(1000);

        return view('gi.member.weapon', compact('weapon'));
    }
    public function showweapongenshinmember($id)
    {
        $weapon = WeaponGenshin::all()->find($id);

        return view('gi.member.viewweapon', compact('weapon'));
    }
    public function searchweapongenshinformember(Request $request)
    {
        $query = $request->search;
        $weapon = WeaponGenshin::where('name', 'like', '%'.$query.'%')
        ->orWhere('detail', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('gi.member.weapon', compact('weapon', 'query'));
    }
    public function sortswordgenshinformember()
    {
        $weapon = WeaponGenshin::where('type', 'Sword')->orderBy('name')->paginate(1000);

        return view('gi.member.weapon', compact('weapon'));
    }
    public function sortbowgenshinformember()
    {
        $weapon = WeaponGenshin::where('type', 'Bow')->orderBy('name')->paginate(1000);

        return view('gi.member.weapon', compact('weapon'));
    }
    public function sortcatalystgenshinformember()
    {
        $weapon = WeaponGenshin::where('type', 'Catalyst')->orderBy('name')->paginate(1000);

        return view('gi.member.weapon', compact('weapon'));
    }
    public function sortclaymoregenshinformember()
    {
        $weapon = WeaponGenshin::where('type', 'Claymore')->orderBy('name')->paginate(1000);

        return view('gi.member.weapon', compact('weapon'));
    }
    public function sortpolearmgenshinformember()
    {
        $weapon = WeaponGenshin::where('type', 'Polearm')->orderBy('name')->paginate(1000);

        return view('gi.member.weapon', compact('weapon'));
    }
    //honkai star rail
    public function lightconeindexmember()
    {
        $lightcone = Lightcone::orderBy('name')->paginate(1000);

        return view('hsr.member.lightcone', compact('lightcone'));
    }
    public function showlightconemember($id)
    {
        $lightcone = Lightcone::all()->find($id);

        return view('hsr.member.viewlightcone', compact('lightcone'));
    }
    public function searchlightconeformember(Request $request)
    {
        $query = $request->search;
        $lightcone = Lightcone::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hsr.member.lightcone', compact('lightcone', 'query'));
    }
    public function sortlcabundanceformember()
    {
        $lightcone = Lightcone::where('path', 'Abundance')->orderBy('name')->paginate(1000);

        return view('hsr.member.lightcone', compact('lightcone'));
    }
    public function sortlcdestructionformember()
    {
        $lightcone = Lightcone::where('path', 'Destruction')->orderBy('name')->paginate(1000);

        return view('hsr.member.lightcone', compact('lightcone'));
    }
    public function sortlceruditionformember()
    {
        $lightcone = Lightcone::where('path', 'Erudition')->orderBy('name')->paginate(1000);

        return view('hsr.member.lightcone', compact('lightcone'));
    }
    public function sortlcharmonyformember()
    {
        $lightcone = Lightcone::where('path', 'Harmony')->orderBy('name')->paginate(1000);

        return view('hsr.member.lightcone', compact('lightcone'));
    }
    public function sortlcthehuntformember()
    {
        $lightcone = Lightcone::where('path', 'The Hunt')->orderBy('name')->paginate(1000);

        return view('hsr.member.lightcone', compact('lightcone'));
    }
    public function sortlcnihilityformember()
    {
        $lightcone = Lightcone::where('path', 'Nihility')->orderBy('name')->paginate(1000);

        return view('hsr.member.lightcone', compact('lightcone'));
    }
    public function sortlcpreservationformember()
    {
        $lightcone = Lightcone::where('path', 'Preservation')->orderBy('name')->paginate(1000);

        return view('hsr.member.lightcone', compact('lightcone'));
    }
    //honkai impact
    public function weaponhonkaiindexmember()
    {
        $weapon = WeaponHonkai::orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function showweaponmember($id)
    {
        $weapon = WeaponHonkai::all()->find($id);

        return view('hi3.member.viewweapon', compact('weapon'));
    }
    public function searchweaponformember(Request $request)
    {
        $query = $request->search;
        $weapon = WeaponHonkai::where('name', 'like', '%'.$query.'%')
        ->orWhere('detail', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hi3.member.weapon', compact('weapon', 'query'));
    }
    public function sortbowhonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Bow')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function sortcannonhonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Cannon')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function sortchainbladehonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Chained Blade')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function sortchakramhonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Chakram')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function sortcrosshonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Cross')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function sortdrivecorehonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Drive Cores')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function sortgauntlethonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Gauntlet')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function sortgreatswordhonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Greatsword')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function sortjavelinhonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Javelin')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function sortkatanahonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Katana')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function sortlancehonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Lance')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function sortrapidshotcrossbowhonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Rapid-Shot Crossbows')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function sortrockethammerhonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Rocket Hammers')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function sortscythehonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Scythe')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }
    public function sortpistolhonkaiformember()
    {
        $weapon = WeaponHonkai::where('type', 'Pistol')->orderBy('name')->paginate(1000);

        return view('hi3.member.weapon', compact('weapon'));
    }

    //admin
    //honkai star rail
    public function lightconeindexadmin()
    {
        $lightcone = Lightcone::orderBy('name')->paginate(1000);

        return view('hsr.admin.lightcone', compact('lightcone'));
    }
    public function showlightconeadmin($id)
    {
        $lightcone = Lightcone::all()->find($id);

        return view('hsr.admin.viewlightcone', compact('lightcone'));
    }
    public function searchlightconeforadmin(Request $request)
    {
        $query = $request->search;
        $lightcone = Lightcone::where('name', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hsr.admin.lightcone', compact('lightcone', 'query'));
    }
    public function sortlcabundanceforadmin()
    {
        $lightcone = Lightcone::where('path', 'Abundance')->orderBy('name')->paginate(1000);

        return view('hsr.admin.lightcone', compact('lightcone'));
    }
    public function sortlcdestructionforadmin()
    {
        $lightcone = Lightcone::where('path', 'Destruction')->orderBy('name')->paginate(1000);

        return view('hsr.admin.lightcone', compact('lightcone'));
    }
    public function sortlceruditionforadmin()
    {
        $lightcone = Lightcone::where('path', 'Erudition')->orderBy('name')->paginate(1000);

        return view('hsr.admin.lightcone', compact('lightcone'));
    }
    public function sortlcharmonyforadmin()
    {
        $lightcone = Lightcone::where('path', 'Harmony')->orderBy('name')->paginate(1000);

        return view('hsr.admin.lightcone', compact('lightcone'));
    }
    public function sortlcthehuntforadmin()
    {
        $lightcone = Lightcone::where('path', 'The Hunt')->orderBy('name')->paginate(1000);

        return view('hsr.admin.lightcone', compact('lightcone'));
    }
    public function sortlcnihilityforadmin()
    {
        $lightcone = Lightcone::where('path', 'Nihility')->orderBy('name')->paginate(1000);

        return view('hsr.admin.lightcone', compact('lightcone'));
    }
    public function sortlcpreservationforadmin()
    {
        $lightcone = Lightcone::where('path', 'Preservation')->orderBy('name')->paginate(1000);

        return view('hsr.admin.lightcone', compact('lightcone'));
    }
    //genshin impact
    public function weapongenshinindexadmin()
    {
        $weapon = WeaponGenshin::orderBy('name')->paginate(1000);

        return view('gi.admin.weapon', compact('weapon'));
    }
    public function showweapongenshinadmin($id)
    {
        $weapon = WeaponGenshin::all()->find($id);

        return view('gi.admin.viewweapon', compact('weapon'));
    }
    public function searchweapongenshinforadmin(Request $request)
    {
        $query = $request->search;
        $weapon = WeaponGenshin::where('name', 'like', '%'.$query.'%')
        ->orWhere('detail', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('gi.admin.weapon', compact('weapon', 'query'));
    }
    public function sortswordgenshinforadmin()
    {
        $weapon = WeaponGenshin::where('type', 'Sword')->orderBy('name')->paginate(1000);

        return view('gi.admin.weapon', compact('weapon'));
    }
    public function sortbowgenshinforadmin()
    {
        $weapon = WeaponGenshin::where('type', 'Bow')->orderBy('name')->paginate(1000);

        return view('gi.admin.weapon', compact('weapon'));
    }
    public function sortcatalystgenshinforadmin()
    {
        $weapon = WeaponGenshin::where('type', 'Catalyst')->orderBy('name')->paginate(1000);

        return view('gi.admin.weapon', compact('weapon'));
    }
    public function sortclaymoregenshinforadmin()
    {
        $weapon = WeaponGenshin::where('type', 'Claymore')->orderBy('name')->paginate(1000);

        return view('gi.admin.weapon', compact('weapon'));
    }
    public function sortpolearmgenshinforadmin()
    {
        $weapon = WeaponGenshin::where('type', 'Polearm')->orderBy('name')->paginate(1000);

        return view('gi.admin.weapon', compact('weapon'));
    }
    //honkai impact
    public function weaponhonkaiindexadmin()
    {
        $weapon = WeaponHonkai::orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function showweaponadmin($id)
    {
        $weapon = WeaponHonkai::all()->find($id);

        return view('hi3.admin.viewweapon', compact('weapon'));
    }
    public function searchweaponforadmin(Request $request)
    {
        $query = $request->search;
        $weapon = WeaponHonkai::where('name', 'like', '%'.$query.'%')
        ->orWhere('detail', 'like', '%'.$query.'%')
        ->orderBy('name')->paginate(10)->withQueryString();

        return view('hi3.admin.weapon', compact('weapon', 'query'));
    }
    public function sortbowhonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Bow')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function sortcannonhonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Cannon')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function sortchainbladehonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Chained Blade')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function sortchakramhonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Chakram')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function sortcrosshonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Cross')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function sortdrivecorehonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Drive Cores')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function sortgauntlethonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Gauntlet')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function sortgreatswordhonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Greatsword')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function sortjavelinhonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Javelin')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function sortkatanahonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Katana')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function sortlancehonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Lance')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function sortrapidshotcrossbowhonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Rapid-Shot Crossbows')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function sortrockethammerhonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Rocket Hammers')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function sortscythehonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Scythe')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }
    public function sortpistolhonkaiforadmin()
    {
        $weapon = WeaponHonkai::where('type', 'Pistol')->orderBy('name')->paginate(1000);

        return view('hi3.admin.weapon', compact('weapon'));
    }

}
