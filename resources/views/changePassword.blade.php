@extends('template.frontendloginregister')
@Section('title','Forgot Password')
@section('content')
<section class="vh-100" style="background-image: url('/storage/image/landing.jpg');">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="{{asset('storage/chara/Starchasm Nyx.png')}}"
                  alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form action="{{route('guest.method.updatePassword')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    @if ($errors->any())
                    {{-- Error Code Here --}}
                    @endif
                    <div class="d-flex align-items-center mb-3 pb-1">
                    <span class="h1 fw-bold mb-0">Reset Password</span>
                    </div>
                    <h6 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px;">Password Baru<span style="color:red;">*</span></h6>
                    <input type="username" name="username_id" id="" style="visibility:hidden;" value="{{$username->username}}">
                    <div class="form-outline mb-4">
                        <input type="password" id="form2Example17" class="form-control form-control-lg" placeholder="Masukan Password Baru!" name="new_pass">
                    </div>
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Submit</button>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
