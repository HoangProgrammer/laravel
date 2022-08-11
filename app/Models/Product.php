<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ImageProduct;
use App\Models\Category;
use App\Models\Comment;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'price',
        'slug',
        'qty',
        'sale',
        'category_id',
        'attr_id',
        'desc',
        'image',
        'status',
        
    ];
    
    public $timestamp=false;

    public function images(){
        return $this->hasMany(ImageProduct::class,'product_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function attrs(){
        return $this->belongsToMany(Attribute::class,'attr_products','product_id','attr_id');
      }

      public function comments(){
        return $this->hasMany(Comment::class,'product_id','id');
      }

    //   function order_detail(){
    //     return $this->belongsToMany(Order_detail::class,'','id');
    // }


}
