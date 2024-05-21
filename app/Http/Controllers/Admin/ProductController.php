<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('id','desc')->paginate();
        return view('backend.product.index',compact('products'));
    }

    public function edit($id){
      $products = Product::where('id',$id)->first();
      return view('backend.product.edit_product',compact('products'));
    }

    public function update(Request $request){

       $products                = Product::where('id', $request->id)->first();
       $products->title         =  $request->title;
       $products->description   =  $request->description; 
       $products->amount        =  $request->amount;
       $products->discount      =  $request->discount;
       $products->save_amount   =  ROUND($request->amount*$request->discount/100);
       $products->pay_amount    =  $request->amount-$products->save_amount;
       $products->tablets_type  =  $request->tablets_type;
       $file = $request->file;

            if($file){
              $fileName       = time()."-VRD." .$file->getClientOriginalExtension();
              $image_path     = $file->move(public_path('assets/img'), $fileName);
              $products->image  = 'img/'.$fileName;
            }
       $products->save();
       return redirect()->route('product');
    }
}
