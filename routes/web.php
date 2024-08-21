<?php

use App\Http\Controllers\ForumController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WeaponController;
use Illuminate\Support\Facades\Route;

//guest
Route::middleware(['isGuest'])->group(function(){
    //landing
    Route::get('/', [HomeController::class, 'index'])->name('Landing');
    //register
    Route::get('/register', [RegisterController::class, 'openRegisterPage'])->name('guest.viewRegistration');
    Route::post('/register', [RegisterController::class, 'registration'])->name('guest.method.register');
    //login
    Route::get('/login', [LoginController::class, 'loginindex'])->name('guest.viewLogin');
    Route::post('/login-user', [LoginController::class, 'login'])->name('guest.method.login');
    //password reset
    Route::get('/forgotpassword', [ResetPasswordController::class, 'indexforgot'])->name('guest.viewForgotPassword');
    Route::get('/recoveryquestion', [ResetPasswordController::class, 'indexrecoveryquestion'])->name('guest.viewRecoveryPassword');
    Route::post('/forgotpassword/check', [ResetPasswordController::class, 'confirm'])->name('guest.method.checkUsername');
    Route::post('/forgotpassword/recover', [ResetPasswordController::class, 'recover'])->name('guest.method.checkRecovery');
    Route::patch('/forgot/password/change', [ResetPasswordController::class, 'updatePassword'])->name('guest.method.updatePassword');
    //Honkai Impact 3
    //home - honkai impact 3
    Route::get('honkaiimpact/guest/home', [HomeController::class, 'indexguesthonkaiimpact3'])->name('Guest Home Honkai Impact');
    //character + tier list - honkai impact 3
    Route::get('honkaiimpact/guest/character', [CharacterController::class, 'charaindexguest'])->name('Guest Character Page');
    Route::get('honkaiimpact/guest/character/search', [CharacterController::class, 'searchforguest'])->name('Search Character Guest');
    Route::get('honkaiimpact/guest/character/bio', [CharacterController::class, 'sortbiovalkguest'])->name('Guest Character BIO Page');
    Route::get('honkaiimpact/guest/character/img', [CharacterController::class, 'sortimgvalkguest'])->name('Guest Character IMG Page');
    Route::get('honkaiimpact/guest/character/mech', [CharacterController::class, 'sortmechvalkguest'])->name('Guest Character MECH Page');
    Route::get('honkaiimpact/guest/character/psy', [CharacterController::class, 'sortpsyvalkguest'])->name('Guest Character PSY Page');
    Route::get('honkaiimpact/guest/character/qua', [CharacterController::class, 'sortquavalkguest'])->name('Guest Character QUA Page');
    Route::get('honkaiimpact/guest/character/sd', [CharacterController::class, 'sortsdvalkguest'])->name('Guest Character SD Page');
    Route::get('honkaiimpact/guest/character/{id}', [CharacterController::class, 'showcharaguest'])->name('View Character Guest');
    Route::get('honkaiimpact/guest/tierlist', [CharacterController::class, 'tierlistguest'])->name('Guest Tier List Page');
    //weapon + stigmata - honkai impact 3
    Route::get('honkaiimpact/guest/weapon', [WeaponController::class, 'weaponhonkaiindexguest'])->name('Guest Weapon Page');
    Route::get('honkaiimpact/guest/weapon/search', [WeaponController::class, 'searchweaponforguest'])->name('Search Weapon Guest');
    Route::get('honkaiimpact/guest/weapon/bow', [WeaponController::class, 'sortbowhonkaiforguest'])->name('Guest Weapon Bow Page');
    Route::get('honkaiimpact/guest/weapon/cannon', [WeaponController::class, 'sortcannonhonkaiforguest'])->name('Guest Weapon Cannon Page');
    Route::get('honkaiimpact/guest/weapon/chainedblade', [WeaponController::class, 'sortchainbladehonkaiforguest'])->name('Guest Weapon Chained Blade Page');
    Route::get('honkaiimpact/guest/weapon/chakram', [WeaponController::class, 'sortchakramhonkaiforguest'])->name('Guest Weapon Chakram Page');
    Route::get('honkaiimpact/guest/weapon/cross', [WeaponController::class, 'sortcrosshonkaiforguest'])->name('Guest Weapon Cross Page');
    Route::get('honkaiimpact/guest/weapon/drivecore', [WeaponController::class, 'sortdrivecorehonkaiforguest'])->name('Guest Weapon Drive Core Page');
    Route::get('honkaiimpact/guest/weapon/gauntlet', [WeaponController::class, 'sortgauntlethonkaiforguest'])->name('Guest Weapon Gauntlet Page');
    Route::get('honkaiimpact/guest/weapon/greatsword', [WeaponController::class, 'sortgreatswordhonkaiforguest'])->name('Guest Weapon Greatsword Page');
    Route::get('honkaiimpact/guest/weapon/javelin', [WeaponController::class, 'sortjavelinhonkaiforguest'])->name('Guest Weapon Javelin Page');
    Route::get('honkaiimpact/guest/weapon/katana', [WeaponController::class, 'sortkatanahonkaiforguest'])->name('Guest Weapon Katana Page');
    Route::get('honkaiimpact/guest/weapon/lance', [WeaponController::class, 'sortlancehonkaiforguest'])->name('Guest Weapon Lance Page');
    Route::get('honkaiimpact/guest/weapon/rapidshotcrossbow', [WeaponController::class, 'sortrapidshotcrossbowhonkaiforguest'])->name('Guest Weapon Rapid-Shot Crossbow Page');
    Route::get('honkaiimpact/guest/weapon/rockethammer', [WeaponController::class, 'sortrockethammerhonkaiforguest'])->name('Guest Weapon Rocket Hammer Page');
    Route::get('honkaiimpact/guest/weapon/scythe', [WeaponController::class, 'sortscythehonkaiforguest'])->name('Guest Weapon Scythe Page');
    Route::get('honkaiimpact/guest/weapon/pistol', [WeaponController::class, 'sortpistolhonkaiforguest'])->name('Guest Weapon Pistol Page');
    Route::get('honkaiimpact/guest/weapon/{id}', [WeaponController::class, 'showweaponguest'])->name('View Weapon Guest');
    Route::get('honkaiimpact/guest/stigmata', [ItemController::class, 'stigmataindexguest'])->name('Guest Stigmata Page');
    Route::get('honkaiimpact/guest/stigmata/search', [ItemController::class, 'searchstigmataforguest'])->name('Search Stigmata Guest');
    Route::get('honkaiimpact/guest/stigmata/{id}', [ItemController::class, 'showstigmataguest'])->name('View Stigmata Guest');
    //news - Honkai Impact 3
    Route::get('honkaiimpact/guest/news', [NewsController::class, 'newsindexguest'])->name('Guest News Page');
    route::get('honkaiimpact/guest/news/1', [NewsController::class, 'newspho'])->name('Event Phoenix News View');
    route::get('honkaiimpact/guest/news/2', [NewsController::class, 'newsintel'])->name('Mata Bulan News View');
    route::get('honkaiimpact/guest/news/3', [NewsController::class, 'newssenadina'])->name('Senadina Debut News View');
    route::get('honkaiimpact/guest/news/4', [NewsController::class, 'newshelia'])->name('Helia Debut News View');
    route::get('honkaiimpact/guest/news/5', [NewsController::class, 'newsblast'])->name('Blastmetal Debut News View');
    route::get('honkaiimpact/guest/news/6', [NewsController::class, 'newsdream'])->name('Dream Seeker Debut News View');
    route::get('honkaiimpact/guest/news/7', [NewsController::class, 'newshidangan'])->name('Event Hidangan News View');
    route::get('honkaiimpact/guest/news/8', [NewsController::class, 'newssongque'])->name('Songque Debut News View');
    route::get('honkaiimpact/guest/news/9', [NewsController::class, 'newsmad'])->name('Mad Pleasure News View');
    route::get('honkaiimpact/guest/news/10', [NewsController::class, 'newsseven'])->name('Seven Shu News View');
    route::get('honkaiimpact/guest/news/11', [NewsController::class, 'newspemberitahuan'])->name('Pemberitahuan News View');
    route::get('honkaiimpact/guest/news/12', [NewsController::class, 'newspreview'])->name('Preview Konten News View');
    route::get('honkaiimpact/guest/news/13', [NewsController::class, 'newsAPP'])->name('App Store News View');
    route::get('honkaiimpact/guest/news/14', [NewsController::class, 'newsFAQ'])->name('FAQ News View');
    route::get('honkaiimpact/guest/news/15', [NewsController::class, 'newsinvite'])->name('Invite News View');
    Route::get('honkaiimpact/guest/news/16', [NewsController::class, 'newsshadow'])->name('Shadow Chaser Release');
    Route::get('honkaiimpact/guest/news/17', [NewsController::class, 'newsupdate7'])->name('News update v7.5');
    Route::get('honkaiimpact/guest/news/18', [NewsController::class, 'newsjovial'])->name('News Jovial release');
    Route::get('honkaiimpact/guest/news/19', [NewsController::class, 'newssarapeum'])->name('News Sarapeum release');
    Route::get('honkaiimpact/guest/news/20', [NewsController::class, 'newsfortune'])->name('News Fortune Mall');
    Route::get('honkaiimpact/guest/news/21', [NewsController::class, 'newsrangkuman'])->name('News Rangkuman Info');
    Route::get('honkaiimpact/guest/news/22', [NewsController::class, 'newsmimpi'])->name('News Mimpi dan Fajar');
    //guide - Honkai Impact 3
    Route::get('honkaiimpact/guest/guide', [GuideController::class, 'guideindexguest'])->name('Guest Guide Page');
    route::get('honkaiimpact/guest/Guide/begginer', [GuideController::class, 'guidebegginnerhi3'])->name('Begginner Guide View');
    route::get('honkaiimpact/guest/Guide/crystals', [GuideController::class, 'guidecrystals'])->name('Crystals Guide View');
    route::get('honkaiimpact/guest/Guide/foundry', [GuideController::class, 'guidefoundry'])->name('Foundry Guide View');
    route::get('honkaiimpact/guest/Guide/realmsbattle', [GuideController::class, 'guiderealms'])->name('Realms Guide View');
    route::get('honkaiimpact/guest/Guide/energy', [GuideController::class, 'guideenergy'])->name('Energy Guide View');
    route::get('honkaiimpact/guest/Guide/elysian', [GuideController::class, 'guideelysian'])->name('Elysian Guide View');
    route::get('honkaiimpact/guest/Guide/shops', [GuideController::class, 'guideshop'])->name('Shops Guide View');
    route::get('honkaiimpact/guest/Guide/combat', [GuideController::class, 'guidecombat'])->name('Combat Guide Honkai Impact View');
    route::get('honkaiimpact/guest/Guide/gacha', [GuideController::class, 'guidegacha'])->name('Gacha Guide Honkai Impact View');
    route::get('honkaiimpact/guest/Guide/teams', [GuideController::class, 'guideteams'])->name('Teams Guide View');
    //Genshin Impact
    //home - genshin impact
    Route::get('genshin/guest/home', [HomeController::class, 'indexguestgenshinimpact'])->name('Guest Home Genshin Impact');
    //character + tier list - genshin impact
    Route::get('genshin/guest/character', [CharacterController::class, 'charagenshinindexguest'])->name('Guest Character Genshin Page');
    Route::get('genshin/guest/character/search', [CharacterController::class, 'searchgenshinforguest'])->name('Search Character Genshin Guest');
    Route::get('genshin/guest/character/anemo', [CharacterController::class, 'sortanemogenshinforguest'])->name('Guest Character Anemo Genshin Page');
    Route::get('genshin/guest/character/cryo', [CharacterController::class, 'sortcryogenshinforguest'])->name('Guest Character Cryo Genshin Page');
    Route::get('genshin/guest/character/dendro', [CharacterController::class, 'sortdendrogenshinforguest'])->name('Guest Character Dendro Genshin Page');
    Route::get('genshin/guest/character/electro', [CharacterController::class, 'sortelectrogenshinforguest'])->name('Guest Character Electro Genshin Page');
    Route::get('genshin/guest/character/geo', [CharacterController::class, 'sortgeogenshinforguest'])->name('Guest Character Geo Genshin Page');
    Route::get('genshin/guest/character/hydro', [CharacterController::class, 'sorthydrogenshinforguest'])->name('Guest Character Hydro Genshin Page');
    Route::get('genshin/guest/character/pyro', [CharacterController::class, 'sortpyrogenshinforguest'])->name('Guest Character Pyro Genshin Page');
    Route::get('genshin/guest/character/{id}', [CharacterController::class, 'showcharagenshinguest'])->name('View Character Genshin Guest');
    Route::get('genshin/guest/tierlist', [CharacterController::class, 'tierlistgenshinguest'])->name('Guest Tier List Genshin Page');
    //weapon + artifact - genshin impact
    Route::get('genshin/guest/weapon', [WeaponController::class, 'weapongenshinindexguest'])->name('Guest Weapon Genshin Page');
    Route::get('genshin/guest/weapon/search', [WeaponController::class, 'searchweapongenshinforguest'])->name('Search Weapon Genshin Guest');
    Route::get('genshin/guest/weapon/sword', [WeaponController::class, 'sortswordgenshinforguest'])->name('Guest Weapon Sword Genshin Page');
    Route::get('genshin/guest/weapon/bow', [WeaponController::class, 'sortbowgenshinforguest'])->name('Guest Weapon Bow Genshin Page');
    Route::get('genshin/guest/weapon/catalyst', [WeaponController::class, 'sortcatalystgenshinforguest'])->name('Guest Weapon Catalyst Genshin Page');
    Route::get('genshin/guest/weapon/claymore', [WeaponController::class, 'sortclaymoregenshinforguest'])->name('Guest Weapon Claymore Genshin Page');
    Route::get('genshin/guest/weapon/polearm', [WeaponController::class, 'sortpolearmgenshinforguest'])->name('Guest Weapon Polearm Genshin Page');
    Route::get('genshin/guest/weapon/{id}', [WeaponController::class, 'showweapongenshinguest'])->name('View Weapon Genshin Guest');
    Route::get('genshin/guest/artifact', [ItemController::class, 'artifactindexguest'])->name('Guest Artifact Page');
    Route::get('genshin/guest/artifact/search', [ItemController::class, 'searchartifactforguest'])->name('Search Artifact Guest');
    Route::get('genshin/guest/artifact/{id}', [ItemController::class, 'showartifactguest'])->name('View Artifact Guest');
    //news - genshin impact
    Route::get('genshin/guest/news', [NewsController::class, 'newsgenshinindexguest'])->name('Guest Genshin News Page');
    Route::get('genshin/guest/news/1', [NewsController::class, 'newsgenshinid1guest'])->name('Guest News Genshin Id 1');
    Route::get('genshin/guest/news/2', [NewsController::class, 'newsgenshinid2guest'])->name('Guest News Genshin Id 2');
    Route::get('genshin/guest/news/3', [NewsController::class, 'newsgenshinid3guest'])->name('Guest News Genshin Id 3');
    Route::get('genshin/guest/news/4', [NewsController::class, 'newsgenshinid4guest'])->name('Guest News Genshin Id 4');
    Route::get('genshin/guest/news/5', [NewsController::class, 'newsgenshinid5guest'])->name('Guest News Genshin Id 5');
    Route::get('genshin/guest/news/6', [NewsController::class, 'newsgenshinid6guest'])->name('Guest News Genshin Id 6');
    Route::get('genshin/guest/news/7', [NewsController::class, 'newsgenshinid7guest'])->name('Guest News Genshin Id 7');
    Route::get('genshin/guest/news/8', [NewsController::class, 'newsgenshinid8guest'])->name('Guest News Genshin Id 8');
    Route::get('genshin/guest/news/9', [NewsController::class, 'newsgenshinid9guest'])->name('Guest News Genshin Id 9');
    Route::get('genshin/guest/news/10', [NewsController::class, 'newsgenshinid10guest'])->name('Guest News Genshin Id 10');
    Route::get('genshin/guest/news/11', [NewsController::class, 'newsgenshinid11guest'])->name('Guest News Genshin Id 11');
    Route::get('genshin/guest/news/12', [NewsController::class, 'newsgenshinid12guest'])->name('Guest News Genshin Id 12');
    Route::get('genshin/guest/news/13', [NewsController::class, 'newsgenshinid13guest'])->name('Guest News Genshin Id 13');
    Route::get('genshin/guest/news/14', [NewsController::class, 'newsgenshinid14guest'])->name('Guest News Genshin Id 14');
    Route::get('genshin/guest/news/15', [NewsController::class, 'newsgenshinid15guest'])->name('Guest News Genshin Id 15');
    Route::get('genshin/guest/news/16', [NewsController::class, 'newsgenshinid16guest'])->name('Guest News Genshin Id 16');
    Route::get('genshin/guest/news/17', [NewsController::class, 'newsgenshinid17guest'])->name('Guest News Genshin Id 17');
    Route::get('genshin/guest/news/18', [NewsController::class, 'newsgenshinid18guest'])->name('Guest News Genshin Id 18');
    Route::get('genshin/guest/news/19', [NewsController::class, 'newsgenshinid19guest'])->name('Guest News Genshin Id 19');
    Route::get('genshin/guest/news/20', [NewsController::class, 'newsgenshinid20guest'])->name('Guest News Genshin Id 20');
    Route::get('genshin/guest/news/21', [NewsController::class, 'newsgenshinid21guest'])->name('Guest News Genshin Id 21');
    Route::get('genshin/guest/news/22', [NewsController::class, 'newsgenshinid22guest'])->name('Guest News Genshin Id 22');
    Route::get('genshin/guest/news/23', [NewsController::class, 'newsgenshinid23guest'])->name('Guest News Genshin Id 23');
    Route::get('genshin/guest/news/24', [NewsController::class, 'newsgenshinid24guest'])->name('Guest News Genshin Id 24');
    Route::get('genshin/guest/news/25', [NewsController::class, 'newsgenshinid25guest'])->name('Guest News Genshin Id 25');
    //guide - Genshin impact
    Route::get('genshin/guest/guide', [GuideController::class, 'guideindexgenshinguest'])->name('Guest Genshin Guide Page');
    Route::get('genshin/guest/guide/gachasystem', [GuideController::class, 'gachasystemgenshinguest'])->name('Genshin Guest Guide Gacha System Page');
    Route::get('genshin/guest/guide/earlygametips', [GuideController::class, 'earlygametipsgenshinguest'])->name('Genshin Guest Guide Early Game Tips Page');
    Route::get('genshin/guest/guide/intro', [GuideController::class, 'introtogamegenshinguest'])->name('Genshin Guest Guide Intro to Game Page');
    Route::get('genshin/guest/guide/elementalreaction', [GuideController::class, 'elementalreactiongenshinguest'])->name('Genshin Guest Guide Elemental Reaction Page');
    Route::get('genshin/guest/guide/tipsgachabannersaatini', [GuideController::class, 'shouldupullcurrentbannergenshinguest'])->name('Genshin Guest Guide Should u Pull Current Banner Page');
    Route::get('genshin/guest/guide/teambuilding', [GuideController::class, 'teambuildinggenshinguest'])->name('Genshin Guest Guide Team Building Page');
    Route::get('genshin/guest/guide/characterprogression', [GuideController::class, 'charaupgradegenshinguest'])->name('Genshin Guest Guide Character Upgrade Page');
    Route::get('genshin/guest/guide/tipsgachaf2p', [GuideController::class, 'f2pgachagenshinguest'])->name('Genshin Guest Guide F2P Gacha Page');
    Route::get('genshin/guest/guide/spiralabyss', [GuideController::class, 'introtospiralabyssgenshinguest'])->name('Genshin Guest Guide Intro to Spiral Abyss Page');
    Route::get('genshin/guest/guide/tipsspiralabyss', [GuideController::class, 'currentspiralabysstipsgenshinguest'])->name('Genshin Guest Guide Current Spiral Abyss Tips Page');
    //Honkai: Star Rail
    //home - honkai star rail
    Route::get('starrail/guest/home', [HomeController::class, 'indexguesthsr'])->name('Guest Home Honkai Star Rail');
    //character + tier list - honkai star rail
    Route::get('starrail/guest/character', [CharacterController::class, 'charahsrindexguest'])->name('Guest Character Honkai Star Rail Page');
    Route::get('starrail/guest/character/search', [CharacterController::class, 'searchhsrforguest'])->name('Search Character Honkai Star Rail Guest');
    Route::get('starrail/guest/character/fire', [CharacterController::class, 'sortfirehsrforguest'])->name('Guest Character Fire Honkai Star Rail Page');
    Route::get('starrail/guest/character/ice', [CharacterController::class, 'sorticehsrforguest'])->name('Guest Character Ice Honkai Star Rail Page');
    Route::get('starrail/guest/character/imaginary', [CharacterController::class, 'sortimaginaryhsrforguest'])->name('Guest Character Imaginary Honkai Star Rail Page');
    Route::get('starrail/guest/character/lightning', [CharacterController::class, 'sortlightninghsrforguest'])->name('Guest Character Lightning Honkai Star Rail Page');
    Route::get('starrail/guest/character/physical', [CharacterController::class, 'sortphysicalhsrforguest'])->name('Guest Character Physical Honkai Star Rail Page');
    Route::get('starrail/guest/character/quantum', [CharacterController::class, 'sortquantumhsrforguest'])->name('Guest Character Quantum Honkai Star Rail Page');
    Route::get('starrail/guest/character/wind', [CharacterController::class, 'sortwindhsrforguest'])->name('Guest Character Wind Honkai Star Rail Page');
    Route::get('starrail/guest/character/{id}', [CharacterController::class, 'showcharahsrguest'])->name('View Character Honkai Star Rail Guest');
    Route::get('starrail/guest/tierlist/memoryofchaos', [CharacterController::class, 'tierlistmochsrguest'])->name('Guest Tier List MOC Honkai Star Rail Page');
    Route::get('starrail/guest/tierlist/purefiction', [CharacterController::class, 'tierlistpfhsrguest'])->name('Guest Tier List PF Honkai Star Rail Page');
    //lighhtcone + relic - honkai star rail
    Route::get('starrail/guest/lightcone', [WeaponController::class, 'lightconeindexguest'])->name('Guest Lightcone Page');
    Route::get('starrail/guest/lightcone/search', [WeaponController::class, 'searchlightconeforguest'])->name('Search Lightcone Guest');
    Route::get('starrail/guest/lightcone/abundance', [WeaponController::class, 'sortlcabundanceforguest'])->name('Guest Lightcone Abundance Page');
    Route::get('starrail/guest/lightcone/destruction', [WeaponController::class, 'sortlcdestructionforguest'])->name('Guest Lightcone Destruction Page');
    Route::get('starrail/guest/lightcone/erudition', [WeaponController::class, 'sortlceruditionforguest'])->name('Guest Lightcone Erudition Page');
    Route::get('starrail/guest/lightcone/harmony', [WeaponController::class, 'sortlcharmonyforguest'])->name('Guest Lightcone Harmony Page');
    Route::get('starrail/guest/lightcone/thehunt', [WeaponController::class, 'sortlcthehuntforguest'])->name('Guest Lightcone Hunt Page');
    Route::get('starrail/guest/lightcone/nihility', [WeaponController::class, 'sortlcnihilityforguest'])->name('Guest Lightcone Nihility Page');
    Route::get('starrail/guest/lightcone/preservation', [WeaponController::class, 'sortlcpreservationforguest'])->name('Guest Lightcone Preservation Page');
    Route::get('starrail/guest/lightcone/{id}', [WeaponController::class, 'showlightconeguest'])->name('View Lightcone Guest');
    Route::get('starrail/guest/relic', [ItemController::class, 'relicindexguest'])->name('Guest Relic Page');
    Route::get('starrail/guest/relic/search', [ItemController::class, 'searchrelicforguest'])->name('Search Relic Guest');
    Route::get('starrail/guest/relic/{id}', [ItemController::class, 'showrelicguest'])->name('View Relic Guest');
    Route::get('starrail/guest/planar', [ItemController::class, 'planarindexguest'])->name('Guest Planar Page');
    Route::get('starrail/guest/planar/search', [ItemController::class, 'searchplanarforguest'])->name('Search Planar Guest');
    Route::get('starrail/guest/planar/{id}', [ItemController::class, 'showplanarguest'])->name('View Planar Guest');
    //guide - honkai star rail
    Route::get('starrail/guest/guide', [GuideController::class, 'guidehsrindexguest'])->name('Guest Guide Honkai Star Rail Page');
    Route::get('starrail/guest/guide/charaguide', [GuideController::class, 'guidecharaguest'])->name('Characters Guide View');
    Route::get('starrail/guest/guide/lightconeguide', [GuideController::class, 'guidelightconeguest'])->name('Lightcone Guide View');
    Route::get('starrail/guest/guide/relicplanarguide', [GuideController::class, 'guiderelicguest'])->name('Relic Guide View');
    Route::get('starrail/guest/guide/combatguide', [GuideController::class, 'guidecombatguest'])->name('Combat Guide View');
    Route::get('starrail/guest/guide/elementsguide', [GuideController::class, 'guideelementsguest'])->name('Elements Guide View');
    Route::get('starrail/guest/guide/pathguide', [GuideController::class, 'guidepathguest'])->name('Path Guide View');
    Route::get('starrail/guest/guide/gachaguide', [GuideController::class, 'guidegachaguest'])->name('Gacha Guide View');
    Route::get('starrail/guest/guide/simulatedguide', [GuideController::class, 'guidesimulatedguest'])->name('Simulated Guide View');
    Route::get('starrail/guest/guide/swarmguide', [GuideController::class, 'guideswarmguest'])->name('Swarm Guide View');
    Route::get('starrail/guest/guide/memoryguide', [GuideController::class, 'guidememoryguest'])->name('Forgotten Hall Guide View');
    Route::get('starrail/guest/guide/purefictionguide', [GuideController::class, 'guidepurefictionguest'])->name('Pure Fiction Guide View');
    //news - honkai star rail
    Route::get('starrail/guest/news', [NewsController::class, 'newshsrindexguest'])->name('Guest Star Rail News Page');
    Route::get('starrail/guest/news/1', [NewsController::class, 'newsundanganguest'])->name('Undangan News View');
    Route::get('starrail/guest/news/2', [NewsController::class, 'newsacheronguest'])->name('Acheron News View');
    Route::get('starrail/guest/news/3', [NewsController::class, 'newspenjelasanguest'])->name('Penjelasan Update News View');
    Route::get('starrail/guest/news/4', [NewsController::class, 'newseventwebguest'])->name('Event Web News View');
    Route::get('starrail/guest/news/5', [NewsController::class, 'newsgallagherguest'])->name('Gallagher News View');
    Route::get('starrail/guest/news/6', [NewsController::class, 'newstraileraventurineguest'])->name('Trailer Aventurine News View');
    Route::get('starrail/guest/news/7', [NewsController::class, 'newsaventurineguest'])->name('Aventurine News View');
    Route::get('starrail/guest/news/8', [NewsController::class, 'newstrailerversiguest'])->name('Trailer Versi News View');
    Route::get('starrail/guest/news/9', [NewsController::class, 'newspresaleguest'])->name('Robin Presale News View');
    Route::get('starrail/guest/news/10', [NewsController::class, 'newsbintangguest'])->name('1000 Bintang News View');
    Route::get('starrail/guest/news/11', [NewsController::class, 'newspraunduhguest'])->name('Pra Unduh 2.2 News View');
    Route::get('starrail/guest/news/12', [NewsController::class, 'newsrobinguest'])->name('Robin News View');
    Route::get('starrail/guest/news/13', [NewsController::class, 'newsupdateguest'])->name('Update News View');
    Route::get('starrail/guest/news/14', [NewsController::class, 'newsmendekatiguest'])->name('Harmony News View');
    Route::get('starrail/guest/news/15', [NewsController::class, 'newsdiscordguest'])->name('Discord News View');
    Route::get('starrail/guest/news/16', [NewsController::class, 'newsboothill'])->name('Boothill News View');
    Route::get('starrail/guest/news/17', [NewsController::class, 'newsbyepenacony'])->name('Bye Penacony News View');
    Route::get('starrail/guest/news/18', [NewsController::class, 'newsfireflyburn'])->name('Firefly News View');
    Route::get('starrail/guest/news/19', [NewsController::class, 'newsupdatever23'])->name('Update Version 2.3 News View');
    Route::get('starrail/guest/news/20', [NewsController::class, 'newsjade'])->name('Jade News View');
    Route::get('starrail/guest/news/21', [NewsController::class, 'newsstoneheart'])->name('Stone Heart News View');
    Route::get('starrail/guest/news/22', [NewsController::class, 'newsyunli'])->name('Yunli News View');
    Route::get('starrail/guest/news/23', [NewsController::class, 'newsupdatever24'])->name('Update Version 2.4 News View');
    Route::get('starrail/guest/news/24', [NewsController::class, 'newsmarch'])->name('March 7th News View');
});

Route::middleware(['auth'])->group(function(){
    //logout
    Route::get('/user-logout', [LoginController::class, 'logout'])->name('user.method.logout');
});

//Member Section
Route::middleware(['auth'])->group(function(){
    Route::middleware(['isMember'])->group(function(){
        //homepage
        Route::get('member/homepage', [HomeController::class, 'indexmember'])->name('member.viewPage');
        //profile
        Route::get('member/profile', [ProfileController::class, 'showprofilemember'])->name('Member Profile Page');
        Route::get('member/profileupdate/{id}', [ProfileController::class, 'updateprofilememberindex'])->name('View Update Profile Member');
        Route::put('member/updateprofile/{id}', [ProfileController::class,'updateprofilemember'])->name('Edit Profile Member');
        Route::get('member/passwordupdate/{id}', [ProfileController::class, 'updatepasswordmemberindex'])->name('View Update Profile Member');
        Route::post('member/passwordupdate',  [ProfileController::class, 'updatepasswordmember'])->name('Update Password Member');
        //Honkai Impact 3
        //home - Honkai Impact 3
        Route::get('honkaiimpact/member/home', [HomeController::class, 'indexmemberhonkaiimpact3'])->name('Member Home Honkai Impact');
        //character + tier list - Honkai Impact 3
        Route::get('honkaiimpact/member/character', [CharacterController::class, 'charaindexmember'])->name('Member Character Page');
        Route::get('honkaiimpact/member/character/search', [CharacterController::class, 'searchformember'])->name('Search Character Member');
        Route::get('honkaiimpact/member/character/bio', [CharacterController::class, 'sortbiovalkmember'])->name('member Character BIO Page');
        Route::get('honkaiimpact/member/character/img', [CharacterController::class, 'sortimgvalkmember'])->name('member Character IMG Page');
        Route::get('honkaiimpact/member/character/mech', [CharacterController::class, 'sortmechvalkmember'])->name('member Character MECH Page');
        Route::get('honkaiimpact/member/character/psy', [CharacterController::class, 'sortpsyvalkmember'])->name('member Character PSY Page');
        Route::get('honkaiimpact/member/character/qua', [CharacterController::class, 'sortquavalkmember'])->name('member Character QUA Page');
        Route::get('honkaiimpact/member/character/sd', [CharacterController::class, 'sortsdvalkmember'])->name('member Character SD Page');
        Route::get('honkaiimpact/member/character/{id}', [CharacterController::class, 'showcharamember'])->name('View Character Member');
        Route::get('honkaiimpact/member/tierlist', [CharacterController::class, 'tierlistmember'])->name('Member Tier List Page');
        //weapon + stigmata - honkai impact 3
        Route::get('honkaiimpact/member/weapon', [WeaponController::class, 'weaponhonkaiindexmember'])->name('Member Weapon Page');
        Route::get('honkaiimpact/member/weapon/search', [WeaponController::class, 'searchweaponformember'])->name('Search Weapon Member');
        Route::get('honkaiimpact/member/weapon/bow', [WeaponController::class, 'sortbowhonkaiformember'])->name('member Weapon Bow Page');
        Route::get('honkaiimpact/member/weapon/cannon', [WeaponController::class, 'sortcannonhonkaiformember'])->name('member Weapon Cannon Page');
        Route::get('honkaiimpact/member/weapon/chainedblade', [WeaponController::class, 'sortchainbladehonkaiformember'])->name('member Weapon Chained Blade Page');
        Route::get('honkaiimpact/member/weapon/chakram', [WeaponController::class, 'sortchakramhonkaiformember'])->name('member Weapon Chakram Page');
        Route::get('honkaiimpact/member/weapon/cross', [WeaponController::class, 'sortcrosshonkaiformember'])->name('member Weapon Cross Page');
        Route::get('honkaiimpact/member/weapon/drivecore', [WeaponController::class, 'sortdrivecorehonkaiformember'])->name('member Weapon Drive Core Page');
        Route::get('honkaiimpact/member/weapon/gauntlet', [WeaponController::class, 'sortgauntlethonkaiformember'])->name('member Weapon Gauntlet Page');
        Route::get('honkaiimpact/member/weapon/greatsword', [WeaponController::class, 'sortgreatswordhonkaiformember'])->name('member Weapon Greatsword Page');
        Route::get('honkaiimpact/member/weapon/javelin', [WeaponController::class, 'sortjavelinhonkaiformember'])->name('member Weapon Javelin Page');
        Route::get('honkaiimpact/member/weapon/katana', [WeaponController::class, 'sortkatanahonkaiformember'])->name('member Weapon Katana Page');
        Route::get('honkaiimpact/member/weapon/lance', [WeaponController::class, 'sortlancehonkaiformember'])->name('member Weapon Lance Page');
        Route::get('honkaiimpact/member/weapon/rapidshotcrossbow', [WeaponController::class, 'sortrapidshotcrossbowhonkaiformember'])->name('member Weapon Rapid-Shot Crossbow Page');
        Route::get('honkaiimpact/member/weapon/rockethammer', [WeaponController::class, 'sortrockethammerhonkaiformember'])->name('member Weapon Rocket Hammer Page');
        Route::get('honkaiimpact/member/weapon/scythe', [WeaponController::class, 'sortscythehonkaiformember'])->name('member Weapon Scythe Page');
        Route::get('honkaiimpact/member/weapon/pistol', [WeaponController::class, 'sortpistolhonkaiformember'])->name('member Weapon Pistol Page');
        Route::get('honkaiimpact/member/weapon/{id}', [WeaponController::class, 'showweaponmember'])->name('View Weapon Member');
        Route::get('honkaiimpact/member/stigmata', [ItemController::class, 'stigmataindexmember'])->name('Member Stigmata Page');
        Route::get('honkaiimpact/member/stigmata/search', [ItemController::class, 'searchstigmataformember'])->name('Search Stigmata Member');
        Route::get('honkaiimpact/member/stigmata/{id}', [ItemController::class, 'showstigmatamember'])->name('View Stigmata Member');
        //news - Honkai Impact 3
        Route::get('honkaiimpact/member/news', [NewsController::class, 'newsindexmember'])->name('Member News Page');
        route::get('honkaiimpact/member/news/1', [NewsController::class, 'newsphomember'])->name('Member Event Phoenix News View');
        route::get('honkaiimpact/member/news/2', [NewsController::class, 'newsintelmember'])->name('Member Mata Bulan News View');
        route::get('honkaiimpact/member/news/3', [NewsController::class, 'newssenadinamember'])->name('Member Senadina Debut News View');
        route::get('honkaiimpact/member/news/4', [NewsController::class, 'newsheliamember'])->name('Member Helia Debut News View');
        route::get('honkaiimpact/member/news/5', [NewsController::class, 'newsblastmember'])->name('Member Blastmetal Debut News View');
        route::get('honkaiimpact/member/news/6', [NewsController::class, 'newsdreammember'])->name('Member Dream Seeker Debut News View');
        route::get('honkaiimpact/member/news/7', [NewsController::class, 'newshidanganmember'])->name('Member Event Hidangan News View');
        route::get('honkaiimpact/member/news/8', [NewsController::class, 'newssongquemember'])->name('Member Songque Debut News View');
        route::get('honkaiimpact/member/news/9', [NewsController::class, 'newsmadmember'])->name('Member Mad Pleasure News View');
        route::get('honkaiimpact/member/news/10', [NewsController::class, 'newssevenmember'])->name('Member Seven Shu News View');
        route::get('honkaiimpact/member/news/11', [NewsController::class, 'newspemberitahuanmember'])->name('Member Pemberitahuan News View');
        route::get('honkaiimpact/member/news/12', [NewsController::class, 'newspreviewmember'])->name('Member Preview Konten News View');
        route::get('honkaiimpact/member/news/13', [NewsController::class, 'newsAPPmember'])->name('Member App Store News View');
        route::get('honkaiimpact/member/news/14', [NewsController::class, 'newsFAQmember'])->name('Member FAQ News View');
        route::get('honkaiimpact/member/news/15', [NewsController::class, 'newsinvitemember'])->name('Member Invite News View');
        Route::get('honkaiimpact/member/news/16', [NewsController::class, 'newsshadowmember'])->name('Shadow Chaser Release member');
        Route::get('honkaiimpact/member/news/17', [NewsController::class, 'newsupdate7member'])->name('News update v7.5 member');
        Route::get('honkaiimpact/member/news/18', [NewsController::class, 'newsjovialmember'])->name('News Jovial release member');
        Route::get('honkaiimpact/member/news/19', [NewsController::class, 'newssarapeummember'])->name('News Sarapeum release member');
        Route::get('honkaiimpact/member/news/20', [NewsController::class, 'newsfortunemember'])->name('News Fortune Mall member');
        Route::get('honkaiimpact/member/news/21', [NewsController::class, 'newsrangkumanmember'])->name('News Rangkuman Info member');
        Route::get('honkaiimpact/member/news/22', [NewsController::class, 'newsmimpimember'])->name('News Mimpi dan Fajar member');
        //guide - Honkai Impact 3
        Route::get('honkaiimpact/member/guide', [GuideController::class, 'guideindexmember'])->name('Member Guide Page');
        route::get('honkaiimpact/member/Guide/begginer', [GuideController::class, 'guidebegginnerhi3member'])->name('Member Begginner Guide View');
        route::get('honkaiimpact/member/Guide/crystals', [GuideController::class, 'guidecrystalsmember'])->name('Member Crystals Guide View');
        route::get('honkaiimpact/member/Guide/foundry', [GuideController::class, 'guidefoundrymember'])->name('Member Foundry Guide View');
        route::get('honkaiimpact/member/Guide/realmsbattle', [GuideController::class, 'guiderealmsmember'])->name('Member Realms Guide View');
        route::get('honkaiimpact/member/Guide/energy', [GuideController::class, 'guideenergymember'])->name('Member Energy Guide View');
        route::get('honkaiimpact/member/Guide/elysian', [GuideController::class, 'guideelysianmember'])->name('Member Elysian Guide View');
        route::get('honkaiimpact/member/Guide/shops', [GuideController::class, 'guideshopmember'])->name('Member Shops Guide View');
        route::get('honkaiimpact/member/Guide/combat', [GuideController::class, 'guidecombatmember'])->name('Member Combat Guide Honkai Impact View');
        route::get('honkaiimpact/member/Guide/gacha', [GuideController::class, 'guidegachamember'])->name('Member Gacha Guide Honkai Impact View');
        route::get('honkaiimpact/member/Guide/teams', [GuideController::class, 'guideteamsmember'])->name('Member Teams Guide View');
        //forum - Honkai Impact 3
        Route::get('honkaiimpact/member/forum/search', [ForumController::class, 'searchposthonkaiformember'])->name('Search Forum Honkai Member');
        Route::post('honkaiimpact/member/forum/create', [ForumController::class, 'createnewposthonkaiformember'])->name('Create Post Honkai Member');
        Route::get('honkaiimpact/member/forum/create', [ForumController::class, 'createposthonkaiindexformember'])->name('Create Post Honkai Member Page');
        Route::get('honkaiimpact/member/forum', [ForumController::class, 'forumindexhonkaiformember'])->name('Member Honkai Forum Page');
        Route::get('honkaiimpact/member/forum/0', [ForumController::class, 'postzerohonkaimember'])->name('View Honkai Post Zero Member');
        Route::get('honkaiimpact/member/forum/{id}', [ForumController::class, 'showposthonkaiformember'])->name('View Honkai Post Member');
        Route::patch('honkaiimpact/member/forum/edit/{id}', [ForumController::class, 'editposthonkaiformember'])->name('Edit Post Honkai Member');
        Route::get('honkaiimpact/member/forum/edit/{id}', [ForumController::class, 'editforumhonkaiindexformember'])->name('Edit Post Honkai Member Page');
        Route::delete('honkaiimpact/member/forum/{id}/delete', [ForumController::class, 'deleteposthonkaiformember'])->name('Delete Post Honkai Member');
        //comment - Honkai Impact 3
        Route::post('honkaiimpact/member/forum/{id}', [CommentController::class, 'commenthonkaipostmember'])->name('Create Comment on Post Honkai Member');
        //report post - Honkai Impact 3
        Route::get('honkaiimpact/member/report/{id}', [ReportController::class, 'reportposthonkaiindex'])->name('Create Report Honkai Member Page');
        Route::post('honkaiimpact/member/report/{id}', [ReportController::class, 'reportposthonkaipostmember'])->name('Create Report Post Honkai Member');
        //Honkai: Star Rail
        //home - Honkai: Star Rail
        Route::get('starrail/member/home', [HomeController::class, 'indexmemberhsr'])->name('Member Home Honkai Star Rail');
        //character + tier list - honkai star rail
        Route::get('starrail/member/character', [CharacterController::class, 'charahsrindexmember'])->name('Member Character Honkai Star Rail Page');
        Route::get('starrail/member/character/search', [CharacterController::class, 'searchhsrformember'])->name('Search Character Honkai Star Rail Member');
        Route::get('starrail/member/character/fire', [CharacterController::class, 'sortfirehsrformember'])->name('member Character Fire Honkai Star Rail Page');
        Route::get('starrail/member/character/ice', [CharacterController::class, 'sorticehsrformember'])->name('member Character Ice Honkai Star Rail Page');
        Route::get('starrail/member/character/imaginary', [CharacterController::class, 'sortimaginaryhsrformember'])->name('member Character Imaginary Honkai Star Rail Page');
        Route::get('starrail/member/character/lightning', [CharacterController::class, 'sortlightninghsrformember'])->name('member Character Lightning Honkai Star Rail Page');
        Route::get('starrail/member/character/physical', [CharacterController::class, 'sortphysicalhsrformember'])->name('member Character Physical Honkai Star Rail Page');
        Route::get('starrail/member/character/quantum', [CharacterController::class, 'sortquantumhsrformember'])->name('member Character Quantum Honkai Star Rail Page');
        Route::get('starrail/member/character/wind', [CharacterController::class, 'sortwindhsrformember'])->name('member Character Wind Honkai Star Rail Page');
        Route::get('starrail/member/character/{id}', [CharacterController::class, 'showcharahsrmember'])->name('View Character Honkai Star Rail Member');
        Route::get('starrail/member/tierlist/memoryofchaos', [CharacterController::class, 'tierlistmochsrmember'])->name('Member Tier List MOC Honkai Star Rail Page');
        Route::get('starrail/member/tierlist/purefiction', [CharacterController::class, 'tierlistpfhsrmember'])->name('Member Tier List PF Honkai Star Rail Page');
        //lighhtcone + relic - honkai star rail
        Route::get('starrail/member/lightcone', [WeaponController::class, 'lightconeindexmember'])->name('Member Lightcone Page');
        Route::get('starrail/member/lightcone/search', [WeaponController::class, 'searchlightconeformember'])->name('Search Lightcone Member');
        Route::get('starrail/member/lightcone/abundance', [WeaponController::class, 'sortlcabundanceformember'])->name('member Lightcone Abundance Page');
        Route::get('starrail/member/lightcone/destruction', [WeaponController::class, 'sortlcdestructionformember'])->name('member Lightcone Destruction Page');
        Route::get('starrail/member/lightcone/erudition', [WeaponController::class, 'sortlceruditionformember'])->name('member Lightcone Erudition Page');
        Route::get('starrail/member/lightcone/harmony', [WeaponController::class, 'sortlcharmonyformember'])->name('member Lightcone Harmony Page');
        Route::get('starrail/member/lightcone/thehunt', [WeaponController::class, 'sortlcthehuntformember'])->name('member Lightcone Hunt Page');
        Route::get('starrail/member/lightcone/nihility', [WeaponController::class, 'sortlcnihilityformember'])->name('member Lightcone Nihility Page');
        Route::get('starrail/member/lightcone/preservation', [WeaponController::class, 'sortlcpreservationformember'])->name('member Lightcone Preservation Page');
        Route::get('starrail/member/lightcone/{id}', [WeaponController::class, 'showlightconemember'])->name('View Lightcone Member');
        Route::get('starrail/member/relic', [ItemController::class, 'relicindexmember'])->name('Member Relic Page');
        Route::get('starrail/member/relic/search', [ItemController::class, 'searchrelicformember'])->name('Search Relic Member');
        Route::get('starrail/member/relic/{id}', [ItemController::class, 'showrelicmember'])->name('View Relic Member');
        Route::get('starrail/member/planar', [ItemController::class, 'planarindexmember'])->name('Member Planar Page');
        Route::get('starrail/member/planar/search', [ItemController::class, 'searchplanarformember'])->name('Search Planar Member');
        Route::get('starrail/member/planar/{id}', [ItemController::class, 'showplanarmember'])->name('View Planar Member');
        //guide - honkai star rail
        Route::get('starrail/member/guide', [GuideController::class, 'guidehsrindexmember'])->name('Member Guide Honkai Star Rail Page');
        Route::get('starrail/member/guide/charaguide', [GuideController::class, 'guidecharamember'])->name('Member Characters Guide View');
        Route::get('starrail/member/guide/lightconeguide', [GuideController::class, 'guidelightconemember'])->name('Member Lightcone Guide View');
        Route::get('starrail/member/guide/relicplanarguide', [GuideController::class, 'guiderelicmember'])->name('Member Relic Guide View');
        Route::get('starrail/member/guide/combatguide', [GuideController::class, 'guidecombatmemberhsr'])->name('Member Combat Guide View');
        Route::get('starrail/member/guide/elementsguide', [GuideController::class, 'guideelementsmember'])->name('Member Elements Guide View');
        Route::get('starrail/member/guide/pathguide', [GuideController::class, 'guidepathmember'])->name('Member Path Guide View');
        Route::get('starrail/member/guide/gachaguide', [GuideController::class, 'guidegachamemberhsr'])->name('Member Gacha Guide View');
        Route::get('starrail/member/guide/simulatedguide', [GuideController::class, 'guidesimulatedmember'])->name('Member Simulated Guide View');
        Route::get('starrail/member/guide/swarmguide', [GuideController::class, 'guideswarmmember'])->name('Member Swarm Guide View');
        Route::get('starrail/member/guide/memoryguide', [GuideController::class, 'guidememorymember'])->name('Member Forgotten Hall Guide View');
        Route::get('starrail/member/guide/purefictionguide', [GuideController::class, 'guidepurefictionmember'])->name('Member Pure Fiction Guide View');
        //news - honkai star rail
        Route::get('starrail/member/news', [NewsController::class, 'newshsrindexmember'])->name('Member Star Rail News Page');
        Route::get('starrail/member/news/1', [NewsController::class, 'newsundanganmember'])->name('Member Undangan News View');
        Route::get('starrail/member/news/2', [NewsController::class, 'newsacheronmember'])->name('Member Acheron News View');
        Route::get('starrail/member/news/3', [NewsController::class, 'newspenjelasanmember'])->name('Member Penjelasan Update News View');
        Route::get('starrail/member/news/4', [NewsController::class, 'newseventwebmember'])->name('Member Event Web News View');
        Route::get('starrail/member/news/5', [NewsController::class, 'newsgallaghermember'])->name('Member Gallagher News View');
        Route::get('starrail/member/news/6', [NewsController::class, 'newstraileraventurinemember'])->name('Member Trailer Aventurine News View');
        Route::get('starrail/member/news/7', [NewsController::class, 'newsaventurinemember'])->name('Member Aventurine News View');
        Route::get('starrail/member/news/8', [NewsController::class, 'newstrailerversimember'])->name('Member Trailer Versi News View');
        Route::get('starrail/member/news/9', [NewsController::class, 'newspresalemember'])->name('Member Robin Presale News View');
        Route::get('starrail/member/news/10', [NewsController::class, 'newsbintangmember'])->name('Member 1000 Bintang News View');
        Route::get('starrail/member/news/11', [NewsController::class, 'newspraunduhmember'])->name('Member Pra Unduh 2.2 News View');
        Route::get('starrail/member/news/12', [NewsController::class, 'newsrobinmember'])->name('Member Robin News View');
        Route::get('starrail/member/news/13', [NewsController::class, 'newsupdatemember'])->name('Member Update News View');
        Route::get('starrail/member/news/14', [NewsController::class, 'newsmendekatimember'])->name('Member Harmony News View');
        Route::get('starrail/member/news/15', [NewsController::class, 'newsdiscordmember'])->name('Member Discord News View');
        Route::get('starrail/member/news/16', [NewsController::class, 'newsboothillmember'])->name('Boothill News View member');
        Route::get('starrail/member/news/17', [NewsController::class, 'newsbyepenaconymember'])->name('Bye Penacony News View member');
        Route::get('starrail/member/news/18', [NewsController::class, 'newsfireflyburnmember'])->name('Firefly News View member');
        Route::get('starrail/member/news/19', [NewsController::class, 'newsupdatever23member'])->name('Update Version 2.3 News View member');
        Route::get('starrail/member/news/20', [NewsController::class, 'newsjademember'])->name('Jade News View member');
        Route::get('starrail/member/news/21', [NewsController::class, 'newsstoneheartmember'])->name('Stone Heart News View member');
        Route::get('starrail/member/news/22', [NewsController::class, 'newsyunlimember'])->name('Yunli News View member');
        Route::get('starrail/member/news/23', [NewsController::class, 'newsupdatever24member'])->name('Update Version 2.4 News View member');
        Route::get('starrail/member/news/24', [NewsController::class, 'newsmarchmember'])->name('March 7th News View member');
        //forum - honkai star rail
        Route::get('starrail/member/forum/search', [ForumController::class, 'searchposthsrformember'])->name('Search Forum HSR Member');
        Route::post('starrail/member/forum/create', [ForumController::class, 'createnewposthsrformember'])->name('Create Post HSR Member');
        Route::get('starrail/member/forum/create', [ForumController::class, 'createposthsrindexformember'])->name('Create Post HSR Member Page');
        Route::get('starrail/member/forum', [ForumController::class, 'forumindexhsrformember'])->name('Member HSR Forum Page');
        Route::get('starrail/member/forum/0', [ForumController::class, 'postzerohsrmember'])->name('View HSR Post Zero Member');
        Route::get('starrail/member/forum/{id}', [ForumController::class, 'showposthsrformember'])->name('View HSR Post Member');
        Route::patch('starrail/member/forum/edit/{id}', [ForumController::class, 'editposthsrformember'])->name('Edit Post HSR Member');
        Route::get('starrail/member/forum/edit/{id}', [ForumController::class, 'editforumhsrindexformember'])->name('Edit Post HSR Member Page');
        Route::delete('starrail/member/forum/{id}/delete', [ForumController::class, 'deleteposthsrformember'])->name('Delete Post HSR Member');
        //comment - honkai star rail
        Route::post('starrail/member/forum/{id}', [CommentController::class, 'commenthsrpostmember'])->name('Create Comment on Post HSR Member');
        //report post - honkai star rail
        Route::get('starrail/member/report/{id}', [ReportController::class, 'reportposthsrindex'])->name('Create Report HSR Member Page');
        Route::post('starrail/member/report/{id}', [ReportController::class, 'reportposthsrpostmember'])->name('Create Report Post HSR Member');
        //Genshin Impact
        //home - Genshin Impact
        Route::get('genshin/member/home', [HomeController::class, 'indexmembergenshin'])->name('Member Home Genshin Impact');
        //character + tier list - genshin impact
        Route::get('genshin/member/character', [CharacterController::class, 'charagenshinindexmember'])->name('Member Character Genshin Page');
        Route::get('genshin/member/character/search', [CharacterController::class, 'searchgenshinformember'])->name('Search Character Genshin Member');
        Route::get('genshin/member/character/anemo', [CharacterController::class, 'sortanemogenshinformember'])->name('member Character Anemo Genshin Page');
        Route::get('genshin/member/character/cryo', [CharacterController::class, 'sortcryogenshinformember'])->name('member Character Cryo Genshin Page');
        Route::get('genshin/member/character/dendro', [CharacterController::class, 'sortdendrogenshinformember'])->name('member Character Dendro Genshin Page');
        Route::get('genshin/member/character/electro', [CharacterController::class, 'sortelectrogenshinformember'])->name('member Character Electro Genshin Page');
        Route::get('genshin/member/character/geo', [CharacterController::class, 'sortgeogenshinformember'])->name('member Character Geo Genshin Page');
        Route::get('genshin/member/character/hydro', [CharacterController::class, 'sorthydrogenshinformember'])->name('member Character Hydro Genshin Page');
        Route::get('genshin/member/character/pyro', [CharacterController::class, 'sortpyrogenshinformember'])->name('member Character Pyro Genshin Page');
        Route::get('genshin/member/character/{id}', [CharacterController::class, 'showcharagenshinmember'])->name('View Character Genshin Member');
        Route::get('genshin/member/tierlist', [CharacterController::class, 'tierlistgenshinmember'])->name('Member Tier List Genshin Page');
        //weapon + artifact - genshin impact
        Route::get('genshin/member/weapon', [WeaponController::class, 'weapongenshinindexmember'])->name('Member Weapon Genshin Page');
        Route::get('genshin/member/weapon/search', [WeaponController::class, 'searchweapongenshinformember'])->name('Search Weapon Genshin Member');
        Route::get('genshin/member/weapon/sword', [WeaponController::class, 'sortswordgenshinformember'])->name('member Weapon Sword Genshin Page');
        Route::get('genshin/member/weapon/bow', [WeaponController::class, 'sortbowgenshinformember'])->name('member Weapon Bow Genshin Page');
        Route::get('genshin/member/weapon/catalyst', [WeaponController::class, 'sortcatalystgenshinformember'])->name('member Weapon Catalyst Genshin Page');
        Route::get('genshin/member/weapon/claymore', [WeaponController::class, 'sortclaymoregenshinformember'])->name('member Weapon Claymore Genshin Page');
        Route::get('genshin/member/weapon/polearm', [WeaponController::class, 'sortpolearmgenshinformember'])->name('member Weapon Polearm Genshin Page');
        Route::get('genshin/member/weapon/{id}', [WeaponController::class, 'showweapongenshinmember'])->name('View Weapon Genshin Member');
        Route::get('genshin/member/artifact', [ItemController::class, 'artifactindexmember'])->name('Member Artifact Page');
        Route::get('genshin/member/artifact/search', [ItemController::class, 'searchartifactformember'])->name('Search Artifact Member');
        Route::get('genshin/member/artifact/{id}', [ItemController::class, 'showartifactmember'])->name('View Artifact Member');
        //news - genshin impact
        Route::get('genshin/member/news', [NewsController::class, 'newsgenshinindexmember'])->name('Member Genshin News Page');
        Route::get('genshin/member/news/1', [NewsController::class, 'newsgenshinid1member'])->name('Member News Genshin Id 1');
        Route::get('genshin/member/news/2', [NewsController::class, 'newsgenshinid2member'])->name('Member News Genshin Id 2');
        Route::get('genshin/member/news/3', [NewsController::class, 'newsgenshinid3member'])->name('Member News Genshin Id 3');
        Route::get('genshin/member/news/4', [NewsController::class, 'newsgenshinid4member'])->name('Member News Genshin Id 4');
        Route::get('genshin/member/news/5', [NewsController::class, 'newsgenshinid5member'])->name('Member News Genshin Id 5');
        Route::get('genshin/member/news/6', [NewsController::class, 'newsgenshinid6member'])->name('Member News Genshin Id 6');
        Route::get('genshin/member/news/7', [NewsController::class, 'newsgenshinid7member'])->name('Member News Genshin Id 7');
        Route::get('genshin/member/news/8', [NewsController::class, 'newsgenshinid8member'])->name('Member News Genshin Id 8');
        Route::get('genshin/member/news/9', [NewsController::class, 'newsgenshinid9member'])->name('Member News Genshin Id 9');
        Route::get('genshin/member/news/10', [NewsController::class, 'newsgenshinid10member'])->name('Member News Genshin Id 10');
        Route::get('genshin/member/news/11', [NewsController::class, 'newsgenshinid11member'])->name('Member News Genshin Id 11');
        Route::get('genshin/member/news/12', [NewsController::class, 'newsgenshinid12member'])->name('Member News Genshin Id 12');
        Route::get('genshin/member/news/13', [NewsController::class, 'newsgenshinid13member'])->name('Member News Genshin Id 13');
        Route::get('genshin/member/news/14', [NewsController::class, 'newsgenshinid14member'])->name('Member News Genshin Id 14');
        Route::get('genshin/member/news/15', [NewsController::class, 'newsgenshinid15member'])->name('Member News Genshin Id 15');
        Route::get('genshin/member/news/16', [NewsController::class, 'newsgenshinid16member'])->name('Member News Genshin Id 16');
        Route::get('genshin/member/news/17', [NewsController::class, 'newsgenshinid17member'])->name('Member News Genshin Id 17');
        Route::get('genshin/member/news/18', [NewsController::class, 'newsgenshinid18member'])->name('Member News Genshin Id 18');
        Route::get('genshin/member/news/19', [NewsController::class, 'newsgenshinid19member'])->name('Member News Genshin Id 19');
        Route::get('genshin/member/news/20', [NewsController::class, 'newsgenshinid20member'])->name('Member News Genshin Id 20');
        Route::get('genshin/member/news/21', [NewsController::class, 'newsgenshinid21member'])->name('Member News Genshin Id 21');
        Route::get('genshin/member/news/22', [NewsController::class, 'newsgenshinid22member'])->name('Member News Genshin Id 22');
        Route::get('genshin/member/news/23', [NewsController::class, 'newsgenshinid23member'])->name('Member News Genshin Id 23');
        Route::get('genshin/member/news/24', [NewsController::class, 'newsgenshinid24member'])->name('Member News Genshin Id 24');
        Route::get('genshin/member/news/25', [NewsController::class, 'newsgenshinid25member'])->name('Member News Genshin Id 25');
        //guide - Genshin impact
        Route::get('genshin/member/guide', [GuideController::class, 'guideindexgenshinmember'])->name('Member Genshin Guide Page');
        Route::get('genshin/member/guide/gachasystem', [GuideController::class, 'gachasystemgenshinmember'])->name('Genshin Member Guide Gacha System Page');
        Route::get('genshin/member/guide/earlygametips', [GuideController::class, 'earlygametipsgenshinmember'])->name('Genshin Member Guide Early Game Tips Page');
        Route::get('genshin/member/guide/intro', [GuideController::class, 'introtogamegenshinmember'])->name('Genshin Member Guide Intro to Game Page');
        Route::get('genshin/member/guide/elementalreaction', [GuideController::class, 'elementalreactiongenshinmember'])->name('Genshin Member Guide Elemental Reaction Page');
        Route::get('genshin/member/guide/tipsgachabannersaatini', [GuideController::class, 'shouldupullcurrentbannergenshinmember'])->name('Genshin Member Guide Should u Pull Current Banner Page');
        Route::get('genshin/member/guide/teambuilding', [GuideController::class, 'teambuildinggenshinmember'])->name('Genshin Member Guide Team Building Page');
        Route::get('genshin/member/guide/characterprogression', [GuideController::class, 'charaupgradegenshinmember'])->name('Genshin Member Guide Character Upgrade Page');
        Route::get('genshin/member/guide/tipsgachaf2p', [GuideController::class, 'f2pgachagenshinmember'])->name('Genshin Member Guide F2P Gacha Page');
        Route::get('genshin/member/guide/spiralabyss', [GuideController::class, 'introtospiralabyssgenshinmember'])->name('Genshin Member Guide Intro to Spiral Abyss Page');
        Route::get('genshin/member/guide/tipsspiralabyss', [GuideController::class, 'currentspiralabysstipsgenshinmember'])->name('Genshin Member Guide Current Spiral Abyss Tips Page');
        //forum - Genshin Impact
        Route::get('genshin/member/forum/search', [ForumController::class, 'searchpostgenshinformember'])->name('Search Forum Genshin Member');
        Route::post('genshin/member/forum/create', [ForumController::class, 'createnewpostgenshinformember'])->name('Create Post Genshin Member');
        Route::get('genshin/member/forum/create', [ForumController::class, 'createpostgenshinindexformember'])->name('Create Post Genshin Member Page');
        Route::get('genshin/member/forum', [ForumController::class, 'forumindexgenshinformember'])->name('Member Genshin Forum Page');
        Route::get('genshin/member/forum/0', [ForumController::class, 'postzerogenshinmember'])->name('View Genshin Post Zero Member');
        Route::get('genshin/member/forum/{id}', [ForumController::class, 'showpostgenshinformember'])->name('View Genshin Post Member');
        Route::patch('genshin/member/forum/edit/{id}', [ForumController::class, 'editpostgenshinformember'])->name('Edit Post Genshin Member');
        Route::get('genshin/member/forum/edit/{id}', [ForumController::class, 'editforumgenshinindexformember'])->name('Edit Post Genshin Member Page');
        Route::delete('genshin/member/forum/{id}/delete', [ForumController::class, 'deletepostgenshinformember'])->name('Delete Post Genshin Member');
        //comment - Genshin Impact
        Route::post('genshin/member/forum/{id}', [CommentController::class, 'commentgenshinpostmember'])->name('Create Comment on Post Genshin Member');
        //report post - Genshin Impact
        Route::get('genshin/member/report/{id}', [ReportController::class, 'reportpostgenshinindex'])->name('Create Report Genshin Member Page');
        Route::post('genshin/member/report/{id}', [ReportController::class, 'reportpostgenshinpostmember'])->name('Create Report Post Genshin Member');
    });
});

//admin
Route::middleware(['auth'])->group(function(){
    Route::middleware(['isAdmin'])->group(function(){
        //homepage
        Route::get('admin/homepage', [HomeController::class, 'indexadmin'])->name('admin.viewAdmin');
        //profile
        Route::get('admin/profile', [ProfileController::class, 'showprofileadmin'])->name('Admin Profile Page');
        Route::get('admin/profileupdate/{id}', [ProfileController::class, 'updateprofileadminindex'])->name('View Update Profile Admin');
        Route::put('admin/updateprofile/{id}', [ProfileController::class,'updateprofileadmin'])->name('Edit Profile Admin');
        Route::get('admin/passwordupdate/{id}', [ProfileController::class, 'updatepasswordadminindex'])->name('View Update Profile Admin');
        Route::post('admin/passwordupdate',  [ProfileController::class, 'updatepasswordadmin'])->name('Update Password Admin');
        //user management
        Route::get('admin/usermanagement', [UserController::class, 'usermanagementindex'])->name('User Management Page');
        Route::delete('admin/usermanagement/delete/{id}', [UserController::class, 'destroy'])->name('Delete User');
        //report system
        Route::get('admin/report', [ReportController::class, 'reportadminindex'])->name('Admin Report Page');
        Route::delete('admin/report/genshin/{id}', [ReportController::class, 'selesai'])->name('Report Selesai');
        Route::delete('admin/report/hsr/{id}', [ReportController::class, 'selesaihsr'])->name('Report Selesai HSR');
        Route::delete('admin/report/honkai/{id}', [ReportController::class, 'selesaihonkai'])->name('Report Selesai Honkai');
        //Honkai Impact 3
        //home - Honkai Impact 3
        Route::get('honkaiimpact/admin/home', [HomeController::class, 'indexadminhonkaiimpact3'])->name('admin Home Honkai Impact');
        //character + tier list - Honkai Impact 3
        Route::get('honkaiimpact/admin/character', [CharacterController::class, 'charaindexadmin'])->name('admin Character Page');
        Route::get('honkaiimpact/admin/character/search', [CharacterController::class, 'searchforadmin'])->name('Search Character admin');
        Route::get('honkaiimpact/admin/character/bio', [CharacterController::class, 'sortbiovalkadmin'])->name('admin Character BIO Page');
        Route::get('honkaiimpact/admin/character/img', [CharacterController::class, 'sortimgvalkadmin'])->name('admin Character IMG Page');
        Route::get('honkaiimpact/admin/character/mech', [CharacterController::class, 'sortmechvalkadmin'])->name('admin Character MECH Page');
        Route::get('honkaiimpact/admin/character/psy', [CharacterController::class, 'sortpsyvalkadmin'])->name('admin Character PSY Page');
        Route::get('honkaiimpact/admin/character/qua', [CharacterController::class, 'sortquavalkadmin'])->name('admin Character QUA Page');
        Route::get('honkaiimpact/admin/character/sd', [CharacterController::class, 'sortsdvalkadmin'])->name('admin Character SD Page');
        Route::get('honkaiimpact/admin/character/{id}', [CharacterController::class, 'showcharaadmin'])->name('View Character admin');
        Route::get('honkaiimpact/admin/tierlist', [CharacterController::class, 'tierlistadmin'])->name('admin Tier List Page');
        //weapon + stigmata - honkai impact 3
        Route::get('honkaiimpact/admin/weapon', [WeaponController::class, 'weaponhonkaiindexadmin'])->name('admin Weapon Page');
        Route::get('honkaiimpact/admin/weapon/search', [WeaponController::class, 'searchweaponforadmin'])->name('Search Weapon admin');
        Route::get('honkaiimpact/admin/weapon/bow', [WeaponController::class, 'sortbowhonkaiforadmin'])->name('admin Weapon Bow Page');
        Route::get('honkaiimpact/admin/weapon/cannon', [WeaponController::class, 'sortcannonhonkaiforadmin'])->name('admin Weapon Cannon Page');
        Route::get('honkaiimpact/admin/weapon/chainedblade', [WeaponController::class, 'sortchainbladehonkaiforadmin'])->name('admin Weapon Chained Blade Page');
        Route::get('honkaiimpact/admin/weapon/chakram', [WeaponController::class, 'sortchakramhonkaiforadmin'])->name('admin Weapon Chakram Page');
        Route::get('honkaiimpact/admin/weapon/cross', [WeaponController::class, 'sortcrosshonkaiforadmin'])->name('admin Weapon Cross Page');
        Route::get('honkaiimpact/admin/weapon/drivecore', [WeaponController::class, 'sortdrivecorehonkaiforadmin'])->name('admin Weapon Drive Core Page');
        Route::get('honkaiimpact/admin/weapon/gauntlet', [WeaponController::class, 'sortgauntlethonkaiforadmin'])->name('admin Weapon Gauntlet Page');
        Route::get('honkaiimpact/admin/weapon/greatsword', [WeaponController::class, 'sortgreatswordhonkaiforadmin'])->name('admin Weapon Greatsword Page');
        Route::get('honkaiimpact/admin/weapon/javelin', [WeaponController::class, 'sortjavelinhonkaiforadmin'])->name('admin Weapon Javelin Page');
        Route::get('honkaiimpact/admin/weapon/katana', [WeaponController::class, 'sortkatanahonkaiforadmin'])->name('admin Weapon Katana Page');
        Route::get('honkaiimpact/admin/weapon/lance', [WeaponController::class, 'sortlancehonkaiforadmin'])->name('admin Weapon Lance Page');
        Route::get('honkaiimpact/admin/weapon/rapidshotcrossbow', [WeaponController::class, 'sortrapidshotcrossbowhonkaiforadmin'])->name('admin Weapon Rapid-Shot Crossbow Page');
        Route::get('honkaiimpact/admin/weapon/rockethammer', [WeaponController::class, 'sortrockethammerhonkaiforadmin'])->name('admin Weapon Rocket Hammer Page');
        Route::get('honkaiimpact/admin/weapon/scythe', [WeaponController::class, 'sortscythehonkaiforadmin'])->name('admin Weapon Scythe Page');
        Route::get('honkaiimpact/admin/weapon/pistol', [WeaponController::class, 'sortpistolhonkaiforadmin'])->name('admin Weapon Pistol Page');
        Route::get('honkaiimpact/admin/weapon/{id}', [WeaponController::class, 'showweaponadmin'])->name('View Weapon admin');
        Route::get('honkaiimpact/admin/stigmata', [ItemController::class, 'stigmataindexadmin'])->name('admin Stigmata Page');
        Route::get('honkaiimpact/admin/stigmata/search', [ItemController::class, 'searchstigmataforadmin'])->name('Search Stigmata admin');
        Route::get('honkaiimpact/admin/stigmata/{id}', [ItemController::class, 'showstigmataadmin'])->name('View Stigmata admin');
        //news - Honkai Impact 3
        Route::get('honkaiimpact/admin/news', [NewsController::class, 'newsindexadmin'])->name('admin News Page');
        route::get('honkaiimpact/admin/news/1', [NewsController::class, 'newsphoadmin'])->name('admin Event Phoenix News View');
        route::get('honkaiimpact/admin/news/2', [NewsController::class, 'newsinteladmin'])->name('admin Mata Bulan News View');
        route::get('honkaiimpact/admin/news/3', [NewsController::class, 'newssenadinaadmin'])->name('admin Senadina Debut News View');
        route::get('honkaiimpact/admin/news/4', [NewsController::class, 'newsheliaadmin'])->name('admin Helia Debut News View');
        route::get('honkaiimpact/admin/news/5', [NewsController::class, 'newsblastadmin'])->name('admin Blastmetal Debut News View');
        route::get('honkaiimpact/admin/news/6', [NewsController::class, 'newsdreamadmin'])->name('admin Dream Seeker Debut News View');
        route::get('honkaiimpact/admin/news/7', [NewsController::class, 'newshidanganadmin'])->name('admin Event Hidangan News View');
        route::get('honkaiimpact/admin/news/8', [NewsController::class, 'newssongqueadmin'])->name('admin Songque Debut News View');
        route::get('honkaiimpact/admin/news/9', [NewsController::class, 'newsmadadmin'])->name('admin Mad Pleasure News View');
        route::get('honkaiimpact/admin/news/10', [NewsController::class, 'newssevenadmin'])->name('admin Seven Shu News View');
        route::get('honkaiimpact/admin/news/11', [NewsController::class, 'newspemberitahuanadmin'])->name('admin Pemberitahuan News View');
        route::get('honkaiimpact/admin/news/12', [NewsController::class, 'newspreviewadmin'])->name('admin Preview Konten News View');
        route::get('honkaiimpact/admin/news/13', [NewsController::class, 'newsAPPadmin'])->name('admin App Store News View');
        route::get('honkaiimpact/admin/news/14', [NewsController::class, 'newsFAQadmin'])->name('admin FAQ News View');
        route::get('honkaiimpact/admin/news/15', [NewsController::class, 'newsinviteadmin'])->name('admin Invite News View');
        Route::get('honkaiimpact/admin/news/16', [NewsController::class, 'newsshadowadmin'])->name('Shadow Chaser Release admin');
        Route::get('honkaiimpact/admin/news/17', [NewsController::class, 'newsupdate7admin'])->name('News update v7.5 admin');
        Route::get('honkaiimpact/admin/news/18', [NewsController::class, 'newsjovialadmin'])->name('News Jovial release admin');
        Route::get('honkaiimpact/admin/news/19', [NewsController::class, 'newssarapeumadmin'])->name('News Sarapeum release admin');
        Route::get('honkaiimpact/admin/news/20', [NewsController::class, 'newsfortuneadmin'])->name('News Fortune Mall admin');
        Route::get('honkaiimpact/admin/news/21', [NewsController::class, 'newsrangkumanadmin'])->name('News Rangkuman Info admin');
        Route::get('honkaiimpact/admin/news/22', [NewsController::class, 'newsmimpiadmin'])->name('News Mimpi dan Fajar admin');
        //guide - Honkai Impact 3
        Route::get('honkaiimpact/admin/guide', [GuideController::class, 'guideindexadmin'])->name('admin Guide Page');
        route::get('honkaiimpact/admin/Guide/begginer', [GuideController::class, 'guidebegginnerhi3admin'])->name('admin Begginner Guide View');
        route::get('honkaiimpact/admin/Guide/crystals', [GuideController::class, 'guidecrystalsadmin'])->name('admin Crystals Guide View');
        route::get('honkaiimpact/admin/Guide/foundry', [GuideController::class, 'guidefoundryadmin'])->name('admin Foundry Guide View');
        route::get('honkaiimpact/admin/Guide/realmsbattle', [GuideController::class, 'guiderealmsadmin'])->name('admin Realms Guide View');
        route::get('honkaiimpact/admin/Guide/energy', [GuideController::class, 'guideenergyadmin'])->name('admin Energy Guide View');
        route::get('honkaiimpact/admin/Guide/elysian', [GuideController::class, 'guideelysianadmin'])->name('admin Elysian Guide View');
        route::get('honkaiimpact/admin/Guide/shops', [GuideController::class, 'guideshopadmin'])->name('admin Shops Guide View');
        route::get('honkaiimpact/admin/Guide/combat', [GuideController::class, 'guidecombatadmin'])->name('admin Combat Guide Honkai Impact View');
        route::get('honkaiimpact/admin/Guide/gacha', [GuideController::class, 'guidegachaadmin'])->name('admin Gacha Guide Honkai Impact View');
        route::get('honkaiimpact/admin/Guide/teams', [GuideController::class, 'guideteamsadmin'])->name('admin Teams Guide View');
        //forum - Honkai Impact 3
        Route::get('honkaiimpact/admin/forum/search', [ForumController::class, 'searchposthonkaiforadmin'])->name('Search Forum Honkai admin');
        Route::post('honkaiimpact/admin/forum/create', [ForumController::class, 'createnewposthonkaiforadmin'])->name('Create Post Honkai admin');
        Route::get('honkaiimpact/admin/forum/create', [ForumController::class, 'createposthonkaiindexforadmin'])->name('Create Post Honkai admin Page');
        Route::get('honkaiimpact/admin/forum', [ForumController::class, 'forumindexhonkaiforadmin'])->name('admin Honkai Forum Page');
        Route::get('honkaiimpact/admin/forum/0', [ForumController::class, 'postzerohonkaiadmin'])->name('View Honkai Post Zero admin');
        Route::get('honkaiimpact/admin/forum/{id}', [ForumController::class, 'showposthonkaiforadmin'])->name('View Honkai Post admin');
        Route::patch('honkaiimpact/admin/forum/edit/{id}', [ForumController::class, 'editposthonkaiforadmin'])->name('Edit Post Honkai admin');
        Route::get('honkaiimpact/admin/forum/edit/{id}', [ForumController::class, 'editforumhonkaiindexforadmin'])->name('Edit Post Honkai admin Page');
        Route::delete('honkaiimpact/admin/forum/{id}/delete', [ForumController::class, 'deleteposthonkaiforadmin'])->name('Delete Post Honkai admin');
        //comment - Honkai Impact 3
        Route::post('honkaiimpact/admin/forum/{id}', [CommentController::class, 'commenthonkaipostadmin'])->name('Create Comment on Post Honkai admin');
        //Honkai: Star Rail
        //home - Honkai: Star Rail
        Route::get('starrail/admin/home', [HomeController::class, 'indexadminhsr'])->name('admin Home Honkai Star Rail');
        //character + tier list - honkai star rail
        Route::get('starrail/admin/character', [CharacterController::class, 'charahsrindexadmin'])->name('admin Character Honkai Star Rail Page');
        Route::get('starrail/admin/character/search', [CharacterController::class, 'searchhsrforadmin'])->name('Search Character Honkai Star Rail admin');
        Route::get('starrail/admin/character/fire', [CharacterController::class, 'sortfirehsrforadmin'])->name('admin Character Fire Honkai Star Rail Page');
        Route::get('starrail/admin/character/ice', [CharacterController::class, 'sorticehsrforadmin'])->name('admin Character Ice Honkai Star Rail Page');
        Route::get('starrail/admin/character/imaginary', [CharacterController::class, 'sortimaginaryhsrforadmin'])->name('admin Character Imaginary Honkai Star Rail Page');
        Route::get('starrail/admin/character/lightning', [CharacterController::class, 'sortlightninghsrforadmin'])->name('admin Character Lightning Honkai Star Rail Page');
        Route::get('starrail/admin/character/physical', [CharacterController::class, 'sortphysicalhsrforadmin'])->name('admin Character Physical Honkai Star Rail Page');
        Route::get('starrail/admin/character/quantum', [CharacterController::class, 'sortquantumhsrforadmin'])->name('admin Character Quantum Honkai Star Rail Page');
        Route::get('starrail/admin/character/wind', [CharacterController::class, 'sortwindhsrforadmin'])->name('admin Character Wind Honkai Star Rail Page');
        Route::get('starrail/admin/character/{id}', [CharacterController::class, 'showcharahsradmin'])->name('View Character Honkai Star Rail admin');
        Route::get('starrail/admin/tierlist/memoryofchaos', [CharacterController::class, 'tierlistmochsradmin'])->name('admin Tier List MOC Honkai Star Rail Page');
        Route::get('starrail/admin/tierlist/purefiction', [CharacterController::class, 'tierlistpfhsradmin'])->name('admin Tier List PF Honkai Star Rail Page');
        Route::get('starrail/admin/characterstore', [CharacterController::class,'charahsrstoreindex'])->name('View Add Character HSR');
        Route::post('starrail/admin/characterstore', [CharacterController::class,'storecharahsr'])->name('Add Character HSR');
        Route::delete('starrail/admin/character/{id}/delete', [CharacterController::class, 'destroycharahsr'])->name('Delete Character HSR');
        Route::get('starrail/admin/characterupdate/{id}', [CharacterController::class,'updatecharahsrindex'])->name('View Update Character HSR');
        Route::put('starrail/admin/update/{id}', [CharacterController::class,'updatecharahsr'])->name('Edit Character HSR');
        //lighhtcone + relic - honkai star rail
        Route::get('starrail/admin/lightcone', [WeaponController::class, 'lightconeindexadmin'])->name('admin Lightcone Page');
        Route::get('starrail/admin/lightcone/search', [WeaponController::class, 'searchlightconeforadmin'])->name('Search Lightcone admin');
        Route::get('starrail/admin/lightcone/abundance', [WeaponController::class, 'sortlcabundanceforadmin'])->name('admin Lightcone Abundance Page');
        Route::get('starrail/admin/lightcone/destruction', [WeaponController::class, 'sortlcdestructionforadmin'])->name('admin Lightcone Destruction Page');
        Route::get('starrail/admin/lightcone/erudition', [WeaponController::class, 'sortlceruditionforadmin'])->name('admin Lightcone Erudition Page');
        Route::get('starrail/admin/lightcone/harmony', [WeaponController::class, 'sortlcharmonyforadmin'])->name('admin Lightcone Harmony Page');
        Route::get('starrail/admin/lightcone/thehunt', [WeaponController::class, 'sortlcthehuntforadmin'])->name('admin Lightcone Hunt Page');
        Route::get('starrail/admin/lightcone/nihility', [WeaponController::class, 'sortlcnihilityforadmin'])->name('admin Lightcone Nihility Page');
        Route::get('starrail/admin/lightcone/preservation', [WeaponController::class, 'sortlcpreservationforadmin'])->name('admin Lightcone Preservation Page');
        Route::get('starrail/admin/lightcone/{id}', [WeaponController::class, 'showlightconeadmin'])->name('View Lightcone admin');
        Route::get('starrail/admin/relic', [ItemController::class, 'relicindexadmin'])->name('admin Relic Page');
        Route::get('starrail/admin/relic/search', [ItemController::class, 'searchrelicforadmin'])->name('Search Relic admin');
        Route::get('starrail/admin/relic/{id}', [ItemController::class, 'showrelicadmin'])->name('View Relic admin');
        Route::get('starrail/admin/planar', [ItemController::class, 'planarindexadmin'])->name('admin Planar Page');
        Route::get('starrail/admin/planar/search', [ItemController::class, 'searchplanarforadmin'])->name('Search Planar admin');
        Route::get('starrail/admin/planar/{id}', [ItemController::class, 'showplanaradmin'])->name('View Planar admin');
        //guide - honkai star rail
        Route::get('starrail/admin/guide', [GuideController::class, 'guidehsrindexadmin'])->name('admin Guide Honkai Star Rail Page');
        Route::get('starrail/admin/guide/charaguide', [GuideController::class, 'guidecharaadmin'])->name('admin Characters Guide View');
        Route::get('starrail/admin/guide/lightconeguide', [GuideController::class, 'guidelightconeadmin'])->name('admin Lightcone Guide View');
        Route::get('starrail/admin/guide/relicplanarguide', [GuideController::class, 'guiderelicadmin'])->name('admin Relic Guide View');
        Route::get('starrail/admin/guide/combatguide', [GuideController::class, 'guidecombatadminhsr'])->name('admin Combat Guide View');
        Route::get('starrail/admin/guide/elementsguide', [GuideController::class, 'guideelementsadmin'])->name('admin Elements Guide View');
        Route::get('starrail/admin/guide/pathguide', [GuideController::class, 'guidepathadmin'])->name('admin Path Guide View');
        Route::get('starrail/admin/guide/gachaguide', [GuideController::class, 'guidegachaadminhsr'])->name('admin Gacha Guide View');
        Route::get('starrail/admin/guide/simulatedguide', [GuideController::class, 'guidesimulatedadmin'])->name('admin Simulated Guide View');
        Route::get('starrail/admin/guide/swarmguide', [GuideController::class, 'guideswarmadmin'])->name('admin Swarm Guide View');
        Route::get('starrail/admin/guide/memoryguide', [GuideController::class, 'guidememoryadmin'])->name('admin Forgotten Hall Guide View');
        Route::get('starrail/admin/guide/purefictionguide', [GuideController::class, 'guidepurefictionadmin'])->name('admin Pure Fiction Guide View');
        //news - honkai star rail
        Route::get('starrail/admin/news', [NewsController::class, 'newshsrindexadmin'])->name('admin Star Rail News Page');
        Route::get('starrail/admin/news/1', [NewsController::class, 'newsundanganadmin'])->name('admin Undangan News View');
        Route::get('starrail/admin/news/2', [NewsController::class, 'newsacheronadmin'])->name('admin Acheron News View');
        Route::get('starrail/admin/news/3', [NewsController::class, 'newspenjelasanadmin'])->name('admin Penjelasan Update News View');
        Route::get('starrail/admin/news/4', [NewsController::class, 'newseventwebadmin'])->name('admin Event Web News View');
        Route::get('starrail/admin/news/5', [NewsController::class, 'newsgallagheradmin'])->name('admin Gallagher News View');
        Route::get('starrail/admin/news/6', [NewsController::class, 'newstraileraventurineadmin'])->name('admin Trailer Aventurine News View');
        Route::get('starrail/admin/news/7', [NewsController::class, 'newsaventurineadmin'])->name('admin Aventurine News View');
        Route::get('starrail/admin/news/8', [NewsController::class, 'newstrailerversiadmin'])->name('admin Trailer Versi News View');
        Route::get('starrail/admin/news/9', [NewsController::class, 'newspresaleadmin'])->name('admin Robin Presale News View');
        Route::get('starrail/admin/news/10', [NewsController::class, 'newsbintangadmin'])->name('admin 1000 Bintang News View');
        Route::get('starrail/admin/news/11', [NewsController::class, 'newspraunduhadmin'])->name('admin Pra Unduh 2.2 News View');
        Route::get('starrail/admin/news/12', [NewsController::class, 'newsrobinadmin'])->name('admin Robin News View');
        Route::get('starrail/admin/news/13', [NewsController::class, 'newsupdateadmin'])->name('admin Update News View');
        Route::get('starrail/admin/news/14', [NewsController::class, 'newsmendekatiadmin'])->name('admin Harmony News View');
        Route::get('starrail/admin/news/15', [NewsController::class, 'newsdiscordadmin'])->name('admin Discord News View');
        Route::get('starrail/admin/news/16', [NewsController::class, 'newsboothilladmin'])->name('Boothill News View admin');
        Route::get('starrail/admin/news/17', [NewsController::class, 'newsbyepenaconyadmin'])->name('Bye Penacony News View admin');
        Route::get('starrail/admin/news/18', [NewsController::class, 'newsfireflyburnadmin'])->name('Firefly News View admin');
        Route::get('starrail/admin/news/19', [NewsController::class, 'newsupdatever23admin'])->name('Update Version 2.3 News View admin');
        Route::get('starrail/admin/news/20', [NewsController::class, 'newsjadeadmin'])->name('Jade News View admin');
        Route::get('starrail/admin/news/21', [NewsController::class, 'newsstoneheartadmin'])->name('Stone Heart News View admin');
        Route::get('starrail/admin/news/22', [NewsController::class, 'newsyunliadmin'])->name('Yunli News View admin');
        Route::get('starrail/admin/news/23', [NewsController::class, 'newsupdatever24admin'])->name('Update Version 2.4 News View admin');
        Route::get('starrail/admin/news/24', [NewsController::class, 'newsmarchadmin'])->name('March 7th News View admin');
        //forum - honkai star rail
        Route::get('starrail/admin/forum/search', [ForumController::class, 'searchposthsrforadmin'])->name('Search Forum HSR admin');
        Route::post('starrail/admin/forum/create', [ForumController::class, 'createnewposthsrforadmin'])->name('Create Post HSR admin');
        Route::get('starrail/admin/forum/create', [ForumController::class, 'createposthsrindexforadmin'])->name('Create Post HSR admin Page');
        Route::get('starrail/admin/forum', [ForumController::class, 'forumindexhsrforadmin'])->name('admin HSR Forum Page');
        Route::get('starrail/admin/forum/0', [ForumController::class, 'postzerohsradmin'])->name('View HSR Post Zero admin');
        Route::get('starrail/admin/forum/{id}', [ForumController::class, 'showposthsrforadmin'])->name('View HSR Post admin');
        Route::patch('starrail/admin/forum/edit/{id}', [ForumController::class, 'editposthsrforadmin'])->name('Edit Post HSR admin');
        Route::get('starrail/admin/forum/edit/{id}', [ForumController::class, 'editforumhsrindexforadmin'])->name('Edit Post HSR admin Page');
        Route::delete('starrail/admin/forum/{id}/delete', [ForumController::class, 'deleteposthsrforadmin'])->name('Delete Post HSR admin');
        //comment - honkai star rail
        Route::post('starrail/admin/forum/{id}', [CommentController::class, 'commenthsrpostadmin'])->name('Create Comment on Post HSR admin');
        //Genshin Impact
        //home - Genshin Impact
        Route::get('genshin/admin/home', [HomeController::class, 'indexadmingenshin'])->name('admin Home Genshin Impact');
        //character + tier list - genshin impact
        Route::get('genshin/admin/character', [CharacterController::class, 'charagenshinindexadmin'])->name('admin Character Genshin Page');
        Route::get('genshin/admin/character/search', [CharacterController::class, 'searchgenshinforadmin'])->name('Search Character Genshin admin');
        Route::get('genshin/admin/character/anemo', [CharacterController::class, 'sortanemogenshinforadmin'])->name('admin Character Anemo Genshin Page');
        Route::get('genshin/admin/character/cryo', [CharacterController::class, 'sortcryogenshinforadmin'])->name('admin Character Cryo Genshin Page');
        Route::get('genshin/admin/character/dendro', [CharacterController::class, 'sortdendrogenshinforadmin'])->name('admin Character Dendro Genshin Page');
        Route::get('genshin/admin/character/electro', [CharacterController::class, 'sortelectrogenshinforadmin'])->name('admin Character Electro Genshin Page');
        Route::get('genshin/admin/character/geo', [CharacterController::class, 'sortgeogenshinforadmin'])->name('admin Character Geo Genshin Page');
        Route::get('genshin/admin/character/hydro', [CharacterController::class, 'sorthydrogenshinforadmin'])->name('admin Character Hydro Genshin Page');
        Route::get('genshin/admin/character/pyro', [CharacterController::class, 'sortpyrogenshinforadmin'])->name('admin Character Pyro Genshin Page');
        Route::get('genshin/admin/character/{id}', [CharacterController::class, 'showcharagenshinadmin'])->name('View Character Genshin admin');
        Route::get('genshin/admin/tierlist', [CharacterController::class, 'tierlistgenshinadmin'])->name('admin Tier List Genshin Page');
        //weapon + artifact - genshin impact
        Route::get('genshin/admin/weapon', [WeaponController::class, 'weapongenshinindexadmin'])->name('admin Weapon Genshin Page');
        Route::get('genshin/admin/weapon/search', [WeaponController::class, 'searchweapongenshinforadmin'])->name('Search Weapon Genshin admin');
        Route::get('genshin/admin/weapon/sword', [WeaponController::class, 'sortswordgenshinforadmin'])->name('admin Weapon Sword Genshin Page');
        Route::get('genshin/admin/weapon/bow', [WeaponController::class, 'sortbowgenshinforadmin'])->name('admin Weapon Bow Genshin Page');
        Route::get('genshin/admin/weapon/catalyst', [WeaponController::class, 'sortcatalystgenshinforadmin'])->name('admin Weapon Catalyst Genshin Page');
        Route::get('genshin/admin/weapon/claymore', [WeaponController::class, 'sortclaymoregenshinforadmin'])->name('admin Weapon Claymore Genshin Page');
        Route::get('genshin/admin/weapon/polearm', [WeaponController::class, 'sortpolearmgenshinforadmin'])->name('admin Weapon Polearm Genshin Page');
        Route::get('genshin/admin/weapon/{id}', [WeaponController::class, 'showweapongenshinadmin'])->name('View Weapon Genshin admin');
        Route::get('genshin/admin/artifact', [ItemController::class, 'artifactindexadmin'])->name('admin Artifact Page');
        Route::get('genshin/admin/artifact/search', [ItemController::class, 'searchartifactforadmin'])->name('Search Artifact admin');
        Route::get('genshin/admin/artifact/{id}', [ItemController::class, 'showartifactadmin'])->name('View Artifact admin');
        //news - genshin impact
        Route::get('genshin/admin/news', [NewsController::class, 'newsgenshinindexadmin'])->name('admin Genshin News Page');
        Route::get('genshin/admin/news/1', [NewsController::class, 'newsgenshinid1admin'])->name('admin News Genshin Id 1');
        Route::get('genshin/admin/news/2', [NewsController::class, 'newsgenshinid2admin'])->name('admin News Genshin Id 2');
        Route::get('genshin/admin/news/3', [NewsController::class, 'newsgenshinid3admin'])->name('admin News Genshin Id 3');
        Route::get('genshin/admin/news/4', [NewsController::class, 'newsgenshinid4admin'])->name('admin News Genshin Id 4');
        Route::get('genshin/admin/news/5', [NewsController::class, 'newsgenshinid5admin'])->name('admin News Genshin Id 5');
        Route::get('genshin/admin/news/6', [NewsController::class, 'newsgenshinid6admin'])->name('admin News Genshin Id 6');
        Route::get('genshin/admin/news/7', [NewsController::class, 'newsgenshinid7admin'])->name('admin News Genshin Id 7');
        Route::get('genshin/admin/news/8', [NewsController::class, 'newsgenshinid8admin'])->name('admin News Genshin Id 8');
        Route::get('genshin/admin/news/9', [NewsController::class, 'newsgenshinid9admin'])->name('admin News Genshin Id 9');
        Route::get('genshin/admin/news/10', [NewsController::class, 'newsgenshinid10admin'])->name('admin News Genshin Id 10');
        Route::get('genshin/admin/news/11', [NewsController::class, 'newsgenshinid11admin'])->name('admin News Genshin Id 11');
        Route::get('genshin/admin/news/12', [NewsController::class, 'newsgenshinid12admin'])->name('admin News Genshin Id 12');
        Route::get('genshin/admin/news/13', [NewsController::class, 'newsgenshinid13admin'])->name('admin News Genshin Id 13');
        Route::get('genshin/admin/news/14', [NewsController::class, 'newsgenshinid14admin'])->name('admin News Genshin Id 14');
        Route::get('genshin/admin/news/15', [NewsController::class, 'newsgenshinid15admin'])->name('admin News Genshin Id 15');
        Route::get('genshin/admin/news/16', [NewsController::class, 'newsgenshinid16admin'])->name('admin News Genshin Id 16');
        Route::get('genshin/admin/news/17', [NewsController::class, 'newsgenshinid17admin'])->name('admin News Genshin Id 17');
        Route::get('genshin/admin/news/18', [NewsController::class, 'newsgenshinid18admin'])->name('admin News Genshin Id 18');
        Route::get('genshin/admin/news/19', [NewsController::class, 'newsgenshinid19admin'])->name('admin News Genshin Id 19');
        Route::get('genshin/admin/news/20', [NewsController::class, 'newsgenshinid20admin'])->name('admin News Genshin Id 20');
        Route::get('genshin/admin/news/21', [NewsController::class, 'newsgenshinid21admin'])->name('admin News Genshin Id 21');
        Route::get('genshin/admin/news/22', [NewsController::class, 'newsgenshinid22admin'])->name('admin News Genshin Id 22');
        Route::get('genshin/admin/news/23', [NewsController::class, 'newsgenshinid23admin'])->name('admin News Genshin Id 23');
        Route::get('genshin/admin/news/24', [NewsController::class, 'newsgenshinid24admin'])->name('admin News Genshin Id 24');
        Route::get('genshin/admin/news/25', [NewsController::class, 'newsgenshinid25admin'])->name('admin News Genshin Id 25');
        //guide - Genshin impact
        Route::get('genshin/admin/guide', [GuideController::class, 'guideindexgenshinadmin'])->name('admin Genshin Guide Page');
        Route::get('genshin/admin/guide/gachasystem', [GuideController::class, 'gachasystemgenshinadmin'])->name('Genshin admin Guide Gacha System Page');
        Route::get('genshin/admin/guide/earlygametips', [GuideController::class, 'earlygametipsgenshinadmin'])->name('Genshin admin Guide Early Game Tips Page');
        Route::get('genshin/admin/guide/intro', [GuideController::class, 'introtogamegenshinadmin'])->name('Genshin admin Guide Intro to Game Page');
        Route::get('genshin/admin/guide/elementalreaction', [GuideController::class, 'elementalreactiongenshinadmin'])->name('Genshin admin Guide Elemental Reaction Page');
        Route::get('genshin/admin/guide/tipsgachabannersaatini', [GuideController::class, 'shouldupullcurrentbannergenshinadmin'])->name('Genshin admin Guide Should u Pull Current Banner Page');
        Route::get('genshin/admin/guide/teambuilding', [GuideController::class, 'teambuildinggenshinadmin'])->name('Genshin admin Guide Team Building Page');
        Route::get('genshin/admin/guide/characterprogression', [GuideController::class, 'charaupgradegenshinadmin'])->name('Genshin admin Guide Character Upgrade Page');
        Route::get('genshin/admin/guide/tipsgachaf2p', [GuideController::class, 'f2pgachagenshinadmin'])->name('Genshin admin Guide F2P Gacha Page');
        Route::get('genshin/admin/guide/spiralabyss', [GuideController::class, 'introtospiralabyssgenshinadmin'])->name('Genshin admin Guide Intro to Spiral Abyss Page');
        Route::get('genshin/admin/guide/tipsspiralabyss', [GuideController::class, 'currentspiralabysstipsgenshinadmin'])->name('Genshin admin Guide Current Spiral Abyss Tips Page');
        //forum - Genshin Impact
        Route::get('genshin/admin/forum/search', [ForumController::class, 'searchpostgenshinforadmin'])->name('Search Forum Genshin admin');
        Route::post('genshin/admin/forum/create', [ForumController::class, 'createnewpostgenshinforadmin'])->name('Create Post Genshin admin');
        Route::get('genshin/admin/forum/create', [ForumController::class, 'createpostgenshinindexforadmin'])->name('Create Post Genshin admin Page');
        Route::get('genshin/admin/forum', [ForumController::class, 'forumindexgenshinforadmin'])->name('admin Genshin Forum Page');
        Route::get('genshin/admin/forum/0', [ForumController::class, 'postzerogenshinadmin'])->name('View Genshin Post Zero admin');
        Route::get('genshin/admin/forum/{id}', [ForumController::class, 'showpostgenshinforadmin'])->name('View Genshin Post admin');
        Route::patch('genshin/admin/forum/edit/{id}', [ForumController::class, 'editpostgenshinforadmin'])->name('Edit Post Genshin admin');
        Route::get('genshin/admin/forum/edit/{id}', [ForumController::class, 'editforumgenshinindexforadmin'])->name('Edit Post Genshin admin Page');
        Route::delete('genshin/admin/forum/{id}/delete', [ForumController::class, 'deletepostgenshinforadmin'])->name('Delete Post Genshin admin');
        //comment - Genshin Impact
        Route::post('genshin/admin/forum/{id}', [CommentController::class, 'commentgenshinpostadmin'])->name('Create Comment on Post Genshin admin');
    });
});
