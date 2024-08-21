@section('title', 'News - Honkai: Star Rail | HoshiLab')
@extends('template.masterguesthsr')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_hsr.png')}}" style="opacity: 0.4;">
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
                <a href="{{ route('Update Version 2.4 News View') }}">
                    <img class="card-img-top" src="{{asset('storage/hsrnewsimage/updatever2.4.jpg')}}" style="margin-top: 10px;" alt="Card image cap">
                </a>
                <div class="card-body" style="color:White; text-align:left;">
                  <h5 class="card-title">Penjelasan Update Versi 2.4 Duel Sengit di Atas Langit Biru</h5>
                  <p class="card-text">Ritual Bela Diri akan segera dimulai. Tamu dari seluruh penjuru alam semesta berdatangan, dan di kedalaman dasar penjara yang gelap, cakar dan taring binatang buas yang telah lama terkurung mulai bergemeretak.</p>
                  <br/><br/><br/>
                  <p class="card-text text-muted">31/07/2024</p>
                </div>
            </div>
            <div class="card-transparent" style="width: 25rem; border:1px solid white; margin-left: 10px;">
                <div class="card-header" style="color:White;">Buletin</div>
                <a href="{{ route('Yunli News View') }}">
                    <img class="card-img-top" src="{{asset('storage/hsrnewsimage/yunli.jpg')}}" style="margin-top: 10px;" alt="Card image cap">
                </a>
                <div class="card-body" style="color:White; text-align:left;">
                  <h5 class="card-title">Mendekati Star Rail — Yunli: Yang Bertelanjang Kaki Tidak Takut Pakai Sepatu | Honkai: Star Rail</h5>
                  <p class="card-text">Ritual Bela Diri akan segera dimulai. Tamu pendekar pedang yang kedua paling muda dari Flamewheel Octet juga sudah tiba di Luofu.</p>
                  <br/><br/><br/><br/>
                  <p class="card-text text-muted">24/07/2024</p>
                </div>
            </div>
            <div class="card-transparent" style="width: 25rem; border:1px solid white; margin-left: 10px;">
                <div class="card-header" style="color:White;">Buletin</div>
                <a href="{{ route('Firefly News View') }}">
                    <img class="card-img-top" src="{{asset('storage/hsrnewsimage/fireflyburn.jpg')}}" style="margin-top: 10px;" alt="Card image cap">
                </a>
                <div class="card-body" style="color:White; text-align:left;">
                  <h5 class="card-title">Mendekati Star Rail — Firefly: Operasi Pencegahan Kebakaran Laut | Honkai: Star Rail</h5>
                  <p class="card-text">Orang paling berbahaya di antara Stellaron Hunter ternyata adalah %&*#%#Halo, aku Silver Wolf. Edisi kali ini lumayan juga, dan patut dipuji.</p>
                  <br/><br/><br/>
                  <p class="card-text text-muted">12/06/2024</p>
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
                                <img src="{{asset('storage/hsrnewsimage/'.$n->banner)}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
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
