@extends('headerLogin')

@section('Header')
                <h2 class="text-center" style="color: #7FBCD2">Daftar</h2>
                <br/>
                <div class="dropdown">
                    <select style="background: #7FBCD2; border-radius:360px; box-shadow: 0 19px 38px;" type="button" class="btn btn-primary dropdown-toggle btn-block" data-toggle="dropdown">
                    PEMBELI
                        <option>PENJUAL</option>
                        <option>PEMBELI</option>
                    </select>
                </div>
            @yield('Header')
@endsection

@section('Content')
            @yield('Content')
@endsection