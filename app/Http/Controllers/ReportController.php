<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PostGenshin;
use App\Models\PostHonkai;
use App\Models\PostHsr;
use App\Models\Report;
use App\Models\ReportGenshin;
use App\Models\ReportHonkai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ReportController extends Controller
{
    //admin
    public function reportadminindex()
    {
        $reportpostgenshin = ReportGenshin::all();
        $reportposthsr = Report::all();
        $reportposthonkai = ReportHonkai::all();
        return view('adminsect.report', compact('reportpostgenshin', 'reportposthsr', 'reportposthonkai'));
    }
    public function selesai($id)
    {
        $reportpostgenshin = ReportGenshin::find($id);
        $reportpostgenshin->delete();
        Alert::success('Congrats', 'Repot berhasil diselesaikan!');
        return redirect()->back();
    }
    public function selesaihsr($id)
    {
        $reportposthsr = Report::find($id);
        $reportposthsr->delete();
        Alert::success('Congrats', 'Repot berhasil diselesaikan!');
        return redirect()->back();
    }
    public function selesaihonkai($id)
    {
        $reportposthonkai = ReportHonkai::find($id);
        $reportposthonkai->delete();
        Alert::success('Congrats', 'Repot berhasil diselesaikan!');
        return redirect()->back();
    }

    //member
    //genshin impact
    public function reportpostgenshinindex($id)
    {
        $forum = PostGenshin::all()->find($id);
        $report = ReportGenshin::where('post_genshin_id', $id)->get();

        return view('gi.member.reportpost', compact('forum', 'report'));
    }
    public function reportpostgenshinpostmember(Request $request, $id)
    {
        $validateData = $request->validate([
            'detail' => 'required|profane:en,id'
        ]);

        $report = new ReportGenshin();
        $report->post_genshin_id = $id;
        $report->user_id = Auth::id();
        $report->detail = $validateData['detail'];
        $report->save();

        Alert::success('Terima kasih', 'Report berhasil dibuat, Admin akan segera melakukan pengecekan!');
        return redirect()->route('View Genshin Post Member', [$id]);
    }
    //honkai star rail
    public function reportposthsrindex($id)
    {
        $forum = PostHsr::all()->find($id);
        $report = Report::where('post_hsr_id', $id)->get();

        return view('hsr.member.reportpost', compact('forum', 'report'));
    }
    public function reportposthsrpostmember(Request $request, $id)
    {
        $validateData = $request->validate([
            'detail' => 'required|profane:en,id'
        ]);

        $report = new Report();
        $report->post_hsr_id = $id;
        $report->user_id = Auth::id();
        $report->detail = $validateData['detail'];
        $report->save();

        Alert::success('Terima kasih', 'Report berhasil dibuat, Admin akan segera melakukan pengecekan!');
        return redirect()->route('View HSR Post Member', [$id]);
    }
    //honkai impact
    public function reportposthonkaiindex($id)
    {
        $forum = PostHonkai::all()->find($id);
        $report = ReportHonkai::where('post_honkai_id', $id)->get();

        return view('hi3.member.reportpost', compact('forum', 'report'));
    }
    public function reportposthonkaipostmember(Request $request, $id)
    {
        $validateData = $request->validate([
            'detail' => 'required|profane:en,id'
        ]);

        $report = new ReportHonkai();
        $report->post_honkai_id = $id;
        $report->user_id = Auth::id();
        $report->detail = $validateData['detail'];
        $report->save();

        Alert::success('Terima kasih', 'Report berhasil dibuat, Admin akan segera melakukan pengecekan!');
        return redirect()->route('View Honkai Post Member', [$id]);
    }
}
