@section('title', 'Profile - '.$profiles->username)
@extends('template.masteradminhome')
@section('content')
<div class="card text" style="background:black;">
  <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.3;">
  <div class="card-img-overlay">
    <br/><br/><br/><br/><br/><br/><br/>
    <div class="container" style="width: 31rem;">
        <div class="card">
            <div class="card-body">
                <h3 style="text-align: center;">My Profile</h3>
                <div class="d-flex align-items-center">
                    <img src="{{asset('storage/profilepic/'.$profiles->profile_picture)}}" style="width: 7rem;" class="me-3 avatar-sm rounded-circle">
                    <span>
                        Username: {{$profiles->username}}<br/>
                        @if($profiles->email == null)
                        Email: -
                        @else
                        Email: {{$profiles->email}}
                        @endif
                        <br/>
                        Role: {{$profiles->role}}
                    </span>
                </div>
                <br/><br/>
                <div class="col-md-12 text-center">
                    <a href="{{ url('/admin/profileupdate/'.$profiles->id) }}" class="btn btn-outline-primary">Edit Profile</a>
                    <a href="{{ url('/admin/passwordupdate/'.$profiles->id) }}" class="btn btn-outline-primary">Edit Password</a>
                </div>
            </div>
        </div>
    </div>
@endsection
