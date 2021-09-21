<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'state'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }

    public function getStateCharAttribute (){
        if ($this->attributes['state'] == 0){
            return 'Chưa duyệt';
        }
        if ($this->attributes['state'] == 1){
            return 'Đã duyệt';
        }
        if ($this->attributes['state'] == 2){
            return 'Hủy bỏ';
        }
       
    }

}
