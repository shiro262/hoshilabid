@section('title', "Kisah Karakter: Emilie — Kesaksian - Genshin Impact | HoshiLab")
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
                Kisah Karakter: "Emilie — Kesaksian" | Genshin Impact
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Dirilis pada 05/08/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/newsgenshinimage/25/thumbnail.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:rgb(115, 209, 115); text-align:justify;">
                <p class="card-text">
                    Setiap tindakan akan meninggalkan jejak, meski tidak miliki warna atau bentuk.<br/>
                    Namun di tangan yang tepat, jejak-jejak ini tidak akan luput dari perhatian.<br/>
                    <br/>
                    <iframe width="680" height="400" src="https://www.youtube.com/embed/Q_HXKmGIS3c"></iframe>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
