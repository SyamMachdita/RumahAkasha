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
        Schema::create('registrasi_event', function (Blueprint $table) {
            $table->id('id_registrasievent');

            $table->bigInteger('id_event')->unsigned();
            $table->bigInteger('id_customer')->unsigned();
            $table->string('status')->nullable();

            $table->foreign('id_event')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('id_customer')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrasi_event');
    }
};
