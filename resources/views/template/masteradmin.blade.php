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
        <a class="navbar-brand" href="/admin/homepage" >
            <img src="{{asset('storage/image/logo.png')}}"  height="50" alt="">
            <span style="color:white; font-family:Brush Script Std; font-size: 30px;">HoshiLab.id</span>
        </a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Admin Guide Page') }}>Guide</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Admin Character Page') }}>Character</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Admin Tier List Page') }}>Tier List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Admin News Page') }}>News</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href={{ route('Admin Blog Page') }}>Blog</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white;">
                  {{Auth::user()->username}}
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('Admin Profile Page') }}">Profile</a></li>
                  <li><a class="dropdown-item" href="{{route('User Management Page')}}">User Management</a></li>
                  <li><a class="dropdown-item" href="{{route('user.method.logout')}}">Log Out</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
@include('sweetalert::alert')
@yield('content')

@yield('scripts')
</body>
</html>
