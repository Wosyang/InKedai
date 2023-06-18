@extends('penjual')

@section('atas')
	<div class="jumbotron jumbotron-fluid" style="background-color: #ffffff;">
		<br/>
		
	<div class="container">
		<div class="search-box" style="width: 800px; background: #ffcc1d; outline:#333; margin: 20px auto 0; border-radius: 2em;">
			<div class="row" style="display: flex; align-items: center; padding: 10px 20px;">
				<input type="text" id="input-box" placeholder=" Cari menu..." autocomplete="off" style="flex: 1; height: 50px; background: transparent;border: 0; outline: 0; font-size: 18px; color:#333">
				<button style="background: transparent; border: 0; outline: 0;"><i class="fa-solid fa-magnifying-glass fa-2x" style="width: 25px; color: #555; font-size: 22px; cursor: pointer; "></i></button>
			</div>
		</div>
		<br>
		<div class="vertical">
			<div class="row col-sm-12" style="justify-content: center; text-align:center;" id="nav-pesanan">
				<div class="col-sm-5">
					<h4><a href="/menu/tambah"> + Tambah Menu Baru</h4>
				</div>
			</div>
			<hr>
		</div>
	</div>
	</div>
@endsection

@section('bawah')
	<table border="1">
		<tr>
			<th>Nama Menu</th>
			<th>Deskripsi</th>
			<th>Stok</th>
			<th>Harga</th>
			<th>id_kedai</th>
		</tr>
		@foreach($menu as $p)
		<tr>
			<td>{{ $p->nama_menu }}</td>
			<td>{{ $p->deskripsi_menu }}</td>
			<td>{{ $p->stok_menu }}</td>
			<td>{{ $p->harga_menu }}</td>
            <td>{{ $p->id_kedai }}</td>
			<td>
				<a href="/menu/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/menu/hapus/{{ $p->id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
@endsection