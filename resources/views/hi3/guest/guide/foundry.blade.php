@section('title', "Foundry Guide - Honkai Impact 3rd | HoshiLab")
    @extends('template.masterguest')
    @section('content')
    <div class="card text-center" style="background:black;">
        <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
        <div class="card-img-overlay">
        <br/><br/><br/><br/>
        <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
        <div class="col d-flex justify-content-center">
            <div class="card-transparent w-50 p-3" style="border:1px solid white;">
                <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                    Foundry
                </h1>
                <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                    Last updated: 16/05/2024
                </h6>
                <hr style="height:10px; border-width:5px; color:white;">
                <img src="{{asset('storage/guidehonkaiimage/foundy_thumb.jpg')}}" style="width: 35rem; ">
                <div class="card-body" style="color:White; text-align:justify;">
                    <p class="card-text">
                        <p class="card-text" style="font-weight: bold ">▣ Foundry </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Foundry merupakan tempat untuk craft weapon dan Stigma. Foundry bisa di temukan di Supply > Foundry. Tak hanya itu, Foundry juga bisa digunakan unutk PRI-Arms Weapon. PRI-Arms merupakan sebagai Limit Break pada Weapon yang di dapatkan melalui Foundry dan Supply. Tetapi, hal itiu hanya berlaku unutk Captain Level 81.
                        <br><br>
                        <p class="card-text" style="padding-left:30px; font-weight:bold; margin-bottom: 5px">
                            Foundry Stigmata :
                            <p class="card-text" style="padding-left: 30px"> Jika Anda gagal mendapatkan set Stigmata pada saat gacha, Anda bisa mencari alternative stigmata set pada Foundry.
                                <br><br> <img src="{{asset('storage/guidehonkaiimage/foundry_stig.jpg')}}" style="width: 35rem;display: block; margin-left: auto; margin-right: auto; "> <br>
                                Didalam menu foundry tersebut, Anda pasti melihat G1 – G4 yang berada di ujung gambar pada Stigmata, G1 – G4  merupakan sebagai penanda tingkatan pada Stigama. Artinya, jika Anda ingin membuat Stigma, maka Anda harus memiliki Stigma di tingkat sebelumya kecuali untuk G1 dan G3. Contohnya,  Anda ingin membuat stigma G4, maka Anda perlu Stigma G3 terlebih dahulu. Untuk material lainnya seperti Gem yang di tandai dengan angka romawi itu namanya Crystalyte. Crystalyte bisa di dapatkan di Universal Mirage.
                                <br><br> <img src="{{asset('storage/guidehonkaiimage/foundry_stig_p2.jpg')}}" style="width: 35rem; display: block; margin-left: auto; margin-right: auto;"> <br>
                                Namun, untuk patch sekarang (7.4), membuat Stigmata dengan material tersebut sudah tidak di rekomendasikan oleh palyer baru karena membutukan effort yang banyak unutk membuat satu set stigmata. Oleh karena itu, Anda bisa membuat Prism Stigma karena material yang di perlukan sangat mudah di cari dan lebih cocok untuk Valykrie yang sekarang ini.
                            </p>
                        </p>
                        <p class="card-text" style="padding-left:30px; font-weight:bold; margin-bottom: 5px">
                            Foundry Weapon :
                            <p class="card-text" style="padding-left: 30px"> Foundry Weapon, tidak di rekomendasikan untuk berpaku memakai weapon yang tersedia, tetapi kalau hanya untuk perawalan masih bisa dilakukan, jika Anda sudah player mid game keatas, Anda bisa menggukan Foundry ini unutk PRI-Arm weapon Anda agar bisa mendapatkan stat yang lebih untuk Valkyrie Anda.  </p>
                            <br><img src="{{asset('storage/guidehonkaiimage/foundry_weapon.jpg')}}" style="width: 35rem; display: block; margin-left: auto; margin-right: auto;"> <br>
                        </p>
                        </p>
                    </p>
                    <br/>
                </div>
            </div>
        </div>
    </div>
    @endsection
