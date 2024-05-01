@section('title', 'Character')
@extends('template.masterguesthsr')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.4;">
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
            Daftar karakter yang tersedia di Genshin Impact <br/>
            Catatan: Asumsikan semua karakter bintang 4 berada dalam kondisi C6 <br/><br/><br/>
        </h6>
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