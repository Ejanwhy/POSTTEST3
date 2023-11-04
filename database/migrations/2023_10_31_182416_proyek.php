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
        Schema::create('proyek',function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('donasi_id');
            $table->unsignedBigInteger('id_negara');
            $table->string('judul_proyek');
            $table->text('deskripsi');
            $table->text('tujuan_dana');
            $table->integer('dana_terkumpul');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');

            $table->foreign('donasi_id')->references('id')->on('donasi');
            $table->foreign('id_negara')->references('kode_negara')->on('negara');
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
