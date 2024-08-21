@section('title', 'Report Post - Genshin Impact | HoshiLab')
@extends('template.mastermembergenshin')
@section('content')
<div class="card text" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px; text-align:center;">
        Report
    </h1>
    <div style="display: flex; justify-content: center; color: white">
        <form method="post" enctype="multipart/form-data" action="{{ route('Create Report Post Genshin Member', [$forum->id]) }}" style="width: 600px">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Judul Post:<br/> {{$forum->title}}</label>
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Masukan Keluhan</label>
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
