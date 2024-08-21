@section('title', "Elemental Reaction - Genshin Impact | HoshiLab")
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
                Elemental Reaction
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Last updated: 16/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/guidegenshinimage/elementalreactionthumb.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    ▣ Intro<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Elemental Reaction dipicu dengan menerapkan kombinasi efek elemen tertentu pada target (musuh, pemain, atau objek).<br/>
                    Ketika sebuah elemen diterapkan pada target, elemen tersebut akan menciptakan aura elemen yang akan meluruh seiring berjalannya waktu. Elemental Reaction akan terjadi ketika elemen kedua diterapkan pada target dengan aura elemen yang sudah ada.<br/>
                    Memicu Elemental Reaction akan menghabiskan aura yang ada dengan jumlah yang bervariasi tergantung pada jenis reaksi yang dipicu dan gauge elemen pemicu. Hal ini akan memperpendek durasi aura yang ada atau menghilangkannya sama sekali.<br/>
                    Perhatikan bahwa beberapa skill memiliki Internal Cooldown sebelum dapat menerapkan kembali efek elemennya dan oleh karena itu mungkin tidak dapat memicu Elemental Reaction pada setiap serangan.<br/>
                    <br/>
                    ▣ Elemental Debuff<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Sebelum masuk ke penjelasan detail Elemental Reaction, kami akan menjelaskan sedikit mengenai Elemental Debuff.<br/>
                    Beberapa Elemen memiliki debuff/effect khusus saat mengenai suatu target walau tidak ada pemicu dari elemen kedua.<br/>
                    <ul>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/element/Electro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> Engulfing Storm<br/>
                            Menguras Energy Recharge secara terus menerus,
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/element/Hydro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> Slowing Water<br/>
                            Meningkatkan CD Skill.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/element/Pyro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> Smoldering Flames<br/>
                            Memberikan damage secara terus menerus.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/element/Cryo.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> Condensed Ice<br/>
                            Meningkatkan konsumsi stamina.
                        </li>
                    </ul>
                    ▣ Elemental Reaction<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Seperti yang sudah dijelaskan di intro, Elemental Reaction terpicu dengan mengkombinasikan dua elemen yang berbeda pada suatu target.<br/>
                    Sekarang kamu akan dijelaskan mengenai berbagai reaksi elemen yang ada di Genshin Impact, berikut daftar dan penjelasannya:
                    <ul>
                        <li>
                            Crystalize<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Geo.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Electro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Pyro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Cryo.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Hydro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Menciptakan sebuah crystal yang memberikan kamu shield setelah kamu ambil (crystal akan jatuh bertebaran di field).
                        </li>
                        <li style="margin-top:10px;">
                            Swirl<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Anemo.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Electro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Pyro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Cryo.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Hydro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Memberikan tambahan damage elemen dan menyebarkan efeknya.
                        </li>
                        <li style="margin-top:10px;">
                            Electro-Charged<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Electro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Hydro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Memberikan DMG Electro secara terus menerus.
                        </li>
                        <li style="margin-top:10px;">
                            Overloaded<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Electro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Pyro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Memberikan DMG AoE Pyro.
                        </li>
                        <li style="margin-top:10px;">
                            Frozen<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Cryo.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Hydro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Membekukan Target
                        </li>
                        <li style="margin-top:10px;">
                            Melt<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Cryo.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Pyro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Memberikan damage tambahan.
                        </li>
                        <li style="margin-top:10px;">
                            Superconduct<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Cryo.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Electro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Memberikan DMG AoE Cryo dan mengurangi Physical RES target sebanyak 50%.
                        </li>
                        <li style="margin-top:10px;">
                            Vaporize<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Hydro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Pyro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Memberikan damage tambahan.
                        </li>
                        <li style="margin-top:10px;">
                            Burning<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Dendro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Pyro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Memberikan AoE Pyro DoT.
                        </li>
                        <li style="margin-top:10px;">
                            Bloom<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Dendro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Hydro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Membuat Dendro Core disekitar dan akan meledak setelah 6 detik, memberikan DMG AoE Dendro.
                        </li>
                        <li style="margin-top:10px;">
                            Hyperbloom<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Dendro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Hydro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Electro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Terpicu setelah memberikan reaksi Elektro ke Dendro Core, mengubahnya menjadi tembakan Homing Sprawling yang akan memberikan DMG AoE Dendro.
                        </li>
                        <li style="margin-top:10px;">
                            Burgeon<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Dendro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Hydro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Pyro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Terpicu setelah memberikan reaksi Pyro ke Dendro Core, yang akan langsung meledakkan Dendro Core dan memberikan DMG AoE Dendro.
                        </li>
                        <li style="margin-top:10px;">
                            Quicken<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Dendro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Electro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Memberikan aura Quicken.
                        </li>
                        <li style="margin-top:10px;">
                            Aggravate<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Dendro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Electro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Electro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Terpicu setelah memberikan reaksi Electro ke entitas dengan aura quicken. Menambahkan DMG Bonus (Flat) ke serangan yang memicu reaksi ini.
                        </li>
                        <li style="margin-top:10px;">
                            Spread<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Dendro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> + <img src="{{asset('storage/guidegenshinimage/element/Electro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Dendro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Terpicu setelah memberikan reaksi Dendro ke entitas dengan aura quicken. Menambahkan DMG Bonus (Flat) ke serangan yang memicu reaksi ini.
                        </li>
                    </ul>
                    ▣ Elemental Resonance<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Selain Elemental Debuff dan Reaction, ada juga Elemental Resonance.<br/>
                    <ul>
                        <li style="margin-top:10px;">
                            Enduring Rock<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Geo.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Geo.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Meningkatkan kekuatan perisai sebesar 15%. Selain itu, karakter yang dilindungi oleh perisai akan memiliki karakteristik khusus berikut: DMG yang diberikan meningkat sebesar 15%, memberikan DMG kepada musuh akan mengurangi Geo RES mereka sebesar 20% selama 15 detik.
                        </li>
                        <li style="margin-top:10px;">
                            Fervent Flames<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Pyro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Pyro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Dipengaruhi oleh Cryo selama 40% lebih sedikit dan meningkatkan ATK sebesar 25%.
                        </li>
                        <li style="margin-top:10px;">
                            Soothing Waters<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Hydro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Hydro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Dipengaruhi oleh Pyro selama 40% lebih sedikit dan meningkatkan penyembuhan yang masuk sebesar 30%.
                        </li>
                        <li style="margin-top:10px;">
                            Impetuous Winds<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Anemo.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Anemo.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Mengurangi Konsumsi Stamina sebesar 15%.<br/>
                            Meningkatkan SPD Gerakan sebesar 10% dan memperpendek Skill CD sebesar 5%.
                        </li>
                        <li style="margin-top:10px;">
                            High Voltage<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Electro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Electro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Dipengaruhi oleh Hydro selama 40% lebih sedikit.<br/>
                            Superconduct, Overloaded, dan Electro-Charged memiliki peluang 100% untuk menghasilkan Partikel Elemen Listrik (CD: 5 detik).
                        </li>
                        <li style="margin-top:10px;">
                            Shattering Ice<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Cryo.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Cryo.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Terkena Electro selama 40% lebih sedikit.<br/>
                            Meningkatkan CRIT Rate terhadap musuh yang dibekukan atau terkena Cryo sebesar 15%.
                        </li>
                        <li style="margin-top:10px;">
                            Sprawling Greenery<br/>
                            <img src="{{asset('storage/guidegenshinimage/element/Dendro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;"> <img src="{{asset('storage/guidegenshinimage/element/Dendro.png')}}" style="width: 3rem; margin-top:10px; margin-bottom:10px;">
                            <br/>
                            Setelah memicu reaksi Burning, Quicken, atau Bloom, semua anggota party di dekatnya mendapatkan 30 Elemental Mastery selama 6 detik.<br/>
                            Setelah memicu reaksi Aggravate, Spread, Hyperbloom, atau Burgeon, semua anggota party di dekatnya mendapatkan 20 Elemental Mastery selama 6 detik.<br/>
                            Durasi efek yang disebutkan di atas akan dihitung secara independen.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
