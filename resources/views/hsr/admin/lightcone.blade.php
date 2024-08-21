@section('title', 'Lightcone - Honkai: Star Rail | HoshiLab')
@extends('template.masteradminhsr')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_hsr.png')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
              <form class="d-flex my-2 my-lg-0" action="{{ route('Search Lightcone admin') }}">
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
        Lightcone
    </h1>
    @if(isset($query))
        <h5 class="fw-normal" style="letter-spacing: 1px; color:white;">
            Menunjukkan hasil pencarian dari "{{$query}}"
        </h5>
    @else
        <h6 class="fw-normal" style="letter-spacing: 1px; color:white;">
            Daftar Lightcone yang tersedia di Honkai: Star Rail<br/>
            Terakhir Update: 03/06/2024<br/><br/>
        </h6>
        <a class="btn btn-transparent" href="{{ route('admin Lightcone Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/path_hsr/All.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('admin Lightcone Abundance Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/path_hsr/Abundance.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('admin Lightcone Destruction Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/path_hsr/Destruction.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('admin Lightcone Erudition Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/path_hsr/Erudition.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('admin Lightcone Harmony Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/path_hsr/Harmony.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('admin Lightcone Hunt Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/path_hsr/Hunt.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('admin Lightcone Nihility Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/path_hsr/Nihility.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <a class="btn btn-transparent" href="{{ route('admin Lightcone Preservation Page') }}" role="button">
            <img class="card-img-top" src="{{asset('storage/image/path_hsr/Preservation.png')}}" style="width: 3rem;" alt="Card image cap">
        </a>
        <br/>
    @endif
    <br/>
    <div class="col d-flex justify-content-center">
        <table class="table w-75 p-3" style="border:1px solid white;">
            <thead class="thead-dark">
              <tr style="color: white; text-align: left;">
                <th scope="col">Lightcone</th>
                <th scope="col"></th>
                <th scope="col">Path</th>
                <th scope="col">Rarity</th>
                <th scope="col">Skill</th>
                <th scope="col">Drop</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($lightcone as $lc)
              <tr style="color: white; text-align: left;">
                <td>
                    <a href="{{ route('View Lightcone admin', [$lc->id]) }}">
                        <img src="{{asset('storage/lightconeimage/'.$lc->image)}}" style="width: 5rem;" alt="Card image cap">
                    </a>
                </td>
                <td>
                    <br/>
                    {{ $lc->name }}
                </td>
                <td>
                    <br/>{{ $lc->path }}
                </td>
                <td>
                    <br/>{{ $lc->rarity }}
                </td>
                <td>
                    @if ($lc->detail == "-")
                        <br/>{{ $lc->detail }}
                    @else
                        <?php
                            $val = $lc->detail;
                            echo nl2br($val);
                        ?>
                    @endif
                </td>
                <td>
                    <br/>{{ $lc->source }}
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
</div>
<div class="d-flex justify-content-center" style="margin: 2rem">
    {{$lightcone->links()}}
</div>
</div>
@endsection
