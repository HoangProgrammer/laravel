<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;
    public $table="order_detail";
    
    protected $fillable=[
        'order_id',
        'product_id',
        'qty',
        'attr'
    ]; 
      
    function order(){
        return $this->belongsTo(Order::class,'order_id','id');
    }

    function products(){
        return $this->hasMany(Product::class,'product_id','id');
    }

}
