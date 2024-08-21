@section('title', "Crystals Guide - Honkai Impact 3rd | HoshiLab")
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
                    Crystals Guide
                </h1>
                <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                    Last updated: 16/05/2024
                </h6>
                <hr style="height:10px; border-width:5px; color:white;">
                <img src="{{asset('storage/guidehonkaiimage/300_Crystals.png')}}" style="width: 15rem; ">
                <div class="card-body" style="color:White; text-align:justify;">
                    <p class="card-text">
                        <p class="card-text" style="font-weight: bold ">▣ Crystal Guide </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Honkai Impact 3 merupakan game Action RPG sehingga tidak diragukan lagi kalau game ini merupakan game gacha, untuk melakukan gacha Anda memerlukan Crystal. Sistem gacha pada game ini cukup berat karena banyak yang harus di dapatkan mulai dari Valkyrie, Weapon, dan 3 Stigmata. Untuk melakukan 10 kali pull Anda memerlukan 2800 Crystal. Oleh karena itu harus bijak saat menggunakan Crystal anda agar bisa mendapatkan semuanya. Berikut guidenya.
                        <br><br>
                        <p class="card-text" style="padding-left:30px; font-weight:bold; margin-bottom: 5px">
                            Crytasls Farm :
                            <p class="card-text" style="padding-left: 30px">Untuk bisa mendapatkan Crystals di Honkai Impact 3 ada banya cara. Tetapi, jika Anda adalah seorang pemula, berikut resource yang paling cocok untuk mendapatakan Crystals. </p>
                            <ul >
                                <li><b>Story</b> </li>
                                Story memiliki  sumber  Crystals yang melimpah, sambail menyelesaikan Story Anda juga bisa menaikkan level Captain Anda untuk bisa membuka Challenge lainnya. Disarankan untuk menaikkan level Captai hingga level 60 agar bisa membuka semua fitur dan challenge. Saat memainkan Story, Anda tidak perlu khawatir dengan kesusahannya, karena Anda akan di pinjamkan Valkyrie untuk membantu Anda dalam menyelesaikan Story.  <br> <br>
                                <li><b>Daily Task</b> </li>
                                Daily Task atau Mission bisa memberikan 40 Crystals setiap harinya, dan task yang diberikan tidak sulit untuk diselesaikan. Sambil menyelesaikan task tersebut, Anda akan mendapatkan BP, Anda memerlukan 600 BP untuk bisa mendapatkan 40 Crystals. Anda mengumpulkan lebih dari 600 BP tujuannya agar BP tersebut untuk meningkatkan level Battle Pass Anda. Battle Pass dapat di buka saat Captain mencapai level 20. Dalam Battle Pass terdapat banyak ragam hadiah termasuk Crystal. <br><br>
                                <li><b>Q-Manifold / Abyss</b></li>
                                <br> <img src="{{asset('storage/guidehonkaiimage/abyss.jpg')}}" style="width: 35rem; display: block; margin-left: auto; margin-right: auto; "> <br>
                                Abyss merupakan salah satu Weekly Challenge yang bisa menghasilkan Crystal setiap minggu. Abyss dapat dibuka ketika level Captain mencapai 25. Anda cukup menyelesaikan setiap floor agar bisa mendapatkan reward. Jika Anda bisa menyelesaikan semua Floor, Anda akan di akan di promote untuk naik ke tingkat selanjutnya di minggu berikutnya. Tingakatan pada Abyss adalah Sinful, Agony, dan Redlotus. Semakin tinggi tingkatannya semakin sulit Challenge dan banyak Crystals yang didapatkan. <br><br>
                                <li><b>Memorial Arena</b></li>
                                <br><img src="{{asset('storage/guidehonkaiimage/memorial_arena_r.jpg')}}" style="width: 35rem; display: block; margin-left: auto; margin-right: auto; "> <br>
                                Challenge ini tidak di sarankan unutk pemula karena, untuk bisa mendapatkan Crystal, Anda perlu mendapatkan score SSS terlebih dahulu. Oleh karena itu,  anda perlu memiliki Valkyrie yang sudah memiliki build yang bagus. <br><br>
                                <li><b>Elysian Realm</b></li>
                                Elysian realms merupakan weekly Challenge yang terbuka saat level Captain mencapai 50. Crystals yang diberikan setiap minggunya pada Challenge ini cukup banyak oleh karena itu, Anda jangan lupa unutk selalu memainkan Challenge ini setiap minggunya. <br><br>
                                <li><b>Event Shop</b></li>
                                <br> <img src="{{asset('storage/guidehonkaiimage/event_shop.jpg')}}" style="width: 35rem; display: block; margin-left: auto; margin-right: auto; "> <br>
                                Honkai Impact 3 selalu menemani dengan berbagai Event ysng menarik. Saat menyelesaikan event, Anda akan mendapatkan token event yang nantinya bisa ditukarkan dengan Crystal dan material lainnya di Event Shop. <br><br>
                            </ul>
                        </p>
                        <p class="card-text" style="font-weight: bold ">▣ How to Spend it </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Ketika Anda sudah mengumpulkan banyak Crystals, Anda harus menggunakan Crystal tersebut dengan bijak karena biaya yang diperlukan untuk mendapatkan Valkyrie dengan equipment signature-nya tidak la sedikt. Untuk gacha Battlesuit/Valkyrie akan diberikan guaranteed saat pull ke 90, untuk Weapon di berikan guaranteed saat pull ke 60, dan untuk stigma di berikan guaranteed saat pull ke 50 tetapi, Anda harus mendaptakan 3 stigma yang berbeda. Oleh karena itu, Anda perlu menggunakan Crystal tersebut dengan bijak, jangan menggunakannya untuk hal yang tidak perlu seperti gacha di Dorm Supply  dan gacha lah saat ada banner yang akan menjadi meta.
                        </p>
                    </p>
                    <br/>
                </div>
            </div>
        </div>
    </div>
    @endsection
