@section('title', 'Edit Character - '.$chara->name)
@extends('template.masteradmin')
@section('content')
<div class="card text-left" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/>
    <div class="container mt-4">
        <div class="card-transparent">
          <div class="card-header text-center font-weight-bold" style="font-size: 35px; color: white;">
            Edit Character
          </div>
          <div class="card-body">
            <form class="insert-page-container" method="POST" enctype="multipart/form-data"
            action="{{url('admin/update/'.$chara->id)}}">
                @csrf
                @method('PUT')
                {{-- @method('PATCH') --}}
                @if ($errors->any())
                    <div class="error-message" style="color: white;">
                        {{$errors->first()}}
                    </div>
                @endif
                <label for="exampleInputEmail1" style="color: white;">Character Image (.png, .jpg, .jpeg)</label><br/>
                <input type="file" style="color: white;" placeholder="image" class="insert-page-input" name="image"><br/>
                <img src="{{asset('storage/chara/'.$chara->image)}}" width="70px" height="70px"><br/>
                <label for="exampleInputEmail1" style="color: white;">Character Name</label><br/>
                <input type="text" placeholder="" class="form-control" name="name" value="{{$chara->name}}">
                <label for="exampleInputEmail1" style="color: white;">Character Detail</label><br/>
                <textarea type="text" placeholder="" class="form-control" name="detail" rows="5">{{$chara->detail}}</textarea>
                <label for="exampleInputEmail1" style="color: white;">Character Rank</label><br/>
                <select class="form-control" name="rank">
                    <option value="S" {{($chara->rank === 'S') ? 'Selected' : ''}}>S</option>
                    <option value="A" {{($chara->rank === 'A') ? 'Selected' : ''}}>A</option>
                    <option value="B" {{($chara->rank === 'B') ? 'Selected' : ''}}>B</option>
                </select>
                <label for="exampleInputEmail1" style="color: white;">Character Tier</label><br/>
                <select class="form-control" name="tier">
                    <option value="S+" {{($chara->tier === 'S+') ? 'Selected' : ''}}>S+</option>
                    <option value="S" {{($chara->tier === 'S') ? 'Selected' : ''}}>S</option>
                    <option value="A" {{($chara->tier === 'A') ? 'Selected' : ''}}>A</option>
                    <option value="B" {{($chara->tier === 'B') ? 'Selected' : ''}}>B</option>
                    <option value="C" {{($chara->tier === 'C') ? 'Selected' : ''}}>C</option>
                </select>
                <label for="exampleInputEmail1" style="color: white;">Character Weapon</label><br/>
                <input type="text" placeholder="" class="form-control" name="weapon" value="{{$chara->weapon}}">
                <label for="exampleInputEmail1" style="color: white;">Character Stigmata Set</label><br/>
                <input type="text" placeholder="" class="form-control" name="stigmata" value="{{$chara->stigmata}}"><br/>
                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Edit
                </button><br/>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Character</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Are you sure want to edit this character?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-danger" style="color:White;">Edit</button><br/>
                        </div>
                      </div>
                    </div>
                </div>
                <br/><a href="{{url('admin/character/'.$chara->id)}}" class="btn btn-outline-light" style="float: left;"><</a><br/><br/>
            </form>
          </div>
        </div>
      </div>
    </form>
</div>
@endsection
