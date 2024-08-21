@section('title', 'Character - Honkai: Star Rail | HoshiLab')
@extends('template.masterguesthsr')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_hsr.png')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
              <form class="d-flex my-2 my-lg-0" action="{{ route('Search Character Honkai Star Rail Guest') }}">
                @if(isset($query))
                    <input name="search" class="form-control me-2" type="search" placeholder="Cari disini" value="{{$query}}">
                @else
                    <input name="search" class="form-control me-2" type="search" placeholder="Cari disini">
                @endif
                  <button class="btn btn-outline-success" type="submit">Cari</button>
              </form>
          </ul>
        </div>
    </nav>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px;">
        Character
    </h1>
    @if(isset($query))
        <h5 class="fw-normal" style="letter-spacing: 1px; color:white;">
            Menunjukkan hasil pencarian dari "{{$query}}"
        </h5>
    @else
        <h6 class="fw-normal" style="letter-spacing: 1px; color:white;">
            Daftar karakter yang tersedia di Honkai: Star Rail <br/>
            Terakhir Update: 03/06/2024<br/>
            <br/>
        </h6>
        <a class="btn btn-transparent" href="{{ route('Guest Character Honkai Star Rail Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_hsr/All.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Character Fire Honkai Star Rail Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_hsr/Fire.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Character Ice Honkai Star Rail Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_hsr/Ice.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Character Imaginary Honkai Star Rail Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_hsr/Imaginary.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Character Lightning Honkai Star Rail Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_hsr/Lightning.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Character Physical Honkai Star Rail Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_hsr/Physical.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Character Quantum Honkai Star Rail Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_hsr/Quantum.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Character Wind Honkai Star Rail Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_hsr/Wind.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <br/><br/>
    @endif
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
    @foreach($chara as $c)
    <div class="card-transparent" style="width: 18rem;">
        <a href="{{ route('View Character Honkai Star Rail Guest', [$c->id]) }}">
            <img class="card-img-top" src="{{asset('storage/characterimagehsr/'.$c->image)}}" height="240" alt="Card image cap">
        </a>
        <div class="card-body">
          <p class="card-text" style="color:White;" >{{ $c->name }}<br/>{{$c->role}}</p>
        </div>
      </div>
    @endforeach
</div>
<div class="d-flex justify-content-center" style="margin: 2rem">
    {{$chara->links()}}
</div>
</div>
@endsection
