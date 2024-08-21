<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use App\Models\GuideHonkai;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class GuideController extends Controller
{
    //guest
    //honkai impact
    public function guideindexguest()
    {
        return view('hi3.guest.guide');
    }
    public function guideteams()
    {
        return view('hi3.guest.Guide.teams');
    }
    public function guidegacha()
    {
        return view('hi3.guest.Guide.gacha');
    }
    public function guidecombat()
    {
        return view('hi3.guest.Guide.combat');
    }
    public function guideshop()
    {
        return view('hi3.guest.Guide.shops');
    }
    public function guideelysian()
    {
        return view('hi3.guest.Guide.elysianrealm');
    }
    public function guideenergy()
    {
        return view('hi3.guest.Guide.energy');
    }
    public function guiderealms()
    {
        return view('hi3.guest.Guide.realmsbattle');
    }
    public function guidefoundry()
    {
        return view('hi3.guest.Guide.foundry');
    }

    public function guidecrystals()
    {
        return view('hi3.guest.Guide.crystals');
    }

    public Function guidebegginnerhi3()
    {
       return view('hi3.guest.Guide.begginer');
    }
    //hsr
    public function guidehsrindexguest()
    {
        return view('hsr.guest.guide');
    }
    public function guidepurefictionguest()
    {
        return view('hsr.guest.guide.purefictionguide');
    }
    public function guidememoryguest()
    {
        return view('hsr.guest.guide.memoryguide');
    }
    public function guideswarmguest()
    {
        return view('hsr.guest.guide.swarmguide');
    }
    public function guidesimulatedguest()
    {
        return view('hsr.guest.guide.simulatedguide');
    }
    public function guidegachaguest()
    {
        return view('hsr.guest.guide.gachaguide');
    }
    public function guidepathguest()
    {
        return view('hsr.guest.guide.pathguide');
    }
    public function guideelementsguest()
    {
        return view('hsr.guest.guide.elementsguide');
    }
    public function guidecombatguest()
    {
        return view('hsr.guest.guide.combatguide');
    }
    public function guiderelicguest()
    {
        return view('hsr.guest.guide.relicplanarguide');
    }
    public function guidecharaguest()
    {
        return view('hsr.guest.guide.charaguide');
    }
    public function guidelightconeguest()
    {
        return view('hsr.guest.guide.lightconeguide');
    }
    //genshin impact
    public function guideindexgenshinguest()
    {
        return view('gi.guest.guide');
    }
    public function gachasystemgenshinguest()
    {
        return view('gi.guest.guide.gachasystem');
    }
    public function earlygametipsgenshinguest()
    {
        return view('gi.guest.guide.earlygametips');
    }
    public function introtogamegenshinguest()
    {
        return view('gi.guest.guide.introtogame');
    }
    public function elementalreactiongenshinguest()
    {
        return view('gi.guest.guide.elementalreaction');
    }
    public function shouldupullcurrentbannergenshinguest()
    {
        return view('gi.guest.guide.shouldupullcurrentbanner');
    }
    public function teambuildinggenshinguest()
    {
        return view('gi.guest.guide.tipsteambuilding');
    }
    public function charaupgradegenshinguest()
    {
        return view('gi.guest.guide.characterupgrade');
    }
    public function f2pgachagenshinguest()
    {
        return view('gi.guest.guide.f2pgachaguide');
    }
    public function introtospiralabyssgenshinguest()
    {
        return view('gi.guest.guide.introtospiralabyss');
    }
    public function currentspiralabysstipsgenshinguest()
    {
        return view('gi.guest.guide.currentspiralabysstips');
    }

    //member
    //honkai impact
    public function guideindexmember()
    {
        return view('hi3.member.guide');
    }
    public function guideteamsmember()
    {
        return view('hi3.member.Guide.teams');
    }
    public function guidegachamember()
    {
        return view('hi3.member.Guide.gacha');
    }
    public function guidecombatmember()
    {
        return view('hi3.member.Guide.combat');
    }
    public function guideshopmember()
    {
        return view('hi3.member.Guide.shops');
    }
    public function guideelysianmember()
    {
        return view('hi3.member.Guide.elysianrealm');
    }
    public function guideenergymember()
    {
        return view('hi3.member.Guide.energy');
    }
    public function guiderealmsmember()
    {
        return view('hi3.member.Guide.realmsbattle');
    }
    public function guidefoundrymember()
    {
        return view('hi3.member.Guide.foundry');
    }
    public function guidecrystalsmember()
    {
        return view('hi3.member.Guide.crystals');
    }
    public Function guidebegginnerhi3member()
    {
       return view('hi3.member.Guide.begginer');
    }
    //genshin impact
    public function guideindexgenshinmember()
    {
        return view('gi.member.guide');
    }
    public function gachasystemgenshinmember()
    {
        return view('gi.member.guide.gachasystem');
    }
    public function earlygametipsgenshinmember()
    {
        return view('gi.member.guide.earlygametips');
    }
    public function introtogamegenshinmember()
    {
        return view('gi.member.guide.introtogame');
    }
    public function elementalreactiongenshinmember()
    {
        return view('gi.member.guide.elementalreaction');
    }
    public function shouldupullcurrentbannergenshinmember()
    {
        return view('gi.member.guide.shouldupullcurrentbanner');
    }
    public function teambuildinggenshinmember()
    {
        return view('gi.member.guide.tipsteambuilding');
    }
    public function charaupgradegenshinmember()
    {
        return view('gi.member.guide.characterupgrade');
    }
    public function f2pgachagenshinmember()
    {
        return view('gi.member.guide.f2pgachaguide');
    }
    public function introtospiralabyssgenshinmember()
    {
        return view('gi.member.guide.introtospiralabyss');
    }
    public function currentspiralabysstipsgenshinmember()
    {
        return view('gi.member.guide.currentspiralabysstips');
    }
    //hsr
    public function guidehsrindexmember()
    {
        return view('hsr.member.guide');
    }
    public function guidepurefictionmember()
    {
        return view('hsr.member.guide.purefictionguide');
    }
    public function guidememorymember()
    {
        return view('hsr.member.guide.memoryguide');
    }
    public function guideswarmmember()
    {
        return view('hsr.member.guide.swarmguide');
    }
    public function guidesimulatedmember()
    {
        return view('hsr.member.guide.simulatedguide');
    }
    public function guidegachamemberhsr()
    {
        return view('hsr.member.guide.gachaguide');
    }
    public function guidepathmember()
    {
        return view('hsr.member.guide.pathguide');
    }
    public function guideelementsmember()
    {
        return view('hsr.member.guide.elementsguide');
    }
    public function guidecombatmemberhsr()
    {
        return view('hsr.member.guide.combatguide');
    }
    public function guiderelicmember()
    {
        return view('hsr.member.guide.relicplanarguide');
    }
    public function guidecharamember()
    {
        return view('hsr.member.guide.charaguide');
    }
    public function guidelightconemember()
    {
        return view('hsr.member.guide.lightconeguide');
    }

    //admin
    //honkai impact
    public function guideindexadmin()
    {
        return view('hi3.admin.guide');
    }
    public function guideteamsadmin()
    {
        return view('hi3.admin.Guide.teams');
    }
    public function guidegachaadmin()
    {
        return view('hi3.admin.Guide.gacha');
    }
    public function guidecombatadmin()
    {
        return view('hi3.admin.Guide.combat');
    }
    public function guideshopadmin()
    {
        return view('hi3.admin.Guide.shops');
    }
    public function guideelysianadmin()
    {
        return view('hi3.admin.Guide.elysianrealm');
    }
    public function guideenergyadmin()
    {
        return view('hi3.admin.Guide.energy');
    }
    public function guiderealmsadmin()
    {
        return view('hi3.admin.Guide.realmsbattle');
    }
    public function guidefoundryadmin()
    {
        return view('hi3.admin.Guide.foundry');
    }
    public function guidecrystalsadmin()
    {
        return view('hi3.admin.Guide.crystals');
    }
    public Function guidebegginnerhi3admin()
    {
       return view('hi3.admin.Guide.begginer');
    }
    //genshin impact
    public function guideindexgenshinadmin()
    {
        return view('gi.admin.guide');
    }
    public function gachasystemgenshinadmin()
    {
        return view('gi.admin.guide.gachasystem');
    }
    public function earlygametipsgenshinadmin()
    {
        return view('gi.admin.guide.earlygametips');
    }
    public function introtogamegenshinadmin()
    {
        return view('gi.admin.guide.introtogame');
    }
    public function elementalreactiongenshinadmin()
    {
        return view('gi.admin.guide.elementalreaction');
    }
    public function shouldupullcurrentbannergenshinadmin()
    {
        return view('gi.admin.guide.shouldupullcurrentbanner');
    }
    public function teambuildinggenshinadmin()
    {
        return view('gi.admin.guide.tipsteambuilding');
    }
    public function charaupgradegenshinadmin()
    {
        return view('gi.admin.guide.characterupgrade');
    }
    public function f2pgachagenshinadmin()
    {
        return view('gi.admin.guide.f2pgachaguide');
    }
    public function introtospiralabyssgenshinadmin()
    {
        return view('gi.admin.guide.introtospiralabyss');
    }
    public function currentspiralabysstipsgenshinadmin()
    {
        return view('gi.admin.guide.currentspiralabysstips');
    }
    //hsr
    public function guidehsrindexadmin()
    {
        return view('hsr.admin.guide');
    }
    public function guidepurefictionadmin()
    {
        return view('hsr.admin.guide.purefictionguide');
    }
    public function guidememoryadmin()
    {
        return view('hsr.admin.guide.memoryguide');
    }
    public function guideswarmadmin()
    {
        return view('hsr.admin.guide.swarmguide');
    }
    public function guidesimulatedadmin()
    {
        return view('hsr.admin.guide.simulatedguide');
    }
    public function guidegachaadminhsr()
    {
        return view('hsr.admin.guide.gachaguide');
    }
    public function guidepathadmin()
    {
        return view('hsr.admin.guide.pathguide');
    }
    public function guideelementsadmin()
    {
        return view('hsr.admin.guide.elementsguide');
    }
    public function guidecombatadminhsr()
    {
        return view('hsr.admin.guide.combatguide');
    }
    public function guiderelicadmin()
    {
        return view('hsr.admin.guide.relicplanarguide');
    }
    public function guidecharaadmin()
    {
        return view('hsr.admin.guide.charaguide');
    }
    public function guidelightconeadmin()
    {
        return view('hsr.admin.guide.lightconeguide');
    }

}
