<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('akun_penjual', function (Blueprint $table) {
            $table->increments('id_penjual');
            $table->char('email_penjual',100);
            $table->char('password_penjual',100);
            $table->char('nama_kedai',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
