@extends('template')
@section('atas')
<a href="/home" class="btn" id= "buttonsignin" role="button" >
    <span class="material-icons" style="font-size: 48px">  arrow_back_ios </span>  Kembali
</a>
<br>
<br>

<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center-judul mt-5">Diskon</h2>
    </div>
</div>
        <br>
        <br>

   <nav>
  <li class="dropdowndiskon">
    <img class="img-fluid icondiskonmenu"src="{{ asset('assets/diskon menu.png') }}" alt="icon-diskon">
    Diskon Menu
    <p>Beri diskon pada menu dan tingkatkan volume transaksi </p>

    <ul class="menu-dropdown">
      <li class="diskonpersentage">
        <img class="img-fluid icondiskonpersen"src="{{ asset('assets/diskon persen.png') }}" alt="icon-persen">
        Diskon Persentase
        <p>Beri diskon dalam persen pada menumu</p>
        </li>
        <br>
      <li class="diskonprice">
        <img class="img-fluid icondiskonprice"src="{{ asset('assets/diskon price.png') }}" alt="icon-price">
        Diskon Nominal
         <p>Beri diskon dalam nominal untuk satu menu unggulanmu</p></li>

    </ul>
</li>
</nav>
<div class="card-riwayatdiskon">
    <div class="card-body-diskon"> <img class="img-fluid iconriwayatdiskon"src="{{ asset('assets/riwayat diskon.png') }}" alt="icon-riwayatdiskon"><span class="tulisanDiskon">Riwayat Diskon </span><p>Lihat dan ubah diskon yang sudah di aktifkan</p>
    </div>
</div>
</div>


  @endsection
  {{-- sek mek jajal --}}
  @section('bawah')
  @endsection
