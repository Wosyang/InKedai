@extends('penjual')

@section('atas')
<div class="jumbotron jumbotron-fluid" style="background-color: #FFCC1D;">
    <br/>
    <br/>
    <br/>
    <div class="container" style="align-content: center">
    <div class="card border-left-primary shadow h-100 mr-auto ml-md-3 my-2 my-md-0 mw-100" style="background-color: #7FBCD2; border-radius: 2em; display:flex; justify-content: center;">
        <div class="card-body">
            <div class="h3 font-weight-bold text-gray-800 text-center" style="color: #ffffff;">InKedai</div>
        </div>
    </div>
    </div>
</div>

@endsection
@section('bawah')
<div class="container">
<div class="row g-2 g-md-4">
    <!--Grid column-->
    <div class="col-6 col-md-5">
        <a class="card border-left-primary shadow h-100 py-2" style="background-color: #7FBCD2; border-radius: 2em;" href="/transaksi">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h4 mb-0 font-weight-bold text-gray-800" style="color: #ffffff">Transaksi</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-cash-register fa-5x" style="color: #ffcc1d;"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!--Grid column-->
    <div class="col-lg-2"></div>
    <div class="col-6 col-md-5">
        <a class="card border-left-primary shadow h-100 py-2" style="background-color: #7FBCD2; border-radius: 2em;" href="/mystore">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h4 mb-0 font-weight-bold text-gray-800" style="color: #ffffff">My Store</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-store fa-5x" style="color: #ffcc1d;"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<!--Grid row-->
<br/>
<br/>
<div class="row g-2 g-md-4">
    <!--Grid column-->
    <div class="col-6 col-md-5">
        <a class="card border-left-primary shadow h-100 py-2" style="background-color: #7FBCD2; border-radius: 2em;" href="/reviews">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h4 mb-0 font-weight-bold text-gray-800" style="color: #ffffff">Reviews</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-ranking-star fa-5x" style="color: #ffcc1d;"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <!--Grid column-->
    <div class="col-lg-2"></div>
    <div class="col-6 col-md-5">
        <a class="card border-left-primary shadow h-100 py-2" style="background-color: #7FBCD2; border-radius: 2em;" href="/diskon">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="h4 mb-0 font-weight-bold text-gray-800" style="color: #ffffff">Diskon</div>
                    </div>
                    <div class="col-auto">
                        <i class="fa-solid fa-tags fa-5x" style="color: #ffcc1d;"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
</div>
<!--Grid row-->
@endsection

