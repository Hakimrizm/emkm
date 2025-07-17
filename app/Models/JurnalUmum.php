<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JurnalUmum extends Model
{
    protected $table = 'jurnal_umum';
    protected $fillable = [
        'tanggal', 'keterangan', 'kode_akun', 'debit', 'kredit', 'user_id'
    ];

    public function coa()
    {
        return $this->belongsTo(Coa::class, 'kode_akun', 'kode');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
