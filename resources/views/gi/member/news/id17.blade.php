@section('title', "Penjelasan Gameplay Imaginarium Theater - Genshin Impact | HoshiLab")
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
                Penjelasan Gameplay Imaginarium Theater
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Dirilis pada 24/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/newsgenshinimage/17/thumbnail.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Halo, Traveler semua! Gameplay pertempuran baru bernama "Imaginarium Theater" telah hadir di v4.7! Kamu bisa mendapatkan hadiah Primogem yang berlimpah dan buff pertempuran yang tidak terbatas dalam gameplay ini. Ayo pelajari bersama peraturan dasar, jadwal gameplay, dan hadiah yang bisa didapatkan!<br/>
                    <div class="row row-cols-1 justify-content-center">
                        <img src="{{asset('storage/newsgenshinimage/17/content1.jpg')}}" style="width: 35rem;">
                    </div>
                    <div class="row row-cols-1 justify-content-center">
                        <img src="{{asset('storage/newsgenshinimage/17/content2.jpg')}}" style="width: 35rem;">
                    </div>
                    <div class="row row-cols-1 justify-content-center">
                        <img src="{{asset('storage/newsgenshinimage/17/content3.gif')}}" style="width: 35rem;">
                    </div>
                    <div class="row row-cols-1 justify-content-center">
                        <img src="{{asset('storage/newsgenshinimage/17/content4.jpg')}}" style="width: 35rem;">
                    </div>
                    <div class="row row-cols-1 justify-content-center">
                        <img src="{{asset('storage/newsgenshinimage/17/content5.jpg')}}" style="width: 35rem;">
                    </div>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
