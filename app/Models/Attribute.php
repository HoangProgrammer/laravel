<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $table="attributes";

    protected $fillable=[
        'name', 
        'parent_id' 
    ];


  public  function child(){
        return $this->hasMany(Attribute::class,'parent_id','id' );
    }

}
