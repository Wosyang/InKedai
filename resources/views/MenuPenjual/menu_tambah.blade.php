@extends('master')

@section('Header')
    <h3>Data Menu</h3>
    <a href="/menu"> Kembali</a>
@endsection

@section('Content')
    <form action="/penjual/menu/tambah" method="post">
        {{ csrf_field() }}
        Nama menu <input type="text" name="nama"> <br />
        Deskripsi Menu <input type="text" name="deskripsi"> <br />
        Stok <input type="number" name="stok"> <br />
        Harga <input type="number" name="harga"> <br />
        <input type="submit" value="Simpan Data">
    </form>
@endsection
