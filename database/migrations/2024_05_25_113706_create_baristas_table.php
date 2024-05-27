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
        Schema::create('baristas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barista');
            $table->string('foto_barista');
            $table->text('deskripsi');
            $table->string('tahun_kerja');
            $table->string('job_desk');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barista');
    }
};
