@extends('headerLogin')
@section('Content')
        <img class="img-fluid penjualpic"src="{{ asset('assets/penjual.svg') }}" alt="penjual" style="display:block; margin:auto;">
        <div class="login">
            <div class="login-screen">
                @if(session('success'))
                     <h3 class="text-center">{{session('success')}}</h3>
                     @endif
                <div class="app-title">
                    <h1>Login</h1>
                </div>
                @csrf
                
                <form method="POST" action="{{ route('loginPenjual.auth') }}" class="login-form">
                    @csrf
                    <div class="control-group">
                        <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                        autofocus>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    <label class="login-field-icon fui-user" for="login-name"></label>
                    </div>

                    <div class="control-group">
                        <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    <label class="login-field-icon fui-lock" for="login-pass"></label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-large btn-block" >Masuk</button>
                    <a class="login-link" href="register_penjual">Belum punya akun?</a> 
                </form>
                
            </div>
        </div>
@endsection

