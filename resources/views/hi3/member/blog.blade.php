@section('title', 'Community Blog')
@extends('template.mastermember')
@section('content')
<div class="card text" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px; text-align:center;">
        Tokotoko Community Blog
    </h1>
    @if (session()->has('success'))
        <div class="alert alert-success form-outline mb-4" role="alert">
            {{session()->get('success')}}
        </div>
    @endif
    <br/>
        <div style="display: flex">
            <form class="d-flex" role="search" style="margin-right: 30px" action="{{ route('Search Blog Member') }}">
                <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" style="width: 300px">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
              <a href="{{ route('Create Blog Page') }}" class="btn btn-outline-success">Create New Blog</a>
        </div>
        @foreach($blogg as $bg)
        <div class="card-transparent" style="color:white;">

          <div class="card-body">
              <a class="card-title" href="{{ route('View Blog Member', [$bg->id]) }}" style="font-weight: 600; font-size: 20px; text-decoration: none; color: white">{{ $bg->title }}</a>
              <p class="card-text">{{ Str::of($bg->detail)->limit(50) }}</p>
              <p class="card-text" style="margin-bottom: 0">by {{ $bg->post->username }}</p>
              <p class="card-text" style="font-size: 13px">Created at {{ $bg->created_at }}</p>
          </div>
        </div>
        @endforeach

<div class="d-flex justify-content-center" style="margin: 2rem">
    {{$blogg->links()}}
</div>
</div>
@endsection
