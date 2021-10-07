<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_code', 'quantity', 'rate', 'price', 'promotion_id'];
    
    public function order(){
        return $this->belongsToMany(Order::class, 'order_product', 'order_id', 'product_id')->withPivot('quantity');
    }

    public function subCategory(){
        return $this->belongsToMany(SubCategory::class, 'product_sub_cate', 'product_id', 'sub_category_id');
    }

    public function information() {
        return $this->hasOne(ProductInformation::class, 'product_id');
    }

    public function promotion() {
        return $this->belongsTo(Promotion::class);
    }

    public function image() {
        return $this->hasMany(ImageProduct::class, 'product_id');
    }
}
