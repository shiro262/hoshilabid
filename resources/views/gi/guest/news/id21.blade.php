@section('title', "Trailer Versi 4.8 Musim Panas?! Dongeng dan Naga Jahat! - Genshin Impact | HoshiLab")
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
                Trailer Versi 4.8 "Musim Panas?! Dongeng dan Naga Jahat!" | Genshin Impact
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Dirilis pada 05/07/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/newsgenshinimage/21/thumbnail.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:rgba(19,194,194,1); text-align:justify;">
                <p class="card-text">
                    Barang-barang yang dibutuhkan untuk musim panas:<br/>
                    Sebuah aroma yang menyegarkan untuk meredakan kegelisahan di cuaca panas,<br/>
                    Sebuah buku dongeng yang baru untuk memeriahkan liburan yang santai,<br/>
                    Dan sedikit bahaya untuk memuaskan rasa ingin tahu para pengejar misteri.<br/>
                    <br/>
                    <iframe width="680" height="400" src="https://www.youtube.com/embed/m53wPdOoP48"></iframe>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
