@section('title', "Stamina Guide - Honkai Impact 3rd | HoshiLab")
    @extends('template.mastermember')
    @section('content')
    <div class="card text-center" style="background:black;">
        <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.4;">
        <div class="card-img-overlay">
        <br/><br/><br/><br/>
        <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
        <div class="col d-flex justify-content-center">
            <div class="card-transparent w-50 p-3" style="border:1px solid white;">
                <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                    How to Use Stamina
                </h1>
                <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                    Last updated: 16/05/2024
                </h6>
                <hr style="height:10px; border-width:5px; color:white;">
                <img src="{{asset('storage/guidehonkaiimage/stamina.png')}}" style="width: 15rem; ">
                <div class="card-body" style="color:White; text-align:justify;">
                    <p class="card-text">
                        <p class="card-text" style="font-weight: bold ">▣ How to Use </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Jika Anda yang memiliki banyak stamina , Anda pastikan untuk tidak Overflow kapasitasnya karena hal itu dapat menghentikan pengisian stamina Anda. Anda bisa menggunakan stamina Anada Expediton. Di Expedition Anda bisa mencari fragment Valkyrie yang tersedia, dengan itu kalian bisa evolve Valkyrie tersebut ke SSS.
                        <br><br><img src="{{asset('storage/guidehonkaiimage/dorm_bonus_stat.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        <img src="{{asset('storage/guidehonkaiimage/dorm_bonus_func.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Walaupun Valkyrie yang ada di Expedition itu tidak terlalu berguna, tetapi Anda bisa meningkatkan level Dorm Squad Anda. Dengan meningkatnya Dorm Squad, Anda akan menerima peningkatan Stat pada semua Valkyrie yang Anda miliki. Tak hanya itu, hal itu juga bisa meningkatkan Dorm Bonuses. Dorm Bonuses akan memberikan gold dan stamina dalam jangka waktu tertentu.


                    </p>
                    <br/>
                </div>
            </div>
        </div>
    </div>
    @endsection
