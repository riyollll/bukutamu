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
        Schema::create('kunjungan', function (Blueprint $table) {
            $table->id('id_kunjungan');
            $table->foreignId('id_pengunjung')->constrained('pengunjung', 'id_pengunjung')->restrictOnDelete();
            $table->foreignId('id_pegawai')->constrained('pegawai', 'id_pegawai')->restrictOnDelete();
            $table->date('tanggal_kunjungan');
            $table->time('jam_masuk');
            $table->time('jam_keluar')->nullable();
            $table->string('tujuan', 150);
            $table->text('keperluan');
            $table->enum('status', ['Menunggu', 'Diterima', 'Selesai'])->default('Menunggu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kunjungan');
    }
};
