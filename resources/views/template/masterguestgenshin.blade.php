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
            <img src="{{asset('storage/image/logo.png')}}"  height="50" alt="">
            <span style="color:white; font-family:Brush Script Std; font-size: 30px;">HoshiLab</span>
        </a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Guest Home Genshin Impact') }}>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Guest Character Genshin Page') }}>Character</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Guest Tier List Page') }}>Tier List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Guest Weapon Page') }}>Weapon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Guest Stigmata Page') }}>Artifact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Guest Guide Page') }}>Guide</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Guest News Page') }}>News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Member Blog Page') }}>Forum</a>
            </li>
        </ul>
        <a href="/login" class="btn btn-outline-dark" style="color:white;">Login</a>
    </div>
</nav>
@include('sweetalert::alert')
@yield('content')
</body>
</html>
