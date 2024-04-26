@section('title', $chara->name)
@extends('template.masteradmin')
@section('content')

<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/>
    <section class="vh-10">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card-transparent" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{{asset('storage/chara/'.$chara->image)}}"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <span class="h1 fw-bold mb-0" style="color:White;">{{$chara->name}}</span>
                    </div>
                    <hr>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">{{$chara->detail}}</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Rarity: {{$chara->rank}}</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Tier (by Tokotoko): {{$chara->tier}}</h4>
                    <hr style="height:10px;border-width:10px;">
                    <h4 class="fw-bold mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Recommend Build</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px; text-align:left; color:White;">Weapon: {{$chara->weapon}}</h4>
                    <h4 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px;text-align:left; color:White;">Stigmata Set: {{$chara->stigmata}}</h4>
                    @if (session()->has('success'))
                        <div class="alert alert-success form-outline mb-4" role="alert">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    <br/><a href="{{ url('/admin/characterupdate/'.$chara->id) }}" class="btn btn-outline-primary" style="float: left;">Edit</a>
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Delete
                    </button><br/>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Character</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              Are you sure want to delete this character?
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <form method="post" action="{{route('Delete Character', [$chara->id])}}">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger" type="submit">Delete</button><br/>
                            </form>
                            </div>
                          </div>
                        </div>
                    </div>
                    <br/><a href={{ route('Admin Character Page') }} class="btn btn-outline-light" style="float: left;"><</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
</div>
@endsection
