@extends('penjual')

@section('atas')
<div class="container">
<a href="/homepenjual" style="font-size: 24px; color:#7FBCD2;" class="btn btn-link" role="button">
    <i class="fas fa-angle-left fa-1x"></i>
    Kembali</a>
    <br/>
    <h2 style="text-align: center; color:#7FBCD2;">Diskon</h2>
    <br/>
    <div class="row g-2 g-md-4">
        <div class="col-12 col-md-12">
            <div class="card border-left-primary shadow h-100 py-2" style="background-color: #7FBCD2; border-radius: 5em;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-sm-2">
                            <i class="fa-solid fa-tags fa-5x" style="color: #ffcc1d;"></i>
                        </div>
                        <div class="col mr-2">
                            <div class="h4 mb-0 font-weight-bold text-gray-800" style="color: #ffffff">Diskon
                            <br>Beri diskon pada menu dan tingkatkan volume transaksi</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-angle-down fa-5x" style="color: #ffffff;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <div class="row g-2 g-md-4"style="display: flex; justify-content:right;">
        <div class="col-12 col-md-10">
            <a class="card border-left-primary shadow h-100 py-2" href=/persentase style="background-color: #7FBCD2; border-radius: 5em;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-sm-2">
                            <i class="fa-solid fa-percent fa-5x" style="color: #ffcc1d;"></i>
                        </div>
                        <div class="col-auto">
                            <div class="h4 mb-0 font-weight-bold text-gray-800" style="color: #ffffff">Diskon Persentase
                            <br>Beri diskon dalam persen pada  menumu</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <br/>
    <div class="row g-2 g-md-4"style="display: flex; justify-content:right;">
        <div class="col-12 col-md-10">
            <a class="card border-left-primary shadow h-100 py-2" href=/nominal style="background-color: #7FBCD2; border-radius: 5em;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-sm-2">
                            <i class="fa-solid fa-money-check-dollar fa-5x" style="color: #ffcc1d;"></i>
                        </div>
                        <div class="col-auto">
                            <div class="h4 mb-0 font-weight-bold text-gray-800" style="color: #ffffff">Diskon Nominal
                            <br>Beri diskon dalam nominal untuk satu menu unggulanmu</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <br/>
    <div class="row g-2 g-md-4">
        <div class="col-12 col-md-12">
            <a class="card border-left-primary shadow h-100 py-2" href=/riwayatdiskon style="background-color: #7FBCD2; border-radius: 5em;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col-sm-2">
                            <i class="fa-solid fa-clock-rotate-left fa-5x" style="color: #ffcc1d;"></i>
                        </div>
                        <div class="col-auto">
                            <div class="h4 mb-0 font-weight-bold text-gray-800" style="color: #ffffff">Riwayat Diskon
                            <br>Lihat dan ubah diskon yang sudah di aktifkan</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
@section('bawah')
@endsection
