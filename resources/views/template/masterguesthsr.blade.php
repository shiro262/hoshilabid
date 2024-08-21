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
        <a class="navbar-brand" href="/" >
            <img src="{{asset('storage/image/logo.png')}}"  style="margin-bottom:15px;" height="60" alt="">
            <span style="color:white; font-family:Brush Script Std; font-size: 30px;">HoshiLab</span>
        </a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Guest Home Honkai Star Rail') }}>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Guest Character Honkai Star Rail Page') }}>Character</a>
            </li>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                      Tier List
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('Guest Tier List MOC Honkai Star Rail Page') }}">Memory of Chaos</a></li>
                      <li><a class="dropdown-item" href="{{route('Guest Tier List PF Honkai Star Rail Page')}}">Pure Fiction</a></li>
                    </ul>
                </li>
            </ul>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Guest Lightcone Page') }}>Lightcone</a>
            </li>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                      Relics
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href={{ route('Guest Relic Page') }}>Relic</a></li>
                      <li><a class="dropdown-item" href={{ route('Guest Planar Page') }}>Planar Ornament</a></li>
                    </ul>
                </li>
            </ul>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Guest Guide Honkai Star Rail Page') }}>Guide</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Guest Star Rail News Page') }}>News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Member HSR Forum Page') }}>Forum</a>
            </li>
        </ul>
        <a href="/login" class="btn btn-outline-dark" style="color:white;">Login</a>
    </div>
</nav>
@include('sweetalert::alert')
@yield('content')
</body>
</html>
