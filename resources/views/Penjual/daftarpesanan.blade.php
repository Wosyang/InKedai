@extends('penjual')
@section('atas')
    <div class="jumbotron jumbotron-fluid" style="background-color: #ffffff;">
        <br />

        <div class="container">
            <div class="search-box"
                style="width: 800px; background: #ffcc1d; outline:#333; margin: 20px auto 0; border-radius: 2em;">
                <div class="row" style="display: flex; align-items: center; padding: 10px 20px;">
                    <input type="text" id="input-box" placeholder=" Cari Pesanan..." autocomplete="off"
                        style="flex: 1; height: 50px; background: transparent;border: 0; outline: 0; font-size: 18px; color:#333">
                    <button style="background: transparent; border: 0; outline: 0;"><i
                            class="fa-solid fa-magnifying-glass fa-2x"
                            style="width: 25px; color: #555; font-size: 22px; cursor: pointer; "></i></button>
                </div>
            </div>
            <br>
            <div class="vertical">
                <div class="row col-sm-12" style="justify-content: center; text-align:center;" id="nav-pesanan">
                    <div class="col-sm-5">
                        <h4><a href="/pesanan" style="color: #FFCC1D"> Diproses</h4>
                    </div>
                    <div class="col-sm-2" style="display:flex; left: 5%">
                        <div style="width: 0px; height: 30px; border: 1px #7FBCD2 solid;"></div>
                    </div>
                    <div class="col-sm-5">
                        <h4><a href="/pesananselesai" style="color: #7FBCD2"> Selesai</a></h4>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
@endsection
@section('bawah')
    <div class="container" id="daftar-pesanan">
        <div id="card-pesanan">
            <div class="row">
                @php
                    // $pesanans = \App\Models\Pesanan::all()->menu->penjual->where('id', Auth::user()->id);
                    // find all pesanan where menu belongs to penjual with id of Auth::user()->id
                    $pesanans = \App\Models\Pesanan::whereHas('menu', function ($query) {
                        $query->where('penjualId', Auth::user()->id);
                    })->paginate(10);
                @endphp
                @foreach ($pesanans as $pesanan)
                    <div class="card-pesanan" id="pesanan1">
                        <div class="row col-sm-12">
                            <div class="col-sm-2" id="rincian">
                                <i class="fa-solid fa-user fa-6x"></i>
                            </div>
                            <div class="col-sm-10" id="detail">
                                <div class="row">
                                    <div class="col-sm-8" id="detail" style="padding: 25px">
                                        <h4>#{{ $pesanan->id }} {{ $pesanan->pembeli->name }}</h4>
                                        <h4>{{ $pesanan->created_at }}</h4>
                                        <h4>Pesanan : {{ $pesanan->menu->nama }}</h4>
                                        <h4
                                            @if ($pesanan->status == 'ditolak') style="color: red"
                                        @elseif($pesanan->status == 'diproses')
                                            style="color: green"
                                        @else
                                            style="color: blue" @endif>
                                            Status : {{ $pesanan->status }}</h4>
                                        <h4>Jumlah Pesanan : {{ $pesanan->jumlah }}</h4>
                                        <h4>Total : {{ $pesanan->biaya }}</h4>
                                    </div>
                                    <div class="col-sm-4" id="panah">
                                        <a href="/konfirmasi/{{ $pesanan->id }}/accept"><i class="fa-solid fa-check fa-3x"
                                                style="padding: 20px; color:#ffffff"></i></a>
                                        <a href="/konfirmasi/{{ $pesanan->id }}/reject"><i class="fa-solid fa-xmark fa-3x"
                                                style="padding: 20px; color:#ffffff"></i></a>
                                    </div>
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-container">
                        <div class="grid-item"></div>
                    </div>
                @endforeach

                {{ $pesanans->links() }}
            </div>
        @endsection
        <style>
            #nav-pesanan {
                color: #7FBCD2;
            }

            .grid-container {
                display: grid;
                grid-row-gap: 5px;
                grid-template-columns: auto auto auto;
                background-color: transparent;
                padding: 8px;
            }

            #pesanan1 {
                display: flex;
                top: 0%;
                left: 50%;
                width: 100%;
                padding: 10px 10px 10px 10px;
                background: #7FBCD2;
                color: #ffffff;
                border: 0;
                outline: none;
                font-size: 18px;
                font-weight: 500;
                border-radius: 4em;
                cursor: pointer;
                box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4);
            }

            #pesanan2 {
                width: 100%;
                padding: 10px 10px 10px 10px;
                background: #7FBCD2;
                color: #ffffff;
                border: 0;
                outline: none;
                font-size: 18px;
                font-weight: 500;
                border-radius: 4em;
                cursor: pointer;
                box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4);
            }

            #rincian {
                padding: 20px;
            }

            #detail {
                justify-content: right;
                text-align: left;
            }

            #panah {
                justify-content: center;
                text-align: right;
                padding: 10px 0px;
            }
        </style>
