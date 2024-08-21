@section('title', 'News - Honkai Impact 3rd | HoshiLab')
@extends('template.mastermember')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/>
        <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px;">
            News
        </h1>
        <br/>
        <br/>
        <div class="row row-cols-3" style="display:flex; justify-content:center;">
            <div class="card-transparent" style="width: 25rem; border:1px solid white;">
                <div class="card-header" style="color:White;">Buletin</div>
                <a href="{{ route('Member Invite News View') }}">
                    <img class="card-img-top" src="{{asset('storage/honkainewsimage/thumbnail/banner_15.png')}}" style="margin-top: 10px;" alt="Card image cap">
                </a>
                <div class="card-body" style="color:White; text-align:left;">
                  <h5 class="card-title">Pengumuman Update Versi Undangan Perjamuan Eksentrik</h5>
                  <p class="card-text">Bersulang mengikuti perintahnya- dan kamu sudah bergabung ke dalam jamuan eksentrik ini! Selamat datang di v7.4 Undangan Perjamuan Eksentrik...</p>
                  <br/><br/><br/><br/><br/><br/>
                  <p class="card-text text-muted">25/04/2024</p>
                </div>
            </div>
            <div class="card-transparent" style="width: 25rem; border:1px solid white; margin-left: 10px;">
                <div class="card-header" style="color:White;">Buletin</div>
                <a href="{{ route('Member Mad Pleasure News View') }}">
                    <img class="card-img-top" src="{{asset('storage/honkainewsimage/thumbnail/banner_9.png')}}" style="margin-top: 10px;" alt="Card image cap">
                </a>
                <div class="card-body" style="color:White; text-align:left;">
                  <h5 class="card-title">Battlesuit Rank-S Baru Mad Pleasure: Shadowbringer Hadir</h5>
                  <p class="card-text">Versi baru segera hadir! Battlesuit Rank-S Thelema Mad Pleasure: Shadowbringer hadir! Hari ini kami akan membawakan info tentang Battlesuit baru dan Equipment-nya. Ayo kita lihat sama-sama.</p>
                  <br/><br/><br/><br/><br/>
                  <p class="card-text text-muted">09/04/2024</p>
                </div>
            </div>
            <div class="card-transparent" style="width: 25rem; border:1px solid white; margin-left: 10px;">
                <div class="card-header" style="color:White;">Buletin</div>
                <a href="{{ route('Member Senadina Debut News View') }}">
                    <img class="card-img-top" src="{{asset('storage/honkainewsimage/thumbnail/banner_3.png')}}" style="margin-top: 10px;" alt="Card image cap">
                </a>
                <div class="card-body" style="color:White; text-align:left;">
                  <h5 class="card-title">Battlesuit Rank-S Baru Deepspace Anchor: First Light Debut!</h5>
                  <p class="card-text">v7.3 segera hadir! Battlesuit Rank-S Senadina [Deepspace Anchor: First Light] debut! Hari ini kami akan membawakan info tentang Battlesuit baru dan Equipment-nya. Ayo kita lihat sama-sama!</p>
                  <br/><br/><br/><br/><br/>
                  <p class="card-text text-muted">10/02/2024</p>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <h2 style="color:white; text-align:center;">
            Berita Terbaru
        </h2>
        <hr style="height:10px; border-width:1px; color:white;">
        <div class="row row-cols-1 justify-content-center">
            @foreach($newss as $n)
                <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                    <div class="row no-gutters">
                        <div class="col-auto">
                            <a href="news/{{$n->id}}">
                                <img src="{{asset('storage/honkainewsimage/thumbnail/'.$n->banner)}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-block px-2" style="text-align: left; margin-top:10px;">
                                <h4 class="card-title">{{ $n->title }}</h4>
                                <p class="card-text">{{ $n->description }}</p>
                                <p class="card-text text-muted" style="text-align: right;">{{ $n->date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center" style="margin: 2rem">
                {{$newss->links()}}
            </div>
        </div>
        <br/>
    </div>
</div>
@endsection
