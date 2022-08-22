<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\AttrProduct;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $FeaturedProducts =   Product::select('*')->with(['comments', 'category'])->get();

        $dataProduct = [];
        foreach ($FeaturedProducts as $product) {
            foreach ($product->comments as $value) {
                if ($value->product_id == $product->id) {
                    $dataProduct[] = $product;
                }
            }
        }


        $products_new = Product::with('category')->select('name', 'price', 'slug', 'image', 'sale', 'category_id')
            ->orderBy('id', 'desc')
            ->paginate(8);

        $categories = Category::select('name', 'slug', 'id')->get();
        return  view(
            'client.index',
            [
                'categories' => $categories,
                'product_new' => $products_new,
                'FeaturedProducts' => array_unique($dataProduct)
            ]
        );

        # code...
    }
}
