@section('title', 'Add Character')
@extends('template.masteradmin')
@section('content')
<div class="card text-left" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/>
    <div class="container mt-4">
        <div class="card-transparent">
          <div class="card-header text-center font-weight-bold" style="font-size: 35px; color: white;">
            Add Character
          </div>
          <div class="card-body">
            <form class="insert-page-container" method="POST" enctype="multipart/form-data" action="{{Route('Add Character')}}">
                @csrf
                @if ($errors->any())
                    <div class="error-message" style="color: white;">
                        {{$errors->first()}}
                    </div>
                @endif
                <label for="exampleInputEmail1" style="color: white;">Character Image <span style="color:red;">*</span>(.png, .jpg, .jpeg)</label><br/>
                <input type="file" style="color: white;" placeholder="image" class="insert-page-input" name="image"> <br/>
                <label for="exampleInputEmail1" style="color: white;">Character Name <span style="color:red;">*</span></label><br/>
                <input type="text" placeholder="" class="form-control" name="name">
                <label for="exampleInputEmail1" style="color: white;">Character Detail <span style="color:red;">*</span></label><br/>
                <textarea type="text" placeholder="" class="form-control" name="detail" rows="5"></textarea>
                <label for="exampleInputEmail1" style="color: white;">Character Rank <span style="color:red;">*</span></label><br/>
                <select class="form-control" name="rank">
                    <option selected>- Select Character Rank -</option>
                    <option>S</option>
                    <option>A</option>
                    <option>B</option>
                </select>
                <label for="exampleInputEmail1" style="color: white;">Character Tier <span style="color:red;">*</span></label><br/>
                <select class="form-control" name="tier">
                    <option selected>- Select Character Tier -</option>
                    <option>S+</option>
                    <option>S</option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                </select>
                <label for="exampleInputEmail1" style="color: white;">Character Waeapon <span style="color:red;">*</span></label><br/>
                <select class="form-control" name="weapon">
                    <option selected>- Select Character Weapon -</option>
                    @foreach ($weaponhonkai as $wphi3)
                        <option>{{$wphi3->name}}</option>
                    @endforeach
                </select>
                <label for="exampleInputEmail1" style="color: white;">Character Stigmata Set <span style="color:red;">*</span></label><br/>
                <select class="form-control" name="stigmata">
                    <option selected>- Select Character Weapon -</option>
                    @foreach ($stigmatahonkai as $stigmatahi3)
                        <option>{{$stigmatahi3->name}}</option>
                    @endforeach
                </select><br/>
                <button type="submit" class="btn btn-danger" style="color:White;">Add</button><br/>
                <br/><a href="{{url('admin/character/')}}" class="btn btn-outline-light" style="float: left;"><</a>
            </form>
          </div>
        </div>
      </div>
    </form>
</div>
@endsection
