@extends('penjual')
@section('atas')
<div class="container">
    <a href="/diskon" style="font-size: 24px; color:#7FBCD2;" class="btn btn-link" role="button">
        <i class="fas fa-angle-left fa-1x"></i>
        Diskon Riwayat</a>
        <br/>
    <div class="search-box" style="width: 800px; background: #7FBCD2; outline:#333; margin: 20px auto 0; border-radius: 2em;">
        <div class="row" style="display: flex; align-items: center; padding: 10px 20px;">
            <input type="text" id="input-box" placeholder=" Cari Menu..." autocomplete="off" style="flex: 1; height: 50px; background: transparent;border: 0; outline: 0; font-size: 18px; color:#333">
            <button style="background: transparent; border: 0; outline: 0;"><i class="fa-solid fa-magnifying-glass fa-2x" style="width: 25px; color: #555; font-size: 22px; cursor: pointer; "></i></button>
        </div>
    </div>
</div>
<br/>
<br/>
@endsection
@section('bawah')
<div class="container">
    <div class="row g-2 g-md-2"style="display: flex; justify-content:right;">
        <div class="card-baksoberanak col-12 col-md-12">
            <a class="card border-left-primary shadow h-100 py-2" href=#popupbakso style="background-color: #7FBCD2; border-radius: 2em;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-sm-2">
                            <img class="rounded-circle" src="{{ asset('assets/baksoberanak.png') }}" alt="bakso beranak" style="display:block; margin:auto;">
                        </div>
                        <div class="col-auto">
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="color: #ffffff">Bakso Beranak Pedas
                            <br><h6>stock < 8</h6>
                            <h4 style="color:#FFCC1D">Diskon 5%</h4>
                        </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <br/>
    <div class="row g-2 g-md-2"style="display: flex; justify-content:right;">
        <div class="card-mieayam col-12 col-md-12">
            <a class="card border-left-primary shadow h-100 py-2" href=/persentase style="background-color: #7FBCD2; border-radius: 2em;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-sm-2">
                            <img class="rounded-circle" src="{{ asset('assets/mieayam.png') }}" alt="bakso beranak" style="display:block; margin:auto;">
                        </div>
                        <div class="col-auto">
                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="color: #ffffff">Mie Ayam
                            <br><h6>stock < 8</h6>
                            <h4 style="color:#FFCC1D">Diskon 25%</h4>
                        </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div id="popupbakso">
        <div class="header-baksoberanak">
            <div class="container">
            <h4> <i class="fa-solid fa-tags" style="color: #ffcc1d;"></i> Rincian Promo </h4>
            <h6>Bakso Beranak Pedas</h6>
            <br/>
            </div>
        </div>
        <div class="container">
        <div class="body-baksoberanak">
            <h5 class="date-diskon" ><i class="fa-solid fa-calendar-days" style="color: #ffcc1d;"></i> 11 Juni - 19 Juli 2023</h5>
            <h6 class="h6-diskon">Jam Aktif :</h6>
            <h5>00.00 - 23.59</h5>
            <h6 class="h6-diskon">Jumlah Diskon :</h6>
            <h5>5%</h5>
            <h6 class="h6-diskon">Total Pesanan :</h6>
            <h5>00.00 - 23.59</h5>
            <hr>
        </div>
        <div class="footer-baksoberanak">
            <div class="row">
                <div class="col-md-6">
                    <h5 class="status-aktif" style="color: #90E472">Aktif</h5>
                </div>
                <div class="col-md-6">
                    <div id="btn-stop">
                    <a href="#konfirmasi-henti"> Edit </button></div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div id="konfirmasi-henti">
        <div class="header-konfirmasi">
            <div class="container">
            <h4> <i class="fa-solid fa-tags" style="color: #ffcc1d;"></i> EDIT PROMO? </h4>
            <h6>Bakso Beranak Pedas</h6>
            </div>
        </div>
        <div class="container">
        <div class="body-konfirmasi">
            <h4>Apakah Anda yakin ingin melakukan perubahan promo?</h4>
            <hr>
        </div>
        <div class="footer-konfirmasi">
            <div class="row">
                <div class="col-md-6">
                    <div id="btn-stop">
                        <a href="#" style="color: #003049"> Ya </button></div>
                </div>
                <div class="col-md-6">
                    <div id="btn-stop">
                    <a href="#cancel-konfirmasi" style="color: #E30606"> Tidak </button></div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <style>
        #popupbakso{
            width: 400px;
            background: #fff;
            border-radius: 6px;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%) scale(0.1);
            text-align: left;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
            visibility: hidden;
            transition: transform 0.4s, top 0.4s;
        }
        #popupbakso:target {
            visibility: visible;
            top: 50%;
            transform: translate(-50%, -50%) scale(1);
        }

        .header-baksoberanak{
            background: #7FBCD2;
            padding: 20px 0px 0px 0px;
            color: #fff;
        }
        .hr{
            border-width: 5px;
        }
        .body-baksoberanak{
            padding: 20px 0px 0px 0px;

        }
        .date-diskon{
            color: #90E472;
        }
        .h6-diskon{
            color: rgba(0, 0, 0, 0.7)
        }
        .footer-baksoberanak{
            padding: 0px 10px 20px 0px;
        }
        #btn-stop{
            text-align: center;
            width: 100%;
            padding: 10px 0;
            background: #FFB72D;
            color: #E30606;
            border: 0;
            outline: none;
            font-size: 18px;
            font-weight: 500;
            border-radius: 2em;
            cursor: pointer;
            box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4)
        }
        #konfirmasi-henti{
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
        #konfirmasi-henti:target {
            visibility: visible;
            top: 50%;
            transform: translate(-50%, -50%) scale(1);
        }
        .header-konfirmasi{
            background: #D64E4E;
            padding: 20px 0px 10px 0px;
            color: #fff;

        }
        .hr{
            border-width: 5px;
        }
        .body-konfirmasi{
            padding: 20px 0px 0px 0px;
            text-align: center;
            color: #050505;
        }
        .footer-konfirmasi{
            padding: 0px 10px 20px 0px;
        }
    </style>
</div>
@endsection
