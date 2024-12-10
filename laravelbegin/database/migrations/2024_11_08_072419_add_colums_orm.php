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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('id_pesantren')->after('name')->references('id')->on('pesantrens')->onDelete('cascade');
            // $table->string('id_pesantren')->after('name');
        });
        Schema::table('pesantrens', function (Blueprint $table) {
            $table->foreignId('id_kota')->after('nama')->references('id')->on('kotas')->onDelete('cascade');
            // $table->string('id_pesantren')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
