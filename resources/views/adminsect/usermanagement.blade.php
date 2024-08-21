@section('title', 'User Management')
@extends('template.masteradminhome')
@section('content')
<div class="card text-center" style="background:black;">
    <img src="{{asset('storage/image/wp_genshin.jpg')}}" style="opacity: 0.3;">
    <div class="card-img-overlay">
    <br/><br/><br/>
    <div class="container mt-5">
        <h1 class="card-title text-center mb-5" style="color:white; font-family:Brush Script Std; font-size: 40px;">User Management</h1>
        @if (session()->has('success'))
            <div class="alert alert-success form-outline mb-4" role="alert">
                {{session()->get('success')}}
            </div>
        @endif
        <div class="card-transparent">
            <div class="card-body">
                <table class="table" style="color:white;">
                    <thead>
                        <th>No</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($userm as $no => $data )
                        <tr>
                        <th>{{ $no +1 }}</th>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->role }}</td>
                        <td>
                        @if ($data->role =='member')
                        <form method="post" action="{{ route('Delete User', [$data->id]) }}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                        </form>
                        @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
