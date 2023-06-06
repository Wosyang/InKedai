<!DOCTYPE html>
<html>

<head>
    <title>INKEDAI</title>
</head>

<body>
    <h1>LOGIN</h1>

    <form action="/login/tambah" method="post">
        {{ csrf_field() }}
        <div class="form-group row col-sm-12">
            <label for="nama_kedai" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama_kedai" placeholder="Nama"
                    required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="email_penjual" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email_penjual" placeholder="Email"
                    required="required">
            </div>
        </div>
        <div class="form-group row">
            <label for="password_penjual" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="umur" name="password_penjual" placeholder="Password"
                    required="required">
            </div>
        </div>
        </div>
        <button type="submit" class="btn btn-dark">Simpan Data</button>
    </form>


</body>

</html>
