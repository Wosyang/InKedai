
@extends('template')
@section('atas')


<a href="/home" class="btn" id= "buttonku" role="button" >
    <i class='fas fa-angle-left'  id="row"></i> Kembali
</a>
<div class="jumbotron">
    <h3 id="judul" class="text-center mb-4 ">InKedaiPay</h3>
    <h3  id="saldo"  class="text-center mb-4"> Saldo</h3>
    <h3 id="rupiahsaldo" class="text-center mb-4">Rp 188.000 </h3>
    <h3  id="saldo"  class="text-center mb-4"> Pilih Nominal Top Up</h3>
</div>
{{-- kotak kotak --}}
<div class="container mt-5">
    <div class="row atas">
        <div class="col-md-4">
            <button class="card p-3 limap" id="btn" onclick="colorFunction()">
                <h6 id="limapuluh">20. <span>000</span> </h6>
            </button>
        </div>
        <div class="col-md-4">
            <button class="card p-3 limap" id="btn1" onclick="colorFunction1()">
                <h6 id="limapuluh">50. <span>000</span> </h6>
            </button>
        </div>
        <div class="col-md-4">
            <button class="card p-3 limap" id="btn2" onclick="colorFunction2()">
                <h6 id="limapuluh">100. <span>000</span> </h6>
            </button>
        </div>
    </div>
   <div class="row atas" >
        <div class="col-md-4">
            <button class="card p-3 limap" id="rowku" onclick="colorFunction3()">
                <h6 id="limapuluh">150. <span>000</span> </h6>
            </button>
        </div>
        <div class="col-md-4">
            <button class="card p-3 limap" id="rowku1"  onclick="colorFunction4()">
                <h6 id="limapuluh">200. <span>000</span> </h6>
            </button>
        </div>
        <div class="col-md-4">
            <button class="card p-3 limap" id="rowku2"  onclick="colorFunction5()">
                <h6 id="limapuluh">250. <span>000</span> </h6>
            </button>
        </div>
    </div>
</div>

<div class="jumbotron">
    <h3 id="saldo" class="text-center mb-4 ">Isi Sendiri Nominal</h3>
    <form action="/topup/store" method="post">
        {{ csrf_field() }}
    <input class="form-control form-control-lg" type="number" placeholder="Rp 50.000" name="topup">
    <input class="form-control form-control-lg" type="number" placeholder="jumlah sebelumnya" name="jumlahsebelumnya">
    <br>
    <input type="submit" class="btn buttonupdate" value="Bayar">
    </form>

</div>


{{-- <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-center-4" >
        <h3 id="judul">InKedaiPay</h3>
    </div>
    <div class="col-sm-4"></div>
</div>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"  >
        <h3  id="saldo" >Saldo</h3>
    </div>
    <div class="col-sm-4"></div>
</div>
<div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4 harga"  >
        <p id="rupiahsaldo">Rp 188.000 <p>
    </div>
    <div class="col-sm-4"></div> --}}

</div>



	<br/>
	<br/>



@endsection
{{-- sek mek jajal --}}
@section('bawah')
<table class="table table-striped " style="background-color:rgb(253, 227, 255)" border="1">

    <tr>
        <th>id_wallet</th>
        <th>jumlahSaldo_wallet</th>
        <th>saldo_sekarang</th>
        <th>TO BE CONTINUED</th>
    </tr>
    @foreach($kedaiwallet as $p)
    <tr>
        <td>{{ $p->id_wallet}}</td>
        <td>{{ $p->jumlahSaldo_wallet }}</td>
        <td>{{ $p->saldo_sekarang }}</td>
        <td>

            <a href="/topup/view/{{ $p->id_wallet }}">View</a>
            <a href="/topup/hapus/{{ $p->id_wallet}}">Hapus</a>

        </td>
    </tr>
    @endforeach
</table>
@endsection
