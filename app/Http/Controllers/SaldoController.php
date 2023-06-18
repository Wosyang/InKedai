<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;

class SaldoController extends Controller
{
    public function topUp()
    {
        request()->validate([
            'saldo' => 'required|numeric|min:10000'
        ]);

        $pembeli = Pembeli::find(auth()->user()->id);

        $pembeli->kedaiWallet = auth()->user()->kedaiWallet + (float)request()->input('saldo');
        $pembeli->save();

        return redirect()->route('topup');
    }

    public function bayar()
    {
    }
}
