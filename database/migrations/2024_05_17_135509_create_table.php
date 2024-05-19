<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        // Tabel Customer
        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id_customer');
            $table->integer('no_telp');
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('username', 255);
            $table->timestamps();
        });

        // Tabel Menu
        Schema::create('menu', function (Blueprint $table) {
            $table->increments('id_menu');
            $table->string('nama_menu', 255);
            $table->string('harga_menu', 255);
            $table->string('foto_menu', 255);
            $table->string('kategori', 255);
            $table->text('deskripsi');
            $table->timestamps();
        });

        // Tabel Barista
        Schema::create('barista', function (Blueprint $table) {
            $table->increments('id_barista');
            $table->string('nama_barista', 255);
            $table->string('foto_barista', 255);
            $table->string('deskripsi', 255);
            $table->string('tahun_kerja', 255);
            $table->string('job_desk', 255);
            $table->timestamps();
        });

        // Tabel Reservasi
        Schema::create('reservasi', function (Blueprint $table) {
            $table->increments('id_reservasi');
            $table->integer('id_customer');
            $table->integer('id_pesanan');
            $table->string('jumlah_orang', 255);
            $table->string('tempat', 255);
            $table->date('tanggal');
            $table->time('jam');
            $table->string('note', 255);
            $table->timestamps();

            $table->foreign('id_customer')->references('id_customer')->on('customer');
            $table->foreign('id_pesanan')->references('id_pesanan')->on('pesanan');
        });

        // Tabel Pesanan
        Schema::create('pesanan', function (Blueprint $table) {
            $table->increments('id_pesanan');
            $table->integer('id_reservasi');
            $table->integer('id_menu');
            $table->string('nama_menu', 255);
            $table->double('harga_menu');
            $table->integer('jumlah_menu');
            $table->boolean('opsi_pesanan');
            $table->timestamps();

            $table->foreign('id_reservasi')->references('id_reservasi')->on('reservasi');
            $table->foreign('id_menu')->references('id_menu')->on('menu');
        });

        // Tabel Pembayaran
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->increments('id_pembayaran');
            $table->integer('id_pesanan');
            $table->integer('id_customer');
            $table->integer('id_reservasi');
            $table->integer('id_menu');
            $table->double('harga_menu');
            $table->double('total_harga');
            $table->double('belum_dibayar');
            $table->double('telah_terbayar');
            $table->string('status', 255);
            $table->timestamps();

            $table->foreign('id_pesanan')->references('id_pesanan')->on('pesanan');
            $table->foreign('id_customer')->references('id_customer')->on('customer');
            $table->foreign('id_reservasi')->references('id_reservasi')->on('reservasi');
            $table->foreign('id_menu')->references('id_menu')->on('menu');
        });

        // Tabel Detail Reservasi
        Schema::create('detail_reservasi', function (Blueprint $table) {
            $table->increments('id_detailreservasi');
            $table->integer('id_reservasi');
            $table->integer('id_pesanan');
            $table->integer('id_pembayaran');
            $table->string('status', 255);
            $table->timestamps();

            $table->foreign('id_reservasi')->references('id_reservasi')->on('reservasi');
            $table->foreign('id_pesanan')->references('id_pesanan')->on('pesanan');
            $table->foreign('id_pembayaran')->references('id_pembayaran')->on('pembayaran');
        });

        // Tabel Staff
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id_staff');
            $table->string('username', 255);
            $table->string('password', 255);
            $table->timestamps();
        });

        // Tabel Event
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id_event');
            $table->string('judul_event', 255);
            $table->date('tanggal');
            $table->time('jam');
            $table->string('image', 255);
            $table->string('deskripsi', 255);
            $table->double('fee');
            $table->string('status', 255);
            $table->timestamps();
        });

        // Tabel Registrasi Event
        Schema::create('registrasi_event', function (Blueprint $table) {
            $table->increments('id_registrasievent');
            $table->integer('id_customer');
            $table->integer('id_event');
            $table->string('nama_event', 255);
            $table->string('status', 255);
            $table->timestamps();

            $table->foreign('id_customer')->references('id_customer')->on('customer');
            $table->foreign('id_event')->references('id_event')->on('event');
        });

        // Tabel Laporan Penjualan
        Schema::create('laporan_penjualan', function (Blueprint $table) {
            $table->increments('id_pembayaran');
            $table->double('total_penjualan');
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
        // Drop semua tabel jika diperlukan
        Schema::dropIfExists('laporan_penjualan');
        Schema::dropIfExists('registrasi_event');
        Schema::dropIfExists('event');
        Schema::dropIfExists('staff');
        Schema::dropIfExists('detail_reservasi');
        Schema::dropIfExists('pembayaran');
        Schema::dropIfExists('pesanan');
        Schema::dropIfExists('reservasi');
        Schema::dropIfExists('barista');
        Schema::dropIfExists('menu');
        Schema::dropIfExists('customer');
    }
};
