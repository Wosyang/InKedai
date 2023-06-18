@extends('master')

@section('Header')
    <h3>Edit Menu</h3>

    <a href="/menu"> Kembali</a>
@endsection

@section('Content')
    <form action="/penjual/menu/edit" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $menu->id }}"> <br />
        Nama <input type="text" required="required" name="nama" value="{{ $menu->nama }}"> <br />
        deskripsi <input type="text" required="required" name="deskripsi" value="{{ $menu->deskripsi_menu }}"> <br />
        stok <input type="number" required="required" name="stok" value="{{ $menu->stok_menu }}"> <br />
        Harga <input type="number" required="required" name="harga" value="{{ $menu->harga_menu }}"> <br />
        <input type="submit" value="Simpan Data">
    </form>
@endsection
