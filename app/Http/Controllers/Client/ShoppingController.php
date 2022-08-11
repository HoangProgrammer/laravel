<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Order_detail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use RealRashid\SweetAlert\Facades\Alert;

class ShoppingController extends Controller
{
    //

    function  index(Request $request)
    {
        $request->validate(
            [
                'size' => 'required',
                'color' => 'required'

            ],
            [
                'size.required' => 'vui lòng chọn kích thước',
                'color.required' => 'vui lòng chọn màu'
            ]
        );
        // session()->forget('cart');
        // dd('end');
        if (!Auth::user()) {
            return redirect()->route('getLogin');
        }

        $cart = [];
        $attr = [
            'color' => $request->color,
            'size' => $request->size,
        ];


        $product = Product::find($request->id);
        $cart = session()->get('cart');

        // tồn tại thì tăng số lượng phần tử
        if (isset($cart[$product->id])) {

            if ($cart[$product->id]['qty'] >= $product->qty) {
                $cart[$product->id]['qty'] = $product->qty;
            } else {
                $cart[$product->id]['qty'] = $cart[$product->id]['qty'] + $request->qty;
            }

        } else {
            // chưa có thì thêm mới
            $cart[$request->id] = [
                'image' => $product->image,
                'product_id' => $product->id,
                'name' => $product->name,
                'price' => $request->price,
                'qty' => $request->qty,
                'attr' =>  $attr,
                'user_id' => Auth::user()->id
            ];
        }

        session()->put('cart', $cart);
        // dd( session()->get('cart'));
        // $newCart = json_encode($cart);
        // Cookie::queue(Cookie::make('cart', json_encode($cart, true, JSON_UNESCAPED_UNICODE)));
        //  return  $request->cookie('cart', $newCart);
        Alert::success('Thêm Thành công');
      
        return back();

    }




    public function UpdateCart(Request $request)
    {
        $cart = session()->get('cart');
        if ($request->status == 'minus') {
       
                $cart[$request->product_id]['qty'] = $cart[$request->product_id]['qty'] - 1;
  
        } else {
            $cart[$request->product_id]['qty'] = $cart[$request->product_id]['qty'] + 1;
        }



        session()->put('cart', $cart);

        return response()->json(['data' => $cart[$request->product_id], 'status'=>200]);

        # code...
    }


    
    public function deleteCart($id)
    {
        $cart = session()->get('cart');
         unset($cart[$id]);
         session()->put('cart', $cart);
         return back();
        # code...
    }





    public function shopping()
    {
        //  Cookie::forget('cart');
        // $cookie=stripslashes(Cookie::get('cart'));
        // $cartcookie=json_decode($cookie,true,JSON_UNESCAPED_UNICODE);
        // dd($cartcookie);

        // foreach($cartcookie as $value){
        // dd($value['name']);   
        // }
        // session()->forget('cart');
        // print_r(session()->get('cart'));
        $cart = session()->get('cart');
        // dd( $cart);
        return view(
            'client.cart',
            compact('cart')
        );
    }



    public function checkout()
    {

        $cart = session()->get('cart');

        return view(
            'client.checkout',
            compact('cart')
        );
        # code...
    }

    public function postCheckout(Request $request)
    {
        $cart = session()->get('cart');

        // dd($request->all());
        $order = Order::create([
            'user_id' => Auth::user()->id,
            'orderDate' => date('Y-m-d H:i:s'),
            'note' => $request->note,
            'status' => 0,
            'totalCost' => $request->totalCost,
            'address' => $request->address,
            'city' => $request->city
        ]);

        
        $orderNew = Order::select('id')->orderBy('id', 'DESC')->first();
        // dd( $orderNew->id);

        foreach ($cart as $item) {
            $attr = $item['attr']['color'];
            $attr .= ',' . $item['attr']['size'];

            Order_detail::create(
                [
                    'order_id' => $orderNew->id,
                    'product_id' => $item['product_id'],
                    'qty' => $item['qty'],
                    'attr' =>  $attr,
                ]
            );
        }

        // User::find(Auth::user()->id)->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'address' => $request->address,
        // ]);

        session()->forget('cart');
        Alert::success('Chúc mừng bạn đã Mua Hàng thành công :))');

        return redirect()->route('order');
    }
}
