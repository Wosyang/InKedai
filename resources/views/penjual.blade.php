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

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<script src="https://kit.fontawesome.com/2d5e9d9e9d.js" crossorigin="anonymous"></script>

</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #7FBCD2;">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="h4 nav-link" href="/homePenjual" style="color: #ffffff">
                <i class="fa-solid fa-house fa-1x" style="color: #ffffff"></i> Home</a>
              </li>
          <li class="nav-item">
            <a class="h4 nav-link" href="/menu" style="color: #ffffff">
                <i class="fa-solid fa-bowl-rice" style="color: #ffffff"></i> Menu</a>
          </li>
          <li class="nav-item">
            <a class="h4 nav-link" href="/daftarPesanan" style="color: #ffffff">
                <i class="fa-solid fa-clipboard-list" style="color: #ffffff"></i> Order</a>
          </li>
	<li class="nav-item">
		<a class="h4 nav-link"  href="{{ route('signOutPenjual') }}" style="color: #ffffff">Logout</a>
		</li>
        </ul>
    </nav>




	@yield('atas')



	@yield('bawah')

</body>
</html>
