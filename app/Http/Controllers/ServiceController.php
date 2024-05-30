<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Service;
use App\Models\Plan;

class ServiceController extends Controller
{
    public function CatgService($slug){
        $category = Category::where('slug',$slug)->first();
        $services = Service::orderBy('id','desc')->get(); 
        $brands   = Brand::where('category_id',$category->id)->get();
        return view('frontend.partials.popular_service_form',compact('category','brands','services'));
    }

    public function catgServiceGet(Request $request){
         if($request->service_id){
            $plans = Plan::where('service_id',$request->service_id)->where('brand_id',$request->brand)->get(); 
            return view('frontend.partials.popular_service_purchase',compact('plans'));

         }else{
            $plans = Plan::where('category_id',$request->category_id)->where('brand_id',$request->brand)->get(); 
            return view('frontend.partials.popular_service_purchase',compact('plans'));
         }
    }

    public function extendedService(Request $request){

        $category = Category::where('slug',$request->category_slug)->first();
        $services = Service::where('slug',$request->service_slug)->first(); 
        $brands   = Brand::where('category_id',$category->id)->get();
        return view('frontend.partials.popular_service',compact('category','brands','services'));
    }
}
