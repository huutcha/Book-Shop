<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable =['name', 'path', 'product_id'];
=======

    protected $fillable = ['path', 'product_id'];

    public function product() {
        return $this->belongsTo(Product::class);
    }
>>>>>>> huudinh
}
