@section('title', "Intro ke dalam permainan - Genshin Impact | HoshiLab")
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
                Intro ke dalam permainan
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Last updated: 16/05/2024
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            <img src="{{asset('storage/guidegenshinimage/introtogame.jpg')}}" style="width: 35rem;">
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    ▣ Intro<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Genshin Impact adalah sebuah action RPG developer game terkenal, Hoyoverse. Game ini bergenre open world, dimana pemain bebas bereksplorasi di dunia Teyvat, dengan mengendalikan satu karakter yang dapat digantikan di dalam sebuah party yang berjumlah 4 karakter. Pertempuran game ini mengandalkan mekanik pemain dalam memanfaatkan combo elemental reaction dari party yang dibangun dan kemampuan pemain dalam melakukan rotasi dan swap karakter.
                    <br/><br/>
                    ▣ Karakter<br/>
                    <hr style="height:10px; border-width:5px; color:white;">
                    Dalam game ini pengumpulan karakter adalah hal yang paling penting, dalam melakukan building karakter yang baik dan variatif untuk tiap mode dan meta. Pemain akan jauh lebih mudah dan enjoy dalam bermain game jika memiliki berbagai karakter yang berebeda, seperti perbedaan dalam role dan element.<br/>
                    Untuk melihat karakter Genshin Impact klik <a href="{{ route('Guest Character Genshin Page') }}">disini</a><br/>
                    <img src="{{asset('storage/guidegenshinimage/chara.png')}}" style="width: 35rem; margin-top:10px; margin-bottom:10px;"><br/>
                    Stats/Attribute Karakter:<br/>
                    <ul>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/att/HP.png')}}" style="">HP<br/>
                            Health, disingkat HP, adalah jumlah damage yang dapat diterima oleh karakter sebelum di-KO.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/att/ATK.png')}}" style="">ATK<br/>
                            Attack, disingkat ATK, digunakan untuk menghitung seberapa besar damage yang dilakukan karakter. Semua bentuk penghitungan kerusakan kecuali Reaksi Elemen tertentu berskala linear dengan ATK.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/att/DEF.png')}}" style="">DEF<br/>
                            Defense, disingkat DEF, adalah sarana untuk mengurangi damage yang masuk. Semakin tinggi pertahanan seseorang, semakin sedikit kerusakan yang diterima karakter dari serangan.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/att/EM.png')}}" style="">Elemental Mastery<br/>
                            Elemental Mastery, meningkatkan Reaksi Elemen. Tergantung pada jenis Reaksi Elemen, Penguasaan Elemen akan memberikan efek yang berbeda.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/att/STA.png')}}" style="">Stamina<br/>
                            Stamina adalah ukuran seberapa besar tenaga fisik yang dapat dikeluarkan oleh karakter sebelum perlu beristirahat. Stamina dikonsumsi dengan melakukan Serangan Bermuatan, menghindar, berenang, berlari, memanjat, dan meluncur. Stamina dipulihkan secara otomatis dan bertahap ketika karakter berhenti mengonsumsinya untuk waktu yang singkat. Stamina Maksimum dapat ditingkatkan dengan mengumpulkan Anemoculus dan Geoculus dan mempersembahkannya kepada Patung The Seven.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/att/CR.png')}}" style="">CRIT Rate<br/>
                            Critical Rate disingkat dalam game sebagai CRIT Rate. Atribut ini, yang dinyatakan dalam persentase, menentukan seberapa besar kemungkinan serangan akan mengenai secara critical dan memberikan bonus damage critical.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/att/CR.png')}}" style="">CRIT DMG<br/>
                            Critical Damage disingkat dalam game sebagai CRIT DMG. Atribut ini, yang dinyatakan dalam persentase, menentukan seberapa besar damage bonus yang diberikan karakter saat serangan mengenai secara critical.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/att/HEAL.png')}}" style="">Healing Bonus<br/>
                            Healing Bonus, dinyatakan dalam bentuk persentase, menentukan bonus Healing yang dikeluarkan oleh karakter yang dapat menyembuhkan diri mereka sendiri atau anggota party lainnya.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/att/HEAL.png')}}" style="">Incoming Healing Bonus<br/>
                            Incoming Healing Bonus, dinyatakan sebagai persentase, menentukan bonus penyembuhan masuk yang diarahkan pada karakter.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/att/ER.png')}}" style="">Energy Recharge<br/>
                            Energy Recharge, adalah persentase peningkatan energi yang diregenerasi oleh setiap partikel elemen dan bola elemen yang diserap. Sumber yang secara langsung memberikan energi seperti set artefak The Exile tidak terpengaruh.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/att/CD.png')}}" style="">CD Reduction<br/>
                            Reduce CD, umumnya dikenal sebagai pengurangan cooldown, adalah persentase penurunan cooldown setelah menggunakan Skill Elemen atau Elemental Burst karakter sebelum dapat digunakan kembali.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/att/SHIELD.png')}}" style="">Shield Strenght<br/>
                            Atribut Shield Strenght, mengurangi damage yang diterima oleh perisai apa pun yang melindungi karakter, yang secara efektif meningkatkan daya tahan perisai dengan persentase tertentu. Perhatikan bahwa saat menerima kerusakan perisai, Kekuatan Perisai dari karakter yang aktif digunakan, bukan pembuat perisai.
                        </li>
                        <li>
                            DMG Bonus<br/>
                            Bonus damage, disingkat dalam game sebagai Bonus DMG, termasuk Bonus DMG Fisik dan Elemen yang tercantum di layar Detail meningkatkan damage yang diberikan berdasarkan persentase.
                        </li>
                        <li>
                            RES<br/>
                            Resistances, disingkat RES dalam game, menggambarkan persentase penurunan damage yang masuk dari jenis yang sesuai. Perhatikan bahwa resistensi memiliki batas lunak di bawah 0% dan di atas 75%.
                        </li>
                    </ul>
                    Tipe karakter dan Element<br/>
                    Setiap karakter dalam game memiliki berbagai tipe dan element.<br/>
                    Tipe karakter dibedakan dari senjata yang dipakai, dan dalam Genshin Impact memiliki 5 tipe senjata yaitu:<br/>
                    <ul>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/weapon/Sword.png')}}" style="">Sword<br/>
                            Serangan Sword adalah jalan tengah dari senjata jarak dekat. Damage dan kecepatan serangan mereka sebanding dengan Polearms, meskipun dengan jangkauan yang lebih pendek.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/weapon/Claymore.png')}}" style="">Claymore<br/>
                            Serangan Claymore mengenai lebih lambat daripada senjata jarak dekat seperti Sword dan Polearm, tetapi memberikan lebih banyak damage per ayunan. Karena dianggap sebagai Serangan Tumpul, serangan Claymore memberikan peningkatan damage pada objek Geo, seperti shield monster.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/weapon/Polearm.png')}}" style="">Polearm<br/>
                            Polearm memiliki serangan yang cepat, jangkauan ke depan yang panjang, dan memberikan damage sedang per pukulan.
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/weapon/Catalyst.png')}}" style="">Catalyst<br/>
                            Karena sifat magisnya, semua Serangan Normal dan charged yang dilakukan dengan Catalyst dianggap sebagai damage elemen (sesuai dengan vision karakter).
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/weapon/Bow.png')}}" style="">Bow<br/>
                            Bow memiliki serangan jarak jauh, dengan Serangan Charged yang mampu menghantam monster sejauh mata memandang dengan bidikan yang tepat. Serangan yang terisi penuh memberikan damage elemen.
                        </li>
                    </ul>
                    Dan untuk element terbagi menjadi 7, yaitu:<br/>
                    <img src="{{asset('storage/guidegenshinimage/element.png')}}" style="width: 35rem; margin-top:10px; margin-bottom:10px;"><br/>
                    {{-- <ul>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/element/Anemo.png')}}" style="margin-top:10px;">Anemo<br/>
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/element/Cryo.png')}}" style="margin-top:10px;">Cryo<br/>
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/element/Dendro.png')}}" style="margin-top:10px;">Dendro<br/>
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/element/Electro.png')}}" style="margin-top:10px;">Electro<br/>
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/element/Geo.png')}}" style="margin-top:10px;">Geo<br/>
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/element/Hydro.png')}}" style="margin-top:10px;">Hydro<br/>
                        </li>
                        <li>
                            <img src="{{asset('storage/guidegenshinimage/element/Pyro.png')}}" style="margin-top:10px;">Pyro<br/>
                        </li>
                    </ul> --}}
                    Untuk penjelasan Elemental Reaction bisa klik <a href="{{ route('Genshin Guest Guide Elemental Reaction Page') }}">disini</a><br/>
                    <br/>
                    Skill Karakter<br/>
                    Setiap karakter memiliki skills set/kit yang berbeda-beda.<br/>
                    <img src="{{asset('storage/guidegenshinimage/skill set.png')}}" style="width: 35rem; margin-top:10px; margin-bottom:10px;"><br/>
                    <ul>
                        <li>
                            Normal Attack:<br/>
                            Serangal normal yang dikeluarkan karakter, yang juga termasuk dengan Charged Attack (tekan) dan Plunging Attack (serangan jatuh setelah melakukan airborne)
                        </li>
                        <li>
                            Elemental Skill:<br/>
                            Skill elemental, merupakan talent dari setiap karakter yang tidak memakai energy untuk mengeluarkannya namun memiliki cooldown dalam penggunaannya.
                        </li>
                        <li>
                            Elemental Burst:<br/>
                            Elemental Burst, Talent yang menggunakan energy untuk mengeluarkannya, biasa disebut ultimate oleh pemain.
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
    <br/>
</div>
@endsection
