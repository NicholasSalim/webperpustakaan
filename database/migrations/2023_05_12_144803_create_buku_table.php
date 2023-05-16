<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penulis', 80);
            $table->string('penerbit', 80);
            $table->year('tahun_terbit');
            $table->string('genre_buku', 20);
            $table->longText('sinopsis');
            $table->string('jumlah_halaman', 4);
            $table->string('stok_buku', 3);
            $table->string('lokasi_rak', 2);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
};
