<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInfomation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'author', 'published', 'language', 'year', 'product_id'];
}
