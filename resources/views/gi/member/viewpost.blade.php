@section('title', $forum->title.' - Genshin Impact | HoshiLab')
@extends('template.mastermembergenshin')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/><br/><br/>
    <a href="{{ route('Member Genshin Forum Page') }}" class="btn btn-outline-light" style="float: center;"><</a><br/><br/>
    @if (session()->has('success'))
        <div class="alert alert-success form-outline mb-4" role="alert">
            {{session()->get('success')}}
        </div>
    @endif
    @if ($forum->user_id == $user)
        <div style="display: flex; justify-content: center">
            <a href="{{ route('Edit Post Genshin Member Page', [$forum->id]) }}" class="btn btn-outline-primary">Edit</a>
            <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-left: 30px">
                Hapus
            </button><br/>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Hapus Post</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      Apakah anda yakin ingin menghapus post ini?
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                      <form method="post" action="{{ route('Delete Post Genshin Member', [$forum->id]) }}">
                        @csrf
                        @method('delete')
                        <button class="btn btn-outline-danger" type="submit">Hapus</button>
                    </form>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    @else
        <div style="display: flex; justify-content: center">
            <a href="{{ route('Create Report Genshin Member Page', [$forum->id]) }}" class="btn btn-outline-danger">Report</a>
        </div>
    @endif
    <br/>
    <div class="col d-flex justify-content-center">
        <div class="card-transparent w-50 p-3" style="border:1px solid white;">
            <h1 class="card-title" style="color:white; text-align:left; font-family:Brush Script Std; font-size: 40px;">
                {{$forum->title}}
            </h1>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                <img src="{{asset('storage/profilepic/'.$forum->post->profile_picture)}}" style="width: 2rem;" class="me-1 avatar-sm rounded-circle"> {{ $forum->post->username }}
            </h6>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Tanggal Post: {{ $forum->created_at }}
            </h6>
            <h6 style="color:white; text-align:left; font-family:Brush Script Std;">
                Terakhir Update: {{ $forum->updated_at }}
            </h6>
            <hr style="height:10px; border-width:5px; color:white;">
            @if ($forum->image != null)
                <img src="{{asset('storage/postgenshinimage/'.$forum->image)}}" style="width: 35rem;">
            @endif
            <div class="card-body" style="color:White; text-align:justify;">
                <p class="card-text">
                    <?php
                        $val = $forum->detail;
                        echo nl2br($val);
                    ?>
                </p>
                <hr style="height:10px; border-width:1px; color:white;">
                @if ($errors->any())
                    <div class="alert alert-danger form-outline mb-4" role="alert">
                        {{$errors->first()}}
                    </div>
                 @endif
                <form action="{{route('Create Comment on Post Genshin Member', $forum->id)}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <textarea name="detail" class="fs-6 form-control" id="" rows="3"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary btn-sm">Komentar</button>
                    </div>
                </form>
                <br/>
                <h6 style="color:white;">
                    Komentar
                </h6>
                <hr style="height:10px;border-width:10px;">
                @foreach ($forum->comment as $comment)
                <div class="card-transparent text-white" style="border:1px solid white;">
                    <div class="card-header">
                        <img src="{{asset('storage/profilepic/'.$comment->user->profile_picture)}}" style="width: 2rem;" class="me-1 avatar-sm rounded-circle"> {{$comment->user->username}}
                         <span style="font-size: 75%; color:grey;">{{$comment->created_at->diffForHumans()}}</span>
                    </div>
                    <div class="card-body" style="border:1px solid white;">
                      <p class="card-text">
                        {{$comment->detail}}
                      </p>
                    </div>
                </div>
                <br/>
                @endforeach
            </div>
        </div>
    </div>
    <br/><br/>
</div>
@endsection
