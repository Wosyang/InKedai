@extends('penjual')
@section('atas')
<div class="jumbotron jumbotron-fluid" style="background-color: #ffffff; height: 20px;">
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #7FBCD2;">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="h4 nav-link" href="/homepenjual" style="color: #ffffff">
                <i class="fa-solid fa-house fa-1x" style="color: #ffffff"></i> Home</a>
              </li>
          <li class="nav-item">
            <a class="h4 nav-link" href="/menupenjual" style="color: #ffffff">
                <i class="fa-solid fa-bowl-rice" style="color: #ffffff"></i> Menu</a>
          </li>
          <li class="nav-item">
            <a class="h4 nav-link" href="/pesanan" style="color: #ffffff">
                <i class="fa-solid fa-clipboard-list" style="color: #ffffff"></i> Order</a>
          </li>
        </ul>
    </nav>
</div>
@endsection
@section('bawah')
<div class="container">
    <div class="card-body" style="background: #7FBCD2; width:100%; border-radius: 3em;" id="main-card">
    <div class="row col-sm-12">
        <div class="col-sm-2" id="tanda">
            <i class="fas fa-angle-left fa-3x" style="padding: 10px 10px;"></i>
            <i class="fa-solid fa-user fa-3x"></i>
        </div>
        <div class="col-sm-10" id="rincian">
            <h4>#12 Lalla</h4>
            <h4>28/11/2022 - 13.00</h4>
        </div>
    </div>
    <hr style="width: 100%; height: 0px; border: 1px #fff solid;">
    <br>
    <div class="row col-sm-12">
        <div class="col-sm-6">
            <h4>Pesanan</h4>
            <h4>Bakso Bapak Bambang : 1</h4>
            <h4>Note : banyakin kuahnya pak</h4>
            <h4>Rp15.000,00</h4>
        </div>
        <div class="col-sm-6" style="justify-content: left; text-align:left;">
            <h4>Total :</h4>
            <h4>Rp 33.000</h4>
        </div>
    </div>
    <div class="notif">
    <div class="col-sm-6">
    <div class="card-body" id="order">
        <h3><a href="#" style="color: #fff;"> Notifikasikan Pesanan Diterima</a></h3>
    </div>
    <br>
    <div class="card-body" id="cancel-order"><a href="#konfirmasi-cancel" style="color: #fff;">
        <h3> Notifikasikan Pesanan Ditolak</h3></a>
    </div>
    <br>
</div>
    <div id="done">
        <div class="card-body" id="done-order"><a href="#" style="color: #fff;">
            <h3> Notifikasikan Pesanan Selesai</h3></a>
        </div>
    </div>
    <div id="konfirmasi-cancel">
        <div class="header-konfirmasi">
            <div class="container">
            <h4 style="color: #D64E4E;">Apakah Anda Ingin Menolak Pesanan?</h4>
            </div>
        </div>
        <div class="container">
        <div class="body-konfirmasi">
            <i class="fa-solid fa-circle-exclamation fa-5x"></i>
            <br>
        </div>
        <div class="footer-konfirmasi">
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div id="btn-no" style="background:#7FBCD2;">
                        <a href="#" style=" color: #ffff"> Tidak </button></div>
                </div>
                <div class="col-md-6">
                    <div id="btn-ya">
                    <a href="#" style="color: #fff;"> Ya </button></div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
<style>
    #main-card{
        padding: 20px 20px;
        background-color: #7FBCD2;
        color: #ffffff;
        border-radius: 3em;
        width: 100%;
    }
    #tanda{
        justify-content: center;
        text-align: center;
    }
    #rincian{
        justify-content: left;
        text-align: left;
    }
    .notif{
        display: flex;
        left: 25%;
        justify-content: center;
        text-align: center;
        align-items: center;
    }
    #order{
        border-radius: 4em;
        width: 100%;
        box-shadow: 2px;
        background: #F77F00;
        justify-content: center;
        text-align: center;
    }
    #cancel-order{
        border-radius: 4em;
        width: 100%;
        box-shadow: 2px;
        background: #F77F00;
        justify-content: center;
        text-align: center;
    }
    #done-order{
        border-radius: 4em;
        width: 100%;
        box-shadow: 2px;
        background: #F77F00;
        justify-content: center;
        text-align: center;
    }
    #done{
        display: flex;
        position: absolute;
        top: 90%;
    }
    #konfirmasi-cancel{
        width: 400px;
        background: #fff;
        border-radius: 6px;
        position: absolute;
        top: 0;
        left: 50%;
        transform: translate(-50%, -50%) scale(0.1);
        text-align: left;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.4);
        visibility: hidden;
        transition: transform 0.4s, top 0.4s;
    }
    #konfirmasi-cancel:target {
        visibility: visible;
        top: 50%;
        transform: translate(-50%, -50%) scale(1);
    }
    .header-konfirmasi{
        background: #ffff;
        padding: 20px 0px 10px 0px;
        color: #fff;
        text-align: center;
        justify-content: center;
    }
    .hr{
        border-width: 5px;
    }
    .body-konfirmasi{
        padding: 20px 0px 0px 0px;
        text-align: center;
        color: #D64E4E;
    }
    .footer-konfirmasi{
        padding: 0px 10px 20px 0px;
    }
    #btn-no{
        background:#7FBCD2;
        border-radius: 3em;
        text-align:center;
        justify-content:center;
        padding: 10px 10px;
    }
    #btn-ya{
        background:#D64E4E;
        border-radius: 3em;
        text-align:center;
        justify-content:center;
        padding: 10px 10px;
    }
</style>
