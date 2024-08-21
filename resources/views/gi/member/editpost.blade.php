@section('title', $forum->title.' Edit Post - Genshin Impact | HoshiLab')
@extends('template.mastermembergenshin')
@section('content')
<div class="card" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px; text-align:center;">
        Edit Post
    </h1>
    <div style="display: flex; justify-content: center; color: white">
        <form method="post" enctype="multipart/form-data" action="{{$forum->id}}" style="width: 600px">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label  for="exampleFormControlInput1" class="form-label">Judul Post</label>
                <input name="title" type="text" class="form-control" id="exampleFormControlInput1" value="{{$forum->title}}">
              </div>
              <div class="mb-3">
                <label for="formFile" class="form-label">Gambar Post (Opsional)</label>
                <input name="image" class="form-control" type="file" id="formFile" value="{{$forum->image}}">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Isi Post</label>
                <textarea name="detail" class="form-control" id="exampleFormControlTextarea1" rows="6">{{$forum->detail}}</textarea>
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
                  <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Edit Post</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" style="color: black;">
                  Apakah anda yakin ingin mengubah post ini?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-danger" style="color:White;">Edit</button><br/>
                </div>
              </div>
            </div>
        </div>
              <br/><a href="{{route('View Genshin Post Member', [$forum->id])}}" class="btn btn-outline-light"><</a>
        </form>
    </div>
</div>
@endsection
