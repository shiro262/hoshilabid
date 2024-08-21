@section('title', "Teams Guide - Honkai Impact 3rd | HoshiLab")
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
                    Teams Guide
                </h1>
                <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                    Last updated: 16/05/2024
                </h6>
                <hr style="height:10px; border-width:5px; color:white;">
                <img src="{{asset('storage/guidehonkaiimage/team_thumb.png')}}" style="width: 35rem; ">
                <div class="card-body" style="color:White; text-align:justify;">
                    <p class="card-text">
                        <p class="card-text" style="font-weight: bold ">▣ Teamb Buikd </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Dalam membuat sebuah Team, Anda memerlukan 3 Valkyrie untuk membuat sebuah Team. Team tersebut hrus terdiri dari DPS + Sub-Dps/Support + Support. Anda tidak rekomendasikan untuk membentuk sebuah team yang semuanya terdiri dari DPS, karena hal tersebut tidak dapat memberikan DMG yang maksimal. Dengan bantuan dari 2 support, maka DPS dapat menerima DMG boost yang besar sehingga bisa memberikan DMG yang masksimal.
                        <br><br> <img src="{{asset('storage/guidehonkaiimage/tips.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        Dalam memilih Support Anda harus mengetahui jenis bantuan seperti apa terlebih dahulu, apakah itu memberikan Lighning DMG atau Ice DMG, dll. Untuk bisa mengetahui itu, Anda bisa membacanya di Player tips and Suggestion. Di bagian itu sudah diberikan saran dan tips untuk membentuk sebauuh team.
                        <br><br>
                        Untuk membentuk sebuah team yang baik, Anda harus mengetahui element dari DPS Anda, setelah itu Anda bisa mencari Support yang bisa meningkatkan Element DMG dari DPS Anda. Berikut contoh sederhana pembetukkan team-nya
                        <br><br> <img src="{{asset('storage/guidehonkaiimage/actionT.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        <img src="{{asset('storage/guidehonkaiimage/physicalT.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        <img src="{{asset('storage/guidehonkaiimage/iceT.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        <img src="{{asset('storage/guidehonkaiimage/thunderT.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        <img src="{{asset('storage/guidehonkaiimage/fireT.jpg')}}" style="width: 35rem;  display: block; margin-left: auto; margin-right: auto;"> <br>
                        <br>
                        Jika Anda merasa kesusahan mencari Valkyrie support, Anda bisa membeli Valkyrie Sp yang ada Di Asterite Shop
                        SP Battlesuits/Valkyrie yang direkomendasikan dari v7.2 dan Sebelumnya
                        <ul>
                            <li><b>Sugary Starburst </b></li>
                            Support SP untuk tim Ice DMG dengan kemampuan Freeze dan kehilangan HP. Meningkatkan Total DMG tim Ice DMG. Juga memiliki dukungan Elemental dan dapat bertindak sebagai dukungan transisi dalam tim Lightning DMG dan tim Fire DMG. <br><br>
                            <li><b>Terminal Aide 0017 </b></li>
                            Support SP untuk tim Crit Physical DMG. Unggul dalam memecahkan perisai tebal dan memberikan dukungan Fisik umum yang sangat baik Cosmic Expression Sebuah dukungan SP untuk tim Bleed DMG, tetapi juga dapat dianggap sebagai dealer Physical Bleed DMG tipe SD yang sedikit lebih lemah yang dapat mengeluarkan darah dari musuh dan menghancurkan perisai yang terkena serangan. <br><br>
                            <li><b>Starry Impression </b></li>
                            Support SP untuk tim Physical DMG dengan kemampuan mengeluarkan darah dan memecahkan perisai hit. Saat memberikan Physical DMG kepada bos dengan hit shield atau di lingkungan yang berdarah, dukungan Starry Impression diperlukan. <br><br>
                            <li><b>Chrono Navi</b></li>
                            Support SP untuk tim Fire DMG dengan kemampuan Ignite. Saat ini, dealer Fire DMG reguler masih mengandalkan kemampuan Ignite dari Chrono Navi. <br><br>
                            <li><b>Golden Diva</b></li>
                            Support SP untuk tim Lightning DMG dengan kemampuan Paralyze. Setelah mendapatkan senjata yang cocok, Golden Diva dapat langsung ditukar saat masuk QTE atau menggunakan Ultimate setelah QTE, memberikan fleksibilitas yang lebih besar dalam prosesnya. <br><br>
                            <li><b>Reverist Calico </b></li>
                            Dengan kemampuan membekukan, ia dapat dengan cepat memberikan debuff Kerentanan kepada semua musuh sekaligus memberikan dukungan Elemen. Dia dapat membentuk tim 3-support dengan Shigure Kira dan Li Sushang. Berkat beberapa Signet di Elysian Realm, dia bisa mendapatkan Crystal mingguan dalam waktu singkat. <br><br>
                        </ul>

                    </p>
                    <br/>
                </div>
            </div>
        </div>
    </div>
    @endsection
