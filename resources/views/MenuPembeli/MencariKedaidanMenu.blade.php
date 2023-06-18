<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">




    <main>
        
        <center><h1>IN KEDAI</h1></center>

        <a href="/homepenjual" style="font-size: 12px; color:#7FBCD2;" class="btn btn-link" role="button">
            <i class="fas fa-angle-left fa-1x"></i>
     < Kembali</a>

   <div class="search">
        <div class="SearchBox">
            <div class="wrap">
                <div class="search">
                   <input type="text" class="searchTerm" placeholder="Mau makan apa hari ini?">
                   <button type="submit" class="searchButton">
                     <i class="fa fa-search"></i>
                  </button>
                </div>
             </div>
    </main>

    <style>
        * {
            box-sizing: border-box;
        }

        .row {
            margin-left: -5px;
            margin-right: -5px;
        }

        .column {
            float: left;
            width: 20%;
            padding: 5px;
            color: #7FBCD2;

        }

        /* Clearfix (clear floats) */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }

        table {
            border-spacing: 0;
            width: 100%;
            border: 2px solid #7FBCD2;
            border-radius: 12px;
        }

        th,
        td {
            text-align: left;
            padding: 5px;
            font-weight: normal;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;

        }

        h4 {
            color: #7FBCD2;
        }
    </style>
    </head>

    <body>
</header>
<br>
<h4>Riwayat Pencarian anda</h4>

<div class="row">
    <div class="column">
        <table>
            <tr>
                <th>Joderrrrr</th>
            </tr>
        </table>
    </div>
    <div class="column">
        <table>
            <tr>
                <th>Nasi Padang</th>
            </tr>
        </table>
    </div>
    <div class="column">
        <table>
            <tr>
                <th>Ayam goreng tulang lunak</th>
            </tr>
        </table>
    </div>
</div>
<h4>Paling banyak dicari!</h4>

</div>

<img class="img-fluid donatpic"src="{{ asset('assets/donatfix.svg') }}" alt="donat">
<img class="img-fluid miepic"src="{{ asset('assets/miefix.svg') }}" alt="mie">
<img class="img-fluid kentanggorengpic" src="{{ asset('assets/kentangfix.svg') }}" alt="kentang goreng">
<img class="img-fluid estehic"src="{{ asset('assets/esteh.svg') }}" alt="es teh">
<img class="img-fluid airpic"src="{{ asset('assets/air.svg') }}" alt="air">
<img class="img-fluid ayamgorengpic"src="{{ asset('assets/ayamgoreng.svg') }}" alt="ayamgoreng">

<style>
    img {
        width: 200px;
        height: 200px;
        border: 4px solid #7FBCD2;
        padding: 30px;
    }
</style>

</html>
