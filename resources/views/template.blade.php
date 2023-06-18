<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Membuat CRUD Pada Laravel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- MY JS -->
    <script type="text/javascript" src="{{ asset('assets/js/jstopup.js') }}"></script>
    <!-- Template Icon google -->
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">




</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #7FBCD2;">
        <ul class="navbar-nav">
            <li class="nav-item" style="display:flex; flex-direction:row;">
                <a class="h4 nav-link" href="{{ route('signOutPenjual') }}" style="color: #ffffff">Logout</a>
                <a class="h4 nav-link" href="{{ route('pesanan') }}" style="color: #ffffff">Pesanan</a>
                <a class="h4 nav-link" href="{{ url()->previous() }}" style="color: #ffffff">Back</a>
                
            </li>
        </ul>
    </nav>

    @yield('atas')

    <br />
    <br />

    @yield('bawah')

</body>

</html>
