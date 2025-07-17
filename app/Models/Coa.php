<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coa extends Model
{
    use HasFactory;

    protected $table = 'coa';

    protected $fillable = [
        'kode',
        'nama',
        'tipe',
        'is_default',
        'user_id',
    ];

    /**
     * Relasi ke user (jika coa milik user)
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke jurnal umum
     */
    public function jurnal()
    {
        return $this->hasMany(JurnalUmum::class, 'coa_id');
    }
    public function coas()
    {
        return $this->hasMany(Coa::class);
    }

}
