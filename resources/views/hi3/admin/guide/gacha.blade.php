@section('title', "Gacha Guide - Honkai Impact 3rd | HoshiLab")
    @extends('template.masteradmin')
    @section('content')
    <div class="card text-center" style="background:black;">
        <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.4;">
        <div class="card-img-overlay">
        <br/><br/><br/><br/>
        <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
        <div class="col d-flex justify-content-center">
            <div class="card-transparent w-50 p-3" style="border:1px solid white;">
                <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                    Gacha
                </h1>
                <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                    Last updated: 16/05/2024
                </h6>
                <hr style="height:10px; border-width:5px; color:white;">
                <img src="{{asset('storage/guidehonkaiimage/beginner.png')}}" style="width: 35rem; ">
                <div class="card-body" style="color:White; text-align:justify;">
                    <p class="card-text">
                        <p class="card-text" style="font-weight: bold ">▣ Gacha Guide </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Semenjak Honkai Impact sudam memassui part 2, sistem gacha untuk versi ini sudah cukup diringankan, karena Anda hanya perlu gacha Battlesuit dan weapon saja. Untuk Stigma, Anda bisa membuatnya di Foundry dengan menggunakan material Source Prism, dimana Source Prism bisa di dapatkan melalui Event Shop. Oleh karena itu, hal yang perlu di perhatikan unutk F2P adalah Anda hanya  perlu berfokus untuk pull pada Character dan weapon part 2 karena mereka akan menjadi meta baru berikutnya. Untuk supply lainnya seperti Focused Supply, dan Dorm Supply, tidak direkomendasikan untuk menghabisakan Crystals Anda disana kecuali, Anda memiliki Crystals yang banyak.


                    </p>
                    <br/>
                </div>
            </div>
        </div>
    </div>
    @endsection
