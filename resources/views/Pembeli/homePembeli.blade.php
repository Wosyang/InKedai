@extends('template')
@section('atas')
<div class="jumbotron-home jumbotron-fluid">
    {{-- search bar --}}
 <div class="d-flex justify-content-center">
    <div class="search-home">
        <input type="text" class="search-input-home" placeholder="Mau makan apa hari ini?" name="">
         <a href="#" class="search-icon-home"> <i class="fa fa-search"></i>
        </a>
    </div>
    {{-- hai bagus --}}
    <h1 class="halo"> Halo, <span class="penggunabold"> Bagus!</span></h1>
    <img class="img-fluid botolhome"src="{{ asset('assets/botol home.png') }}" alt="botolku">
</div>


     {{--  {{-- middle bar --}}
      <div class="d-flex flex-row-middlebar mb-3">
            <div class="rectangle-86">
                <img class="img-fluid money"src="{{ asset('assets/bx-money 1.png') }}" alt="moneyku" >
                <h4 class="isisaldo"> Isi Saldo</h4>
                <div class="sisasaldohome">Rp 180.000</div>
                <img class="img-fluid wallet" src="{{ asset('assets/bxs-wallet 1.png') }}" alt="walletku" >
                <h4 class="E-Wallet" > E-Wallet </h4>
                <div class="tf" > <a href="/pembeli/topup">Transfer</a></div>
            </div>
        </div>

 {{--  daftar menu --}}
 <div class="container-home">
    <img src="{{ asset('assets/bakso.png') }}" class="rounded-circle baksogambar" alt="Bakso" >
        <div class="card-pakbambang text-white">
            <div class="card-body"><span class="tulisanmenuhome"> Pak Bambang</div>
        </div>
        <br>
        <img src="{{ asset('assets/soto.png') }}" class="rounded-circle sotogambar" alt="soto" >
         <div class="card-soto text-white">
          <div class="card-body"> <span class="tulisanmenuhome"> Soto Ayam ITS</div>
        </div>
        <br>
        <img src="{{ asset('assets/warkop.png') }}" class="rounded-circle warkopgambar" alt="warkop" >
        <div class="card-warkop text-white">
          <div class="card-body"> <span class="tulisanmenuhome"> Warkop Arek</div>
        </div>
        <br>
        <img src="{{ asset('assets/warteg.png') }}" class="rounded-circle warteggambar" alt="Warteg" >
        <div class="card-warteg text-white">
          <div class="card-body"> <span class="tulisanmenuhome">Warung Tegal Cak Danul</div>
        </div>
        <br>
          {{--
        <div class="card bg-warning text-white">
          <div class="card-body">Warning card</div>
        </div>
        <br>
        <div class="card bg-danger text-white">
          <div class="card-body">Danger card</div>
        </div>
        <br>
        <div class="card bg-secondary text-white">
          <div class="card-body">Secondary card</div>
        </div>
        <br>
        <div class="card bg-dark text-white">
          <div class="card-body">Dark card</div>
        </div>
        <br>
        <div class="card bg-light text-dark">
          <div class="card-body">Light card</div>
        </div> --}}
    </div>









</div>
@endsection
{{-- sek mek jajal --}}
@section('bawah')
@endsection
