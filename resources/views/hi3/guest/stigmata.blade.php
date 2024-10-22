@section('title', 'Stigmata - Honkai Impact 3rd | HoshiLab')
@extends('template.masterguest')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
              <form class="d-flex my-2 my-lg-0" action="{{ route('Search Stigmata Guest') }}">
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
        Stigmata
    </h1>
    @if(isset($query))
        <h5 class="fw-normal" style="letter-spacing: 1px; color:white;">
            Menunjukkan hasil pencarian dari "{{$query}}"
        </h5>
    @else
        <h6 class="fw-normal" style="letter-spacing: 1px; color:white;">
            Daftar Stigmata yang tersedia di Honkai Impact 3rd<br/>
            Terakhir Update: 03/06/2024
        </h6>
    @endif
    <br/>
    <div class="col d-flex justify-content-center">
        <table class="table w-50 p-3" style="border:1px solid white;">
            <thead class="thead-dark">
              <tr style="color: white; text-align: left;">
                <th scope="col">Stigmata</th>
                <th scope="col"></th>
                <th scope="col">Set Bonus & Stats</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($stigmata as $stg)
              <tr style="color: white; text-align: left;">
                <td>
                    <a href="{{ route('View Stigmata Guest', [$stg->id]) }}">
                        <img src="{{asset('storage/stigmataimage/'.$stg->image)}}" style="width: 7rem; margin-top:10px;" alt="Card image cap">
                    </a>
                </td>
                <td>
                    <br/>
                    {{ $stg->name }}
                </td>
                <td>
                    <?php
                        $val = $stg->detail;
                        echo nl2br($val);
                    ?>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
</div>
<div class="d-flex justify-content-center" style="margin: 2rem">
    {{$stigmata->links()}}
</div>
</div>
@endsection
