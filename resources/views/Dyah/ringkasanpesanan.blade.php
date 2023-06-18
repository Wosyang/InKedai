@extends('template')
@section('atas')
<div class="jumbotron-summary jumbotron-fluid">
    <div class="d-flex justify-content-center">
    <h3 class="summary-order">Ringkasan Pesanan</h3>
    </div>
    <div class="card-summaryantrian">
        <div class="card-body"> <span class="antrian"> Nomor Antrian 10</div>
      </div>
      <h3 class="sum-pesanan">Pesanan: F-3024</h3>
      <div class="pesanan">
<p id="restosemuaada"> Resto Semua Ada</p>
<p id="baksopbam"> Bakso Babat</p>
<p id="ayampedes">Ayam Pedes</p>
<p id="nasisayurayam">Nasi sayur ayam</p>
<p id="esjeruk">Es Jeruk</p>

      </div>
      <div class= "pesanan1">
        <p id="hargabaksopbam"> Rp 15.000</p>
        <p id="hargaayampedes">Rp 15.000</p>
        <p id="harganasisayurayam">Rp 13.000</p>
        <p id="hargaesjeruk">Rp 5.000</p>
      </div>
      <table class="table-saldo">
        <tr>
            <th>Saldo InKedai</th>
            <td id="seratus8k">Rp 180.000</td>
          </tr>
      </table>
      <h3 class="total-bayar"> Total Pembayaran Rp 33.000</h3>
      <input type="submit" class=" btn btnpesanskrg"  value="Pesan Sekarang"/>
</div>
@endsection
{{-- sek mek jajal --}}
@section('bawah')
@endsection
