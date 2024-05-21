<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use Auth;

class OrderController extends Controller
{
    public function index(){
         if(Auth::check() && Auth::user()->user_type == 'admin'){
            $orders = Order::orderBy('id','desc')->paginate(10);
            return view('backend.orders.index',compact('orders'));
            }else{
          return redirect()->route('home');
       } 
    }

    public function viewOrder($id){
    if(Auth::check() && Auth::user()->user_type == 'admin'){
        $order = Order::where('id',$id)->first();
        return response()->json($order); 
        }
     }else{
          return redirect()->route('home');
       } 
}
