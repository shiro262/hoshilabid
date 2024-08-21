@section('title', "Tips Gacha F2P - Genshin Impact | HoshiLab")
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
                Tips Gacha F2P
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Last updated: 16/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/guidegenshinimage/f2pgachathumb.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    ▣ Intro<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    F2P merupakan kepanjangan dari Free to Play, yang merupakan istilah di game online dengan makna bermain dengan gratis, dalam artian tidak melakukan top up atau mengeluarkan uang asli untuk membeli credits in-game.<br/>
                    Dalam Genshin Impact, hal ini mengarah ke Primogem, credits yang digunakan dalam melakukan Gacha.<br/>
                    Primogem sendiri bisa kamu dapatkan gratis dengan memainkan gamenya, kamu akan dapat Primogem sepanjang kamu bermain namun tentu memerlukan waktu yang lama untuk mengumpulkannya.<br/>
                    Cara lainnya adalah dengan top up, membeli Oneric Shards yang dapat ditukar menjadi Primogem dengan menggunakan uang asli.<br/>
                    Namun bukankah itu akan membuat permainan menjadi kurang seru?<br/>
                    Disini kami akan memberikan tips dalam melakukan Gacha sebagai F2P Player.<br/>
                    <br/>
                    ▣ Tips Gacha F2P<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Disclaimer: Tips dan penilaian dibawah merupakan hasil penilaian dan pendapat kami tim HoshiLab, jadi boleh setuju dan boleh tidak setuju ya! ^^
                    <br/><br/>
                    <ol>
                        <li>
                            META > Waifu<br/>
                            Dalam setiap game pastinya kamu punya karakter favorit (dalam Genshin Impact biasanya disebut Waifu/Husbando).<br/>
                            Namun apakah karakter favorit kamu itu merupakan karakter yang bagus atau META?<br/>
                            Jika kamu merupakan player F2P yang berfokus dalam menyelesaikan segala mode di game maka kami menyarankan kamu untuk hanya melakukan gacha di banner karakter yang META tanpa menghiraukan suka atau tidak dengan karakter, mengingat untuk mendapatkan karakter 5star kamu perlu menyiapkan total 180 pull (28.800 Primogem) untuk memastikan 100% karakter tersebut pulang!<br/>
                            Namun hal ini tidak berlaku jika kamu hanya ingin bermain for fun dan mengoleksi karakter favoritmu, karena belum tentu karakter tersebut merupakan karakter META yang worth untuk kamu tukarkan denga Primogem kamu.<br/>
                            Cek juga Tierlist kami <a href="{{ route('Guest Tier List Genshin Page') }}" style="text-decoration:none;">disini</a> untuk mengetahui seberapa bagus karakter-karakter di Genshin Impact!<br/>
                        </li>
                        <br/>
                        <li>
                            Weapon Event Wish = SCAM ?!<br/>
                            Baca <a href="{{ route('Genshin Guest Guide Gacha System Page') }}" style="text-decoration:none;">disini</a> untuk mengetahui system gacha Weapon Event Wish!<br/>
                            Seperti yang kalian ketahui, system gacha pada Weapon Event Wish sangat berbeda dengan banner character, dimana memerlukan dana yang sangat banyak untuk mendapatkan senjata signature limited yang kamu mau.<br/>
                            Kamu perlu menyiapkan total 240x pull (38.400 Primogem) untuk memastikan 100% senjata signature yang kamu inginkan itu pulang! Belum lagi kamu harus menyiapkan dana lebih untuk memulangkan karakternya jika kamu belum punya.<br/>
                            Dan ingat senjata signature belum tentu membawa perbedaan yang besar untuk kamu, masih banyak pilihan senjata 4star atau bahkan 3star yang bagus untuk dipakai!<br/>
                            Jadi kesimpulannya adalah, yap tim HoshiLab menilai Weapon Event Wish ini sebagai banner scam!<br/>
                            Tips tambahan: jika kamu memang ingin pull weapon signature, pastikan berkomit karena count fate point tidak akan tersimpan!
                        </li>
                        <br/>
                        <li>
                            Character Event Wish & Standard Wish<br/>
                            Baca <a href="{{ route('Genshin Guest Guide Gacha System Page') }}" style="text-decoration:none;">disini</a> untuk mengetahui system gacha Character Event Wish & Standard Wish!<br/>
                            Dalam Genshin Impact terdapat dua tipe banner lainnya, yaitu Character Event Wish & Standard Wish.<br/>
                            Lalu apa perbedaannya?<br/>
                            <ul>
                                <li>
                                    Character Event Wish, merupakan banner terbatas yang meng-rate up karater 5star limited, dan ingat banner ini biasanya hanya berdurasi 20hari.<br/>
                                    Untuk melakukan pull Character Event Wish diperlukan Intertwined Fate <img src="{{asset('storage/guidegenshinimage/Item_Intertwined_Fate.png')}}" style="width: 2rem;"> yang bernilai 160 Primogem.<br/>
                                </li>
                                <li>
                                    Standard Wish, merupakan banner permanen yang berisikan karakter dan senjata.<br/>
                                    Untuk melakukan pull Character Event Wish diperlukan Acquaint Fate <img src="{{asset('storage/guidegenshinimage/Item_Acquaint_Fate.png')}}" style="width: 2rem;"> yang bernilai 160 Primogem.<br/>
                                    Namun Acquaint bisa kamu dapatkan gratis dari berbagai reward, seperti Free Reward dari Battlepass, melakukan ascension ganjil karakter, dan lainnya.
                                </li>
                            </ul>
                            Tips dari kami, jangan pernah menukarkan Primogem kamu dengan Acquaint Fate atau melakukan gacha di Standard Wish dengan Primogem, karen banner tersebut bersifat permanen dan kamu bisa pull kapan pun, hanya gunakan Primogem kamu di Character Event Wish!
                        </li>
                    </ol>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
