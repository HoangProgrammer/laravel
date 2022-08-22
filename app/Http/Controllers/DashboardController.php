<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
  public function index()
  { 
    $products=count(Product::select('id')->get());
    $orders=count(Order::select('id')->get());
    $contacts=count(Contact::select('id')->get());
    $users=count(User::select('id')->get());
    $charts=Category::with('products')->select('*')->get();
    // dd($charts->products);  
    return view('server.dashboard'
,compact(['products','users','contacts','orders','charts'])
);
    # code...
  }

}
