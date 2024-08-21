@section('title', "Beginner Guide - Honkai Impact 3rd | HoshiLab")
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
                    Beginner Guide
                </h1>
                <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                    Last updated: 16/05/2024
                </h6>
                <hr style="height:10px; border-width:5px; color:white;">
                <img src="{{asset('storage/guidehonkaiimage/beginner.png')}}" style="width: 35rem; ">
                <div class="card-body" style="color:White; text-align:justify;">
                    <p class="card-text">
                        <p class="card-text" style="font-weight: bold; ">▣ Introduction</p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Honkai Impact 3rd adalah game role-playing action 3D yang dapat dimainkan secara gratis. Ini adalah lanjutan dari Houkai Gakuen 2, menggunakan banyak karakter dari judul sebelumnya dalam cerita yang terpisah. Game ini memiliki mekanisme gacha.
                        <br><br>
                        <p class="card-text" style="font-weight: bold ">▣ Valkyrie </p>
                        <hr style="height:10px; border-width:5px; color:white;">
                        Valkyrie adalah unit yang dapat dimainkan di Honkai Impact 3. Mereka bisa didapatkan melalui sistem gacha. Tetapi, beberapa Valkyrie bisa di beli  melalui Supply.
                        <br><br>
                        <p class="card-text" style="padding-left:30px; font-weight:bold; margin-bottom: 5px">
                            Valkyrie Stats :
                            <ul>
                                <li><b>ATK</b> – berapa banyak daya serangan yang diberikan Valkyrie.</li>
                                <li><b>HP</b> – Berapa banyak serangan yang dapat diterima Valkyrie sebelum falling dalam battle.</li>
                                <li><b>CRT</b> – seberapa besar kemungkinan dan penggandaan serangan yang diberikan saat Critical.</li>
                                <li><b>SP</b> – berapa banya skill point yang bisa di simpan agar bisa menggukan skill.</li>
                                <li><b>DEF</b> – mengurangi serangan yang di terima Valkyrie.</li>
                            </ul>
                        </p>
                        <p class="card-text" style="padding-left:30px; font-weight:bold; margin-bottom: 5px">
                            Valkyrie Types :
                            <p class="card-text" style="padding-left: 30px">Setiap Valkyrie memiliki type-nya masing-masing.</p>
                            <ul>
                                <li><b>Mecha (MECH)</b> </li>
                                <li><b>Biologic (BIO)</b> </li>
                                <li><b>Psychic (PSY)</b></li>
                                <li><b>Quantum (QUA)</b></li>
                                <li><b>Image (IMG)</b> </li>
                                <li><b>SD-Type</b></li>
                            </ul>
                            <p >Dari type tersebut memiliki keunggulan dan kelemahan saat menyerang type tersebut kecuali unutk SD-Type, yang tidak memiliki kelemahan dan keunggulan.</p>
                        </p>
                        <img src="{{asset('storage/guidehonkaiimage/Types.jpg')}}" style="width: 35rem; display: block; margin-left: auto; margin-right: auto; "> <br>
                        <p class="card-text" style="padding-left:30px; font-weight:bold; margin-bottom: 5px">
                            Valkyrie Elements :
                            <p class="card-text" style="padding-left: 30px">Setiap Karakter di Honkai Impact memiliki Elemen yang terkait dengannya. Elemen Karakter menentukan jenis damage dari serangan mereka. <br> Saat ini ada 4 Elemen di Honkai Impact 3</p>
                            <ul >
                                <li><b>Fire</b> </li>
                                <li><b>Ice</b> </li>
                                <li><b>Lightning</b></li>
                                <li><b>Physical</b></li>
                            </ul>
                        </p>
                        <p class="card-text" style="padding-left:30px; font-weight:bold; margin-bottom: 5px">
                            Valkyrie Progressions :
                            <p class="card-text" style="padding-left: 30px">Meningkatkan Valkyrie Anda di Honkai Impact 3 akan meningkatkan kemampuan tempur mereka, memungkinkan Anda untuk menghadapi dan mengatasi konten yang lebih sulit yang ditawarkan oleh game ini.</p>
                            <ul >
                                <li><b>Naikkan level Valkyrie</b> </li>
                                Setiap Valkyrie di Honkai impact 3 memiliki level karakter mulai dari 1 sampai 88 dan setiap naiknya level akan mendapatkan kenaikan statistik. Tetapi, anda tidak dapat menaikkan level Valkyrie Anda secara instan karena level maksimal Valkyrie akan mengikuti level Captain (Player) kalian contohnya, jika level  Captain adalah 60, maka level maksimal Valkyrie Anda adalah 60 juga tidak bisa leveling sampai 88. <br> <br>
                                <li><b>Upgrade skill Valkrie</b> </li>
                                <br>  <img src="{{asset('storage/guidehonkaiimage/val_skill.jpg')}}" style="width: 35rem; display: block; margin-left: auto; margin-right: auto;"><br>
                                Setiap Valkyrie memiliki keunikan skill-nya masing-masing, Anda dapat meningkatkan level skill berdarakan level Valkyrie dan Raritynya. Skills dapat di upgrade dengan menggunakan Gold dan ada beberapa skill memerlukan item Advanced Skill Material. Advanced Skill Material bisa didapatkan di shop, Abyss, Sim Battle,  dan Open World. <br><br>
                                <li><b>Equipping Stigmata</b></li>
                                <br><img src="{{asset('storage/guidehonkaiimage/val_stig.jpg')}}" style="width: 35rem; display: block; margin-left: auto; margin-right: auto; "><br>
                                Stigmata adalah satu jenis perlengkapan yang dapat di equip oleh semua Valkyrie. Stigmata terdiri dari tiga set yaitu Top (T), Middle (M), dan Bottom (B), dengan mengumpulkan 3 set tersebut maka, Valkyrie akan mendapakakan 2 bonus effect tambahan dari Stigmata tersebut, jika hanya mengumpulkan 2 set, maka akan mendapatkan 1 bonus Effect. Stigamata dapat meningkatkan ATK Power melalui stat boost atau mendapatkan special abbilities. Stigmata perlu di Upgrade 2 kali untuk dapat menanikkan bintang Stigmata. Untuk level maks stigamata adalah 50. <br><br>
                                <li><b>Equipping Weapon</b></li>
                                <br><img src="{{asset('storage/guidehonkaiimage/val_weapon.jpg')}}" style="width: 35rem; display: block; margin-left: auto; margin-right: auto; "><br>
                                Weapon merupakan Equipment terpenting bagi Valkyrie, Weapon terdiri dari berbagai macam jenis sehingga, tidak semua weapon dapat di gunakan oleh Valkyrie, terggantung play style dari Valkyrie tersebut. Weapon, dapat meningkatkan stats dari Valkyrie dan memberikan special abbilites, bahkan ada weapon yang di khususkan untuk suatu Valkyrie tertentu untuk bisa mendapatkan special abbilitites. Cara mendapatkan weapon bisa melalui, event, story, Shop, gacha, dan foundry. <br><br>
                            </ul>
                        </p>
                    </p>
                    <br/>
                </div>
            </div>
        </div>
    </div>
    @endsection
