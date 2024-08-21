@section('title', "Iridescent Tour Arataki Yang Paling Gahar Sejagat Raya - Genshin Impact | HoshiLab")
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
                Iridescent Tour Arataki Yang Paling Gahar Sejagat Raya
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Dirilis pada 05/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/newsgenshinimage/6/thumbnail.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Halo Traveler, setelah melihat itikad baik yang dituangkan di sebuah surat, kamu dan Paimon pun memutuskan untuk berangkat ke Watatsumi Island ....<br/>
                    Event "Iridescent Tour Arataki Yang Paling Gahar Sejagat Raya" akan segera dimulai. Ayo kita lihat bersama ada gameplay apa saja di event ini!<br/>
                    <br/>
                    <div class="row row-cols-1 justify-content-center">
                        <img src="{{asset('storage/newsgenshinimage/6/content1.jpg')}}" style="width: 35rem;">
                        <img src="{{asset('storage/newsgenshinimage/6/content2.gif')}}" style="width: 35rem;">
                        <img src="{{asset('storage/newsgenshinimage/6/content3.gif')}}" style="width: 35rem;">
                        <img src="{{asset('storage/newsgenshinimage/6/content4.jpg')}}" style="width: 35rem;">
                        <img src="{{asset('storage/newsgenshinimage/6/content5.gif')}}" style="width: 35rem;">
                    </div>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
