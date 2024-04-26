@section('title', 'Create Blog')
@extends('template.mastermember')
@section('content')
<div>
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px; text-align:center;">
        Create Blog
    </h1>
    <div style="display: flex; justify-content: center; color: white">
        <form method="post" enctype="multipart/form-data" action="{{ route('Create Blog') }}" style="width: 600px">
            @csrf
            <div class="mb-3">
                <label  for="exampleFormControlInput1" class="form-label">Blog Title</label>
                <input name="title" type="text" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Blog Image (Optional)</label>
                <input name="image" class="form-control" type="file" id="formFile">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Blog Description</label>
                <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
              </div>
              @if ($errors->any())
            <div class="alert alert-danger form-outline mb-4" role="alert">
                {{$errors->first()}}
            </div>
        @endif
              <button class="btn btn-outline-success" type="submit">Create Blog</button>
        </form>
    </div>
</div>
@endsection
