@extends('master')

@section('Header')
	<a href="/menu/tambah"> + Tambah Menu Baru</a>
@endsection

@section('Content')
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