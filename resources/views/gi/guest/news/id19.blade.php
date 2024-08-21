@section('title', "Preview Event Versi 4.7 Memintal Mimpi Tak Berkesudahan Edisi 2 - Genshin Impact | HoshiLab")
@extends('template.masterguestgenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/><br/>
    <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    <div class="col d-flex justify-content-center">
        <div class="card-transparent w-50 p-3" style="border:1px solid white;">
            <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                Preview Event Versi 4.7 "Memintal Mimpi Tak Berkesudahan" Edisi 2
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Dirilis pada 20/06/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/newsgenshinimage/19/thumbnail.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Halo Traveler semua! Yuk kita lihat sama-sama event apa saja yang akan dibuka dalam waktu dekat!<br/>
                    <div class="row row-cols-1 justify-content-center">
                        <img src="{{asset('storage/newsgenshinimage/19/content1.png')}}" style="width: 35rem;">
                    </div>
                    <div class="row row-cols-1 justify-content-center">
                        <img src="{{asset('storage/newsgenshinimage/19/content2.png')}}" style="width: 35rem;">
                    </div>
                    <div class="row row-cols-1 justify-content-center">
                        <img src="{{asset('storage/newsgenshinimage/19/content3.png')}}" style="width: 35rem;">
                    </div>
                    <div class="row row-cols-1 justify-content-center">
                        <img src="{{asset('storage/newsgenshinimage/19/content4.png')}}" style="width: 35rem;">
                    </div>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
