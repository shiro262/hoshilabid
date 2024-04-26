@section('title', 'Character')
@extends('template.masteradmin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
              <form class="d-flex my-2 my-lg-0" action="{{ route('Search Character Admin') }}">
                @if(isset($query))
                    <input name="search" class="form-control me-2" type="search" placeholder="Search" value="{{$query}}">
                @else
                    <input name="search" class="form-control me-2" type="search" placeholder="Search">
                @endif
                  <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
          </ul>
        </div>
    </nav>
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px;">
        Character
    </h1>
    @if(isset($query))
        <h5 class="fw-normal" style="letter-spacing: 1px; color:white;">
            Showing result of "{{$query}}"
        </h5>
    @else
        <h6 class="fw-normal" style="letter-spacing: 1px; color:white;">
            List of characters available Honkai Impact 3rd
        </h6>
    @endif
    <h6 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px; color:white;">
        Add another character <a href={{route('View Add Character')}}>here</a></h6>
    @if (session()->has('success'))
        <div class="alert alert-success form-outline mb-4" role="alert">
            {{session()->get('success')}}
        </div>
    @endif
    <div class="row row-cols-3 justify-content-md-center">
    @foreach($chara as $c)
    <div class="card-transparent" style="width: 18rem;">
        <a href="{{ route('View Character Admin', [$c->id]) }}">
            <img class="card-img-top" src="{{asset('storage/chara/'.$c->image)}}" height="240" alt="Card image cap">
        </a>
        <div class="card-body">
          <p class="card-text" style="color:White;" >{{ $c->name }}</p>
        </div>
      </div>
    @endforeach
</div>
<div class="d-flex justify-content-center" style="margin: 1rem">
    {{$chara->links()}}
</div>
</div>
@endsection
