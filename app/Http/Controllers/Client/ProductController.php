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
        $arr1 = [];
        if ($request->price != [] ) {


            foreach ($request->price as $value) {
                if ($value == '5') {
                    $products = Product::with(['attrs', 'category'])
                        ->where('category_id',  $request->cate)
                        ->where(function ($query) {
                            $query->where('price', '>', 100)
                                ->where('price', '<', 10000000);
                        })->get();
                }
                if ($value == '10') {
                    $products = Product::with(['attrs', 'category'])
                        ->where('category_id',  $request->cate)
                        ->where(function ($query) {
                            $query->where('price', '>', 10000000)
                                ->where('price', '<=', 20000000);
                        })->get();
                }
                if ($value == '20') {
                    $products = Product::with(['attrs', 'category'])
                        ->where('category_id',  $request->cate)
                        ->where('price', '>', 20000000)
                        ->get();
                }


                array_push($arr, $products);
            }
        } else {
            $products = Product::with(['attrs', 'category'])
                ->where('category_id',  $request->cate)
                ->get();
            array_push($arr, $products);
        }


        
        // if ($request->sort != null) {
        //     foreach ($request->price as $value) {
        //         if ($value == 'desc') {
        //             $products = Product::with( 'category')
        //             ->orderBy('price','desc')
        //                 ->where('category_id',  $request->cate)
        //                 ->get();
        //         }

        //     }
        //     array_push($arr, $products);

        // }




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

        return view('client.search',compact('products'));
        # code...
    }
}
