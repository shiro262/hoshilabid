@section('title', 'Weapon - Genshin Impact | HoshiLab')
@extends('template.mastermembergenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
              <form class="d-flex my-2 my-lg-0" action="{{ route('Search Weapon Genshin Member') }}">
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
            Daftar senjata yang tersedia di Genshin Impact<br/>
            Terakhir Update: 03/06/2024<br/><br/>
        </h6>
        <a class="btn btn-transparent" href="{{ route('Member Weapon Genshin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapon_genshin/All.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('member Weapon Bow Genshin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapon_genshin/Bow.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('member Weapon Catalyst Genshin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapon_genshin/Catalyst.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('member Weapon Claymore Genshin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapon_genshin/Claymore.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('member Weapon Polearm Genshin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapon_genshin/Polearm.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('member Weapon Sword Genshin Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/weapon_genshin/Sword.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <br/>
    @endif
    <br/>
    <div class="col d-flex justify-content-center">
        <table class="table w-75 p-3" style="border:1px solid white;">
            <thead class="thead-dark">
              <tr style="color: white; text-align: left;">
                <th scope="col">Weapon</th>
                <th scope="col"></th>
                <th scope="col">Type</th>
                <th scope="col">Rarity</th>
                <th scope="col">Skill</th>
                <th scope="col">Drop</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($weapon as $wea)
              <tr style="color: white; text-align: left;">
                <td>
                    <a href="{{ route('View Weapon Genshin Member', [$wea->id]) }}">
                        <img src="{{asset('storage/weaponimagegenshin/'.$wea->image)}}" style="width: 5rem; margin-top:10px;" alt="Card image cap">
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
                    @if ($wea->detail == "-")
                        <br/>{{ $wea->detail }}
                    @else
                        <?php
                            $val = $wea->detail;
                            echo nl2br($val);
                        ?>
                    @endif
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
