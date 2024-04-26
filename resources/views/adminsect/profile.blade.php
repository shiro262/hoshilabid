@section('title', 'Profile - '.$profiles->username)
@extends('template.masteradmin')
@section('content')
<div class="card text" style="background:black;">
  <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
  <div class="card-img-overlay">
    <br/><br/><br/><br/><br/>
    <div class="container" style="width: 31rem;">
        <div class="card">
            <div class="card-body">
                <h3 style="text-align: center;">My Profile</h3>
                <img src="{{asset('storage/image/profile.png')}}" style="width: 7rem;" class="rounded mx-auto d-block"><br/>
                <table class="table">
                    <tbody>
                        <tr>
                            <tr>
                                <td>Username</td>
                                <td width="10">:</td>
                                <td>{{$profiles->username}}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{$profiles->email}}</td>
                            </tr>
                            <tr>
                                <td>Role</td>
                                <td>:</td>
                                <td>{{$profiles->role}}</td>
                            </tr>
                        </tr>
                    </tbody>
                </table><br/><br/><br/>
            </div>
        </div>
    </div><br/>
    <div class="col-md-12 text-center">
        <a href="{{ url('/admin/profileupdate/'.$profiles->id) }}" class="btn btn-outline-primary">Edit Profile</a>
        <a href="{{ url('/admin/passwordupdate/'.$profiles->id) }}" class="btn btn-outline-primary">Edit Password</a>
    </div>
@endsection
