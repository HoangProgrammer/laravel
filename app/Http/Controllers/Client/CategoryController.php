<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    function index($slug){
        $category = Category::where('slug', $slug)->first();
        // dd($category);

        $products = Product::with('category')->select('id', 'name','image','price','slug','sale','category_id')
        ->where('category_id',$category->id)
        ->paginate(10);
        // dd($products);
        return view('client.shop',compact(['category','products']));
    }
    //
}
