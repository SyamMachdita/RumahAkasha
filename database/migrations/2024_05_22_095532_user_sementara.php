<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class usersementara extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Menghapus kolom full_name
            $table->dropColumn('full_name');
            // Menghapus kolom no_telp
            $table->dropColumn('no_telp');
            // Menambah kolom full_name baru yang nullable
            $table->string('full_name')->nullable()->after('name');
            // Menambah kolom no_telp baru yang nullable
            $table->string('no_telp')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('full_name');
            $table->dropColumn('no_telp');
            // Mengembalikan kolom full_name dan no_telp yang dihapus
            $table->string('full_name')->after('name');
            $table->string('no_telp')->after('email');
            // Menghapus kolom full_name yang ditambahkan

        });
    }
}
