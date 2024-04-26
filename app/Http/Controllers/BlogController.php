<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    //member
    public function blogindexmember()
    {
        $blogg = Blog::orderByDesc('id')->paginate(20);

        return view('hi3.member.blog', compact('blogg'));
    }
    public function showblogmember($id)
    {
        $blogg = Blog::all()->find($id);
        $user = Auth::id();

        return view('hi3.member.viewblog', compact('blogg', 'user'));
    }

    public function searchblogmember(Request $request)
    {
        $query = $request->search;

        $blogg = Blog::where('title', 'like', '%'.$query.'%')
            ->orWhere('detail', 'like', '%'.$query.'%')
            ->paginate(20)->withQueryString();

        return view('hi3.member.blog', compact('blogg'));
    }

    public function deleteblogmember($id)
    {
        Blog::all()->find($id)->delete();

        Alert::success('Congrats', 'Blog Deleted!');
        return redirect('hi3/member/blog');
    }

    public function createnewblog(Request $request)
    {
        $validateData = $request->validate([
            'image' => 'nullable',
            'title' => 'required|min:1|max:100',
            'detail' => 'required|min:10',
        ]);
        if($request->hasFile('image'))
        {
            $imageFile = $request->file('image');
            $imageName = time().'.'.
            $imageFile->getClientOriginalExtension();
            Storage::putFileAs('public/blogimage', $imageFile,$imageName);

            $blogg = new Blog();
            $blogg->title = $validateData['title'];
            $blogg->detail = $validateData['detail'];
            $blogg->image = $imageName;
            $blogg->user_id = Auth::id();
            $blogg->created_at = now(7);
            $blogg->updated_at = now(7);
            $blogg->save();
        }else{
            $blogg = new Blog();
            $blogg->title = $validateData['title'];
            $blogg->detail = $validateData['detail'];
            $blogg->user_id = Auth::id();
            $blogg->created_at = now(7);
            $blogg->updated_at = now(7);
            $blogg->save();
        }

        Alert::success('Congrats', 'New Blog Created!');
        return redirect()->route('Member Blog Page');
    }
    public function createnewblogpage()
    {
        return view('hi3.member.addblog');
    }
    public function editblog(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'min:1|max:100',
            'detail' => 'min:10',
            'image' => 'nullable|mimes:png,jpg,jpeg'
        ]);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/blogimage', $filename);

            $blogg = Blog::all()->find($id);
            $blogg->title = $validateData['title'];
            $blogg->detail = $validateData['detail'];
            $blogg->image = $filename;
            $blogg->updated_at = now(7);
            $blogg->save();
        }else{
            $blogg = Blog::all()->find($id);
            $blogg->title = $validateData['title'];
            $blogg->detail = $validateData['detail'];
            $blogg->updated_at = now(7);
            $blogg->save();
        }
        Alert::success('Congrats', 'Blog Edited!');
        return redirect()->route('View Blog Member', [$id]);
    }
    public function editblogpage($id)
    {
        $blogg = Blog::all()->find($id);

        return view('hi3.member.editblog', compact('blogg'));
    }

    //admin
    public function blogindexadmin()
    {
        $blogg = Blog::orderByDesc('id')->paginate(20);

        return view('hi3.admin.blog', compact('blogg'));
    }
    public function showblogadmin($id)
    {
        $blogg = Blog::all()->find($id);

        return view('hi3.admin.viewblog', compact('blogg'));
    }
    public function deleteblogadmin($id)
    {
        Blog::all()->find($id)->delete();
        Alert::success('Congrats', 'Blog Deleted!');
        return redirect()->route('Admin Blog Page');
    }
    public function searchblogadmin(Request $request)
    {
        $query = $request->search;

        $blogg = Blog::where('title', 'like', '%'.$query.'%')
            ->orWhere('detail', 'like', '%'.$query.'%')
            ->paginate(20)->withQueryString();

        return view('hi3.admin.blog', compact('blogg'));
    }
}
