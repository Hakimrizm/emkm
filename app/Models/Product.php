<?php

// app/Models/Product.php

// app/Models/Product.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'nama', 'kategori', 'harga', 'stok'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
