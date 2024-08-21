@section('title', 'Character - Genshin Impact | HoshiLab')
@extends('template.masteradmingenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
              <form class="d-flex my-2 my-lg-0" action="{{ route('Search Character Genshin admin') }}">
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
            Daftar karakter yang tersedia di Genshin Impact <br/>
            Terakhir Update: 03/06/2024<br/><br/>
        </h6>
        <a class="btn btn-transparent" href="{{ route('admin Character Genshin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_genshin/All.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('admin Character Anemo Genshin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_genshin/Anemo.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('admin Character Cryo Genshin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_genshin/Cryo.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('admin Character Dendro Genshin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_genshin/Dendro.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('admin Character Electro Genshin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_genshin/Electro.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('admin Character Geo Genshin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_genshin/Geo.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('admin Character Hydro Genshin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_genshin/Hydro.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('admin Character Pyro Genshin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/element_genshin/Pyro.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <br/><br/>
    @endif
    <br/>
    <div class="row row-cols-3 justify-content-md-center">
    @foreach($chara as $c)
    <div class="card-transparent" style="width: 19rem;">
        <a href="{{ route('View Character Genshin admin', [$c->id]) }}">
            <img class="card-img-top" src="{{asset('storage/characterimagegenshin/'.$c->image)}}" height="240" alt="Card image cap">
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
