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
        Schema::create('reservasis', function (Blueprint $table) {
            $table->id('id_reservasi');
            $table->unsignedBigInteger('id_customer');
            $table->enum('tempat', ['indoor', 'outdoor']);
            $table->integer('jumlah_orang');
            $table->date('tanggal');
            $table->time('jam');
            $table->text('note')->nullable();
            $table->timestamps();

            $table->foreign('id_customer')->references('id')->on('users')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservasis');
    }
};
