@section('title', 'News - Honkai: Star Rail | HoshiLab')
@extends('template.masteradminhsr')
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
                <a href="{{ route('admin Robin News View') }}">
                    <img class="card-img-top" src="{{asset('storage/hsrnewsimage/robin.png')}}" style="margin-top: 10px;" alt="Card image cap">
                </a>
                <div class="card-body" style="color:White; text-align:left;">
                  <h5 class="card-title">Trailer Karakter Robin: Menari Mengikuti Ritme | Honkai: Star Rail</h5>
                  <p class="card-text">Menari mengikuti ritme di antara bintang-bintang, apa itu bisa menyelamatkan hati dari kesedihan? Kalau aku tidak pernah melihat matahari, bagaimana mungkin aku tahu kalau harapan memiliki bulu dan sayap?</p>
                  <br/><br/><br/>
                  <p class="card-text text-muted">07/05/2024</p>
                </div>
            </div>
            <div class="card-transparent" style="width: 25rem; border:1px solid white; margin-left: 10px;">
                <div class="card-header" style="color:White;">Buletin</div>
                <a href="{{ route('admin Harmony News View') }}">
                    <img class="card-img-top" src="{{asset('storage/hsrnewsimage/MendekatiSR.jpg')}}" style="margin-top: 10px;" alt="Card image cap">
                </a>
                <div class="card-body" style="color:White; text-align:left;">
                  <h5 class="card-title">Mendekati Star Rail — Trailblazer (Harmony): Demi Hari Esok Usai Bermimpi | Honkai: Star Rail</h5>
                  <p class="card-text">Setiap orang pasti tersesat berkali-kali. Mereka mungkin ragu dan tidak tahu ke mana mereka harus pergi. Hal itu terjadi baik di dalam dunia mimpi maupun di luar dunia mimpi. Tapi jangan khawatir, semua orang pasti mengalami...</p>
                  <br/><br/>
                  <p class="card-text text-muted">08/05/2024</p>
                </div>
            </div>
            <div class="card-transparent" style="width: 25rem; border:1px solid white; margin-left: 10px;">
                <div class="card-header" style="color:White;">Buletin</div>
                <a href="{{ route('admin Update News View') }}">
                    <img class="card-img-top" src="{{asset('storage/hsrnewsimage/discordquest.png')}}" style="margin-top: 10px;" alt="Card image cap">
                </a>
                <div class="card-body" style="color:White; text-align:left;">
                  <h5 class="card-title">Penjelasan Update Versi 2.2 Jatuh Air Mata, Kala Sadar Menyapa</h5>
                  <p class="card-text">Kenangan adalah pembukaan dari mimpi, sedangkan kelupaan adalah tirai penutup mimpi.</p>
                  <br/><br/><br/><br/><br/>
                  <p class="card-text text-muted">08/05/2024</p>
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
