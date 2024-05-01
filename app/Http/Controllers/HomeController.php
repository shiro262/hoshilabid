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
    //honkai impact
    public function indexmember()
    {
        return view('membersect.homepage');
    }
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
    public function aboutusmember()
    {
        return view('hi3.member.aboutus');
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
}
