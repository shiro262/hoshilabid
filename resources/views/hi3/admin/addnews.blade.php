@section('title', 'Add News')
@extends('template.masteradmin')
@section('content')
<div class="card text-left" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/>
    <div class="container mt-4">
        <div class="card-transparent">
          <div class="card-header text-center font-weight-bold" style="font-size: 35px; color: white;">
            Add News
          </div>
          <div class="card-body">
            <form class="insert-page-container" method="POST" enctype="multipart/form-data" action="{{Route('Add News')}}">
                @csrf
                @if ($errors->any())
                    <div class="error-message" style="color: white;">
                        {{$errors->first()}}
                    </div>
                @endif
                <label for="exampleInputEmail1" style="color: white;">News Banner <span style="color:red;">*</span>(.png, .jpg, .jpeg)</label><br/>
                <input type="file" style="color: white;" placeholder="image" class="insert-page-input" name="banner"> <br/>
                <label for="exampleInputEmail1" style="color: white;">News Image <span style="color:red;">*</span>(.png, .jpg, .jpeg)</label><br/>
                <input type="file" style="color: white;" placeholder="image" class="insert-page-input" name="image"> <br/>
                <label for="exampleInputEmail1" style="color: white;">News Title <span style="color:red;">*</span></label><br/>
                <input type="text" placeholder="" class="form-control" name="title">
                <label for="exampleInputEmail1" style="color: white;">News Description <span style="color:red;">*</span></label><br/>
                <input type="text" placeholder="" class="form-control" name="description">
                <label for="exampleInputEmail1" style="color: white;">News Detail <span style="color:red;">*</span></label><br/>
                <textarea type="text" placeholder="" class="form-control" name="detail" rows="5"></textarea><br/>
                <button type="submit" class="btn btn-danger" style="color:White;">Add</button><br/>
                <br/><a href="{{url('admin/news/')}}" class="btn btn-outline-light" style="float: left;"><</a>
            </form>
          </div>
        </div>
      </div>
    </form>
</div>
@endsection
