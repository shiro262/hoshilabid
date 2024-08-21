@section('title', 'Weapon - Honkai Impact 3rd | HoshiLab')
@extends('template.masterguest')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
              <form class="d-flex my-2 my-lg-0" action="{{ route('Search Weapon Guest') }}">
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
        Weapon
    </h1>
    @if(isset($query))
        <h5 class="fw-normal" style="letter-spacing: 1px; color:white;">
            Menunjukkan hasil pencarian dari "{{$query}}"
        </h5>
    @else
        <h6 class="fw-normal" style="letter-spacing: 1px; color:white;">
            Daftar senjata yang tersedia di Honkai Impact 3rd<br/>
            Terakhir Update: 03/06/2024<br/><br/>
        </h6>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/All.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Bow Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Bow.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Cannon Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Cannon.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Chained Blade Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Chained Blade.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Chakram Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Chakram.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Cross Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Cross.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Drive Core Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Drive Core.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Gauntlet Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Gauntlet.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Greatsword Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Greatsword.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Javelin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Javelin.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Katana Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Katana.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Lance Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Lance.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Pistol Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Pistol.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Rapid-Shot Crossbow Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Rapid-Shot Crossbow.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Rocket Hammer Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Rocket Hammers.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('Guest Weapon Scythe Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapontype_honkai/Scythe.png')}}" style="width: 2rem;" alt="Card image cap">
        </a>
        <br/>
    @endif
    <br/>
    <div class="col d-flex justify-content-center">
        <table class="table w-50 p-3" style="border:1px solid white;">
            <thead class="thead-dark">
              <tr style="color: white; text-align: left;">
                <th scope="col">Weapon</th>
                <th scope="col"></th>
                <th scope="col">Type</th>
                <th scope="col">Rarity</th>
                <th scope="col">Drop</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($weapon as $wea)
              <tr style="color: white; text-align: left;">
                <td>
                    <a href="{{ route('View Weapon Guest', [$wea->id]) }}">
                        <img src="{{asset('storage/weaponimagehonkai/'.$wea->image)}}" style="width: 7rem;" alt="Card image cap">
                    </a>
                </td>
                <td>
                    <br/>
                    {{ $wea->name }}
                </td>
                <td>
                    <br/>{{ $wea->type }}
                </td>
                <td>
                    <br/>{{ $wea->rarity }}
                </td>
                <td>
                    <br/>{{ $wea->source }}
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
</div>
<div class="d-flex justify-content-center" style="margin: 2rem">
    {{$weapon->links()}}
</div>
</div>
@endsection
