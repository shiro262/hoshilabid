@section('title', "Adegan Animasi Perpisahan | Genshin Impact - Genshin Impact | HoshiLab")
@extends('template.masteradmingenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/><br/>
    <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    <div class="col d-flex justify-content-center">
        <div class="card-transparent w-50 p-3" style="border:1px solid white;">
            <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                Adegan Animasi Perpisahan | Genshin Impact
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Dirilis pada 30/04/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/newsgenshinimage/5/thumbnail.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:rgba(19,194,194,1); text-align:justify;">
                <p class="card-text">
                    Malam itu, beberapa anggota meninggalkan House of the Hearth.<br/>
                    Beberapa di antaranya menyambut masa depan baru, sementara yang lainnya menyambut ajalnya.<br/>
                    Saat fajar menyingsing dan menyinari sisa-sisa reruntuhan, itulah saatnya mengucapkan selamat tinggal.<br/>
                    <br/>
                    <iframe width="680" height="400" src="https://www.youtube.com/embed/ew7q3dD-Qyg"></iframe>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
