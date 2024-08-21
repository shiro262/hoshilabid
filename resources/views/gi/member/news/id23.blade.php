@section('title', "Teaser Membara — Nama yang Ditempa dalam Api - Genshin Impact | HoshiLab")
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
                Teaser Membara — "Nama yang Ditempa dalam Api" | Genshin Impact
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Dirilis pada 12/07/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/newsgenshinimage/23/thumbnail.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Wahai dewa api, kehancuran, dan perang,<br/>
                    Takdirmu dibentuk di antara perselisihan,<br/>
                    Jalanmu ditempa oleh kejayaan,<br/>
                    Kemuliaanmu menyala bagai matahari yang berkobar.<br/><br/>
                    Kami berkumpul di bawah api berbintang,<br/>
                    Untuk menyaksikan kejayaan dan kekalahan dalam turnamen ini.<br/>
                    <br/>
                    <iframe width="680" height="400" src="https://www.youtube.com/embed/O2ATH__rtQo"></iframe>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
