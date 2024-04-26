@section('title', 'Edit Blog - ',$blogg->title)
@extends('template.mastermember')
@section('content')
<div>
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px; text-align:center;">
        Edit Blog
    </h1>
    <div style="display: flex; justify-content: center; color: white">
        <form method="post" enctype="multipart/form-data" action="/member/blog/edit/{{$blogg->id}}" style="width: 600px">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label  for="exampleFormControlInput1" class="form-label">Blog Title</label>
                <input name="title" type="text" class="form-control" id="exampleFormControlInput1" value="{{$blogg->title}}">
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Blog Image (Optional)</label>
                <input name="image" class="form-control" type="file" id="formFile" value="{{$blogg->image}}">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Blog Description</label>
                <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="6">{{$blogg->detail}}</textarea>
              </div>
              @if ($errors->any())
            <div class="alert alert-danger form-outline mb-4" role="alert">
                {{$errors->first()}}
            </div>
        @endif
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Edit
        </button><br/>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Edit Blog</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="color: black;">
                  Are you sure want to edit this blog?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-danger" style="color:White;">Edit</button><br/>
                </div>
              </div>
            </div>
        </div>
              <br/><a href="{{route('View Blog Member', [$blogg->id])}}" class="btn btn-outline-light"><</a>
        </form>
    </div>
</div>
@endsection
