<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //guest
    public function index()
    {
        return view('landing');
    }
    //honkai impact
    public function indexguesthonkaiimpact3()
    {
        return view('hi3.guest.home');
    }
    //genshin impact
    public function indexguestgenshinimpact()
    {
        return view('gi.guest.home');
    }
    //hsr
    public function indexguesthsr()
    {
        return view('hsr.guest.home');
    }

    //member
    public function indexmember()
    {
        return view('membersect.homepage');
    }
    //honkai impact
    public function indexmemberhonkaiimpact3()
    {
        return view('hi3.member.home');
    }
    //hsr
    public function indexmemberhsr()
    {
        return view('hsr.member.home');
    }
    //genshin
    public function indexmembergenshin()
    {
        return view('gi.member.home');
    }

    //admin
    public function indexadmin()
    {
        return view('adminsect.homepage');
    }
    public function aboutusadmin()
    {
        return view('hi3.admin.aboutus');
    }
    //honkai impact
    public function indexadminhonkaiimpact3()
    {
        return view('hi3.admin.home');
    }
    //hsr
    public function indexadminhsr()
    {
        return view('hsr.admin.home');
    }
    //genshin
    public function indexadmingenshin()
    {
        return view('gi.admin.home');
    }

}
