<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'user_id',
        'orderDate',
        'status',
        'address',
        'city',
        'note',
        'phone',
        'email',
        'totalCost'
    ];

    function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    function details(){
        return $this->belongsToMany(Product::class,'order_detail','order_id','product_id');
    }
    
    function  orders(){
        return $this->hasMany(Order_detail::class,'order_id','id');
    }


}
