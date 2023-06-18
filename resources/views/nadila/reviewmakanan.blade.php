@extends('pembeli')
@section('atas')
<div class="container">
    <a href="/home" style="font-size: 24px; color:#7FBCD2;" class="btn btn-link" role="button">
        <i class="fas fa-angle-left fa-1x"></i>
        Kembali</a>
        <br>
    <div class="pesanan" style="justify-content: center; text-align:center; color:#7FBCD2; font-size: 28px; font-weight:500;">
        <h2>Bakso Bapak</h2>
        <h2>Bambang</h2>
    </div>
</div>
@endsection
@section('bawah')
<img class="img-fluid daftarpic" src="{{ asset('assets/review.svg') }}" alt="review" style="display:flex; margin:auto;width:200px">
<h5 style="color: #7FBCD2; text-align:center; justify-content:center">Pesanan: F-3024</h5>
<h3 style="color: #7FBCD2; text-align:center">Gimana makanannya?</h3>
<div class="container" style="justify-content: center">
        <div class="card border-left-primary shadow mr-auto ml-md-3 my-4 my-md-4 mw-100" id="card-rating">
            <div class="card-body">
                <div class="rating">
                    <input type="radio" name="star" id="star5"><label for="star5" class="fas fa-star"></label>
                    <input type="radio" name="star" id="star4"><label for="star4" class="fas fa-star"></label>
                    <input type="radio" name="star" id="star3"><label for="star3" class="fas fa-star"></label>
                    <input type="radio" name="star" id="star2"><label for="star2" class="fas fa-star"></label>
                    <input type="radio" name="star" id="star1"><label for="star1" class="fas fa-star"></label>
                </div>
                <br>
                <br>
                <br>
                <form action="#">
                    <div class=textarea>
                        <textarea cols="120" placeholder="Tuliskan komentarmu..."></textarea>
                    </div>
                    <hr>
                    <div class="btn">
                        <button type="submit"><a href="/reviewlayanan">Kirim</button></a>
                    </div>
                </form>
            </div>
        </div>
        <br>
</div>
@endsection
<style>
    #card-rating{
        border-radius: 4em;
        background-color: #7FBCD2;
        justify-content: center;
        text-align: center;
        font-size: 24px;
        width: 50%;;
        display: flex;
        align-items: center;
        height: 15%;
        top: 0px;
        left: 25%;
    }
    /*body{
        margin:0;
        padding: 0;
        background:#262626;
    }*/
    .rating{
        position: absolute;
        top:50%;
        left: 50%;
        transform: translate(-50%, -50%) rotateY(180deg);
        display: flex;
    }
    .rating input{
        display: none;
    }
    .rating label{
        font-size: 50px;
        color: #ffffff;
        padding: 10px;
        float:right;
        transition: all 0.2s ease;
        /*background: #ccc;*/
    }
    input:not(:checked) ~ label:hover,
    input:not(:checked) ~ label:hover ~ label{
        color: #FFCC1D;
    }
    input:checked  label{
        color: #ffffff;
    }
    input#star5:checked ~ label{
        color: #fe7;
        text-shadow: 0 0 20px #995522;
    }
    form .textarea{
        height: 50px;
        width: 100%;
        overflow: hidden;
    }
    form .textarea textarea{
        height: 100%;
        width: 100%;
        outline: none;
        color: #7FBCD2;
        border: 0;
        background: transparent;
        padding: 10px;
        font-size: 17px;
        font-weight: 500;
        resize: none;
    }
    form .btn{
        height: 100px;
        width: 100%;
        margin: 15px 0;
    }
    form .btn button{
        height: 60%;
        width: 50%;
        border-radius: 4em;
        border: 0;
        outline: none;
        background: #FFCC1D;
        color: #ffffff;
        font-size: 24px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }
    form .btn button:hover{
        background: #1b1b1b;
    }
</style>
