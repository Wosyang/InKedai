@extends('pembeli')
@section('atas')
<div class="atas">
    <div class="container">
        <a href="/riwayatpembelian" style="font-size: 24px; color:#fff;" class="btn btn-link" role="button">
            <i class="fas fa-angle-left fa-1x"></i>
            Kembali
        </a>
            <div class="grid-item"></div>
            <h3 class="riwayat-pembeli">Detail Pesanan</h3>
            <br>
    </div>
    <div class="card border-left-primary shadow mr-auto ml-md-3 my-2 my-md-0 mw-100" id="date">
        <div class="card-body">
            <div class="date" style="color: #ffffff;">
                <h4>Selasa, 26 Juli 2022</h4>
                <h5>Pukul 15.03</h5>
            </div>
        </div>
    </div>
</div>
@endsection
@section('bawah')
<div class="bawah">
    <div class="container">
        <br>
        <br>
        <h5 style="color:#7FBCD2; justify-content: center; text-align:center; font-size: 24px;">Pesanan: F-3024</h5>
        <br>
        <div class="card-body" style="background: #fff; width:100%;">
            <div class="pesanan" >
                <div class="row">
                    <div class="col-sm-10" id="listpesanan">
                        <h4>Bakso Bapak Bambang</h4>
                        <h5>Bakso Babat</h5>
                    </div>
                    <div class="col-sm-2">
                        <h3>10.000</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10" id="listpesanan">
                        <h4>Bakso Bapak Bambang</h4>
                        <h5>Bakso Babat</h5>
                    </div>
                    <div class="col-sm-2">
                        <h3>13.000</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-10" id="listpesanan">
                        <h4>Bakso Bapak Bambang</h4>
                        <h5>Bakso Babat</h5>
                    </div>
                    <div class="col-sm-2">
                        <h3>10.000</h4>
                    </div>
                </div>
                <hr style="border-width: 5px; background-color:#7FBCD2;">
                <div class="row" id="listpesanan" style="font-size:28px; font-weight: 800px;">
                    <div class="col-sm-10">
                        <h3><b>Total pembayaran</b></h3>
                    </div>
                    <div class="col-sm-2">
                        <h3><b>33.000</b></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<style>
.atas{
    justify-content: center;
    background: #7FBCD2;
}
.riwayat-pembeli{
    justify-content: center;
    color: #ffffff;
    justify-content: center;
    text-align: center;
}
#date{
    border-radius: 4em;
    background-color: #FFCC1D;
    justify-content: center;
    text-align: center;
    font-size: 24px;
    width: 50%;;
    display: flex;
    align-items: center;
    height: 15%;
    top: 55px;
    left: 25%;
}
.bawah{
    justify-content: center;
    background: #ffffff;
}
#listpesanan{
    color: #7FBCD2;
}
</style>
