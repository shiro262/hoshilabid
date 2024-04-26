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
        $beginner = GuideHonkai::where('zone', 'Beginner Guide')->get();
        $general = GuideHonkai::where('zone', 'General Guide')->get();
        $gacha = GuideHonkai::where('zone', 'Gacha Guide')->get();

        return view('hi3.guest.guide', compact('beginner', 'general', 'gacha'));
    }
    public function showguideguest($id)
    {
        $guides = GuideHonkai::all()->find($id);

        return view('hi3.guest.viewguide', compact('guides'));
    }

    //member
    public function guideindexmember()
    {
        $beginner = Guide::where('zone', 'Beginner Guide')->get();
        $general = Guide::where('zone', 'General Guide')->get();
        $gacha = Guide::where('zone', 'Gacha Guide')->get();

        return view('hi3.member.guide', compact('beginner', 'general', 'gacha'));
    }
    public function showguidemember($id)
    {
        $guides = Guide::all()->find($id);

        return view('hi3.member.viewguide', compact('guides'));
    }

    //admin
    public function guideindexadmin()
    {
        $beginner = Guide::where('zone', 'Beginner Guide')->get();
        $general = Guide::where('zone', 'General Guide')->get();
        $gacha = Guide::where('zone', 'Gacha Guide')->get();

        return view('hi3.admin.guide', compact('beginner', 'general', 'gacha'));
    }
    public function showguideadmin($id)
    {
        $guides = Guide::all()->find($id);

        return view('hi3.admin.viewguide', compact('guides'));
    }
    public function guidestoreindex()
    {
        return view('hi3.admin.addguide');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'image' => 'required|mimes:png,jpg,jpeg',
            'banner' => 'required|mimes:png,jpg,jpeg',
            'title' => 'required',
            'zone' => 'required|in:Beginner Guide,General Guide,Gacha Guide',
            'detail' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        $imageFile = $request->file('image');
        $imageName = time().'.'.
        $imageFile->getClientOriginalExtension();
        Storage::putFileAs('public/guideimage', $imageFile,$imageName);

        $bannerFile = $request->file('banner');
        $bannerName = 'banner'.time().'.'.
        $bannerFile->getClientOriginalExtension();
        Storage::putFileAs('public/guideimage', $bannerFile,$bannerName);

        DB::table('guides')->insert([
            'image' => $imageName,
            'banner' => $bannerName,
            'title' => $request->get('title'),
            'zone' => $request->get('zone'),
            'detail' => $request->get('detail'),
        ]);
        Alert::success('Congrats', 'Guide Added!');
        return redirect('hi3/admin/guide/');
    }
    public function destroy($id)
    {
        Guide::all()->find($id)->delete();
        Alert::success('Congrats', 'Guide Deleted!');
        return redirect('hi3/admin/guide');
    }
    public function updateguideindex($id)
    {
        $guides = Guide::find($id);
        return view('hi3.admin.updateguide', compact('guides'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'mimes:png,jpg,jpeg',
            'banner' => 'mimes:png,jpg,jpeg',
            'title',
            'zone'=> 'in:Beginner Guide,General Guide,Gacha Guide',
            'detail'
        ]);

        $up = Guide::find($id);
        $up->title = $request['title'];
        $up->zone = $request['zone'];
        $up->detail = $request['detail'];
        if($request->hasFile('image'))
        {
            $located = 'storage/guideimage/'.$up->image;
            if(File::exists($located))
            {
                File::delete($located);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('storage/guideimage', $filename);
            $up->image = $filename;
        }
        if($request->hasFile('banner'))
        {
            $located = 'storage/guideimage/'.$up->banner;
            if(File::exists($located))
            {
                File::delete($located);
            }
            $banner = $request->file('banner');
            $bannerextension = $banner->getClientOriginalExtension();
            $bannername = 'banner'.time().'.'.$bannerextension;
            $banner->move('storage/guideimage', $bannername);
            $up->banner = $bannername;
        }
        $up->update();
        Alert::success('Congrats', 'Guide Edited!');
        return redirect('/admin/guide/'.$id);
    }
}
