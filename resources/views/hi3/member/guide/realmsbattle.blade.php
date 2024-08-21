@section('title', "Realms Battle Guide - Honkai Impact 3rd | HoshiLab")
    @extends('template.mastermember')
    @section('content')
    <div class="card text-center" style="background:black;">
        <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
        <div class="card-img-overlay">
        <br/><br/><br/><br/>
        <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
        <div class="col d-flex justify-content-center">
            <div class="card-transparent w-50 p-3" style="border:1px solid white;">
                <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                    Realms of Battle
                </h1>
                <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                    Last updated: 16/05/2024
                </h6>
                <hr style="height:10px; border-width:5px; color:white;">
                <img src="{{asset('storage/guidehonkaiimage/Realms_of_Battle_(Banner).png')}}" style="width: 35rem; ">
                <div class="card-body" style="color:White; text-align:justify;">
                    <p class="card-text">
                        <p class="card-text" style="font-weight: bold ">▣ Realms of Battles </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        <img src="{{asset('storage/guidehonkaiimage/realms_battle.jpg')}}" style="width: 35rem; display: block; margin-left: auto; margin-right: auto;"><br>
                        Realms of Battle adalah weekly challenge yang memberikan reward berupa material dan Divine Key. Divine key merupakan weapon yang dapat memberikan effect passive untuk semua Valkyrie, Anda yang masih pemula wajib mengumpulkan dan upgrade Divine Key tersebut agar bisa mendapatkan stats tambahan.
                        <br><br><img src="{{asset('storage/guidehonkaiimage/divine_key.jpg')}}" style="width: 35rem; display: block; margin-left: auto; margin-right: auto;"><br>
                        Dengan memainkan Realms of Battle, Anda bisa mendapatkan satu Divine Key selama seminggu.
                        <br><br><img src="{{asset('storage/guidehonkaiimage/trial_realms.jpg')}}" style="width: 35rem; display: block; margin-left: auto; margin-right: auto;"><br>
                        Anda tidak perlu khawatir dalam menyelesaikan Realms of Battle, Anda akan di berikan pinjaman Valkyrie untuk menyelesaikannya.


                    </p>
                    <br/>
                </div>
            </div>
        </div>
    </div>
    @endsection
