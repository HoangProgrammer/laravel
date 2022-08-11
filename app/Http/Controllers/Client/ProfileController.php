<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //

    function profile(){

    }

    function profileOrder(){
        $order = Order::with('user')->select('*')
        ->where('user_id',Auth::user()->id)
        ->paginate(10);
       return view('client.ProfileOrder',compact('order'));

    }

    
    function details($id)
    {

        $orderDetail = Order::with(['details', 'orders', 'user'])
            ->find($id);

        //  dd($orderDetail);
        //   foreach($orderDetail->details as $value){

        //   }
        return view('client.ProfileOrderDetail', compact('orderDetail'));
    }

}
