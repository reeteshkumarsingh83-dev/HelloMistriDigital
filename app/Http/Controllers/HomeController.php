<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use Cache;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Order;
use App\Models\Banner;

class HomeController extends Controller
{

    public function home()
    {
        $banners =  Banner::orderBy('id','desc')->get(); 
        Artisan::call('view:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        return view('frontend.index',compact('banners'));
    }

    public function home_index()
    {
        return redirect()->route('home');
    }

    public function checkOut($id){
        $ids = decrypt($id);
        $contacts =  Contact::where('id',$ids)->first();

        $packs   =  Product::orderBy('id','asc')->get();
        return view('frontend.check_out_page',compact('packs','contacts'));
    }

    public function thanks($id){
        $ids = decrypt($id)->order_id;
        $order  = Order::where('order_id',$ids)->first();
        return view('frontend.thanks',compact('order'));
    }

    public function view($id){
        $products = Product::where('id',$id)->first();
        return response()->json($products); 
    }

    public function updateAmount(Request $request)
        {
        $selectedValue = $request->input('value');
        $updatedAmount = Product::where('id',$selectedValue)->first();

        return response()->json(['updatedAmount' => $updatedAmount]);
        }


}
