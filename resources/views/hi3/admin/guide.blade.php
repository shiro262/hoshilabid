@section('title', 'Guide')
@extends('template.masteradmin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px;">
        Guides
    </h1>
    <h6 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color:white;">
        Add another guide <a href={{route('View Add Guide')}}>here</a></h6>
    @if (session()->has('success'))
        <div class="alert alert-success form-outline mb-4" role="alert">
            {{session()->get('success')}}
        </div>
    @endif
    <br/>
    <h2 style="color:white;text-align:left;">
        Beginner Guide
    </h2>
    <hr style="height:10px; border-width:10px; color:blue;">
    <div class="row row-cols-3">
    @foreach($beginner as $gd)
    <div class="card-transparent" style="width: 30rem;">
        <a href="{{ route('View Guide Admin', [$gd->id]) }}">
            <img class="card-img-top" src="{{asset('storage/guideimage/'.$gd->banner)}}" alt="Card image cap">
        </a>
        <div class="card-body">
          <h5 class="card-title" style="color:White;">{{ $gd->title }}</h5>
        </div>
      </div>
    @endforeach
    </div>
    <h2 style="color:white;text-align:left;">
        General Guide
    </h2>
    <hr style="height:10px; border-width:10px; color:blue;">
    <div class="row row-cols-3">
    @foreach($general as $gn)
    <div class="card-transparent" style="width: 30rem;">
        <a href="{{ route('View Guide Admin', [$gn->id]) }}">
            <img class="card-img-top" src="{{asset('storage/guideimage/'.$gn->banner)}}" alt="Card image cap">
        </a>
        <div class="card-body">
          <h5 class="card-title" style="color:White;">{{ $gn->title }}</h5>
        </div>
      </div>
    @endforeach
    </div>
    <h2 style="color:white;text-align:left;">
        Gacha Guide
    </h2>
    <hr style="height:10px; border-width:10px; color:blue;">
    <div class="row row-cols-3 ">
    @foreach($gacha as $gc)
    <div class="card-transparent" style="width: 30rem;">
        <a href="{{ route('View Guide Admin', [$gc->id]) }}">
            <img class="card-img-top" src="{{asset('storage/guideimage/'.$gc->banner)}}" alt="Card image cap">
        </a>
        <div class="card-body">
          <h5 class="card-title" style="color:White;">{{ $gc->title }}</h5>
        </div>
      </div>
    @endforeach
    </div>
</div>
@endsection
