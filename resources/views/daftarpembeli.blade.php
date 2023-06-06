@extends('pembeli')

<body>
	<br/>
	<br/>
    @section('bawah')
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
            <input style="background: #FFCC1D; border-radius:360px;" type="submit" class="btn btn-primary btn-block" value="Daftar">
        </div>
	</form>
    @endsection
</body>
</html>
