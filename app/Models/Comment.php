<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Comment extends Model
{

    protected $fillable=[
        'user_id',
        'product_id',
        'rating',
        'message',
        'parent_id'
    ];

    use HasFactory;

    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
      }

         
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
      }
}


