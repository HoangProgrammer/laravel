<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Attribute;
use App\Models\Comment;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    //
    public function index($cateName)
    {
        dd($cateName);
// dd($cateName);
        return  view('client.shop');
        # code...
    }

    
    public function detail($cateName, $slug)
    {
        $product=Product::with(['attrs','images','category','comments'])->where('slug',$slug)
        ->first();
        $productRelate=Product::with('category')
        ->where('category_id',$product->category_id)
        ->where('id','<>',$product->id)
        ->paginate(5);
        $attribute=Attribute::select('id','parent_id','name')->with('child')->get();

        $comments=Comment::with('user')->where('product_id',$product->id)->orderBy('id','desc')->paginate(5);
        return view('client.detail', 
    [   
        'product'=>$product,
        'attribute'=>    $attribute,
        'productRelate'=>  $productRelate,
        'comments'=> $comments
]
    );
    }

    public function cart()
    {

        return view('client.cart');
    }

    public function checkout()
    {

        return view('client.checkout');
    }
}
