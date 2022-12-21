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
        Schema::create('dokter_views', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jadwal_dokter_id');
            $table->foreignId('poliklinik_id');
            $table->foreignId('jenis_kelamin_id');
            $table->char('nama_dokter');
            $table->char('deskripsi');
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
        Schema::dropIfExists('dokter_views');
    }
};
