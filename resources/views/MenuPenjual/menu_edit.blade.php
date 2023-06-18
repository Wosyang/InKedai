@extends('master')

@section('Header')
 
	<h3>Edit Menu</h3>
 
	<a href="/menu"> Kembali</a>
	
@endsection
 
@section('Content')
	@foreach($menu as $p)
	<form action="/menu/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->nama_menu }}"> <br/>
		deskripsi <input type="text" required="required" name="deskripsi" value="{{ $p->deskripsi_menu }}"> <br/>
		stok <input type="number" required="required" name="stok" value="{{ $p->stok_menu }}"> <br/>
        Harga <input type="number" required="required" name="harga" value="{{ $p->harga_menu }}"> <br/>
        id_kedai <input type="number" required="required" name="idkedai" value="{{ $p->id_kedai }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
@endsection