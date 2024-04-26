@extends('template.frontendloginregister')
@Section('title','Sign In')
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
                      <form method="POST" action={{route('guest.method.login')}}>
                        @csrf
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <span class="h1 fw-bold mb-0">SIGN IN</span>
                        </div>
                        <h6 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px;">Email <span style="color:red;">*</span></h6>
                        <div class="form-outline mb-4">
                          <input type="email" id="form2Example17" class="form-control form-control-lg" placeholder="" name="email"
                          value="{{Cookie::get('last_logged') ? Cookie::get('last_logged') : ''}}"/>
                        </div>
                        <h6 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px;">Password <span style="color:red;">*</span></h6>
                        <div class="form-outline mb-2">
                          <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder="5-20 characters" name="password"/>
                        </div>
                        <h6 class="fw-normal mb-1 pb-3" style="letter-spacing: 1px;"><a href="/forgotpassword">Forgot Password?</a></h6>
                        <div class="form-outline pl-4 mb-4">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        @if (session()->has('success'))
                            <div class="alert alert-success form-outline mb-4" role="alert">
                                {{session()->get('success')}}
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger form-outline mb-4" role="alert">
                                {{$errors->first()}}
                            </div>
                        @endif
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit">sign in</button>
                        </div>
                        <h6 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Not Registered yet? <a href="/register">Register here</a></h6>
                        <a href="{{ route('Guest Home Honkai Impact') }}" class="btn btn-outline-dark" style="float: left;"><</a>
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
