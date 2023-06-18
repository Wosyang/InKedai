@extends('template')
@section('atas')
<a href="/home" class="btn" id= "buttonsignin" role="button" >
    <span class="material-icons" style="font-size: 48px">  arrow_back_ios </span>  Diskon Menu
</a>
<br>

<div class="container-fluid tambahdiskon">
                <div class="row">
                    <div class="col-md-3 tambahdiskon-left">
                        <img src="{{ asset('assets/bakso.png') }}" class="rounded-circle baksogambarversidiskon" alt="Bakso" >
                        <h3>Bakso Jumbo</h3>
                        <p id="keteranganbaksojumbo">Bakso Jumbo pak bambang</p>
                        <p id="hargabaksojumbo"> Rp 20.000 </p>
                    </div>
                    <div class="col-md-9 tambahdiskon-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Diskon Nominal</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Diskon Persentase </a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="tambahdiskon-heading">Form Isi Diskon Nominal</h3>
                                <div class="form-group-pricenominal">
                                    <p class="hargaafter">Harga Sesudah Diskon</p>
                                    <input type="number" class="form-control" id="inputnominal" placeholder="Input discount price here" value="" />
                                    <br>
                                    <label id="periode-masa-aktif" >Periode masa aktif</label>
                                    <form class="form-inline" >
                                            <label for="Start Date">Start Date: </label>
                                            <input placeholder="Date" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">

                                        <label for="enddate" id="enddate">End Date: </label>
                                        <input placeholder="Date" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">
                                </form>
                                <br>
                                <label id="pilih-hari-aktif">Pilih Hari Aktif</label>
<br>
                                <input type="checkbox" id="Senin" name="Senin" value="Senin">
                                <label for="vehicle1"> Senin</label>
                                <input type="checkbox" id="Selasa" name="Selasa" value="Selasa">
                                <label for="Selasa"> Selasa</label>
                                <input type="checkbox" id="Rabu" name="Rabu" value="Rabu">
                                <label for="Rabu"> Rabu</label>
                                <input type="checkbox" id="Kamis" name="Kamis" value="Kamis">
                                <label for="Kamis"> Kamis</label>
                                <input type="checkbox" id="Jumat" name="Jumat" value="Jumat">
                                <label for="Jumat"> Jumat</label>
                                <input type="checkbox" id="Sabtu" name="Sabtu" value="Sabtu">
                                <label for="Sabtu"> Sabtu</label>
                                <input type="checkbox" id="Minggu" name="Minggu" value="Minggu">
                                <label for="Minggu"> Minggu</label>

                                <input type="submit" class="btntambahdiskon"  value="Register"/>
                                </div>
                                <br>
                            </div>


                            <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="tambahdiskon-heading">Form Isi Diskon Persentase</h3>
                                <div class="form-group-pricenominal">
                                    <p class="percentdiscount">Persentase Diskon</p>
                                    <input type="number" class="form-control" id="inputpercent" placeholder="Input discount percent " value="" />
                                    <img src="{{ asset('assets/percent icon.svg') }}" class="percent-icon" alt="icon" >
                                    <br>
                                    <label id="periode-masa-aktif" >Periode masa aktif</label>
                                    <form class="form-inline" >
                                            <label for="Start Date">Start Date: </label>
                                            <input placeholder="Date" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">

                                        <label for="enddate" id="enddate">End Date: </label>
                                        <input placeholder="Date" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date">
                                </form>
                                <br>
                                <label id="pilih-hari-aktif">Pilih Hari Aktif</label>
<br>
                                <input type="checkbox" id="Senin" name="Senin" value="Senin">
                                <label for="vehicle1"> Senin</label>
                                <input type="checkbox" id="Selasa" name="Selasa" value="Selasa">
                                <label for="Selasa"> Selasa</label>
                                <input type="checkbox" id="Rabu" name="Rabu" value="Rabu">
                                <label for="Rabu"> Rabu</label>
                                <input type="checkbox" id="Kamis" name="Kamis" value="Kamis">
                                <label for="Kamis"> Kamis</label>
                                <input type="checkbox" id="Jumat" name="Jumat" value="Jumat">
                                <label for="Jumat"> Jumat</label>
                                <input type="checkbox" id="Sabtu" name="Sabtu" value="Sabtu">
                                <label for="Sabtu"> Sabtu</label>
                                <input type="checkbox" id="Minggu" name="Minggu" value="Minggu">
                                <label for="Minggu"> Minggu</label>
                                <input type="submit" class="btntambahdiskon"  value="Register"/>
                                </div>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
{{-- <a href="/home" class="btn" id= "buttonsignin" role="button" >
    <span class="material-icons" style="font-size: 48px">  arrow_back_ios </span>  Diskon Menu
</a>
<br>
<br>
<div class="container">
    <img src="{{ asset('assets/bakso.png') }}" class="rounded-circle baksogambarversidiskon" alt="Bakso" >
        <div class="card-diskonbakso">
            <div class="card-body"><span class="tulisanbaksodiskon">Bakso Jumbo</span>
                <p class="desk-diskonbakso">Bakso Jumbo pak bambang</p>
                <p class="harga-diskonbakso">Rp 20.000 </p>

            </div>
        </div> --}}


@endsection
{{-- sek mek jajal --}}
@section('bawah')
@endsection
