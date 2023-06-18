@extends('template')
@section('atas')
<div class="container" id="antrianni">
    <div class="card-nomor-antrian">
        <div class="card-body"> <span class="no-antri"> Nomor Antrian</div>
      </div>
      <img src="{{ asset('assets/antrian.png') }}" class="gambarantri" alt="antrian" >
      <p class="antrian-ke">10</p>
      <div class="card-no-pesanan">
        <div class="card-body"> <span class="no-pesanan">Pesanan: F-3024</div>
      </div>
      <p class="silahkan">Silakan melakukan pembayaran </p>
</div>
@endsection
{{-- sek mek jajal --}}
@section('bawah')
@endsection
