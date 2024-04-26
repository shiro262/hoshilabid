@section('title', $blogg->title)
@extends('template.mastermember')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <a href="{{ route('Member Blog Page') }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    @if (session()->has('success'))
        <div class="alert alert-success form-outline mb-4" role="alert">
            {{session()->get('success')}}
        </div>
    @endif
    <h1 class="card-title" style="color:white; font-family:Brush Script Std; font-size: 40px;">
        {{$blogg->title}}
    </h1>
    <h6 style="color:white;">
        by {{ $blogg->post->username }}
    </h6>
    <p class="card-text" style="color:White;">{{ $blogg->created_at }}</p>
    @if ($blogg->image != null)
    <img src="{{asset('storage/blogimage/'.$blogg->image)}}" style="width: 35rem;">
    @endif
    <br/><br/>
    <h5 class="card-text" style="color:White; text-align:left;">
        <?php
        $val = $blogg->detail;
        echo nl2br($val);
        ?>
    </h5>
    <br/>
    @if ($blogg->user_id == $user)
        <div style="display: flex; justify-content: center">
            <a href="{{ route('Edit Blog Page', [$blogg->id]) }}" class="btn btn-outline-primary">Edit</a>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 30px">
                Delete
            </button><br/>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Edit Blog</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      Are you sure want to edit this blog?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <form method="post" action="{{ route('Delete Blog Member', [$blogg->id]) }}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger" type="submit">Delete</button>
                    </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection
