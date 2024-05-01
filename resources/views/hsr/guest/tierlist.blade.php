@section('title', 'Tier List')
@extends('template.masterguesthsr')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px;">
        Character Tier List
    </h1>
    <h6 style="color:white;">
        by HoshiLab
    </h6>
    <br/>
    <h2 style="color:white;">
        Tier S+
    </h2>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
        @foreach($sptier as $spt)
        <div class="card-transparent" style="width: 18rem;">
            <a href="{{ route('View Character Honkai Star Rail Guest', [$spt->id]) }}">
                <img class="card-img-top" src="{{asset('storage/characterimagehsr/'.$spt->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $spt->name }}<br/>{{$spt->role}}</p>
            </div>
          </div>
        @endforeach
    </div>
    <br/>
    <h2 style="color:white;">
        Tier S
    </h2>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
        @foreach($stier as $st)
        <div class="card-transparent" style="width: 18rem;">
            <a href="{{ route('View Character Honkai Star Rail Guest', [$st->id]) }}">
                <img class="card-img-top" src="{{asset('storage/characterimagehsr/'.$st->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $st->name }}<br/>{{$st->role}}</p>
            </div>
          </div>
        @endforeach
    </div>
    <br/>
    <h2 style="color:white;">
        Tier A
    </h2>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
        @foreach($atier as $at)
        <div class="card-transparent" style="width: 18rem;">
            <a href="{{ route('View Character Honkai Star Rail Guest', [$at->id]) }}">
                <img class="card-img-top" src="{{asset('storage/characterimagehsr/'.$at->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $at->name }}<br/>{{$at->role}}</p>
            </div>
          </div>
        @endforeach
    </div>
    <br/>
    <h2 style="color:white;">
        Tier B
    </h2>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
        @foreach($btier as $bt)
        <div class="card-transparent" style="width: 18rem;">
            <a href="{{ route('View Character Honkai Star Rail Guest', [$bt->id]) }}">
                <img class="card-img-top" src="{{asset('storage/characterimagehsr/'.$bt->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $bt->name }}<br/>{{$bt->role}}</p>
            </div>
          </div>
        @endforeach
    </div>
    <br/>
    <h2 style="color:white;">
        Tier C
    </h2>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
        @foreach($ctier as $ct)
        <div class="card-transparent" style="width: 18rem;">
            <a href="{{ route('View Character Honkai Star Rail Guest', [$ct->id]) }}">
                <img class="card-img-top" src="{{asset('storage/characterimagehsr/'.$ct->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $ct->name }}<br/>{{$ct->role}}</p>
            </div>
          </div>
        @endforeach
    </div>
    <br/>
    <h2 style="color:white;">
        Tier D
    </h2>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
        @foreach($dtier as $dt)
        <div class="card-transparent" style="width: 18rem;">
            <a href="{{ route('View Character Honkai Star Rail Guest', [$dt->id]) }}">
                <img class="card-img-top" src="{{asset('storage/characterimagehsr/'.$dt->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $dt->name }}<br/>{{$dt->role}}</p>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
