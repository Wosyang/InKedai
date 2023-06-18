@extends('master')

@section('Content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Login</h3>
                    @if(session('success'))
                     <h3 class="text-center">{{session('success')}}</h3>
                    @endif
                    <div class="card-body">
 
                            <div class="d-grid mx-auto">
                                 <a href="/login_pembeli" type="submit"class="btn btn-primary btn-block">Pembeli</a>
                            </div>
                            <br/>
                            <br/>
                            <div class="d-grid mx-auto">
                                <a href="/login_penjual" class="btn btn-primary btn-block">Penjual</a>
                            </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection