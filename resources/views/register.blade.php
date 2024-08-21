@extends('template.frontendloginregister')
@Section('title','Sign Up')
@section('content')
    <section style="background-image: url('/storage/image/landing.jpg');">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block">
                    <img src="{{asset('storage/characterimagehsr/March 7th.png')}}"
                      alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
                      <form action="/register" method="POST">
                        @csrf
                        <div class="d-flex align-items-center mb-3 pb-1">
                          <span class="h1 fw-bold mb-0">SIGN UP</span>
                        </div>
                        <h6 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px;">Username <span style="color:red;">*</span></h6>
                        <div class="form-outline mb-2">
                          <input type="text" id="form2Example17" class="form-control form-control-lg" placeholder="" name="username"/>
                        </div>
                        <h6 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px;">Email (Opsional)</h6>
                        <div class="form-outline mb-2">
                          <input type="email" id="form2Example17" class="form-control form-control-lg" placeholder="" name="email"/>
                        </div>
                        <h6 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px;">Password <span style="color:red;">*</span></h6>
                        <div class="form-outline mb-2">
                          <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder="(5-20 huruf)" name="password"/>
                        </div>
                        <h6 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px;">Konfirmasi Password <span style="color:red;">*</span></h6>
                        <div class="form-outline mb-2">
                          <input type="password" id="form2Example27" class="form-control form-control-lg" placeholder="(5-20 huruf)" name="confirm_password"/>
                        </div>
                        {{-- <h6 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px;">Pertanyaan Keamanan <span style="color:red;">*</span></h6>
                        <select class="form-control mb-2" name="recovery_question">
                            <option selected>- Pilih Pertanyaan -</option>
                            <option>Siapa karakter Game Favorit kamu?</option>
                            <option>Siapa nama hewan peliharaan kamu?</option>
                            <option>Apa makanan favoritmu?</option>
                            <option>Apa game favorit kamu?</option>
                            <option>Apa nama nick ingame kamu?</option>
                        </select> --}}
                        <h6 class="fw-normal mb-1 pb-1" style="letter-spacing: 1px;">Siapakah karakter favorit anda di Hoyoverse? <span style="color:red;">*</span></h6>
                        <div class="form-outline mb-2">
                          <input type="text" id="form2Example27" class="form-control form-control-lg" placeholder="(Jawaban Keamanan untuk Lupa Password)" name="recovery_answer"/>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger form-outline mb-4" role="alert">
                                {{$errors->first()}}
                            </div>
                        @endif
                        <div class="pt-1 mb-4">
                          <button class="btn btn-dark btn-lg btn-block" type="submit">submit</button>
                        </div>
                        <h6 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sudah Punya Akun? <a href="/login">Login disini</a></h6>
                        <a href="{{ route('Landing') }}" class="btn btn-outline-dark" style="float: left;"><</a>
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
