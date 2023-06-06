<!DOCTYPE html>
<html>
<head>
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- Template Icon google -->
<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

<link href="./style.css" rel="stylesheet">
</head>
<body>

    <div class="container">
        <a href="/login" style="font-size: 24px; color:#7FBCD2 " class="btn btn-link fas fa-angle-left " role="button">Kembali</a>
	<h2 class="text-center" style="color: #7FBCD2">Daftar</h2>
    <br/>
    <div class="dropdown">
        <select style="background: #7FBCD2; border-radius:360px; box-shadow: 0 19px 38px;" type="button" class="btn btn-primary dropdown-toggle btn-block" data-toggle="dropdown">
          PEMBELI
            <option>PENJUAL</option>
            <option>PEMBELI</option>
        </select>
    </div>

	@yield('atas')

	<br/>
	<br/>

	@yield('bawah')
</div>
</body>
</html>
