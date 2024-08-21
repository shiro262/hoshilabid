@section('title', "Team Building - Genshin Impact | HoshiLab")
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
                Team Building
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Last updated: 16/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/guidegenshinimage/teambuildingthumb.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    ▣ Intro<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Dalam Genshin Impact, pemain diwajibkan untuk membawa sebuah party berisikan 4 karakter dengan masing-masing memiliki role tertentu dalam tim.<br/>
                    Party tersebut biasanya berisikan 4 karakter yang memiliki sinergis dalam gameplay, yang biasanya mengarah kepada Elemental Reaction.<br>
                    <br/>
                    ▣ Penjelasan Role pada Party<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Dalam party Genshin Impact yang berisikan 4 karakter memiliki masing-masing role, yang umumnya berisikan:
                    <ol>
                        <li>
                            Main DPS<br/>
                            Berperan sebagai damager utama dalam tim, yang build nya berfokus ke full damage untuk menghasilkan damage yang maksimal.
                        </li>
                        <li>
                            Sub-DPS<br/>
                            Berperan sebagai damager kedua dalam tim, yang biasa nya memiliki sinergis elemen dengan Main DPS.
                        </li>
                        <li>
                            Support<br/>
                            Berperan sebagai sustain dalam tim, biasanya karakter yang memiliki kemampuan heal atau karakter yang bisa memberikan shield.
                        </li>
                        <li>
                            Flex<br/>
                            Posisi keempat biasanya bersifat fleksibel, dalam artian mengikuti kebutuhan tim (biasanya diisi dengan Support/Sub-DPS tambahan).
                        </li>
                    </ol>
                    Dalam pembentukan team/party pun tidak bisa sembarang, melainkan harus memiliki sinergis yang bagus secara reaksi elemen.<br/>
                    <img src="{{asset('storage/guidegenshinimage/partysetup.png')}}" style="width: 35rem; margin-top:10px; margin-bottom:10px;"><br/>
                    Contoh pada team diatas, berfokus pada gameplay Hyperbloom, dimana<br/>
                    Raiden Shogun memiliki peran sebagai Electro Sub-DPS<br/>
                    Yelan memiliki peran sebagai Hydro Sub-DPS<br/>
                    Nahida memiliki peran sebagai Dendro Sub-DPS<br/>
                    dan Kokomi merupakan Support team sekaligus Hydro enabler tambahan untuk meng-trigger Bloom.<br/>
                    Tim diatas memang berfokus dalam permainan Hyperbloom dimana mengandalkan elemental reaction yang terjadi dan damage akan datang dari Dendro Core yang terkena reaksi elemen dari Hydro dan Electro yang akan memberikan damage ke target.<br/>
                    Dari penjelasan diatas kita bisa melihat masing-masing karakter memiliki perannya masing-masing dan memiliki sinergi dan combo yang cocok, sehingga akan membangun team yang kuat dan solid.<br/>
                    Jadi sebelum membentuk sebuah tim/party pastikan kamu terlebih dahulu memilih untuk bermain team tipe apa, dan pastikan karakter yang kamu pasang di team memiliki elemental reaction tersebut.<br/>
                    Untuk melihat penjelasan lengkap mengenai Elemental Reaction klik <a href="{{ route('Genshin Guest Guide Elemental Reaction Page') }}" style="">disini</a><br/>
                    <br/>
                    ▣ Rekomendasi Team<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Dalam section ini, team HoshiLab akan memberikan beberapa rekomendasi team:<br/>
                    <ul>
                        <li style="margin-top:10px; margin-bottom:10px;">
                            Hyperbloom<br/>
                            <a href="{{ route('View Character Genshin Guest', [55]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Raiden_Shogun_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [77]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Yelan_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [48]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Nahida_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [58]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Sangonomiya_Kokomi_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                        <li style="margin-top:10px; margin-bottom:10px;">
                            Neuvillete Hyperbloom<br/>
                            <a href="{{ route('View Character Genshin Guest', [50]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Neuvillette_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [48]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Nahida_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [26]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Fischl_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [33]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Kaedehara_Kazuha_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                        <li style="margin-top:10px; margin-bottom:10px;">
                            Alhaitham Quicken<br/>
                            <a href="{{ route('View Character Genshin Guest', [3]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Alhaitham_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [72]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Yae_Miko_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [41]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Kuki_Shinobu_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [48]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Nahida_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                        <li style="margin-top:10px; margin-bottom:10px;">
                            Nilou Bloom<br/>
                            <a href="{{ route('View Character Genshin Guest', [51]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Nilou_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [73]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Xingqiu_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [48]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Nahida_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [58]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Sangonomiya_Kokomi_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                        <li style="margin-top:10px; margin-bottom:10px;">
                            Rational<br/>
                            <a href="{{ route('View Character Genshin Guest', [55]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Raiden_Shogun_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [73]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Xingqiu_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [12]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Bennett_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [69]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Xiangling_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                        <li style="margin-top:10px; margin-bottom:10px;">
                            Ayaka Freeze<br/>
                            <a href="{{ route('View Character Genshin Guest', [5]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Kamisato_Ayaka_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [1]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Furina_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [60]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Shenhe_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [14]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Charlotte_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                        <li style="margin-top:10px; margin-bottom:10px;">
                            Hyper Carry Arlecchino<br/>
                            <a href="{{ route('View Character Genshin Guest', [4]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Arlecchino_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [12]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Bennett_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [33]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Kaedehara_Kazuha_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [80]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Zhongli_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                        <li style="margin-top:10px; margin-bottom:10px;">
                            Navia Geo-Pyro Team<br/>
                            <a href="{{ route('View Character Genshin Guest', [49]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Navia_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [80]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Zhongli_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [12]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Bennett_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin Guest', [69]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Xiangling_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
