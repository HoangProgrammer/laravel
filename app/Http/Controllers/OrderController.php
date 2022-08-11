<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class OrderController extends Controller
{
    //
    function index()
    {

        $order = Order::with('user')->select('id', 'orderDate', 'city', 'address', 'note', 'totalCost', 'user_id','status')->paginate(10);
        return view('server.cart.cart', compact('order'));
    }

    
    function details($id)
    {

        $orderDetail = Order::with(['details', 'orders', 'user'])
            ->find($id);

        //  dd($orderDetail);
        //   foreach($orderDetail->details as $value){

        //   }
        return view('server.cart.cartDetail', compact('orderDetail'));
    }

    function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = $request->status;
        $order->save();
        Alert::success('Đơn Hàng cập nhật thành công');
        return back();
    }
}
