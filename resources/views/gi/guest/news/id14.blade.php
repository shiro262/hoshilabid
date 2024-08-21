@section('title', "Cantus Aeternus | Genshin Impact - Genshin Impact | HoshiLab")
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
                Cantus Aeternus | Genshin Impact
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Dirilis pada 14/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/newsgenshinimage/14/thumbnail.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    Album Ketiga OST Fontaine Genshin Impact "Cantus Aeternus" sudah dirilis! OST ini terbagi menjadi tiga bagian, yaitu "Versi di Petrichor", "Sumphonia Capitolii", dan "Balemoon Rising" dengan total 39 lagu OST orisinal dari area Fontaine di Genshin Impact yang diproduksi oleh tim HoYo-MiX.<br/>
                    <br/>
                    <iframe width="680" height="400" src="https://www.youtube.com/embed/6dROuF_TT64"></iframe>
                    <br/><br/>
                    <iframe width="680" height="400" src="https://www.youtube.com/embed/4HEx2RF-SsE"></iframe>
                    <br/><br/>
                    <iframe width="680" height="400" src="https://www.youtube.com/embed/M0a2ZuGmi-4"></iframe>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
