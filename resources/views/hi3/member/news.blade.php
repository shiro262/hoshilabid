@section('title', 'News')
@extends('template.mastermember')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px;">
        News
    </h1>
    <h6 style="color:white;">
        Get latest news about Honkai Impact 3rd here!
    </h6>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
    @foreach($newss as $n)
    <div class="card-transparent" style="width: 35rem;">
        <a href="{{ route('View News Member', [$n->id]) }}">
            <img class="card-img-top" src="{{asset('storage/newsimage/'.$n->banner)}}" alt="Card image cap">
        </a>
        <div class="card-body">
          <p class="card-text" style="color:White;">{{ $n->created_at }}</p>
          <h5 class="card-title" style="color:White;">{{ $n->title }}</h5>
          <p class="card-text" style="color:White;">{{ $n->description }}</p>
          <hr style="height:10px;border-width:10px;">
        </div>
      </div>
    @endforeach
</div>
<div class="d-flex justify-content-center" style="margin: 2rem">
    {{$newss->links()}}
</div>
</div>
@endsection
