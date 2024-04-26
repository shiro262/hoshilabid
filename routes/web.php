<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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
    Route::post('/forgotpassword', [ResetPasswordController::class, 'forgot'])->name('guest.method.ForgotPassword');
    //home - honkai impact 3
    Route::get('hi3/guest/home', [HomeController::class, 'indexguesthonkaiimpact3'])->name('Guest Home Honkai Impact');
    //character + tier list - honkai impact 3
    Route::get('hi3/guest/character', [CharacterController::class, 'charaindexguest'])->name('Guest Character Page');
    Route::get('hi3/guest/character/search', [CharacterController::class, 'searchforguest'])->name('Search Character Guest');
    Route::get('hi3/guest/character/{id}', [CharacterController::class, 'showcharaguest'])->name('View Character Guest');
    Route::get('hi3/guest/tierlist', [CharacterController::class, 'tierlistguest'])->name('Guest Tier List Page');
    //weapon + stigmata - honkai impact 3
    Route::get('hi3/guest/weapon', [WeaponController::class, 'weaponhonkaiindexguest'])->name('Guest Weapon Page');
    Route::get('hi3/guest/weapon/search', [WeaponController::class, 'searchweaponforguest'])->name('Search Weapon Guest');
    Route::get('hi3/guest/weapon/{id}', [WeaponController::class, 'showweaponguest'])->name('View Weapon Guest');
    Route::get('hi3/guest/stigmata', [ItemController::class, 'stigmataindexguest'])->name('Guest Stigmata Page');
    Route::get('hi3/guest/stigmata/search', [ItemController::class, 'searchstigmataforguest'])->name('Search Stigmata Guest');
    Route::get('hi3/guest/stigmata/{id}', [ItemController::class, 'showstigmataguest'])->name('View Stigmata Guest');
    //news - Honkai Impact 3
    Route::get('hi3/guest/news', [NewsController::class, 'newsindexguest'])->name('Guest News Page');
    Route::get('hi3/guest/news/{id}', [NewsController::class, 'shownewsguest'])->name('View News Guest');
    //guide - Honkai Impact 3
    Route::get('hi3/guest/guide', [GuideController::class, 'guideindexguest'])->name('Guest Guide Page');
    Route::get('hi3/guest/guide/{id}', [GuideController::class, 'showguideguest'])->name('View Guide Guest');
    //home - genshin impact
    Route::get('gi/guest/home', [HomeController::class, 'indexguestgenshinimpact'])->name('Guest Home Genshin Impact');
    //character + tier list - genshin impact
    Route::get('gi/guest/character', [CharacterController::class, 'charagenshinindexguest'])->name('Guest Character Genshin Page');
    Route::get('gi/guest/character/search', [CharacterController::class, 'searchgenshinforguest'])->name('Search Character Genshin Guest');
    Route::get('gi/guest/character/{id}', [CharacterController::class, 'showcharagenshinguest'])->name('View Character Genshin Guest');
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
        //home - Honkai Impact 3
        Route::get('hi3/member/home', [HomeController::class, 'indexmemberhonkaiimpact3'])->name('Member Home Honkai Impact');
        //character + tier list - Honkai Impact 3
        Route::get('hi3/member/character', [CharacterController::class, 'charaindexmember'])->name('Member Character Page');
        Route::get('hi3/member/character/search', [CharacterController::class, 'searchformember'])->name('Search Character Member');
        Route::get('hi3/member/character/{id}', [CharacterController::class, 'showcharamember'])->name('View Character Member');
        Route::get('hi3/member/tierlist', [CharacterController::class, 'tierlistmember'])->name('Member Tier List Page');
        //news - Honkai Impact 3
        Route::get('hi3/member/news', [NewsController::class, 'newsindexmember'])->name('Member News Page');
        Route::get('hi3/member/news/{id}', [NewsController::class, 'shownewsmember'])->name('View News Member');
        //guide - Honkai Impact 3
        Route::get('hi3/member/guide', [GuideController::class, 'guideindexmember'])->name('Member Guide Page');
        Route::get('hi3/member/guide/{id}', [GuideController::class, 'showguidemember'])->name('View Guide Member');
        //blog - Honkai Impact 3
        Route::get('hi3/member/blog/search', [BlogController::class, 'searchblogmember'])->name('Search Blog Member');
        Route::post('hi3/member/blog/create', [BlogController::class, 'createnewblog'])->name('Create Blog');
        Route::get('hi3/member/blog/create', [BlogController::class, 'createnewblogpage'])->name('Create Blog Page');
        Route::get('hi3/member/blog', [BlogController::class, 'blogindexmember'])->name('Member Blog Page');
        Route::get('hi3/member/blog/{id}', [BlogController::class, 'showblogmember'])->name('View Blog Member');
        Route::patch('hi3/member/blog/edit/{id}', [BlogController::class, 'editblog'])->name('Edit Blog');
        Route::get('hi3/member/blog/edit/{id}', [BlogController::class, 'editblogpage'])->name('Edit Blog Page');
        Route::delete('hi3/member/blog/{id}/delete', [BlogController::class, 'deleteblogmember'])->name('Delete Blog Member');
        //home - Honkai: Star Rail
        Route::get('hsr/member/home', [HomeController::class, 'indexmemberhsr'])->name('Member Home Star Rail');
        //home - Genshin Imapct
        Route::get('gi/member/home', [HomeController::class, 'indexmembergenshin'])->name('Member Home Genshin Impact');
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
        //character + tier list - Honkai Impact 3
        Route::get('hi3/admin/character', [CharacterController::class, 'charaindexadmin'])->name('Admin Character Page');
        Route::get('hi3/admin/character/search', [CharacterController::class, 'searchforadmin'])->name('Search Character Admin');
        Route::get('hi3/admin/character/{id}', [CharacterController::class, 'showcharaadmin'])->name('View Character Admin');
        Route::get('hi3/admin/tierlist', [CharacterController::class, 'tierlistadmin'])->name('Admin Tier List Page');
        Route::get('hi3/admin/characterstore', [CharacterController::class,'charastoreindex'])->name('View Add Character');
        Route::post('hi3/admin/characterstore', [CharacterController::class,'store'])->name('Add Character');
        Route::delete('hi3/admin/character/{id}/delete', [CharacterController::class, 'destroy'])->name('Delete Character');
        Route::get('hi3/admin/characterupdate/{id}', [CharacterController::class,'updatecharaindex'])->name('View Update Character');
        Route::put('hi3/admin/update/{id}', [CharacterController::class,'update'])->name('Edit Character');
        //news - Honkai Impact 3
        Route::get('hi3/admin/news', [NewsController::class, 'newsindexadmin'])->name('Admin News Page');
        Route::get('hi3/admin/news/{id}', [NewsController::class, 'shownewsadmin'])->name('View News Admin');
        Route::get('hi3/admin/newsstore', [NewsController::class,'newsstoreindex'])->name('View Add News');
        Route::post('hi3/admin/newsstore', [NewsController::class,'store'])->name('Add News');
        Route::delete('hi3/admin/news/{id}/delete', [NewsController::class, 'destroy'])->name('Delete News');
        Route::get('hi3/admin/newsupdate/{id}', [NewsController::class,'updatenewsindex'])->name('View Update News');
        Route::put('hi3/admin/updatenews/{id}', [NewsController::class,'update'])->name('Edit News');
        //guide - Honkai Impact 3
        Route::get('hi3/admin/guide', [GuideController::class, 'guideindexadmin'])->name('Admin Guide Page');
        Route::get('hi3/admin/guide/{id}', [GuideController::class, 'showguideadmin'])->name('View Guide Admin');
        Route::get('hi3/admin/guidestore', [GuideController::class,'guidestoreindex'])->name('View Add Guide');
        Route::post('hi3/admin/guidestore', [GuideController::class,'store'])->name('Add Guide');
        Route::delete('hi3/admin/guide/{id}/delete', [GuideController::class, 'destroy'])->name('Delete Guide');
        Route::get('hi3/admin/guideupdate/{id}', [GuideController::class,'updateguideindex'])->name('View Update Guide');
        Route::put('hi3/admin/updateguide/{id}', [GuideController::class,'update'])->name('Edit Guide');
        //blog - Honkai Impact 3
        Route::get('hi3/admin/blog/search', [BlogController::class, 'searchblogadmin'])->name('Search Blog Admin');
        Route::get('hi3/admin/blog', [BlogController::class, 'blogindexadmin'])->name('Admin Blog Page');
        Route::get('hi3/admin/blog/{id}', [BlogController::class, 'showblogadmin'])->name('View Blog Admin');
        Route::delete('hi3/admin/blog/{id}/delete', [BlogController::class, 'deleteblogadmin'])->name('Delete Blog Admin');
    });
});
