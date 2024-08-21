@section('title', "APP Store Mac rilis - Honkai Impact 3rd | HoshiLab")
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
                    Honkai Impact 3 Segera Rilis di APP Store Mac Secara Global!!
                </h1>
                <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                  19/04/2024
                </h6>
                <hr style="height:10px; border-width:5px; color:white;">
                <img src="{{asset('storage/honkainewsimage/banner_3.png')}}" style="width: 35rem; ">
                <div class="card-body" style="color:White; text-align:justify;">
                    <p class="card-text">
                        <p>Halo, Kapten! Setelah update versi, Honkai Impact 3 versi Mac akan dirilis secara global! Kapten akan punya lebih banyak pilihan platform untuk bermain. Silakan simak info lebih lanjut dari Ai-chan~</p>
                        <br>
                        <p><b>Tentang Klien</b></p>
                        <p>Honkai Impact 3 versi Mac kompatibel dengan resolusi layar penuh untuk perangkat Mac dan mendukung Refresh Rate hingga 120HZ. Kapten dapat memainkan game menggunakan keyboard atau touchpad bawaan di perangkat Mac, atau menggunakan controller eksternal.  </p>
                        <p>Selain itu, kompatibilitas dengan fitur MetalFx di perangkat Mac akan diperkenalkan di versi mendatang. Silakan ikuti pengumuman resmi kami. </p>
                        <p>Tips Ai-chan: Honkai Impact 3 versi Mac saat ini hanya mendukung perangkat Mac yang dilengkapi dengan chip seri M.</p>
                        <br><br>
                        <p><b>Cara Instalansi</b></p>
                        <p>Setelah update v7.4, Kapten dapat mengunduh game di App Store Mac atau situs resmi.</p>
                        <br>
                        <p>>>https://honkaiimpact3.hoyoverse.com/asia/id-id/home</p>
                        <br><br>
                        <p><b>Event Waktu Terbatas</b></p>
                        <p>Setelah update v7.4 - 6 Juni 03:00 WIB, Kapten yang login ke dalam game melalui perangkat Mac akan mendapatkan keychain eksklusif Mac dalam 7 hari kerja! Untuk Kapten 20 ke atas, selesaikan misi di menu event untuk mendapatkan hadiah tambahan!</p>
                    </p>
                    <br/>
                </div>
            </div>
        </div>
    </div>
    @endsection
