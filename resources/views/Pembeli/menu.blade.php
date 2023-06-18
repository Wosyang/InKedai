@vite('resources/css/app.css')

@php
    $menu = \App\Models\Menu::find(request()->route('id'));
@endphp

@extends('template')
@section('atas')
    {{-- buat form dengan field jumlah dan ada label total harga, serta di atasnya ada informasi mengenai menu termasuk gambar dari picsum --}}
    <form action="" method="POST" class="pt-20">
        @csrf
        <img src="{{ asset('assets/bakso.png') }}" alt="Menu">
        <div class="text-[#7FBCD2]"> {{ $menu->nama }}</div>
        <div class="text-[#7FBCD2]"> Stok Tersisa : {{ $menu->stok_menu }}</div>
        <div class="text-[#7FBCD2]"> @money($menu->harga_menu . '00') </div>
        <label for="jumlah" class="text-[#7FBCD2]" value="1">Jumlah</label>
        <input type="number" name="jumlah" id="jumlah" class="text-[#7FBCD2]">
        <label for="total_harga" class="text-[#7FBCD2]">Total Harga</label>
        <div id="total_harga" class="text-[#7FBCD2]"> @money($menu->harga_menu . '00') </div>
        <input type="hidden" name="total">
        <button type="submit" class="text-[#7FBCD2]">Order</button>
    </form>
    <script>
        const jumlah = document.getElementById('jumlah');
        const total_harga = document.getElementById('total_harga');
        jumlah.addEventListener('input', () => {
            total_harga.innerHTML = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR'
            }).format(jumlah.value * {{ $menu->harga_menu }});

            document.querySelector('input[name="total"]').value = jumlah.value * {{ $menu->harga_menu }};
        });
    </script>
@endsection
