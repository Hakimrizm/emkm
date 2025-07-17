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
            $table->string('kode')->unique(); // Contoh: 101, 201, 301, dst
            $table->string('nama');           // Contoh: Kas, Penjualan, HPP
            $table->enum('tipe', ['aset', 'kewajiban', 'modal', 'pendapatan', 'beban']);
            $table->boolean('is_default')->default(false); // COA bawaan sistem atau buatan user

            $table->foreignId('user_id')->nullable()
                  ->constrained('users')
                  ->nullOnDelete(); // jika user dihapus, user_id menjadi null

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('coa');
    }
}
