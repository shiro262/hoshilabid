@section('title', 'Tier List - Genshin Impact | HoshiLab')
@extends('template.masteradmingenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px;">
        Character Tier List
    </h1>
    <h6 style="color:white;">
        Catatan: Asumsikan semua karakter bintang 4 berada dalam kondisi C6<br/>
        Terakhir Update: 03/06/2024
    </h6>
    <br/>
    <h2 style="color:red;">
        Tier S+
    </h2>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
        @foreach($sptier as $spt)
        <div class="card-transparent" style="width: 19rem;">
            <a href="{{ route('View Character Genshin admin', [$spt->id]) }}">
                <img class="card-img-top" src="{{asset('storage/characterimagegenshin/'.$spt->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $spt->name }}<br/>{{$spt->role}}</p>
            </div>
          </div>
        @endforeach
    </div>
    <br/>
    <h2 style="color:rgb(199, 35, 35);">
        Tier S
    </h2>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
        @foreach($stier as $st)
        <div class="card-transparent" style="width: 19rem;">
            <a href="{{ route('View Character Genshin admin', [$st->id]) }}">
                <img class="card-img-top" src="{{asset('storage/characterimagegenshin/'.$st->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $st->name }}<br/>{{$st->role}}</p>
            </div>
          </div>
        @endforeach
    </div>
    <br/>
    <h2 style="color:rgb(205, 142, 16);">
        Tier A
    </h2>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
        @foreach($atier as $at)
        <div class="card-transparent" style="width: 19rem;">
            <a href="{{ route('View Character Genshin admin', [$at->id]) }}">
                <img class="card-img-top" src="{{asset('storage/characterimagegenshin/'.$at->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $at->name }}<br/>{{$at->role}}</p>
            </div>
          </div>
        @endforeach
    </div>
    <br/>
    <h2 style="color:yellow;">
        Tier B
    </h2>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
        @foreach($btier as $bt)
        <div class="card-transparent" style="width: 19rem;">
            <a href="{{ route('View Character Genshin admin', [$bt->id]) }}">
                <img class="card-img-top" src="{{asset('storage/characterimagegenshin/'.$bt->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $bt->name }}<br/>{{$bt->role}}</p>
            </div>
          </div>
        @endforeach
    </div>
    <br/>
    <h2 style="color:green;">
        Tier C
    </h2>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
        @foreach($ctier as $ct)
        <div class="card-transparent" style="width: 19rem;">
            <a href="{{ route('View Character Genshin admin', [$ct->id]) }}">
                <img class="card-img-top" src="{{asset('storage/characterimagegenshin/'.$ct->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $ct->name }}<br/>{{$ct->role}}</p>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
