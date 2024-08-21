@section('title', 'Artifact - Genshin Impact | HoshiLab')
@extends('template.masteradmingenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.4;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
              <form class="d-flex my-2 my-lg-0" action="{{ route('Search Artifact admin') }}">
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
        Artifact
    </h1>
    @if(isset($query))
        <h5 class="fw-normal" style="letter-spacing: 1px; color:white;">
            Menunjukkan hasil pencarian dari "{{$query}}"
        </h5>
    @else
        <h6 class="fw-normal" style="letter-spacing: 1px; color:white;">
            Daftar Artifact yang tersedia di Genshin Impact<br/>
            Terakhir Update: 03/06/2024
        </h6>
    @endif
    <br/>
    <div class="col d-flex justify-content-center">
        <table class="table w-50 p-3" style="border:1px solid white;">
            <thead class="thead-dark">
              <tr style="color: white; text-align: left;">
                <th scope="col">Artifact</th>
                <th scope="col"></th>
                <th scope="col">Set Bonus</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($artifact as $art)
              <tr style="color: white; text-align: left;">
                <td>
                    <a href="{{ route('View Artifact admin', [$art->id]) }}">
                        <img src="{{asset('storage/artifactimage/'.$art->image)}}" style="width: 5rem;" alt="Card image cap">
                    </a>
                </td>
                <td>
                    <br/>
                    {{ $art->name }}
                </td>
                <td>
                    <?php
                        $val = $art->detail;
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
    {{$artifact->links()}}
</div>
</div>
@endsection
