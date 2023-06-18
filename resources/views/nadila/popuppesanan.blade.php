@extends('penjual')
@section('atas')
@endsection
@section('bawah')
<div id="konfirmasi-selesai">
    <div class="header-konfirmasi">
        <div class="container">
        <h4>PESANAN SIAP</h4>
        <h5>Silakan ambil pesanan Anda di Kios</h5>
        </div>
    </div>
    <div class="container">
    <div class="body-konfirmasi">
        <img class="img-fluid daftarpic" src="{{ asset('assets/selesai.svg') }}" alt="daftar pembeli" style="display:block; margin:auto;">
        <br>
    </div>
    <div class="footer-konfirmasi">
        <br>
            <div id="btn-ok" style="background:#7FBCD2;">
            <a href="#" style=" color: #ffff"> OK </button></div>
    </div>
    </div>
</div>
@endsection
<style>
    #konfirmasi-selesai{
        width: 400px;
        background: #FFCC1D;
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
    #konfirmasi-selesai:target {
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
    #btn-ok{
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
