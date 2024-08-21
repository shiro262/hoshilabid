@section('title', "Preview Acara Khusus Versi 5.0 - Genshin Impact | HoshiLab")
@extends('template.mastermembergenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/><br/>
    <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    <div class="col d-flex justify-content-center">
        <div class="card-transparent w-50 p-3" style="border:1px solid white;">
            <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                Preview Acara Khusus Versi 5.0 | Genshin Impact
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Dirilis pada 24/07/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/newsgenshinimage/24/thumbnail.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Dear Traveler, ada pengumuman baru nih!<br/>
                    Acara Khusus untuk versi baru Genshin Impact akan ditayangkan perdana di Twitch dan YouTube pada 16 Agustus 2024 11.00 (WIB)!<br/>
                    Acara Khusus kali ini akan mengenalkan konten dan perkembangan baru di Versi 5.0. Ada juga Kode Penukaran yang akan dibagikan sewaktu-waktu selama penayangan loh!<br/>
                    Ayo ikuti kanal kami dan sampai ketemu di acaranya, Traveler!
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
