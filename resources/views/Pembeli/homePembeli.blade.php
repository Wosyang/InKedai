@vite('resources/css/app.css')

@extends('template')
@section('atas')
    <div class="w-full pt-20">
        <h1 class="text-[#7FBCD2]"> Halo, <span class="font-bold"> {{ auth()->user()->name }}!</span></h1>
        <img src="{{ asset('assets/botol home.png') }}" alt="botolku">

        <div class="flex flex-row justify-center mt-10 bg-[#ffeaa4]">
            <div class="flex flex-col items-center">
                <img src="{{ asset('assets/bx-money 1.png') }}" alt="moneyku">
                <h4 class="text-[#7FBCD2]"> Isi Saldo</h4>
                <div class="text-[#7FBCD2]">Rp {{ auth()->user()->kedaiWallet }}</div>
            </div>
            <div class="flex flex-col items-center ml-10">
                <img src="{{ asset('assets/bxs-wallet 1.png') }}" alt="walletku">
                <h4 class="text-[#7FBCD2]"> E-Wallet </h4>
                <div class="text-[#7FBCD2]"> <a href="/pembeli/topup">Transfer</a></div>
            </div>
        </div>

        <div>
            <div class="flex flex-row justify-center mt-10">
                @php
                    $menus = \App\Models\Menu::paginate(10);
                @endphp

                @foreach ($menus as $menu)
                    <div class="flex flex-col items-center">
                        <img src="{{ asset('assets/bakso.png') }}" alt="Menu">
                        <div class="flex flex-col items-center">
                            <div class="text-[#7FBCD2]"> {{ $menu->nama }}</div>
                            <div class="text-[#7FBCD2]"> @money($menu->harga_menu . '00') </div>
                            <div class="text-[#7FBCD2]"> <a href="/menu/{{ $menu->id }}">Order Menu</a></div>
                        </div>
                    </div>
                @endforeach

                {{ $menus->links() }}
            </div>
        </div>
        <!-- <div class="jumbotron-home jumbotron-fluid">
                                            {{-- search bar --}}
                                            <div class="d-flex justify-content-center">
                                                <div class="search-home">
                                                    <input type="text" class="search-input-home" placeholder="Mau makan apa hari ini?" name="">
                                                    <a href="#" class="search-icon-home"> <i class="fa fa-search"></i>
                                                    </a>
                                                </div>
                                                {{-- hai bagus --}}
                                                <h1 class="halo"> Halo, <span class="penggunabold"> {{ auth()->user()->name }}!</span></h1>
                                                <img class="img-fluid botolhome"src="{{ asset('assets/botol home.png') }}" alt="botolku">
                                            </div>


                                            {{--  {{-- middle bar --}}
                                            <div class="d-flex flex-row-middlebar mb-3">
                                                <div class="rectangle-86">
                                                    <img class="img-fluid money"src="{{ asset('assets/bx-money 1.png') }}" alt="moneyku">
                                                    <h4 class="isisaldo"> Isi Saldo</h4>
                                                    <div class="sisasaldohome">Rp {{ auth()->user()->kedaiWallet }}</div>
                                                    <img class="img-fluid wallet" src="{{ asset('assets/bxs-wallet 1.png') }}" alt="walletku">
                                                    <h4 class="E-Wallet"> E-Wallet </h4>
                                                    <div class="tf"> <a href="/pembeli/topup">Transfer</a></div>
                                                </div>
                                            </div>

                                            {{--  daftar menu --}}
                                            <div class="container">

                                                <img src="{{ asset('assets/bakso.png') }}" class="rounded-circle baksogambar" alt="Bakso">
                                                <div class="card-menu text-white">
                                                    <div class="card-body"><span class="tulisanmenuhome"> Pak Bambang</div>
                                                </div>
                                                <br>
                                            </div>
                                        </div> -->
    @endsection
