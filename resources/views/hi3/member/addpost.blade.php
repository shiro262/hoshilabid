@section('title', 'Create Post - Honkai Impact 3rd | HoshiLab')
@extends('template.mastermember')
@section('content')
<div class="card text" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px; text-align:center;">
        Buat Posting baru
    </h1>
    <div style="display: flex; justify-content: center; color: white">
        <form method="post" enctype="multipart/form-data" action="{{ route('Create Post Honkai Member') }}" style="width: 600px">
            @csrf
            <div class="mb-3">
                <label  for="exampleFormControlInput1" class="form-label">Judul Post</label>
                <input name="title" type="text" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Gambar Post (Opsional)</label>
                <input name="image" class="form-control" type="file" id="formFile">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Isi Post</label>
                <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
              </div>
              @if ($errors->any())
            <div class="alert alert-danger form-outline mb-4" role="alert">
                {{$errors->first()}}
            </div>
        @endif
              <button class="btn btn-outline-success" type="submit">Buat!</button>
        </form>
    </div>
</div>
@endsection
