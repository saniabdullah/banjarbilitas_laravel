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
        Schema::create('lowongans', function (Blueprint $table) {
            $table->id();
            $table->string('fotoPerusahaan')->nullable();
            $table->string('namaPerusahaan')->nullable();
            $table->string('namaPekerjaan')->nullable();
            $table->string('jenisDisabilitas')->nullable();
            $table->string('lokasiPerusahaan')->nullable();
            $table->string('deadlineDate')->nullable();
            $table->json('detailLowongan')->nullable();
            $table->json('kreteriaUmum')->nullable();
            $table->json('kreteriaKhusus')->nullable();
            $table->json('catatanLain')->nullable();
            $table->string('tentangPerusahaan')->nullable();
            $table->string('kategoriPekerjaan')->nullable();
            $table->string('spesifikasiPekerjaan')->nullable();
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
        Schema::dropIfExists('lowongans');
    }
};
