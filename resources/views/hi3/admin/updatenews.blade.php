@section('title', 'Edit News - '.$newss->title)
@extends('template.masteradmin')
@section('content')
<div class="card text-left" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/>
    <div class="container mt-4">
        <div class="card-transparent">
          <div class="card-header text-center font-weight-bold" style="font-size: 35px; color: white;">
            Edit News
          </div>
          <div class="card-body">
            <form class="insert-page-container" method="POST" enctype="multipart/form-data"
            action="{{url('admin/updatenews/'.$newss->id)}}">
                @csrf
                @method('PUT')
                {{-- @method('PATCH') --}}
                @if ($errors->any())
                    <div class="error-message" style="color: white;">
                        {{$errors->first()}}
                    </div>
                @endif
                <label for="exampleInputEmail1" style="color: white;">News Banner (.png, .jpg, .jpeg)</label><br/>
                <input type="file" style="color: white;" placeholder="banner" class="insert-page-input" name="banner"><br/>
                <img src="{{asset('storage/newsimage/'.$newss->banner)}}" width="120px" height="40px"><br/>
                <label for="exampleInputEmail1" style="color: white;">News Image (.png, .jpg, .jpeg)</label><br/>
                <input type="file" style="color: white;" placeholder="image" class="insert-page-input" name="image"><br/>
                <img src="{{asset('storage/newsimage/'.$newss->image)}}" width="120px" height="50px"><br/>
                <label for="exampleInputEmail1" style="color: white;">News Title</label><br/>
                <input type="text" placeholder="" class="form-control" name="title" value="{{$newss->title}}">
                <label for="exampleInputEmail1" style="color: white;">News Description</label><br/>
                <input type="text" placeholder="" class="form-control" name="description" value="{{$newss->description}}">
                <label for="exampleInputEmail1" style="color: white;">News Detail</label><br/>
                <textarea type="text" placeholder="" class="form-control" name="detail" rows="5">{{$newss->detail}}</textarea><br/>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Edit
                </button><br/>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit News</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Are you sure want to edit this news?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-danger" style="color:White;">Edit</button><br/>
                        </div>
                      </div>
                    </div>
                </div>
                <br/><a href="{{url('admin/news/'.$newss->id)}}" class="btn btn-outline-light" style="float: left;"><</a>
            </form>
          </div>
        </div>
      </div>
    </form>
</div>
@endsection
