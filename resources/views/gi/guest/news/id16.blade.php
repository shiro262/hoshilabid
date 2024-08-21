@section('title', "Trailer Versi 4.7 Memintal Mimpi Tak Berkesudahan - Genshin Impact | HoshiLab")
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
                Trailer Versi 4.7 Memintal Mimpi Tak Berkesudahan | Genshin Impact
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Dirilis pada 24/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/newsgenshinimage/16/thumbnail.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Orang-orang sering terjebak dalam masa lalu.<br/>
                    Semua penyesalan yang tidak bisa diperbaiki itu,<br/>
                    dan pertanyaan-pertanyaan yang belum terjawab itu.<br/>
                    Mungkin akan tiba suatu hari, saat semua ini dapat diselesaikan,<br/>
                    atau mungkin mereka hanya akan terulang lagi dan lagi di dalam mimpi.<br/>
                    <br/>
                    <iframe width="680" height="400" src="https://www.youtube.com/embed/qqnEjmnitgc"></iframe>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
