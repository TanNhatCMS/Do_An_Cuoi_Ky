<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Tên bảng
    protected $table = 'products';

    // Các trường có thể được gán (mass assignable)
    protected $fillable = [
        'name',
        'price',
        'img',
    ];
}
