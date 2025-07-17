<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurnalUmumTable extends Migration
{
    public function up(): void
    {
        Schema::create('jurnal_umum', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('keterangan');
            $table->string('kode_akun');
            $table->string('nama_akun');
            $table->decimal('debit', 15, 2)->default(0);
            $table->decimal('kredit', 15, 2)->default(0);
            $table->unsignedBigInteger('user_id'); // pemilik usaha
            $table->unsignedBigInteger('transaksi_id')->nullable(); // relasi opsional ke transaksi (hpp, income, dll)
            $table->string('transaksi_type')->nullable(); // e.g. 'income', 'hpp', 'expense'
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jurnal_umum');
    }
}
