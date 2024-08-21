<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\PostGenshin;
use App\Models\PostHonkai;
use App\Models\PostHsr;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ForumController extends Controller
{
    //member
    //genshin impact
    public function forumindexgenshinformember()
    {
        $forum = PostGenshin::orderByDesc('id')->paginate(20);

        return view('gi.member.forum', compact('forum'));
    }
    public function showpostgenshinformember($id)
    {
        $forum = PostGenshin::all()->find($id);
        $user = Auth::id();

        return view('gi.member.viewpost', compact('forum', 'user'));
    }
    public function searchpostgenshinformember(Request $request)
    {
        $query = $request->search;
        $forum = PostGenshin::where('title', 'like', '%'.$query.'%')
            ->orWhere('detail', 'like', '%'.$query.'%')
            ->paginate(20)->withQueryString();

        return view('gi.member.forum', compact('forum'));
    }
    public function deletepostgenshinformember($id)
    {
        PostGenshin::all()->find($id)->delete();

        Alert::success('Selamat', 'Post berhasil dihapus!');
        return redirect('genshin/member/forum');
    }
    public function createnewpostgenshinformember(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'title' => 'required|min:1|max:100|profane:en,id',
            'detail' => 'required|min:10|profane:en,id',
        ]);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/postgenshinimage', $filename);

            $forum = new PostGenshin();
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->image = $filename;
            $forum->user_id = Auth::id();
            $forum->created_at = now(7);
            $forum->updated_at = now(7);
            $forum->save();
        }else{
            $forum = new PostGenshin();
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->user_id = Auth::id();
            $forum->created_at = now(7);
            $forum->updated_at = now(7);
            $forum->save();
        }

        Alert::success('Selamat', 'Post berhasil dibuat!');
        return redirect()->route('Member Genshin Forum Page');
    }
    public function createpostgenshinindexformember()
    {
        return view('gi.member.addpost');
    }
    public function editpostgenshinformember(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'min:1|max:100|profane:en,id',
            'detail' => 'min:10|profane:en,id',
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/postgenshinimage', $filename);

            $forum = PostGenshin::all()->find($id);
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->image = $filename;
            $forum->updated_at = now(7);
            $forum->save();
        }else{
            $forum = PostGenshin::all()->find($id);
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->updated_at = now(7);
            $forum->save();
        }
        Alert::success('Selamat', 'Post berhasil diubah!');
        return redirect()->route('View Genshin Post Member', [$id]);
    }
    public function editforumgenshinindexformember($id)
    {
        $forum = PostGenshin::all()->find($id);

        return view('gi.member.editpost', compact('forum'));
    }
    public function postzerogenshinmember()
    {
        return view('gi.member.postfromadmin');
    }

    //honkai impact 3
    public function forumindexhonkaiformember()
    {
        $forum = PostHonkai::orderByDesc('id')->paginate(20);

        return view('hi3.member.forum', compact('forum'));
    }
    public function showposthonkaiformember($id)
    {
        $forum = PostHonkai::all()->find($id);
        $user = Auth::id();

        return view('hi3.member.viewpost', compact('forum', 'user'));
    }
    public function searchposthonkaiformember(Request $request)
    {
        $query = $request->search;
        $forum = PostHonkai::where('title', 'like', '%'.$query.'%')
            ->orWhere('detail', 'like', '%'.$query.'%')
            ->paginate(20)->withQueryString();

        return view('hi3.member.forum', compact('forum'));
    }
    public function deleteposthonkaiformember($id)
    {
        PostHonkai::all()->find($id)->delete();

        Alert::success('Selamat', 'Post berhasil dihapus!');
        return redirect('honkaiimpact/member/forum');
    }
    public function createnewposthonkaiformember(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'title' => 'required|min:1|max:100|profane:en,id',
            'detail' => 'required|min:10|profane:en,id',
        ]);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/posthonkaiimage', $filename);

            $forum = new PostHonkai();
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->image = $filename;
            $forum->user_id = Auth::id();
            $forum->created_at = now(7);
            $forum->updated_at = now(7);
            $forum->save();
        }else{
            $forum = new PostHonkai();
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->user_id = Auth::id();
            $forum->created_at = now(7);
            $forum->updated_at = now(7);
            $forum->save();
        }

        Alert::success('Selamat', 'Post berhasil dibuat!');
        return redirect()->route('Member Honkai Forum Page');
    }
    public function createposthonkaiindexformember()
    {
        return view('hi3.member.addpost');
    }
    public function editposthonkaiformember(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'min:1|max:100|profane:en,id',
            'detail' => 'min:10|profane:en,id',
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/posthonkaiimage', $filename);

            $forum = PostHonkai::all()->find($id);
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->image = $filename;
            $forum->updated_at = now(7);
            $forum->save();
        }else{
            $forum = PostHonkai::all()->find($id);
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->updated_at = now(7);
            $forum->save();
        }
        Alert::success('Selamat', 'Post berhasil diubah!');
        return redirect()->route('View Honkai Post Member', [$id]);
    }
    public function editforumhonkaiindexformember($id)
    {
        $forum = PostHonkai::all()->find($id);

        return view('hi3.member.editpost', compact('forum'));
    }
    public function postzerohonkaimember()
    {
        return view('hi3.member.postfromadmin');
    }

    //honkai star rail
    public function forumindexhsrformember()
    {
        $forum = PostHsr::orderByDesc('id')->paginate(20);

        return view('hsr.member.forum', compact('forum'));
    }
    public function showposthsrformember($id)
    {
        $forum = PostHsr::all()->find($id);
        $user = Auth::id();

        return view('hsr.member.viewpost', compact('forum', 'user'));
    }
    public function searchposthsrformember(Request $request)
    {
        $query = $request->search;
        $forum = PostHsr::where('title', 'like', '%'.$query.'%')
            ->orWhere('detail', 'like', '%'.$query.'%')
            ->paginate(20)->withQueryString();

        return view('hsr.member.forum', compact('forum'));
    }
    public function deleteposthsrformember($id)
    {
        PostHsr::all()->find($id)->delete();

        Alert::success('Selamat', 'Post berhasil dihapus!');
        return redirect('starrail/member/forum');
    }
    public function createnewposthsrformember(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'title' => 'required|min:1|max:100|profane:en,id',
            'detail' => 'required|min:10|profane:en,id',
        ]);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/posthsrimage', $filename);

            $forum = new PostHsr();
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->image = $filename;
            $forum->user_id = Auth::id();
            $forum->created_at = now(7);
            $forum->updated_at = now(7);
            $forum->save();
        }else{
            $forum = new PostHsr();
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->user_id = Auth::id();
            $forum->created_at = now(7);
            $forum->updated_at = now(7);
            $forum->save();
        }

        Alert::success('Selamat', 'Post berhasil dibuat!');
        return redirect()->route('Member HSR Forum Page');
    }
    public function createposthsrindexformember()
    {
        return view('hsr.member.addpost');
    }
    public function editposthsrformember(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'min:1|max:100|profane:en,id',
            'detail' => 'min:10|profane:en,id',
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/posthsrimage', $filename);

            $forum = PostHsr::all()->find($id);
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->image = $filename;
            $forum->updated_at = now(7);
            $forum->save();
        }else{
            $forum = PostHsr::all()->find($id);
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->updated_at = now(7);
            $forum->save();
        }
        Alert::success('Selamat', 'Post berhasil diubah!');
        return redirect()->route('View HSR Post Member', [$id]);
    }
    public function editforumhsrindexformember($id)
    {
        $forum = PostHsr::all()->find($id);

        return view('hsr.member.editpost', compact('forum'));
    }
    public function postzerohsrmember()
    {
        return view('hsr.member.postfromadmin');
    }

    //admin
    //genshin impact
    public function forumindexgenshinforadmin()
    {
        $forum = PostGenshin::orderByDesc('id')->paginate(20);

        return view('gi.admin.forum', compact('forum'));
    }
    public function showpostgenshinforadmin($id)
    {
        $forum = PostGenshin::all()->find($id);
        $user = Auth::id();

        return view('gi.admin.viewpost', compact('forum', 'user'));
    }
    public function searchpostgenshinforadmin(Request $request)
    {
        $query = $request->search;
        $forum = PostGenshin::where('title', 'like', '%'.$query.'%')
            ->orWhere('detail', 'like', '%'.$query.'%')
            ->paginate(20)->withQueryString();

        return view('gi.admin.forum', compact('forum'));
    }
    public function deletepostgenshinforadmin($id)
    {
        PostGenshin::all()->find($id)->delete();

        Alert::success('Selamat', 'Post berhasil dihapus!');
        return redirect('genshin/admin/forum');
    }
    public function createnewpostgenshinforadmin(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'title' => 'required|min:1|max:100|profane:en,id',
            'detail' => 'required|min:10|profane:en,id',
        ]);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/postgenshinimage', $filename);

            $forum = new PostGenshin();
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->image = $filename;
            $forum->user_id = Auth::id();
            $forum->created_at = now(7);
            $forum->updated_at = now(7);
            $forum->save();
        }else{
            $forum = new PostGenshin();
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->user_id = Auth::id();
            $forum->created_at = now(7);
            $forum->updated_at = now(7);
            $forum->save();
        }

        Alert::success('Selamat', 'Post berhasil dibuat!');
        return redirect()->route('admin Genshin Forum Page');
    }
    public function createpostgenshinindexforadmin()
    {
        return view('gi.admin.addpost');
    }
    public function editpostgenshinforadmin(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'min:1|max:100|profane:en,id',
            'detail' => 'min:10|profane:en,id',
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/postgenshinimage', $filename);

            $forum = PostGenshin::all()->find($id);
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->image = $filename;
            $forum->updated_at = now(7);
            $forum->save();
        }else{
            $forum = PostGenshin::all()->find($id);
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->updated_at = now(7);
            $forum->save();
        }
        Alert::success('Selamat', 'Post berhasil diubah!');
        return redirect()->route('View Genshin Post admin', [$id]);
    }
    public function editforumgenshinindexforadmin($id)
    {
        $forum = PostGenshin::all()->find($id);

        return view('gi.admin.editpost', compact('forum'));
    }
    public function postzerogenshinadmin()
    {
        return view('gi.admin.postfromadmin');
    }

    //honkai impact 3
    public function forumindexhonkaiforadmin()
    {
        $forum = PostHonkai::orderByDesc('id')->paginate(20);

        return view('hi3.admin.forum', compact('forum'));
    }
    public function showposthonkaiforadmin($id)
    {
        $forum = PostHonkai::all()->find($id);
        $user = Auth::id();

        return view('hi3.admin.viewpost', compact('forum', 'user'));
    }
    public function searchposthonkaiforadmin(Request $request)
    {
        $query = $request->search;
        $forum = PostHonkai::where('title', 'like', '%'.$query.'%')
            ->orWhere('detail', 'like', '%'.$query.'%')
            ->paginate(20)->withQueryString();

        return view('hi3.admin.forum', compact('forum'));
    }
    public function deleteposthonkaiforadmin($id)
    {
        PostHonkai::all()->find($id)->delete();

        Alert::success('Selamat', 'Post berhasil dihapus!');
        return redirect('honkaiimpact/admin/forum');
    }
    public function createnewposthonkaiforadmin(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'title' => 'required|min:1|max:100|profane:en,id',
            'detail' => 'required|min:10|profane:en,id',
        ]);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/posthonkaiimage', $filename);

            $forum = new PostHonkai();
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->image = $filename;
            $forum->user_id = Auth::id();
            $forum->created_at = now(7);
            $forum->updated_at = now(7);
            $forum->save();
        }else{
            $forum = new PostHonkai();
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->user_id = Auth::id();
            $forum->created_at = now(7);
            $forum->updated_at = now(7);
            $forum->save();
        }

        Alert::success('Selamat', 'Post berhasil dibuat!');
        return redirect()->route('admin Honkai Forum Page');
    }
    public function createposthonkaiindexforadmin()
    {
        return view('hi3.admin.addpost');
    }
    public function editposthonkaiforadmin(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'min:1|max:100|profane:en,id',
            'detail' => 'min:10|profane:en,id',
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/posthonkaiimage', $filename);

            $forum = PostHonkai::all()->find($id);
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->image = $filename;
            $forum->updated_at = now(7);
            $forum->save();
        }else{
            $forum = PostHonkai::all()->find($id);
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->updated_at = now(7);
            $forum->save();
        }
        Alert::success('Selamat', 'Post berhasil diubah!');
        return redirect()->route('View Honkai Post admin', [$id]);
    }
    public function editforumhonkaiindexforadmin($id)
    {
        $forum = PostHonkai::all()->find($id);

        return view('hi3.admin.editpost', compact('forum'));
    }
    public function postzerohonkaiadmin()
    {
        return view('hi3.admin.postfromadmin');
    }

    //honkai star rail
    public function forumindexhsrforadmin()
    {
        $forum = PostHsr::orderByDesc('id')->paginate(20);

        return view('hsr.admin.forum', compact('forum'));
    }
    public function showposthsrforadmin($id)
    {
        $forum = PostHsr::all()->find($id);
        $user = Auth::id();

        return view('hsr.admin.viewpost', compact('forum', 'user'));
    }
    public function postzerohsradmin()
    {
        return view('hsr.admin.postfromadmin');
    }
    public function searchposthsrforadmin(Request $request)
    {
        $query = $request->search;
        $forum = PostHsr::where('title', 'like', '%'.$query.'%')
            ->orWhere('detail', 'like', '%'.$query.'%')
            ->paginate(20)->withQueryString();

        return view('hsr.admin.forum', compact('forum'));
    }
    public function deleteposthsrforadmin($id)
    {
        PostHsr::all()->find($id)->delete();

        Alert::success('Selamat', 'Post berhasil dihapus!');
        return redirect('starrail/admin/forum');
    }
    public function createnewposthsrforadmin(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'title' => 'required|min:1|max:100|profane:en,id',
            'detail' => 'required|min:10|profane:en,id',
        ]);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/posthsrimage', $filename);

            $forum = new PostHsr();
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->image = $filename;
            $forum->user_id = Auth::id();
            $forum->created_at = now(7);
            $forum->updated_at = now(7);
            $forum->save();
        }else{
            $forum = new PostHsr();
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->user_id = Auth::id();
            $forum->created_at = now(7);
            $forum->updated_at = now(7);
            $forum->save();
        }

        Alert::success('Selamat', 'Post berhasil dibuat!');
        return redirect()->route('admin HSR Forum Page');
    }
    public function createposthsrindexforadmin()
    {
        return view('hsr.admin.addpost');
    }
    public function editposthsrforadmin(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'min:1|max:100|profane:en,id',
            'detail' => 'min:10|profane:en,id',
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/posthsrimage', $filename);

            $forum = PostHsr::all()->find($id);
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->image = $filename;
            $forum->updated_at = now(7);
            $forum->save();
        }else{
            $forum = PostHsr::all()->find($id);
            $forum->title = $validateData['title'];
            $forum->detail = $validateData['detail'];
            $forum->updated_at = now(7);
            $forum->save();
        }
        Alert::success('Selamat', 'Post berhasil diubah!');
        return redirect()->route('View HSR Post admin', [$id]);
    }
    public function editforumhsrindexforadmin($id)
    {
        $forum = PostHsr::all()->find($id);

        return view('hsr.admin.editpost', compact('forum'));
    }

}
