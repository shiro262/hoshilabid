@section('title', 'News - Genshin Impact | HoshiLab')
@extends('template.masterguestgenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/>
        <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px;">
            News
        </h1>
        <br/>
        <br/>
        <div class="row row-cols-3" style="display:flex; justify-content:center;">
            <div class="card-transparent" style="width: 25rem; border:1px solid white;">
                <div class="card-header" style="color:White;">Buletin</div>
                <a href="{{ route('Guest News Genshin Id 25') }}">
                    <img class="card-img-top" src="{{asset('storage/newsgenshinimage/buletin-left.jpg')}}" style="margin-top: 10px;" alt="Card image cap">
                </a>
                <div class="card-body" style="color:White; text-align:left;">
                  <h5 class="card-title">Kisah Karakter: "Emilie — Kesaksian" | Genshin Impact</h5>
                  <p class="card-text">Setiap tindakan akan meninggalkan jejak, meski tidak miliki warna atau bentuk.</p>
                  <br/><br/><br/><br/>
                  <p class="card-text text-muted">06/08/2024</p>
                </div>
            </div>
            <div class="card-transparent" style="width: 25rem; border:1px solid white; margin-left: 10px;">
                <div class="card-header" style="color:White;">Buletin</div>
                <a href="{{ route('Guest News Genshin Id 23') }}">
                    <img class="card-img-top" src="{{asset('storage/newsgenshinimage/buletin-mid.jpg')}}" style="margin-top: 10px;" alt="Card image cap">
                </a>
                <div class="card-body" style="color:White; text-align:left;">
                  <h5 class="card-title">Teaser Membara — Nama yang Ditempa dalam Api | Genshin Impact</h5>
                  <p class="card-text">Wahai dewa api, kehancuran, dan perang,<br/>
                    Takdirmu dibentuk di antara perselisihan,<br/>
                    Jalanmu ditempa oleh kejayaan,<br/>
                    Kemuliaanmu menyala bagai matahari yang berkobar.
                  <br/><br/>
                  <p class="card-text text-muted">12/07/2024</p>
                </div>
            </div>
            <div class="card-transparent" style="width: 25rem; border:1px solid white; margin-left: 10px;">
                <div class="card-header" style="color:White;">Buletin</div>
                <a href="{{ route('Guest News Genshin Id 22') }}">
                    <img class="card-img-top" src="{{asset('storage/newsgenshinimage/buletin-right.jpg')}}" style="margin-top: 10px;" alt="Card image cap">
                </a>
                <div class="card-body" style="color:White; text-align:left;">
                  <h5 class="card-title">Galeri Kostum Baru Nilou Breeze of Sabaa</h5>
                  <p class="card-text">Kostum baru Nilou Breeze of Sabaa, akan hadir setelah update v4.8.</p>
                  <br/><br/><br/><br/>
                  <p class="card-text text-muted">06/07/2024</p>
                </div>
            </div>
        </div>
        <br/>
        <br/>
        <h2 style="color:white; text-align:center;">
            Berita Terbaru
        </h2>
        <hr style="height:10px; border-width:1px; color:white;">
        <div class="row row-cols-1 justify-content-center">
            @foreach($newss as $n)
                <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                    <div class="row no-gutters">
                        <div class="col-auto">
                            <a href="news/{{$n->id}}">
                                <img src="{{asset('storage/newsgenshinimage/thumbnail/'.$n->banner)}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                            </a>
                        </div>
                        <div class="col">
                            <div class="card-block px-2" style="text-align: left; margin-top:10px;">
                                <h4 class="card-title">{{ $n->title }}</h4>
                                <p class="card-text">{{ $n->description }}</p>
                                <p class="card-text text-muted" style="text-align: right;">{{ $n->date }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center" style="margin: 2rem">
                {{$newss->links()}}
            </div>
            {{-- <div class="card-transparent" style="width: 75%; color:white; border:1px solid white;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Genshin Guest Guide Intro to Game Page') }}">
                            <img src="{{asset('storage/newsgenshinimage/Apa yang Dibilang Cyno.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">"Apa yang Dibilang Cyno?" - Ayo Ikuti Event-nya dan Menangkan Primogem!</h4>
                            <p class="card-text">Traveler dan para rekan lain telah mendirikan sebuah kemah selama petualangan mereka. Apa yang dibilang Cyno saat mengobrol?</p>
                            <p class="card-text text-muted" style="text-align: right;">16/05/2024</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Genshin Guest Guide Intro to Game Page') }}">
                            <img src="{{asset('storage/newsgenshinimage/Apa yang Dibilang Cyno.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">"Apa yang Dibilang Cyno?" - Ayo Ikuti Event-nya dan Menangkan Primogem!</h4>
                            <p class="card-text">Traveler dan para rekan lain telah mendirikan sebuah kemah selama petualangan mereka. Apa yang dibilang Cyno saat mengobrol?</p>
                            <p class="card-text text-muted" style="text-align: right;">14/05/2024</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Genshin Guest Guide Intro to Game Page') }}">
                            <img src="{{asset('storage/newsgenshinimage/Apa yang Dibilang Cyno.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">"Apa yang Dibilang Cyno?" - Ayo Ikuti Event-nya dan Menangkan Primogem!</h4>
                            <p class="card-text">Traveler dan para rekan lain telah mendirikan sebuah kemah selama petualangan mereka. Apa yang dibilang Cyno saat mengobrol?</p>
                            <p class="card-text text-muted" style="text-align: right;">14/05/2024</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Genshin Guest Guide Intro to Game Page') }}">
                            <img src="{{asset('storage/newsgenshinimage/Apa yang Dibilang Cyno.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">"Apa yang Dibilang Cyno?" - Ayo Ikuti Event-nya dan Menangkan Primogem!</h4>
                            <p class="card-text">Traveler dan para rekan lain telah mendirikan sebuah kemah selama petualangan mereka. Apa yang dibilang Cyno saat mengobrol?</p>
                            <p class="card-text text-muted" style="text-align: right;">14/05/2024</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Genshin Guest Guide Intro to Game Page') }}">
                            <img src="{{asset('storage/newsgenshinimage/Apa yang Dibilang Cyno.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">"Apa yang Dibilang Cyno?" - Ayo Ikuti Event-nya dan Menangkan Primogem!</h4>
                            <p class="card-text">Traveler dan para rekan lain telah mendirikan sebuah kemah selama petualangan mereka. Apa yang dibilang Cyno saat mengobrol?</p>
                            <p class="card-text text-muted" style="text-align: right;">14/05/2024</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Genshin Guest Guide Intro to Game Page') }}">
                            <img src="{{asset('storage/newsgenshinimage/Apa yang Dibilang Cyno.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">"Apa yang Dibilang Cyno?" - Ayo Ikuti Event-nya dan Menangkan Primogem!</h4>
                            <p class="card-text">Traveler dan para rekan lain telah mendirikan sebuah kemah selama petualangan mereka. Apa yang dibilang Cyno saat mengobrol?</p>
                            <p class="card-text text-muted" style="text-align: right;">14/05/2024</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Genshin Guest Guide Intro to Game Page') }}">
                            <img src="{{asset('storage/newsgenshinimage/Apa yang Dibilang Cyno.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">"Apa yang Dibilang Cyno?" - Ayo Ikuti Event-nya dan Menangkan Primogem!</h4>
                            <p class="card-text">Traveler dan para rekan lain telah mendirikan sebuah kemah selama petualangan mereka. Apa yang dibilang Cyno saat mengobrol?</p>
                            <p class="card-text text-muted" style="text-align: right;">14/05/2024</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Genshin Guest Guide Intro to Game Page') }}">
                            <img src="{{asset('storage/newsgenshinimage/Apa yang Dibilang Cyno.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">"Apa yang Dibilang Cyno?" - Ayo Ikuti Event-nya dan Menangkan Primogem!</h4>
                            <p class="card-text">Traveler dan para rekan lain telah mendirikan sebuah kemah selama petualangan mereka. Apa yang dibilang Cyno saat mengobrol?</p>
                            <p class="card-text text-muted" style="text-align: right;">14/05/2024</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Genshin Guest Guide Intro to Game Page') }}">
                            <img src="{{asset('storage/newsgenshinimage/Apa yang Dibilang Cyno.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">"Apa yang Dibilang Cyno?" - Ayo Ikuti Event-nya dan Menangkan Primogem!</h4>
                            <p class="card-text">Traveler dan para rekan lain telah mendirikan sebuah kemah selama petualangan mereka. Apa yang dibilang Cyno saat mengobrol?</p>
                            <p class="card-text text-muted" style="text-align: right;">14/05/2024</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Genshin Guest Guide Intro to Game Page') }}">
                            <img src="{{asset('storage/newsgenshinimage/Apa yang Dibilang Cyno.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">"Apa yang Dibilang Cyno?" - Ayo Ikuti Event-nya dan Menangkan Primogem!</h4>
                            <p class="card-text">Traveler dan para rekan lain telah mendirikan sebuah kemah selama petualangan mereka. Apa yang dibilang Cyno saat mengobrol?</p>
                            <p class="card-text text-muted" style="text-align: right;">14/05/2024</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Genshin Guest Guide Intro to Game Page') }}">
                            <img src="{{asset('storage/newsgenshinimage/5/thumbnail.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">Adegan Animasi "Perpisahan" | Genshin Impact</h4>
                            <p class="card-text">Malam itu, beberapa anggota meninggalkan House of the Hearth.</p>
                            <p class="card-text text-muted" style="text-align: right;">30/04/2024</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Genshin Guest Guide Intro to Game Page') }}">
                            <img src="{{asset('storage/newsgenshinimage/4/thumbnail.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">Adegan Animasi "Eksekusi" | Genshin Impact</h4>
                            <p class="card-text">Kematian bukanlah satu-satunya akibat dari eksekusi.</p>
                            <p class="card-text text-muted" style="text-align: right;">29/04/2024</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Genshin Guest Guide Intro to Game Page') }}">
                            <img src="{{asset('storage/newsgenshinimage/3/thumbnail.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">Adegan Animasi "Cinder of Two Worlds' Flames | Genshin Impact</h4>
                            <p class="card-text">Di Khaenri'ah kuno, ada beberapa kebiasaan yang tak tertulis.</p>
                            <p class="card-text text-muted" style="text-align: right;">29/04/2024</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Genshin Guest Guide Intro to Game Page') }}">
                            <img src="{{asset('storage/newsgenshinimage/2/thumbnail.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">[Event Web Dirilis] Embusan Angin Kaya Rasa - Ikuti Event-nya dan Dapatkan Primogem Serta Berbagai Hadiah dalam Game</h4>
                            <p class="card-text">Ayo racik berbagai minuman sambil menikmati angin sepoi yang berembus~</p>
                            <p class="card-text text-muted" style="text-align: right;">29/04/2024</p>
                        </div>
                    </div>
                </div>
          </div>
          <div class="card-transparent" style="width: 75%; color:white; border:1px solid white; margin-top: 10px;">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <a href="{{ route('Guest News Genshin Id 1') }}">
                            <img src="{{asset('storage/newsgenshinimage/1/thumbnail.jpg')}}" class="img-fluid" alt="" style="width:12rem; margin-top: 5px;">
                        </a>
                    </div>
                    <div class="col">
                        <div class="card-block px-2" style="text-align: left;">
                            <h4 class="card-title">Event Siaran Langsung Discord Quest untuk Genshin Impact Versi 4.6</h4>
                            <p class="card-text">Dear Traveler, Genshin Impact v4.6 "Kala Dua Dunia Berkobar, Malam Merah 'kan Padam" sudah dimulai bersama event siaran langsung Discord Quest. Ayo ikuti event-nya dan selesaikan misi siaran langsung untuk kesempatan memenangkan Primogem serta berbagai hadiah terbatas lainnya!</p>
                            <p class="card-text text-muted" style="text-align: right;">28/04/2024</p>
                        </div>
                    </div>
                </div>
          </div> --}}
        </div>
        <br/>
    </div>
</div>
@endsection