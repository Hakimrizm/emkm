<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoaTable extends Migration
{
    public function up(): void
    {
        Schema::create('coa', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique(); // Contoh: 111, 411, 511
            $table->string('nama');           // Contoh: Kas, Penjualan, HPP
            $table->enum('tipe', ['aset', 'kewajiban', 'modal', 'pendapatan', 'beban']);
            $table->boolean('is_default')->default(false); // Untuk COA bawaan sistem
            $table->unsignedBigInteger('user_id')->nullable(); // null untuk COA sistem, terisi jika custom user
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coa');
    }
}
