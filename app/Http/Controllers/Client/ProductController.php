<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function select(Request $request)
    {

        $arr = [];
        
        if ($request->price !== null) {

            foreach ($request->price as $value) {

                $products = Product::select('price', 'sale', 'name', 'category_id', 'id', 'image','slug')
                    ->with(['attrs', 'category'])                
                    ->where('category_id',  $request->cate)
                    ->where('price', '>', (int)$value['price']) 
                    ->where('price', '<=', (int)$value['priceTo'])->get();               
                
                
                    array_push($arr, $products);
                
            }   

        } else {

            $products = Product::with(['attrs', 'category'])
                ->select('price', 'sale', 'name', 'category_id', 'id', 'image')
                ->where('category_id',  $request->cate)
                ->get();
            $arr=$products;
        }

        return response()->json(
            [
                'data' =>  $arr,
                'status' => 200
            ]
        );

    }





    public function search(Request $request)
    {
        $products = Product::where('name', 'like', '%' . $request->name . '%')
            ->with(['attrs', 'category'])
            ->where('category_id', $request->cate)
            ->get();

        return response()->json(array('data' => $products, 'status' => 200));
        # code...
    }

    public function search2(Request $request)
    {
        $products = Product::where('name', 'like', '%' . $request->name . '%')
            ->with(['attrs', 'category'])
            ->get();

        return view('client.search', compact('products'));
        # code...
    }
}
