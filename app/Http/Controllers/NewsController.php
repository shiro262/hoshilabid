<?php

namespace App\Http\Controllers;

use App\Models\NewsGenshin;
use App\Models\NewsHonkai;
use App\Models\NewsHsr;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{

    //guest
    //honkai impact
    public function newsindexguest()
    {
        $newss = NewsHonkai::orderByDesc('id')->paginate(5);
        return view('hi3.guest.news', compact('newss'));
    }
    public function newspho()
    {
        return view('hi3.guest.news.phoenix');
    }
    public function newsintel()
    {
        return view('hi3.guest.news.intel_ai');
    }
    public function newssenadina()
    {
        return view('hi3.guest.news.senadina');
    }
    public function newshelia()
    {
        return view('hi3.guest.news.helia');
    }
    public function newsblast()
    {
        return view('hi3.guest.news.blastmetal');
    }
    public function newshidangan()
    {
        return view('hi3.guest.news.hidangan');
    }
    public function newsdream()
    {
        return view('hi3.guest.news.dreamseeker');
    }
    public function newssongque()
    {
        return view('hi3.guest.news.songque');
    }
    public function newsmad()
    {
        return view('hi3.guest.news.mad_pleasure');
    }
    Public Function newsseven()
    {
        return view('hi3.guest.news.seven_shu');
    }
    Public Function newspemberitahuan()
    {
        return view('hi3.guest.news.pemberitahuan');
    }
    Public Function newspreview()
    {
        return view('hi3.guest.news.preview_konten');
    }
    Public Function newsAPP()
    {
        return view('hi3.guest.news.app_store');
    }
    public function newsFAQ()
    {
        return view('hi3.guest.news.FAQ_1');
    }
    public function newsinvite()
    {
        return view('hi3.guest.news.invitation');

    }
    public function newsmimpi()
    {
        return view('hi3.guest.news.mimpi_fajar');
    }
    public function newsrangkuman()
    {
        return view('hi3.guest.news.rangkuman_info');
    }
    public function newsfortune()
    {
        return view('hi3.guest.news.fortune_mall');
    }
    public function newssarapeum()
    {
        return view('hi3.guest.news.sarapeum');
    }
    public function newsjovial()
    {
        return view('hi3.guest.news.jovial');
    }
    public function newsupdate7()
    {
        return view('hi3.guest.news.update_7');
    }
    public function newsshadow()
    {
        return view('hi3.guest.news.shadow');
    }
    //hsr
    public function newshsrindexguest()
    {
        $newss = NewsHsr::orderByDesc('id')->paginate(5);
        return view('hsr.guest.news', compact('newss'));
    }
    public function newspenjelasanguest()
    {
        return view('hsr.guest.news.penjelasanupdate');
    }
    public function newsacheronguest()
    {
        return view('hsr.guest.news.acheron');
    }
    public function newseventwebguest()
    {
        return view('hsr.guest.news.eventweb');
    }
    public function newsgallagherguest()
    {
        return view('hsr.guest.news.gallagher');
    }
    public function newsaventurineguest()
    {
        return view('hsr.guest.news.aventurine');
    }
    public function newstraileraventurineguest()
    {
        return view('hsr.guest.news.traileraventurine');
    }
    public function newstrailerversiguest()
    {
        return view('hsr.guest.news.trailerversi');
    }
    public function newspresaleguest()
    {
        return view('hsr.guest.news.robinpresale');
    }
    public function newsbintangguest()
    {
        return view('hsr.guest.news.trailerbintang');
    }
    public function newspraunduhguest()
    {
        return view('hsr.guest.news.praunduh');
    }
    public function newsrobinguest()
    {
        return view('hsr.guest.news.robintrailer');
    }
    public function newsundanganguest()
    {
        return view('hsr.guest.news.undangan');
    }
    public function newsdiscordguest()
    {
        return view('hsr.guest.news.discordquest');
    }
    public function newsmendekatiguest()
    {
        return view('hsr.guest.news.harmony');
    }
    public function newsupdateguest()
    {
        return view('hsr.guest.news.updateversi');
    }
    public function newsboothill()
    {
        return view('hsr.guest.news.boothill');
    }
    public function newsbyepenacony()
    {
        return view('hsr.guest.news.byepenacony');
    }
    public function newsfireflyburn()
    {
        return view('hsr.guest.news.fireflyburn');
    }
    public function newsupdatever23(){
        return view('hsr.guest.news.updatever23');
    }
    public function newsjade(){
        return view('hsr.guest.news.jade');
    }
    public function newsstoneheart(){
        return view('hsr.guest.news.stoneheart');
    }
    public function newsyunli(){
        return view('hsr.guest.news.yunli');
    }
    public function newsupdatever24(){
        return view('hsr.guest.news.updatever24');
    }
    public function newsmarch(){
        return view('hsr.guest.news.march7th');
    }
    //genshin impact
    public function newsgenshinindexguest()
    {
        $newss = NewsGenshin::orderByDesc('id')->paginate(5);
        return view('gi.guest.news', compact('newss'));
    }
    public function newsgenshinid1guest()
    {
        return view('gi.guest.news.id1');
    }
    public function newsgenshinid2guest()
    {
        return view('gi.guest.news.id2');
    }
    public function newsgenshinid3guest()
    {
        return view('gi.guest.news.id3');
    }
    public function newsgenshinid4guest()
    {
        return view('gi.guest.news.id4');
    }
    public function newsgenshinid5guest()
    {
        return view('gi.guest.news.id5');
    }
    public function newsgenshinid6guest()
    {
        return view('gi.guest.news.id6');
    }
    public function newsgenshinid7guest()
    {
        return view('gi.guest.news.id7');
    }
    public function newsgenshinid8guest()
    {
        return view('gi.guest.news.id8');
    }
    public function newsgenshinid9guest()
    {
        return view('gi.guest.news.id9');
    }
    public function newsgenshinid10guest()
    {
        return view('gi.guest.news.id10');
    }
    public function newsgenshinid11guest()
    {
        return view('gi.guest.news.id11');
    }
    public function newsgenshinid12guest()
    {
        return view('gi.guest.news.id12');
    }
    public function newsgenshinid13guest()
    {
        return view('gi.guest.news.id13');
    }
    public function newsgenshinid14guest()
    {
        return view('gi.guest.news.id14');
    }
    public function newsgenshinid15guest()
    {
        return view('gi.guest.news.id15');
    }
    public function newsgenshinid16guest()
    {
        return view('gi.guest.news.id16');
    }
    public function newsgenshinid17guest()
    {
        return view('gi.guest.news.id17');
    }
    public function newsgenshinid18guest()
    {
        return view('gi.guest.news.id18');
    }
    public function newsgenshinid19guest()
    {
        return view('gi.guest.news.id19');
    }
    public function newsgenshinid20guest()
    {
        return view('gi.guest.news.id20');
    }
    public function newsgenshinid21guest()
    {
        return view('gi.guest.news.id21');
    }
    public function newsgenshinid22guest()
    {
        return view('gi.guest.news.id22');
    }
    public function newsgenshinid23guest()
    {
        return view('gi.guest.news.id23');
    }
    public function newsgenshinid24guest()
    {
        return view('gi.guest.news.id24');
    }
    public function newsgenshinid25guest()
    {
        return view('gi.guest.news.id25');
    }

    //member
    //honkai impact
    public function newsindexmember()
    {
        $newss = NewsHonkai::orderByDesc('id')->paginate(5);

        return view('hi3.member.news', compact('newss'));
    }
    public function newsphomember()
    {
        return view('hi3.member.news.phoenix');
    }
    public function newsintelmember()
    {
        return view('hi3.member.news.intel_ai');
    }
    public function newssenadinamember()
    {
        return view('hi3.member.news.senadina');
    }
    public function newsheliamember()
    {
        return view('hi3.member.news.helia');
    }
    public function newsblastmember()
    {
        return view('hi3.member.news.blastmetal');
    }
    public function newshidanganmember()
    {
        return view('hi3.member.news.hidangan');
    }
    public function newsdreammember()
    {
        return view('hi3.member.news.dreamseeker');
    }
    public function newssongquemember()
    {
        return view('hi3.member.news.songque');
    }
    public function newsmadmember()
    {
        return view('hi3.member.news.mad_pleasure');
    }
    Public Function newssevenmember()
    {
        return view('hi3.member.news.seven_shu');
    }
    Public Function newspemberitahuanmember()
    {
        return view('hi3.member.news.pemberitahuan');
    }
    Public Function newspreviewmember()
    {
        return view('hi3.member.news.preview_konten');
    }
    Public Function newsAPPmember()
    {
        return view('hi3.member.news.app_store');
    }
    public function newsFAQmember()
    {
        return view('hi3.member.news.FAQ_1');
    }
    public function newsinvitemember()
    {
        return view('hi3.member.news.invitation');

    }
    public function newsmimpimember()
    {
        return view('hi3.member.news.mimpi_fajar');
    }
    public function newsrangkumanmember()
    {
        return view('hi3.member.news.rangkuman_info');
    }
    public function newsfortunemember()
    {
        return view('hi3.member.news.fortune_mall');
    }
    public function newssarapeummember()
    {
        return view('hi3.member.news.sarapeum');
    }
    public function newsjovialmember()
    {
        return view('hi3.member.news.jovial');
    }
    public function newsupdate7member()
    {
        return view('hi3.member.news.update_7');
    }
    public function newsshadowmember()
    {
        return view('hi3.member.news.shadow');
    }

    //genshin impact
    public function newsgenshinindexmember()
    {
        $newss = NewsGenshin::orderByDesc('id')->paginate(5);
        return view('gi.member.news', compact('newss'));
    }
    public function newsgenshinid1member()
    {
        return view('gi.member.news.id1');
    }
    public function newsgenshinid2member()
    {
        return view('gi.member.news.id2');
    }
    public function newsgenshinid3member()
    {
        return view('gi.member.news.id3');
    }
    public function newsgenshinid4member()
    {
        return view('gi.member.news.id4');
    }
    public function newsgenshinid5member()
    {
        return view('gi.member.news.id5');
    }
    public function newsgenshinid6member()
    {
        return view('gi.member.news.id6');
    }
    public function newsgenshinid7member()
    {
        return view('gi.member.news.id7');
    }
    public function newsgenshinid8member()
    {
        return view('gi.member.news.id8');
    }
    public function newsgenshinid9member()
    {
        return view('gi.member.news.id9');
    }
    public function newsgenshinid10member()
    {
        return view('gi.member.news.id10');
    }
    public function newsgenshinid11member()
    {
        return view('gi.member.news.id11');
    }
    public function newsgenshinid12member()
    {
        return view('gi.member.news.id12');
    }
    public function newsgenshinid13member()
    {
        return view('gi.member.news.id13');
    }
    public function newsgenshinid14member()
    {
        return view('gi.member.news.id14');
    }
    public function newsgenshinid15member()
    {
        return view('gi.member.news.id15');
    }
    public function newsgenshinid16member()
    {
        return view('gi.member.news.id16');
    }
    public function newsgenshinid17member()
    {
        return view('gi.member.news.id17');
    }
    public function newsgenshinid18member()
    {
        return view('gi.member.news.id18');
    }
    public function newsgenshinid19member()
    {
        return view('gi.member.news.id19');
    }
    public function newsgenshinid20member()
    {
        return view('gi.member.news.id20');
    }
    public function newsgenshinid21member()
    {
        return view('gi.member.news.id21');
    }
    public function newsgenshinid22member()
    {
        return view('gi.member.news.id22');
    }
    public function newsgenshinid23member()
    {
        return view('gi.member.news.id23');
    }
    public function newsgenshinid24member()
    {
        return view('gi.member.news.id24');
    }
    public function newsgenshinid25member()
    {
        return view('gi.member.news.id25');
    }
    //hsr
    public function newshsrindexmember()
    {
        $newss = NewsHsr::orderByDesc('id')->paginate(5);
        return view('hsr.member.news', compact('newss'));
    }
    public function newspenjelasanmember()
    {
        return view('hsr.member.news.penjelasanupdate');
    }
    public function newsacheronmember()
    {
        return view('hsr.member.news.acheron');
    }
    public function newseventwebmember()
    {
        return view('hsr.member.news.eventweb');
    }
    public function newsgallaghermember()
    {
        return view('hsr.member.news.gallagher');
    }
    public function newsaventurinemember()
    {
        return view('hsr.member.news.aventurine');
    }
    public function newstraileraventurinemember()
    {
        return view('hsr.member.news.traileraventurine');
    }
    public function newstrailerversimember()
    {
        return view('hsr.member.news.trailerversi');
    }
    public function newspresalemember()
    {
        return view('hsr.member.news.robinpresale');
    }
    public function newsbintangmember()
    {
        return view('hsr.member.news.trailerbintang');
    }
    public function newspraunduhmember()
    {
        return view('hsr.member.news.praunduh');
    }
    public function newsrobinmember()
    {
        return view('hsr.member.news.robintrailer');
    }
    public function newsundanganmember()
    {
        return view('hsr.member.news.undangan');
    }
    public function newsdiscordmember()
    {
        return view('hsr.member.news.discordquest');
    }
    public function newsmendekatimember()
    {
        return view('hsr.member.news.harmony');
    }
    public function newsupdatemember()
    {
        return view('hsr.member.news.updateversi');
    }
    public function newsboothillmember()
    {
        return view('hsr.member.news.boothill');
    }
    public function newsbyepenaconymember()
    {
        return view('hsr.member.news.byepenacony');
    }
    public function newsfireflyburnmember()
    {
        return view('hsr.member.news.fireflyburn');
    }
    public function newsupdatever23member(){
        return view('hsr.member.news.updatever23');
    }
    public function newsjademember(){
        return view('hsr.member.news.jade');
    }
    public function newsstoneheartmember(){
        return view('hsr.member.news.stoneheart');
    }
    public function newsyunlimember(){
        return view('hsr.member.news.yunli');
    }
    public function newsupdatever24member(){
        return view('hsr.member.news.updatever24');
    }
    public function newsmarchmember(){
        return view('hsr.member.news.march7th');
    }


    //admin
    //honkai impact
    public function newsindexadmin()
    {
        $newss = NewsHonkai::orderByDesc('id')->paginate(5);

        return view('hi3.admin.news', compact('newss'));
    }
    public function newsphoadmin()
    {
        return view('hi3.admin.news.phoenix');
    }
    public function newsinteladmin()
    {
        return view('hi3.admin.news.intel_ai');
    }
    public function newssenadinaadmin()
    {
        return view('hi3.admin.news.senadina');
    }
    public function newsheliaadmin()
    {
        return view('hi3.admin.news.helia');
    }
    public function newsblastadmin()
    {
        return view('hi3.admin.news.blastmetal');
    }
    public function newshidanganadmin()
    {
        return view('hi3.admin.news.hidangan');
    }
    public function newsdreamadmin()
    {
        return view('hi3.admin.news.dreamseeker');
    }
    public function newssongqueadmin()
    {
        return view('hi3.admin.news.songque');
    }
    public function newsmadadmin()
    {
        return view('hi3.admin.news.mad_pleasure');
    }
    Public Function newssevenadmin()
    {
        return view('hi3.admin.news.seven_shu');
    }
    Public Function newspemberitahuanadmin()
    {
        return view('hi3.admin.news.pemberitahuan');
    }
    Public Function newspreviewadmin()
    {
        return view('hi3.admin.news.preview_konten');
    }
    Public Function newsAPPadmin()
    {
        return view('hi3.admin.news.app_store');
    }
    public function newsFAQadmin()
    {
        return view('hi3.admin.news.FAQ_1');
    }
    public function newsinviteadmin()
    {
        return view('hi3.admin.news.invitation');

    }
    public function newsmimpiadmin()
    {
        return view('hi3.admin.news.mimpi_fajar');
    }
    public function newsrangkumanadmin()
    {
        return view('hi3.admin.news.rangkuman_info');
    }
    public function newsfortuneadmin()
    {
        return view('hi3.admin.news.fortune_mall');
    }
    public function newssarapeumadmin()
    {
        return view('hi3.admin.news.sarapeum');
    }
    public function newsjovialadmin()
    {
        return view('hi3.admin.news.jovial');
    }
    public function newsupdate7admin()
    {
        return view('hi3.admin.news.update_7');
    }
    public function newsshadowadmin()
    {
        return view('hi3.admin.news.shadow');
    }

    //genshin impact
    public function newsgenshinindexadmin()
    {
        $newss = NewsGenshin::orderByDesc('id')->paginate(5);
        return view('gi.admin.news', compact('newss'));
    }
    public function newsgenshinid1admin()
    {
        return view('gi.admin.news.id1');
    }
    public function newsgenshinid2admin()
    {
        return view('gi.admin.news.id2');
    }
    public function newsgenshinid3admin()
    {
        return view('gi.admin.news.id3');
    }
    public function newsgenshinid4admin()
    {
        return view('gi.admin.news.id4');
    }
    public function newsgenshinid5admin()
    {
        return view('gi.admin.news.id5');
    }
    public function newsgenshinid6admin()
    {
        return view('gi.admin.news.id6');
    }
    public function newsgenshinid7admin()
    {
        return view('gi.admin.news.id7');
    }
    public function newsgenshinid8admin()
    {
        return view('gi.admin.news.id8');
    }
    public function newsgenshinid9admin()
    {
        return view('gi.admin.news.id9');
    }
    public function newsgenshinid10admin()
    {
        return view('gi.admin.news.id10');
    }
    public function newsgenshinid11admin()
    {
        return view('gi.admin.news.id11');
    }
    public function newsgenshinid12admin()
    {
        return view('gi.admin.news.id12');
    }
    public function newsgenshinid13admin()
    {
        return view('gi.admin.news.id13');
    }
    public function newsgenshinid14admin()
    {
        return view('gi.admin.news.id14');
    }
    public function newsgenshinid15admin()
    {
        return view('gi.admin.news.id15');
    }
    public function newsgenshinid16admin()
    {
        return view('gi.admin.news.id16');
    }
    public function newsgenshinid17admin()
    {
        return view('gi.admin.news.id17');
    }
    public function newsgenshinid18admin()
    {
        return view('gi.admin.news.id18');
    }
    public function newsgenshinid19admin()
    {
        return view('gi.admin.news.id19');
    }
    public function newsgenshinid20admin()
    {
        return view('gi.admin.news.id20');
    }
    public function newsgenshinid21admin()
    {
        return view('gi.admin.news.id21');
    }
    public function newsgenshinid22admin()
    {
        return view('gi.admin.news.id22');
    }
    public function newsgenshinid23admin()
    {
        return view('gi.admin.news.id23');
    }
    public function newsgenshinid24admin()
    {
        return view('gi.admin.news.id24');
    }
    public function newsgenshinid25admin()
    {
        return view('gi.admin.news.id25');
    }
    //hsr
    public function newshsrindexadmin()
    {
        $newss = NewsHsr::orderByDesc('id')->paginate(5);
        return view('hsr.admin.news', compact('newss'));
    }
    public function newspenjelasanadmin()
    {
        return view('hsr.admin.news.penjelasanupdate');
    }
    public function newsacheronadmin()
    {
        return view('hsr.admin.news.acheron');
    }
    public function newseventwebadmin()
    {
        return view('hsr.admin.news.eventweb');
    }
    public function newsgallagheradmin()
    {
        return view('hsr.admin.news.gallagher');
    }
    public function newsaventurineadmin()
    {
        return view('hsr.admin.news.aventurine');
    }
    public function newstraileraventurineadmin()
    {
        return view('hsr.admin.news.traileraventurine');
    }
    public function newstrailerversiadmin()
    {
        return view('hsr.admin.news.trailerversi');
    }
    public function newspresaleadmin()
    {
        return view('hsr.admin.news.robinpresale');
    }
    public function newsbintangadmin()
    {
        return view('hsr.admin.news.trailerbintang');
    }
    public function newspraunduhadmin()
    {
        return view('hsr.admin.news.praunduh');
    }
    public function newsrobinadmin()
    {
        return view('hsr.admin.news.robintrailer');
    }
    public function newsundanganadmin()
    {
        return view('hsr.admin.news.undangan');
    }
    public function newsdiscordadmin()
    {
        return view('hsr.admin.news.discordquest');
    }
    public function newsmendekatiadmin()
    {
        return view('hsr.admin.news.harmony');
    }
    public function newsupdateadmin()
    {
        return view('hsr.admin.news.updateversi');
    }
    public function newsboothilladmin()
    {
        return view('hsr.admin.news.boothill');
    }
    public function newsbyepenaconyadmin()
    {
        return view('hsr.admin.news.byepenacony');
    }
    public function newsfireflyburnadmin()
    {
        return view('hsr.admin.news.fireflyburn');
    }
    public function newsupdatever23admin(){
        return view('hsr.admin.news.updatever23');
    }
    public function newsjadeadmin(){
        return view('hsr.admin.news.jade');
    }
    public function newsstoneheartadmin(){
        return view('hsr.admin.news.stoneheart');
    }
    public function newsyunliadmin(){
        return view('hsr.admin.news.yunli');
    }
    public function newsupdatever24admin(){
        return view('hsr.admin.news.updatever24');
    }
    public function newsmarchadmin(){
        return view('hsr.admin.news.march7th');
    }

}
