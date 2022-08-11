<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class AttrProduct extends Model
{
    use HasFactory;
    public $table='attr_products';

    protected $fillable=[
        'product_id',
        'attr_id'
    ];

 
    
}
