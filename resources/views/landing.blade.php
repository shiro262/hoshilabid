@section('title','Welcome!')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body style="background: black;">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
        <a class="navbar-brand" href="#" >
          <img src="{{asset('storage/image/logo.png')}}"  height="50" alt="">
          <span style="color:white; font-family:Brush Script Std; font-size: 30px;">HoshiLab.id</span>
        </a>
    <a href="/login" class="btn btn-outline-dark" style="color:white;">Login</a>
  </div>
</nav>
<div class="card text-center" style="background:black;">
  <img src="{{asset('storage/image/penacony.jpg')}}" style="opacity: 0.4;">
  <div class="card-img-overlay">
  <br/><br/><br/><br/><br/><br/><br/><br/>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 45px;">
        Sumber panduan terbaik untuk game Hoyoverse favoritmu!
    </h1>
    <p class="card-text" style="color:White;" >
        HoshiLab.id menyediakan forum komunitas, berita, tier list, dan panduan terperinci untuk Games Hoyoverse! <br/>
        Semua yang kamu butuhkan di satu tempat! <br/>
        Pilih Game:
    </p>
    <div class="row row-cols-9 justify-content-md-center">
        <div class="card-transparent" style="width: 20rem;">
          <a href={{ route('Guest Home Honkai Impact') }}>
              <img class="card-img-top" src="{{asset('storage/image/honkaiimpact.jpg')}}" alt="Card image cap">
          </a>
          <div class="card-body">
              <h5 class="card-title" style="color:white;">Honkai Impact 3rd</h5>
            <p class="card-text" style="color:white;"></p>
          </div>
        </div>
        <div class="card-transparent" style="width: 20rem;">
          <a href={{ route('Guest Home Genshin Impact') }}>
              <img class="card-img-top" src="{{asset('storage/image/genshinimpact.jpg')}}" alt="Card image cap">
          </a>
          <div class="card-body">
              <h5 class="card-title" style="color:white;">Genshin Impact</h5>
            <p class="card-text" style="color:white;"></p>
          </div>
        </div>
        <div class="card-transparent" style="width: 20rem;">
          <a href={{ route('Guest Home Honkai Star Rail') }}>
              <img class="card-img-top" src="{{asset('storage/image/starrail.jpg')}}" alt="Card image cap">
          </a>
          <div class="card-body">
              <h5 class="card-title" style="color:white;">Honkai: Star Rail</h5>
            <p class="card-text" style="color:white;"></p>
          </div>
        </div>
  </div>
<br/>
<p class="card-text" style="color:White;" >
    Kami juga menyediakan forum komunitas untuk kamu berinteraksi dan berdiskusi bersama! <br/>
    Daftar sekarang untuk mengakses forum komunitas kami!
</p>
<a href="/register" class="btn btn-outline-dark" style="color:White; font-size: 12px;">DAFTAR SEKARANG</a>
</body>
</html>
