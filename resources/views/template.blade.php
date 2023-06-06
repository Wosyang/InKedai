<!DOCTYPE html>
<html>
<head>
	<title>Template Blade Laravel</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="col-lg-12 mx-auto text-center">

            <div class="jumbotron">
                <h3 class="text-center">Aprilia Tri Tanti - 5026211033</h3>
                <h5 class="text-center">Data Pegawai</h5>
              </div>

            @yield('atas')

            <br/>
            <br/>

            @yield('isi')


            <br/>
            <br/>
        </div>
    </div>

</body>
</html>
