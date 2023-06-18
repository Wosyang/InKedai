@extends('pembeli')
@section('atas')
<div class="container" style="align-content: center">
    <a href="/home" style="font-size: 24px; color:#7FBCD2;" class="btn btn-link" role="button">
        <i class="fas fa-angle-left fa-1x"></i>
        Kembali</a>
    <div class="grid-item"></div>
    <h3 class="riwayat-pembeli">Riwayat transaksi</h3>
    <br>
</div>
<style>
    .riwayat-pembeli{
        color: #7FBCD2;
        width: 500;
        justify-content: center;
        text-align: center;
    }
</style>
@endsection
@section('bawah')
<div class="container">
    <div class="row">
        <div class="card-date">
            <h5>26 Juli 2023</h5>
        </div>
    </div>
    <div class="grid-item"></div>
    <div id="card-pesanan">
        <div class="row">
            <div class="card-pesanan" id="pesanan1">
                <div class="row col-sm-12">
                    <div class="col-sm-7" id="rincian">
                        <h4>Pesanan: F-3024</h4>
                        <h5>Pukul 15.03</h5>
                    </div>
                    <div class="col-sm-5" id="detail">
                        <div class="row">
                            <div class="col-sm-8" id="detail" style="padding: 25px">
                                <h3>Lihat detail</h3>
                            </div>
                            <div class="col-sm-4">
                                <a href="/detailpesanan"><i class="fa-solid fa-angle-right fa-3x" style="padding: 20px; color:#ffffff"></i></a>
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
    <div id="pesanan2">
    <div class="card-pesanan">
        <div class="row col-sm-12">
            <div class="col-sm-7" id="rincian">
                <h4>Pesanan: F-5026</h4>
                <h5>Pukul 12.00</h5>
            </div>
            <div class="col-sm-5" id="detail">
                <div class="row">
                    <div class="col-sm-8" id="detail" style="padding: 25px">
                        <h3>Lihat detail</h3>
                    </div>
                    <div class="col-sm-4">
                        <a href="/detailpesanan"><i class="fa-solid fa-angle-right fa-3x" style="padding: 20px; color:#ffffff"></i></a>
                    </div>
                <div>
            </div>
        </div>
    </div>
        </div>
    </div>
</div>


<style>
    .card-date{
        text-align: center;
        width: 15%;
        padding: 10px 0;
        background: #FFB72D;
        color: #ffffff;
        border: 0;
        outline: none;
        font-size: 18px;
        font-weight: 500;
        border-radius: 2em;
        cursor: pointer;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4)
    }
    .grid-container {
        display: grid;
        grid-row-gap: 5px;
        grid-template-columns: auto auto auto;
        background-color: transparent;
        padding: 8px;
    }
    .grid-item{
        background-color: rgba(255, 255, 255, 0.8);
        border: 0;
        padding: 20px;
        font-size: 30px;
        text-align: center;
    }
    #pesanan1{
        width: 100%;
        padding: 10px 10px 10px 10px;
        background: #7FBCD2;
        color: #ffffff;
        border: 0;
        outline: none;
        font-size: 18px;
        font-weight: 500;
        border-radius: 3em;
        cursor: pointer;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4);
    }
    #pesanan2{
        width: 100%;
        padding: 10px 10px 10px 10px;
        background: #7FBCD2;
        color: #ffffff;
        border: 0;
        outline: none;
        font-size: 18px;
        font-weight: 500;
        border-radius: 3em;
        cursor: pointer;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4);
    }
    #rincian{
        padding: 20px;
    }
    #detail{
        justify-content: right;
        text-align: center;
    }
</style>
@endsection
