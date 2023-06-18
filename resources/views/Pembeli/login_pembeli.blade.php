@extends('headerLogin')
@section('Header')
    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h2 class="text-center-judul mt-5">Masuk Sebagai</h2>
              <img class="img-fluid signinpic"src="{{ asset('assets/signin.png') }}" alt="signinku">
        <div class="card-akunpembeli">
            <div class="card-body"> <span class="tulisanpembeli">PEMBELI
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    @if(session('success'))
                     <h3 class="text-center">{{session('success')}}</h3>
                     @endif
                    <form method="POST" action="{{ route('loginPembeli.auth') }}" class="box">
                        @csrf
                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                        autofocus>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                         <span class="belumpunya ">Belum punya akun?</span>
                         <a class="forgot" href="register_pembeli"> Daftar</a>
                         <button type="submit" class="btn btn-dark btn-block">Signin</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- sek mek jajal --}}
@section('Content')
@endsection
