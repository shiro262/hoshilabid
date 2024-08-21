@section('title', "Elysian Realm Guide - Honkai Impact 3rd | HoshiLab")
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
                    Elysian Realm Guide
                </h1>
                <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                    Last updated: 16/05/2024
                </h6>
                <hr style="height:10px; border-width:5px; color:white;">
                <img src="{{asset('storage/guidehonkaiimage/elysian_realm_thum.png')}}" style="width: 35rem; ">
                <div class="card-body" style="color:White; text-align:justify;">
                    <p class="card-text">
                        <p class="card-text" style="font-weight: bold; ">▣ Introduction</p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Elysian Realm adalah sebuah challenge mode yang bisa dimainkan saat sudah menempuh Captai level 50. Dalam mode ini, Anda akan meealkukan petualangan bersama Raiden Mei untuk merasakan cerita dan melihat Flame-Chasers' memories dari era sebelumnya. Mode ini memiliki feature Diverging Paths, Valkyrie Upgrades, Remembrance Vessel, Archive, dan masih banyak lagi. Berikut penejalasan dari feature tersebut.
                        <br><br>
                        <p class="card-text" style="font-weight: bold ">▣ Divergen Path </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Diverging Path adalah sebuah talent tree yang bercabang yang dapat memberikan bonus dan buff yang unik di masing-masing cabang. Cabang tersebut adalah Path: Combant, Path: Aegis, Path: Wealth, dan Path: Feast.
                        <br><br> <img src="{{asset('storage/guidehonkaiimage/divergen_path.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Anda dapat melakukan upgrade di setiap path dengan menggunakan Stone pf Choice agar bisa mendapakan bonus dan buff yang unik. Ketika Anda upgrading level Diverging Path di level tinggi, Anda akan mendapatkan lebih banyak Support Battlesuit yang bisa dipakai nantinya.
                        <br><br>
                        <p class="card-text" style="font-weight: bold ">▣ Valkyrie Upgrades </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                         <img src="{{asset('storage/guidehonkaiimage/Val_upgrade.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Valkyrie Upgrades adalah tempat Anda untuk membuka Valkyrie baru untuk battle dan enhance statistik mereka. Upgrade Valkyrie Anda agar bisa meningkatkan Exclusive Signet Valkyrie tersebut. cara upgrade Valkyrie adalah dengan cara memainkan Valkyrie tersebut secara berkala.
                       <br><br> <img src="{{asset('storage/guidehonkaiimage/Val.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Untuk dapat membuka Valkyrie, Anda perlu  Flawless Key terlebih dahulu, Flawless Key bisa didapatkan setiap minggunya.
                        <br><br>
                        <p class="card-text" style="font-weight: bold ">▣ Remembrance Vesel </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                         <img src="{{asset('storage/guidehonkaiimage/Mode.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Anda dapat men-unlock Remberance Vessel pada setiap anggota Flame-Chasers' dengan memainkan story pada Elysian Realm. Ketika telah membuka Remberance Vessel, Anda bisa memakai signet saat memainkan Elysian realm.  upgrade setiap Remberance Vessel agar bisa mendapatkan Stone Choice agar bisa upgrade Divergin Path dan membuka Remembrance Sigil. Cara untuk upgrade Remembrance Vessel adalah dengan membayar dengan  Dying Kindling yang bisa didapatkan dengan cara memainkan Elysian Realm di bagian Flame-Chasers', Shallow Sequence, dan Deep Sequence. Dengan memainkan ketiga tersebut, Anda bisa mendapatkan Dying Kindling.
                        <br><br>
                        <p class="card-text" style="font-weight: bold ">▣ How to Play Elysian Realm </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                         <img src="{{asset('storage/guidehonkaiimage/Chapter.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Ketika Anda baru pertama kali memasuki Elysian Realm, hal pertama yang perludikaukan adalah menyelesaikan Story-nya terlebih dahulu. Story tersebut terdiri dari 3 Chapter.
                        <br><br> <img src="{{asset('storage/guidehonkaiimage/Desc_Deep3.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Anda cukup mengikuti instruksi yang telah diberikan untuk menjalankannya. Ketika telah memasuki battle Deep Sequence, Anda akan diberikan sebuah deskirpsi Boss Preview, Stages Effects, dan Buffs. Pada Stages Effect menejelaskan tentang buff Enemy dan Valkyrie yang di dapatakan. Sedangkan pada Buffs, Anda akan diminta untuk memilih Buff yang akan dipakai tetapi, Anda memiliki kuota yang terbatas saat memili buff tersebut, Anda diberikan kuota 30 (kotak merah) dan bobot kuota setiap buff berbeda-beda (kotak biru). Anda juga bisa memilih Difficulty sesuai kemampuan Anda (kotak kuning) semakin tinggi Difficulty, semakin banyak reward yang bisa didapatkan dan kesusahan stages.
                        <br><br> <img src="{{asset('storage/guidehonkaiimage/Preparation.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Tahap berikutnya, Anda akan dimininta unutk memilih Valkyrie yang terdiri dari satu Combat dan 2 Support. Support disini hanya bertuga unutk memberikan bantuan instan pada saat battle. Unutk mendapatakannya Anda perlu untuk membersarkan level pada Divergin Path. Selanjutnya Anda bisa memilih Remembrance Sigil yang akan bermanfaat untuk mendapatkan signet yang kamu akan cari dan mendapatkan efek khusus.
                        <br><br> <img src="{{asset('storage/guidehonkaiimage/Choose_Signet.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Disaat memasuki Battle Anda akan diminta untuk memilih Signet, Signet merupakan sebuah buff dan modifikasi serangan yang ada pada Valkyrie. Signet juga bisa didapatkan setelah menyelesaikan battle pada setiap floor. Setiap member Flame-Chasers' memiliki Signet yang berbagai macam dan keunikan pada buff dan modifikasi serangan yang diberikan.
                        <br><br> <img src="{{asset('storage/guidehonkaiimage/Choose_Gate.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Setelah memilih Signet, Anda akan memilih gate yang telah disediakan. Pada setiap Gate tersebut memiliki lambang yang mewakili lambang dari member Flame-Chasers'. Ketika memilih salah satu gate tersebut, Anda akan mendapatkan Signet dari satu member Flame-Chasers' yang Anda pilih sebelumnya setelah Anda menyelesaikan battle.
                        Deep Sequnce memiliki 18 Floor yang terdiri dari 4 boss yang berada pada 8th Floor, 12th floor, 17th floor dan 18th floor. Ketika setelah menyelesaikan seluruh floor, anda akan mendapakan reward sesuai Difficult yang dipilih.
                    </p>
                    <br/>
                </div>
            </div>
        </div>
    </div>
    @endsection
