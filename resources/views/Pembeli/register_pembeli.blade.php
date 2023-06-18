@extends('headerRegis')

    @section('Content')

    @if(session('success'))
    <h3 class="text-center">{{session('success')}}</h3>
    @endif

    <form class="form-horizontal"action="{{ route('regisPembeli.auth') }}" method="POST">
		{{ csrf_field() }}
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus>
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" placeholder="Email" id="email_address" class="form-control"name="email" required autofocus>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="password" class="form-control" placeholder="Ulangi Password" required="required" name="confirmpassword"> <br />
                @if ($errors->has('confirmpassword'))
                <span class="text-danger">{{ $errors->first('confirmpassword') }}</span>
                @endif
            </div>
        </div>
            <input style="background: #FFCC1D; border-radius:360px;" type="submit" class="btn btn-primary btn-block" value="Daftar">
        </div>
	</form>
    @endsection