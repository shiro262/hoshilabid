<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CommentGenshin;
use App\Models\CommentHonkai;
use App\Models\CommentHsr;
use App\Models\PostHsr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class CommentController extends Controller
{
    //member
    //genshin impact
    public function commentgenshinpostindexmember($id)
    {
        $comment = CommentGenshin::where('post_genshin_id', $id)->get();
        return view('gi.member.viewpost', compact('comment'));
    }
    public function commentgenshinpostmember(Request $request, $id)
    {
        $validateData = $request->validate([
            'detail' => 'required|profane:en,id'
        ]);

        $comment = new CommentGenshin();
        $comment->post_genshin_id = $id;
        $comment->user_id = Auth::id();
        $comment->detail = $validateData['detail'];
        $comment->save();

        Alert::success('Selamat', 'Komentar berhasil ditambahkan!');
        return redirect()->route('View Genshin Post Member', [$id]);
    }

    //honkai impact 3
    public function commenthonkaipostindexmember($id)
    {
        $comment = CommentHonkai::where('post_honkai_id', $id)->get();
        return view('hi3.member.viewpost', compact('comment'));
    }
    public function commenthonkaipostmember(Request $request, $id)
    {
        $validateData = $request->validate([
            'detail' => 'required|profane:en,id'
        ]);

        $comment = new CommentHonkai();
        $comment->post_honkai_id = $id;
        $comment->user_id = Auth::id();
        $comment->detail = $validateData['detail'];
        $comment->save();

        Alert::success('Selamat', 'Komentar berhasil ditambahkan!');
        return redirect()->route('View Honkai Post Member', [$id]);
    }

    //honkai star rail
    public function commenthsrpostindexmember($id)
    {
        $comment = CommentHsr::where('post_hsr_id', $id)->get();
        return view('hsr.member.viewpost', compact('comment'));
    }
    public function commenthsrpostmember(Request $request, $id)
    {
        $validateData = $request->validate([
            'detail' => 'required|profane:en,id'
        ]);

        $comment = new CommentHsr();
        $comment->post_hsr_id = $id;
        $comment->user_id = Auth::id();
        $comment->detail = $validateData['detail'];
        $comment->save();

        Alert::success('Selamat', 'Komentar berhasil ditambahkan!');
        return redirect()->route('View HSR Post Member', [$id]);
    }

    //admin
    //genshin impact
    public function commentgenshinpostindexadmin($id)
    {
        $comment = CommentGenshin::where('post_genshin_id', $id)->get();
        return view('gi.admin.viewpost', compact('comment'));
    }
    public function commentgenshinpostadmin(Request $request, $id)
    {
        $validateData = $request->validate([
            'detail' => 'required|profane:en,id'
        ]);

        $comment = new CommentGenshin();
        $comment->post_genshin_id = $id;
        $comment->user_id = Auth::id();
        $comment->detail = $validateData['detail'];
        $comment->save();

        Alert::success('Selamat', 'Komentar berhasil ditambahkan!');
        return redirect()->route('View Genshin Post admin', [$id]);
    }

    //honkai impact 3
    public function commenthonkaipostindexadmin($id)
    {
        $comment = CommentHonkai::where('post_honkai_id', $id)->get();
        return view('hi3.admin.viewpost', compact('comment'));
    }
    public function commenthonkaipostadmin(Request $request, $id)
    {
        $validateData = $request->validate([
            'detail' => 'required|profane:en,id'
        ]);

        $comment = new CommentHonkai();
        $comment->post_honkai_id = $id;
        $comment->user_id = Auth::id();
        $comment->detail = $validateData['detail'];
        $comment->save();

        Alert::success('Selamat', 'Komentar berhasil ditambahkan!');
        return redirect()->route('View Honkai Post admin', [$id]);
    }

    //honkai star rail
    public function commenthsrpostindexadmin($id)
    {
        $comment = CommentHsr::where('post_hsr_id', $id)->get();
        return view('hsr.admin.viewpost', compact('comment'));
    }
    public function commenthsrpostadmin(Request $request, $id)
    {
        $validateData = $request->validate([
            'detail' => 'required|profane:en,id'
        ]);

        $comment = new CommentHsr();
        $comment->post_hsr_id = $id;
        $comment->user_id = Auth::id();
        $comment->detail = $validateData['detail'];
        $comment->save();

        Alert::success('Selamat', 'Komentar berhasil ditambahkan!');
        return redirect()->route('View HSR Post admin', [$id]);
    }

}
