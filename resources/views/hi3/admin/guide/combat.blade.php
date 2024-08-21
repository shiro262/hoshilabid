@section('title', "Combat Style Guide - Honkai Impact 3rd | HoshiLab")
    @extends('template.masteradmin')
    @section('content')
    <div class="card text-center" style="background:black;">
        <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.4;">
        <div class="card-img-overlay">
        <br/><br/><br/><br/>
        <a href="{{ url()->previous() }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
        <div class="col d-flex justify-content-center">
            <div class="card-transparent w-50 p-3" style="border:1px solid white;">
                <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                    Combat Style
                </h1>
                <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                    Last updated: 16/05/2024
                </h6>
                <hr style="height:10px; border-width:5px; color:white;">
                <img src="{{asset('storage/guidehonkaiimage/combat_thumb.jpg')}}" style="width: 35rem; ">
                <div class="card-body" style="color:White; text-align:justify;">
                    <p class="card-text">
                        <p class="card-text" style="font-weight: bold; ">▣ Basic Attack</p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Basic Attack meruapakan serangan dasar yang beruntun tanpa mengegeluarkan cost energy.
                        <br><br>
                        <p class="card-text" style="font-weight: bold ">▣ Evade </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Evade bisa di gunakan untuk menghindari serangan musuh.  Ada  6 jenis Evade yaitu
                        <ul>
                            <li><b>Evade</b></li>
                            Dengan menekan tombol evade Anda nanti akan melihat sedikit animasi slow motion. Evade ini hanya pada valkyrie rank B
                            <li><b>Perfect Evasion</b></li>
                            Saat berhasil menghindar serangan musuh, maka akan muncul purple glowing dan musuh terkena slow motion. Sehingga kita bisa menyerang bebas pada musuh dalam jangka waktu tertentu.
                            <li><b>Block</b></li>
                            Block hanya bisa dilakukan pada beberapa Valkyrie seperti Yamabuki Armor, Dimension Breaker, atau Bright Knight – Excelsis. Anda  bisa melakukan dengan menekan dan Hold pada button sehingga akan menciptakan shield yang akan menahan semua serangan selama shield tersebut tidak pecah.
                            <li><b>Parry</b></li>
                            Parry bisa dikatakan sebaga Counter Attack, sehingga ketika berhasil mem block serangan, maka Valkyrie bisa membalas dengan counterattack. Contoh Valkyrie yang bisa melakukan parry adalah Blueberry Blizt dan Bright Knight – Excelsis.
                            <li><b>Ultimate Evasion/Active Evasion</b></li>
                            Menggunakan evasion ini tidak perlu melakukan hindaran pada serangan musuh, Anda dapat langsung mengaktifkan evasion ini dengan menekan tombol evade, maka akan terciptanya perfect evasion di area. Contoh Valkyrie yang bisa melakuakn Ultimate Evasion adalah Herrscher of Human: Ego.
                            <li><b>Evasion SKill</b></li>
                            jenis evasion ini hanya ada pada Valkyrie Part dua. Evasnion ini bisa jadikan sebagai skill seragangan.
                        </ul>

                        <p class="card-text" style="font-weight: bold ">▣ Branch Attack </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Branch Attack merupakan serangan kombinasi antara basic attack atau evade dengan Hold Attack. Ketika melakuakan kombinasi tersebut, akan muncul cahaya saat melakukan branch attack.
                        <br><br>
                        <p class="card-text" style="font-weight: bold ">▣ Charge Attack </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Untuk melakukan charge attack, Anda hanya perlu melakukan Hold pada basic attack. Tetapi tidak semua valyrie yang bisa melakukan charge attack. Contoh Valkyrie yang bisa melakukannya Herrscher of Human: Ego.
                        <br><br>
                        <p class="card-text" style="font-weight: bold ">▣ Weapon Skill </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        weapon skill merupakan weapon yang memberikan skill. Skill tersebut dapat berupa active atau passive terggantung dari weapon itu sendiri.
                        <br><br>
                        <p class="card-text" style="font-weight: bold ">▣ Ultimate </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Skill ultimate adalah skill yang paling kuat di dalam game, tetapi membutuhkan Energy yang sangat besar.
                        <br><br>
                        <p class="card-text" style="font-weight: bold ">▣ QTE Skill </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Skill QTE adalah skill khusus yang dapat diluncurkan dengan tag-in jika Valkyrja Anda telah dipicu oleh kondisi khusus; mengambang, membeku, setrum, dll...
                        <br><br>
                        <p class="card-text" style="font-weight: bold ">▣ Tag-in SKill </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Serangan tag-in akan diluncurkan saat Anda berganti karakter, bisa berupa serangan kuat atau serangan cabang tergantung valkryja yang digunakan.
                    </p>
                    <br/>
                </div>
            </div>
        </div>
    </div>
    @endsection
