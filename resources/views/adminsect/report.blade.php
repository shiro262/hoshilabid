@section('title', 'Report')
@extends('template.masteradminhome')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <div class="container mt-5">
        <h1 class="card-title text-center mb-5" style="color:white; font-family:Brush Script Std; font-size: 40px;">Report</h1>
        @if (session()->has('success'))
            <div class="alert alert-success form-outline mb-4" role="alert">
                {{session()->get('success')}}
            </div>
        @endif
        <h6 style="color:white; text-align:center; font-family:Brush Script Std;">
            Forum: Genshin Impact
        </h6>
        <div class="col d-flex justify-content-center">
            <table class="table w-50 p-3" style="border:1px solid white;">
                <thead class="thead-dark">
                  <tr style="color: white; text-align: left;">
                    <th scope="col">No</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col">Action</th>
                    <th scope="col">Selesai</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($reportpostgenshin as $no => $datagenshin)
                  <tr style="color: white; text-align: left;">
                    <th>{{ $no +1 }}</th>
                    <td>{{ $datagenshin->detail }}</td>
                    <td>
                        <a href="{{ route('View Genshin Post admin', [$datagenshin->post_genshin_id]) }}">
                            <button class="btn btn-outline-primary btn-sm" type="submit">View</button>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('Report Selesai', [$datagenshin->id]) }}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger btn-sm" type="submit">Finish</button>
                        </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
        <br/>
        <h6 style="color:white; text-align:center; font-family:Brush Script Std;">
            Forum: Honkai Star Rail
        </h6>
        <div class="col d-flex justify-content-center">
            <table class="table w-50 p-3" style="border:1px solid white;">
                <thead class="thead-dark">
                  <tr style="color: white; text-align: left;">
                    <th scope="col">No</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col">Action</th>
                    <th scope="col">Selesai</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($reportposthsr as $nom => $datahsr)
                  <tr style="color: white; text-align: left;">
                    <th>{{ $nom +1 }}</th>
                    <td>{{ $datahsr->detail }}</td>
                    <td>
                        <a href="{{ route('View HSR Post admin', [$datahsr->post_hsr_id]) }}">
                            <button class="btn btn-outline-primary btn-sm" type="submit">View</button>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('Report Selesai HSR', [$datahsr->id]) }}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger btn-sm" type="submit">Finish</button>
                        </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
        <br/>
        <h6 style="color:white; text-align:center; font-family:Brush Script Std;">
            Forum: Honkai Impact 3rd
        </h6>
        <div class="col d-flex justify-content-center">
            <table class="table w-50 p-3" style="border:1px solid white;">
                <thead class="thead-dark">
                  <tr style="color: white; text-align: left;">
                    <th scope="col">No</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col">Action</th>
                    <th scope="col">Selesai</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($reportposthonkai as $nomr => $datahonkai)
                  <tr style="color: white; text-align: left;">
                    <th>{{ $nomr +1 }}</th>
                    <td>{{ $datahonkai->detail }}</td>
                    <td>
                        <a href="{{ route('View Honkai Post admin', [$datahonkai->post_honkai_id]) }}">
                            <button class="btn btn-outline-primary btn-sm" type="submit">View</button>
                        </a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('Report Selesai Honkai', [$datahonkai->id]) }}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-outline-danger btn-sm" type="submit">Finish</button>
                        </form>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection
