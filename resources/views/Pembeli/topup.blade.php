@extends('template')

@section('atas')
    <div class="container">
        <a href="/home" class="btn" id="buttonku" role="button">
            <span class="material-icons"> arrow_back_ios </span> Kembali
        </a>
        <div class="jumbotron">
            <h3 id="judul" class="text-center mb-4 ">InKedaiPay</h3>
            <h3 id="saldo" class="text-center mb-4"> Saldo</h3>
            <h3 id="rupiahsaldo" class="text-center mb-4">Rp {{ auth()->user()->kedaiWallet }}</h3>
            <h3 id="saldo" class="text-center mb-4"> Pilih Nominal Top Up</h3>
        </div>
        {{-- kotak kotak --}}
        <div class="container mt-5">
            <div class="row atas">
                <div class="col-md-4">
                    <button class="card p-3 limap" id="btn1" onclick="radioactive(this)" value="20000">
                        <h6 id="limapuluh">20. <span>000</span> </h6>
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="card p-3 limap" id="btn2" onclick="radioactive(this)" value="50000">
                        <h6 id="limapuluh">50. <span>000</span> </h6>
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="card p-3 limap" id="btn3" onclick="radioactive(this)" value="100000">
                        <h6 id="limapuluh">100. <span>000</span> </h6>
                    </button>
                </div>
            </div>
            <div class="row atas">
                <div class="col-md-4">
                    <button class="card p-3 limap" id="btn4" onclick="radioactive(this)" value="150000">
                        <h6 id="limapuluh">150. <span>000</span> </h6>
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="card p-3 limap" id="btn5" onclick="radioactive(this)" value="200000">
                        <h6 id="limapuluh">200. <span>000</span> </h6>
                    </button>
                </div>
                <div class="col-md-4">
                    <button class="card p-3 limap" id="btn6" onclick="radioactive(this)" value="250000">
                        <h6 id="limapuluh">250. <span>000</span> </h6>
                    </button>
                </div>
            </div>
        </div>

        <div class="jumbotron">
            <h3 id="saldo" class="text-center mb-4 ">Isi Sendiri Nominal</h3>
            <form action="/pembeli/topup" method="post">
                {{ csrf_field() }}
                <input id="saldo_input" class="form-control form-control-lg" type="number" placeholder="50000"
                    name="saldo">
                <br>
                <input type="submit" class="btn buttonupdate" value="Bayar">
            </form>

        </div>
        <br />
        <br />
    @endsection
