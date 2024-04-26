@section('title', $newss->title)
@extends('template.masteradmin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <a href="{{ route('Admin News Page') }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    <a href="{{ url('/admin/newsupdate/'.$newss->id) }}" class="btn btn-outline-primary" style="float: center;">Edit</a><br/><br/>
    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Delete
    </button><br/><br/>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Delete News</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              Are you sure want to delete this news?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <form method="post" action="{{route('Delete News', [$newss->id])}}">
                  @csrf
                  @method('delete')
                  <button class="btn btn-outline-danger" type="submit">Delete</button><br/>
              </form>
            </div>
          </div>
        </div>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success form-outline mb-4" role="alert">
            {{session()->get('success')}}
        </div>
    @endif
    <img src="{{asset('storage/newsimage/'.$newss->banner)}}" style="width: 35rem;">
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px;">
        {{$newss->title}}
    </h1>
    <p class="card-text" style="color:White;">{{ $newss->created_at }}</p>
    <img src="{{asset('storage/newsimage/'.$newss->image)}}" style="width: 35rem;">
    <br/><br/>
    <h5 class="card-text" style="color:White; text-align:left;">
        <?php
        $val = $newss->detail;
        echo nl2br($val);
        ?>
    </h5>
    <br/>
</div>
@endsection
