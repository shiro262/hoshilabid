@section('title', 'Tier List')
@extends('template.masteradmin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px;">
        Character Tier List
    </h1>
    <h6 style="color:white;">
        by Tokotoko.id
    </h6>
    <br/>
    <h2 style="color:white;">
        Tier S+
    </h2>
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
        @foreach($sptier as $spt)
        <div class="card-transparent" style="width: 18rem;">
            <a href="{{ route('View Character Admin', [$spt->id]) }}">
                <img class="card-img-top" src="{{asset('storage/chara/'.$spt->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $spt->name }}</p>
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
            <a href="{{ route('View Character Admin', [$st->id]) }}">
                <img class="card-img-top" src="{{asset('storage/chara/'.$st->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $st->name }}</p>
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
            <a href="{{ route('View Character Admin', [$at->id]) }}">
                <img class="card-img-top" src="{{asset('storage/chara/'.$at->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $at->name }}</p>
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
            <a href="{{ route('View Character Admin', [$bt->id]) }}">
                <img class="card-img-top" src="{{asset('storage/chara/'.$bt->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $bt->name }}</p>
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
            <a href="{{ route('View Character Admin', [$ct->id]) }}">
                <img class="card-img-top" src="{{asset('storage/chara/'.$ct->image)}}" height="240" alt="Card image cap">
            </a>
            <div class="card-body">
              <p class="card-text" style="color:White;" >{{ $ct->name }}</p>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
