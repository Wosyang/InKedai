<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/update.css') }}">
<!--

GRADIENT BANNER DESIGN BY SIMON LURWER ON DRIBBBLE:
https://dribbble.com/shots/14101951-Banners

--> <center><h2>Update Your Menu</h2></center>
<a href="/homepenjual" style="font-size: 17px; color:#7FBCD2;" class="btn btn-link" role="button">
  <i class="fas fa-angle-left fa-0.5x"></i>
Back to Menu</a>

<div class="row">
<div class="main-container">
    <div class="cards">
      <div class="card card-1">

            <form method="POST" name="form1" action="">
              <div class="user-box">
                <input type="text" name="" required="" placeholder="Bakso Bapak Bambang">
              </div>
      </div>
      <div class="card card-2">
        <div class="card__icon"><i class="fas fa-bolt"></i></div>
        <p class="card__exit"><i class="fas fa-times"></i></p>
        <h2 class="card__title"></h2>
        <p class="card__apply">
          <a class="card__link" href="#">Gambar<i class="fas fa-arrow-right"></i></a>
        </p>
      </div>
      <div class="card card-3">
        <div class="card__icon"><i class="fas fa-bolt"></i></div>
        <p class="card__exit"><i class="fas fa-times"></i></p>

        <form method="POST" name="form3" action="">
            <h2 class="card__title">Harga</h2>
            <div class="user-box">
              <input type="text" name="" required="" placeholder="Rp. 15.000,00">
            </div>
      </div>
      <div class="card card-4">
        <div class="card__icon"><i class="fas fa-bolt"></i></div>
        <p class="card__exit"><i class="fas fa-times"></i></p>
        <form method="POST" name="form4" action="">
            <div class="user-box">
              <input type="text" name="" required="" placeholder="Kategori, ex: Makanan">
            </div>
      </div>
      <div class="card card-5">
        <div class="card__icon"><i class="fas fa-bolt"></i></div>
        <p class="card__exit"><i class="fas fa-times"></i></p>
        <form method="POST" name="form5" action="">
            <div class="user-box">
              <input type="text" name="" required="" placeholder="Deskripsi Barang">
            </div>

    </div>
  </div>
</div>

<div class="wrapper">
    <input type="radio" name="select" id="option-1" checked>
    <input type="radio" name="select" id="option-2">
      <label for="option-1" class="option option-1">
       <center><span>Tampilkan Menu</span></center>
         </label>
      <label for="option-2" class="option option-2">
         <center><span>Sembunyikan Menu</span></center>
      </label>
   </div>

  </div>
<br>
<button type="text" class="submit" value="Simpan">Update Menu</button>
<button type="text" class="submit" value="Simpan">Upload Menu</button>


</html>
