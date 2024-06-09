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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id('id_pesanan');
            $table->unsignedBigInteger('id_customer');
            $table->unsignedBigInteger('id_menu');
            $table->unsignedBigInteger('id_reservasi');
            $table->string('nama_menu');
            $table->decimal('harga_menu', 8, 2);
            $table->integer('jumlah_menu');

            $table->timestamps();

            $table->foreign('id_customer')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_menu')->references('id_menu')->on('menus')->onDelete('cascade');
            $table->foreign('id_reservasi')->references('id_reservasi')->on('reservasis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanans');
    }
};
