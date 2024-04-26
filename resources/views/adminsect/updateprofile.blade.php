@section('title', 'Edit Profile - '.$profiles->username)
@extends('template.masteradmin')
@section('content')
<div class="card text-left" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/>
    <div class="container mt-4">
        <div class="card-transparent">
          <div class="card-header text-center font-weight-bold" style="font-size: 35px; color: white;">
            Edit Profile
          </div>
          <div class="card-body">
            <form class="insert-page-container" method="POST" enctype="multipart/form-data"
            action="{{url('admin/updateprofile/'.$profiles->id)}}">
                @csrf
                @method('PUT')
                @if ($errors->any())
                    <div class="error-message" style="color: white;">
                        {{$errors->first()}}
                    </div>
                @endif
                <label for="exampleInputEmail1" style="color: white;">Username</label><br/>
                <input type="text" placeholder="" class="form-control" name="username" value="{{$profiles->username}}">
                <label for="exampleInputEmail1" style="color: white;">Email</label><br/>
                <input type="text" placeholder="" class="form-control" name="email" value="{{$profiles->email}}"><br/>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Edit
                </button><br/>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Profile</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Are you sure want to edit your profile?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-danger" style="color:White;">Edit</button><br/>
                        </div>
                      </div>
                    </div>
                </div>
                <br/><a href="{{url('admin/profile')}}" class="btn btn-outline-light" style="float: left;"><</a>
            </form>
          </div>
        </div>
      </div>
    </form>
</div>
@endsection
