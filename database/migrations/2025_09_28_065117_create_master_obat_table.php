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
        Schema::create('master_obat', function (Blueprint $table) {
            $table->id();
            $table->string('kode_bpom')->unique();
            $table->string('kode_obat')->unique();
            $table->string('nama_obat');
            $table->string("tanggal_terbit");
            $table->string("jenis_kemasan");
            $table->string("golongan_obat");
            $table->string("kategori_obat");
            $table->string("pabrik");
            $table->string("alamat");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_obat');
    }
};
