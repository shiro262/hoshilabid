@section('title', "Character Progression/Upgrade Tips - Genshin Impact | HoshiLab")
@extends('template.masterguestgenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/><br/>
    <a href={{ route('Guest Genshin Guide Page') }} class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    <div class="col d-flex justify-content-center">
        <div class="card-transparent w-50 p-3" style="border:1px solid white;">
            <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                Character Progression/Upgrade Tips
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Last updated: 16/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/guidegenshinimage/charaprogressthumb.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    ▣ Intro<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Setiap karakter di Genshin Impact memiliki sebuah level yang akan meningkatkan stats setiap di level up dengan cap max level 90.<br/>
                    Di Genshin juga memiliki system break limit level yang disebut Ascension, dimana setiap ascend akan menaikan max level yang bisa dicapai, dengan total 6 ascension untuk mencapai level max 90.<br/>
                    Dan disini kami akan memberikan tips dalam leveling dan ascension.<br/>
                    <br/>
                    ▣ Ascension<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <img src="{{asset('storage/guidegenshinimage/ascend.png')}}" style="width: 35rem; margin-bottom:10px;"><br/>
                    Ascension adalah sebutan dari limit break level di Genshin Impact, dimana terdapat total 6 fase ascension, dengan cap level berikut:
                    <ul>
                        <li>
                            Ascension 1 -> Max Level terbuka sampai Lvl.40
                        </li>
                        <li>
                            Ascension 2 -> Max Level terbuka sampai Lvl.50
                        </li>
                        <li>
                            Ascension 3 -> Max Level terbuka sampai Lvl.60
                        </li>
                        <li>
                            Ascension 4 -> Max Level terbuka sampai Lvl.70
                        </li>
                        <li>
                            Ascension 5 -> Max Level terbuka sampai Lvl.80
                        </li>
                        <li>
                            Ascension 6 -> Max Level terbuka sampai Lvl.90
                        </li>
                    </ul>
                    Ascension sendiri memerlukan beberapa material seperti gemstone, boss drop material, enemy drop material, dan local speciality item.<br/>
                    Dan mengingat jumlah material yang dibutuhkan akan terus meningkat setiap fase ascendnya, kami akan membagi sedikit tips:<br/>
                    Hanya melakukan Ascension 6 ke karakter Main DPS.<br/>
                    Sub-DPS Cukup di Ascension 5 (dengan level 70/80 atau 80/80).<br/>
                    Dan untuk Support cukup di Ascension 4 atau 5 .<br/>
                    Tips diatas berguna untuk kalian yang ingin menghemat resources kalian, mengingat untuk melakukan ascension 6 ke semua karakter kalian akan memakan resources dan waktu yang banyak.<br/>
                    <br/>
                    ▣ Leveling<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <img src="{{asset('storage/guidegenshinimage/leveling.png')}}" style="width: 35rem; margin-bottom:10px;"><br/>
                    Untuk menaikkan level karakter dibutuhkan exp material (Wanderer's Advice, Aventurer's Experience, dan Hero's Wit).<br/>
                    Atau bisa juga mendapatkan exp dari pertarungan, namun akan memakan waktu yang sangat lama karena exp dari yang di dapat dari pertarungan sangat sedikit.<br/>
                    Disini kami akan memberikan tips untuk melakukan leveling:<br/>
                    Jangan menghabiskan exp material kalian untuk menaikkan level karakter ke level 90 sekalipun itu Main DPS kalian, kalian cukup melakukan ascension 6 dan keep di level 80/90, karena menaikkan level ke 90 sangat mahal, diperlukan 206 Hero's Wit dan 824.000 Mora untuk melakukannya dan tidak memberikan keuntungan yang sepadan karena hanya menaikkan sedikit saja dari stats.<br/>
                    Hanya menaikkan level karakter kalian saat hendak melakukan ascension (karena untuk melakukan ascension, karakter perlu berada di level max dari ascension tersebut).<br/>
                    Tips diatas berguna untuk kalian jika ingin menghemat resources.
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
