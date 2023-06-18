@extends('pembeli')

<body>
	<br/>
    @section('atas')
    <div class="container" style="align-content: center">
        <a href="/login" style="font-size: 24px; color:#7FBCD2;" class="btn btn-link" role="button">
            <i class="fas fa-angle-left fa-1x"></i>
            Kembali</a>
        <h2 class="text-center" style="color: #7FBCD2">Daftar</h2>
        <br/>
        <img class="img-fluid daftarpic" src="{{ asset('assets/daftar.png') }}" alt="daftar pembeli" style="display:block; margin:auto;">
        <div class="row">
            <div class="col-sm-12" style="justify-content: center">
            <div class="card border-left-primary shadow h-100 mr-auto" style="background-color: #7FBCD2; border-radius: 5em; display:flex;">
                <div class="card-body">
                    <div class="h3 font-weight-bold text-gray-800 text-center" style="color: #ffffff;">PEMBELI</div>
                </div>
            </div>
            </div>
        </div>
    </div>
    @endsection
    @section('bawah')
    <div class="container" style="align-content: center">
    <form class="form-horizontal" action="/daftarpembeli/store" method="post">
		{{ csrf_field() }}
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" class="form-control" required="required" name="nama" placeholder="Nama"> <br />
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="text" class="form-control" placeholder="Email" required="required" name="email"> <br />
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="password" class="form-control" placeholder="Password" required="required" name="password"> <br />
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-12">
                <input type="password" class="form-control" placeholder="Ulangi Password" required="required" name="ulangiPassword"> <br />
            </div>
        </div>
            <input style="font-family:sans-serif; background: #FFCC1D; border-radius:360px; box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.2); min-width: 160px; padding: 12px 12px;" type="submit" class="btn btn-primary btn-block" value="Daftar">
        </div>
	</form>
    </div>
    @endsection
</body>
</html>
