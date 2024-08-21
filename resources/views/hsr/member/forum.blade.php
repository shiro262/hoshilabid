@section('title', 'Community Forum - Honkai: Star Rail | HoshiLab')
@extends('template.mastermemberhsr')
@section('content')
<div class="card text" style="background:black;">
    <img src="{{asset('storage/image/wp_hsr.png')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px; text-align:center;">
        HoshiLab Community Forum
    </h1>
    @if (session()->has('success'))
        <div class="alert alert-success form-outline mb-4" role="alert">
            {{session()->get('success')}}
        </div>
    @endif
    <br/>
        <div style="display: flex">
            <form class="d-flex" role="search" style="margin-right: 30px" action="{{ route('Search Forum HSR Member') }}">
                <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" style="width: 300px">
                <button class="btn btn-outline-success" type="submit">Cari</button>
              </form>
              <a href="{{ route('Create Post HSR Member Page') }}" class="btn btn-outline-success">Buat Posting</a>
        </div><br/><br/>
        <div class="row row-cols-1 justify-content-center">
            <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                            <a href="{{ route('View HSR Post Zero Member') }}">
                                <img src="{{asset('storage/posthsrimage/admin.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 15px; margin-bottom: 5px;">
                            </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left; margin-top:10px;">
                            <a class="card-title" href="{{ route('View HSR Post Zero Member') }}" style="font-weight: 600; font-size: 23px; text-decoration: none; color: white">Pesan dari Admin</a>
                            <p class="card-text">Hai! Admin Hoshi disini!<br/>
                                Selamat datang di forum komunitas HoshiLab untuk game Honkai: Star Rail!</p>
                            <p class="card-text" style="margin-bottom: 0">oleh admin</p>
                            <p class="card-text" style="font-size: 13px; margin-bottom: 10px">Tanggal Post: 2024-05-28 01:53:24</p>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($forum as $pos)
            <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        @if ($pos->image != null)
                            <a href="{{ route('View HSR Post Member', [$pos->id]) }}">
                                <img src="{{asset('storage/posthsrimage/'.$pos->image)}}" class="img-fluid" alt="" style="width:12rem; margin-top: 15px; margin-bottom: 5px;">
                            </a>
                        @endif
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left; margin-top:10px;">
                            <a class="card-title" href="{{ route('View HSR Post Member', [$pos->id]) }}" style="font-weight: 600; font-size: 23px; text-decoration: none; color: white">{{ $pos->title }}</a>
                            @if ($pos->image != null)
                                <p class="card-text">{{ Str::of($pos->detail)->limit(123) }}</p>
                            @else
                                <p class="card-text">{{ Str::of($pos->detail)->limit(150) }}</p>
                            @endif
                            <p class="card-text" style="margin-bottom: 3px;"><img src="{{asset('storage/profilepic/'.$pos->post->profile_picture)}}" style="width: 2rem;" class="me-1 avatar-sm rounded-circle"> {{ $pos->post->username }}</p>
                            <p class="card-text" style="font-size: 13px; margin-bottom: 10px">Tanggal Post: {{ $pos->created_at }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

<div class="d-flex justify-content-center" style="margin: 2rem">
    {{$forum->links()}}
</div>
</div>
@endsection
