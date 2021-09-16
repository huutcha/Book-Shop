<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSubCate extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'sub_categories_id'];
}
