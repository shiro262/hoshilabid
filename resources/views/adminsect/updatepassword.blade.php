@section('title', 'Edit Password - '.$profiles->username)
@extends('template.masteradmin')
@section('content')
<div class="card text-left" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/>
    <div class="container mt-4">
        <div class="card-transparent">
          <div class="card-header text-center font-weight-bold" style="font-size: 35px; color: white;">
            Update Password
          </div>
          <div class="card-body" style="color: white;">
            <form class="insert-page-container" method="POST" enctype="multipart/form-data" action="{{route('Update Password Admin')}}">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger form-outline mb-4" role="alert">
                        {{$errors->first()}}
                    </div>
                @endif
                <label for="password">Old Password</label><br/>
                <input id="password" type="password" placeholder="(5-20 letters)" class="form-control" name="old_password">
                <label for="password">New Password</label><br/>
                <input id="new_password" type="password" placeholder="(5-20 letters)" class="form-control" name="new_password">
                <label for="password">Confirm New Password</label><br/>
                <input id="confirm_new_password" type="password" placeholder="(5-20 letters)" class="form-control" name="confirm_new_password">
                <br/>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Edit
                </button><br/>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Edit Password</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body" style="color: black;">
                          Are you sure want to edit your password?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-danger" style="color:White;">Edit</button><br/>
                        </div>
                      </div>
                    </div>
                </div>
                <br/>
                <a href="{{url('admin/profile')}}" class="btn btn-outline-light" style="color:white;"><</a>
            </form>
          </div>
        </div>
      </div>
    </form>
</div>
@endsection
