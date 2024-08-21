@section('title', "Ver. 4.6 Spiral Abyss Guide - Genshin Impact | HoshiLab")
@extends('template.masteradmingenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/><br/>
    <a href={{ route('admin Genshin Guide Page') }} class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    <div class="col d-flex justify-content-center">
        <div class="card-transparent w-50 p-3" style="border:1px solid white;">
            <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                Ver. 4.6 Spiral Abyss Guide
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Last updated: 16/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/guidegenshinimage/4.6spiralabyssthumb.png')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    ▣ Spiral Abyss Patch ver. 4.6<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Pada section ini kami akan membahas dan memberikan rekomedasi line up untuk Spiral Abyss Patch ver. 4.6.<br/>
                    Note: kami hanya akan membahas untuk floor 12 karena floor 9 - 11 relatif mudah dan rata-rata tidak ada yang mengalami kesulitan.<br/>
                    <br/>
                    ▣ Blessing<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <img src="{{asset('storage/guidegenshinimage/blessing4.6.png')}}" style="width: 35rem; margin-bottom:10px;"><br/>
                    Blessing: Saat karakter menerima heal, ATK karakter tersebut meningkat sebesar 50% selama 3 detik.<br/>
                    Blessing kali ini tidak terlalu efektif karena memaksa pemain untuk membawa healer, dimana seperti yang kita tahu beberapa orang atau bahkan karakter akan lebih nyaman membawa shielder seperti Zhong li atau Diona.<br/>
                    <br/>
                    ▣ Rekomendasi Team<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    First Half:<br/>
                    Pada Team pertama, kami merekomendasi kan untuk membawa team Mono Pyro.<br/>
                    <a href="{{ route('View Character Genshin admin', [4]) }}">
                        <img src="{{asset('storage/guidegenshinimage/charaicon/Arlecchino_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                    </a>
                    <a href="{{ route('View Character Genshin admin', [12]) }}">
                        <img src="{{asset('storage/guidegenshinimage/charaicon/Bennett_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                    </a>
                    <a href="{{ route('View Character Genshin admin', [33]) }}">
                        <img src="{{asset('storage/guidegenshinimage/charaicon/Kaedehara_Kazuha_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                    </a>
                    <a href="{{ route('View Character Genshin admin', [80]) }}">
                        <img src="{{asset('storage/guidegenshinimage/charaicon/Zhongli_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                    </a>
                    <br/>
                    <ul>
                        <li>
                            Arlecchino disini bertindak sebagai damage dealer utama.<br/>
                            Alternatif:<br/>
                            <a href="{{ route('View Character Genshin admin', [31]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Hu_Tao_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                        <li>
                            Bennet berperan sebagai buffer dari ultimatenya, walau Arlecchino tidak bisa menerima buff heal Benner, Buff ATK masih sangat bagus untuk Arlecchino.<br/>
                            Alternatif:<br/>
                            <a href="{{ route('View Character Genshin admin', [15]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Chevreuse_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin admin', [64]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Thoma_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                        <li>
                            Kazuha berperan sebagai support offensive yang melakukan crowd control untuk mengumpulkan musuh.<br/>
                            Alternatif:<br/>
                            <a href="{{ route('View Character Genshin admin', [62]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Sucrose_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                        <li>
                            Zhongli berperan sebagai support sustain dengan shieldnya, slot ini bisa diisi dengan support sustain apapun, namun mengingat Arlecchino tidak bisa menerima heal karena pasifnya, kita memakai Shielder.<br/>
                            Alternatif:<br/>
                            <a href="{{ route('View Character Genshin admin', [22]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Diona_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin admin', [79]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Yun_Jin_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                    </ul>
                    Second Half:<br/>
                    Pada Team pertama, kami merekomendasi kan untuk membawa team Hyperbloom (Dendro - Hydro - Electro).<br/>
                    <a href="{{ route('View Character Genshin admin', [3]) }}">
                        <img src="{{asset('storage/guidegenshinimage/charaicon/Alhaitham_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                    </a>
                    <a href="{{ route('View Character Genshin admin', [48]) }}">
                        <img src="{{asset('storage/guidegenshinimage/charaicon/Nahida_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                    </a>
                    <a href="{{ route('View Character Genshin admin', [73]) }}">
                        <img src="{{asset('storage/guidegenshinimage/charaicon/Xingqiu_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                    </a>
                    <a href="{{ route('View Character Genshin admin', [41]) }}">
                        <img src="{{asset('storage/guidegenshinimage/charaicon/Kuki_Shinobu_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                    </a>
                    <br/>
                    <ul>
                        <li>
                            Alhaitham berperan sebagai damage dealer utama sekaligus Dendro Enabler.<br/>
                            Pada posisi ini juga kalian bisa tukar dengan karakter Main DPS Electro atau Hydro (mengingat pilihan Main DPS Dendro sangat sedikit) tapi pastikan membawa Dendro enabler lainnya.<br/>
                            Alternatif:<br/>
                            <a href="{{ route('View Character Genshin admin', [55]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Raiden_Shogun_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin admin', [50]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Neuvillette_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                        <li>
                            Nahida berperan sebagai Sub-DPS dan Dendro Enabler.<br/>
                            Slot ini bisa di isi dengan role lainnya namun yang memilki elemen Dendro.<br/>
                            Alternatif:<br/>
                            <a href="{{ route('View Character Genshin admin', [9]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Baizhu_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin admin', [18]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Collei_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                        <li>
                            Xingqiu berperan sebagai Sub-DPS ke 2 dan Hydro Enabler.<br/>
                            Slot ini bisa di isi dengan role lainnya namun yang memilki elemen Hydro.<br/>
                            Alternatif:<br/>
                            <a href="{{ route('View Character Genshin admin', [77]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Yelan_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin admin', [58]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Sangonomiya_Kokomi_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                        <li>
                            Kuki Shinobu berperan sebagai Support dan Electro Enabler.<br/>
                            Slot ini bisa di isi dengan role lainnya namun yang memilki elemen Electro.<br/>
                            Alternatif:<br/>
                            <a href="{{ route('View Character Genshin admin', [26]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Fischl_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                            <a href="{{ route('View Character Genshin admin', [55]) }}">
                                <img src="{{asset('storage/guidegenshinimage/charaicon/Raiden_Shogun_Icon.png')}}" style="width: 7rem; margin-bottom:10px; margin-top:10px;">
                            </a>
                        </li>
                    </ul>
                    ▣ Chamber 1<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <img src="{{asset('storage/guidegenshinimage/chamber1.png')}}" style="width: 35rem; margin-bottom:10px;"><br/>
                    Target:<br/>
                    ★Sisa waktu tantangan lebih dari 180 detik.<br/>
                    ★Sisa waktu tantangan lebih dari 300 detik.<br/>
                    ★Sisa waktu tantangan lebih dari 420 detik.<br/>
                    <br/>
                    <ul>
                        <li>
                            First Half:<br/>
                            Seperti pada spiral abyss sebelumnya yang menampilkan trio Maguu Kenki, cara terbaik untuk menghadapinya adalah dengan membawa damage dealer AoE untuk memastikan kamu dapat mengenai sebanyak mungkin dari mereka, terutama Maguu Kenki - Galloping Frost.<br/>
                            Waspadai setiap serangan mereka yang menghantam dengan keras, seperti Windblades milik Maguu Kenki - Lone Gale dan Maguu Kenki - Galloping Frost, serta hindarilah jika diperlukan.
                        </li>
                        <li>
                            Second Half:<br/>
                            Untuk gelombang pertama, fokuslah untuk menghabisi kedua Kairagi sekaligus untuk mencegah yang lain memulihkan HP mereka, lalu hadapi gelombang kedua sesuai kebutuhan.<br/>
                            Untuk gelombang terakhir dengan dua Operative, cobalah mengalahkan Wind Operative terlebih dahulu karena dia relatif diam, sedangkan biarkan Frost Operative terkena damage dari Hyperbloom karena dia relatif tidak bisa diam di tempat (akan terus mendekat dan mengejar).
                        </li>
                    </ul>
                    ▣ Chamber 2<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <img src="{{asset('storage/guidegenshinimage/chamber2.png')}}" style="width: 35rem; margin-bottom:10px;"><br/>
                    Target:<br/>
                    ★Sisa waktu tantangan lebih dari 180 detik.<br/>
                    ★Sisa waktu tantangan lebih dari 300 detik.<br/>
                    ★Sisa waktu tantangan lebih dari 420 detik.<br/>
                    <br/>
                    <ul>
                        <li>
                            First Half:<br/>
                            Versi Icewind Suite ini menampilkan Nemesis of Coppelius, yang melakukan solo yang menghasilkan perisai Cryo. Tidak seperti Dirge of Coppelia, damage Coppelius tidak terlalu sakit, jadi kamu bebas untuk masuk dengan tim Pyro yang kuat dan menipiskan perisai.<br/>
                            Atau, jika kamu menggunakan karakter yang selaras dengan Ousia, mereka dapat langsung menghancurkan perisai Coppelius selama fase solo dengan melakukan serangan Ousia.
                        </li>
                        <li>
                            Second Half:<br/>
                            Gelombang pertama dapat diselesaikan dengan cepat karena Agen Pyro akan mengunci dan mengikuti pemain, sehingga pemain tidak perlu mengelompokkan mereka. Untuk gelombang kedua, pemain harus fokus pada Galehunter Eremite karena gelombang lainnya adalah serangan jarak dekat.<br/>
                            Untuk gelombang terakhir dengan dua Lector, pemain harus menjauh dari mereka ke sudut yang paling dekat dengan salah satu dari mereka, karena ini akan memaksa Lector melayang lebih dekat satu sama lain untuk berada dalam jangkauan, sehingga pemain dapat memberikan damage pada keduanya secara bersamaan.
                        </li>
                    </ul>
                    ▣ Chamber 3<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    <img src="{{asset('storage/guidegenshinimage/chamber3.png')}}" style="width: 35rem; margin-bottom:10px;"><br/>
                    Target:<br/>
                    ★Sisa waktu tantangan lebih dari 180 detik.<br/>
                    ★Sisa waktu tantangan lebih dari 300 detik.<br/>
                    ★Sisa waktu tantangan lebih dari 420 detik.<br/>
                    <br/>
                    <ul>
                        <li>
                            First Half:<br/>
                            Bagian babak ini diisi dengan mobs standar untuk mengulur waktu dan menghabiskan waktu pemain. Fokuskan pada Cryogunners sebelum mereka dapat mengangkat perisai mereka, dan kelompokkan musuh dalam gelombang berikutnya untuk menghancurkan babak ini.<br/>
                            Note: Beberapa musuh memiliki gerakan dash yang membuat mereka semakin menjauh dari kelompok jika pemain menjauh dari mereka, jadi berhati-hatilah dan beradaptasi.
                        </li>
                        <li>
                            Second Half:<br/>
                            The Iniquitous Baptist memiliki perisai Pyro, Cryo, dan Electro dalam urutan tersebut.<br/>
                            Untuk mengalahkan lantai ini dengan waktu yang cukup, pastikan untuk memotong perisainya dengan skill dasar dan simpan jurus kamu yang paling sakit untuk saat dia dalam kondisi lemah, karena ini memungkinkan kamu untuk menghabisi HP-nya.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
