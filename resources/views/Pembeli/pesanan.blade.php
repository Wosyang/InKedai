@vite('resources/css/app.css')

@php
    $menu = \App\Models\Menu::find(request()->route('id'));
@endphp

@extends('template')
@section('atas')
    {{-- buat card untuk pesanan yang berisi jumlah, total harga, status dan nama menu --}}
    <div class="pt-20">
        @foreach ($pesanans as $pesanan)
            <div class="card">
                <div class="card-body">
                    <div class="text-[#7FBCD2]"> {{ $pesanan->nama }}</div>
                    <div class="text-[#7FBCD2]"> @money($pesanan->menu->harga_menu . '00') </div>
                    <div class="text-[#7FBCD2]">Jumlah: {{ $pesanan->jumlah }}</div>
                    <div class="text-[#7FBCD2]">Total Harga: @money($pesanan->biaya . '00') </div>
                    <div class="text-[#7FBCD2]">Status: {{ $pesanan->status }}</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
