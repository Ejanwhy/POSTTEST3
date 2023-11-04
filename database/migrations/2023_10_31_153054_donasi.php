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
        Schema::create('donasi',function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('id_proyek');
            $table->string('email');
            $table->text('alamat');
            $table->string('nomor_telpon');
            $table->integer('jumlah_sumbangan');
            $table->string('metode_pembayaran');
            
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
