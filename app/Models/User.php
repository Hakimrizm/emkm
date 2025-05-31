<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use App\Models\ExpenseCategory;
use App\Models\ProductController;
use Nette\Schema\Expect;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

   protected $fillable = ['name', 'email', 'password'];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function incomes()
    {
        return $this->hasMany(Income::class);
    }

    public function incomeCategories()
    {
        return $this->hasMany(IncomeCategory::class);
    }

    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }

    public function expenseCategories()
    {
        return $this->hasMany(ExpenseCategory::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function productCategories()
    {
        return $this->hasMany(ProductCategory::class);
    }
}