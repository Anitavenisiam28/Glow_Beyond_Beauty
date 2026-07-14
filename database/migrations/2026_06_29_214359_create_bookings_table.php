<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {

            $table->id();

            // Data pelanggan
            $table->string('nama');
            $table->integer('umur');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);

            // Relasi ke tabel layanan
            $table->foreignId('layanan_id')
                  ->constrained('layanans')
                  ->cascadeOnDelete();

            // Jadwal booking
            $table->date('tanggal');
            $table->time('jam');

            // Kontak
            $table->string('no_hp')->nullable();

            // Catatan
            $table->text('catatan')->nullable();

            // Status booking
            $table->enum('status', [
                'Menunggu',
                'Diproses',
                'Selesai',
                'Dibatalkan'
            ])->default('Menunggu');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};