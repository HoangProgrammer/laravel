<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class ImageProduct extends Model
{
    use HasFactory;
    public $table="image_products";
    protected $fillable=[
        'image',
        'product_id'
    ];

    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
