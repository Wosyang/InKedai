@extends('template')
@section('atas')

<div class="card-daftarkan">
    <div class="card-body"> <span class="daftarkan">Daftarkan </span></div>
  </div>
  <div class="card-Kedai-Anda">
    <div class="card-body"> <span class="kedaianda">Kedai Anda </span></div>
  </div>
  <img src="{{ asset('assets/BINTANG.png') }}" class="gambarbintang" alt="bintang" >
  <img src="{{ asset('assets/BINTANG2.png') }}" class="gambarbintang2" alt="bintang" >
  <img src="{{ asset('assets/gambartoko.png') }}" class="gambartoko" alt="toko" >
  <button type="button" class="btn btndaftar">Daftar</button>
@endsection
{{-- sek mek jajal --}}
@section('bawah')
@endsection
