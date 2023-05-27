<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelKedaiWallet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kedaiWallet', function (Blueprint $table) {
            $table->increments('id_wallet');
            $table->timestamps();
            $table->integer('jumlahSaldo_wallet');
            $table->integer('saldo_sekarang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kedaiWallet');
    }
}
