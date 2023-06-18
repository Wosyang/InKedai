@extends('template')
@section('atas')
<div class="jumbotron-validcash jumbotron-fluid">
    <div class="d-flex justify-content-center">
    <h3 class="transfer-valid">Pembayaran Terkonfirmasi</h3>
    </div>
    <div class="body-konfirmasibayar">
        <img class="img-fluid centangpic"src="{{ asset('assets/centang.png') }}" alt="centangku">
        <div class="card-konfirmasibayar">
            <div class="card-body"> <span class="antrian"> Rp 33.000</div>
          </div>

          <input type="submit" class=" btn btncetakbukti"  value="Cetak Bukti"/>
    </div>
@endsection
{{-- sek mek jajal --}}
@section('bawah')
@endsection
