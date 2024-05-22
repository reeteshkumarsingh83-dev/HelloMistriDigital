<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;

class ServiceController extends Controller
{
    public function CatgService($slug){
        $category = Category::where('slug',$slug)->first();
        $brands   = Brand::where('category_id',$category->id)->get();
        return view('frontend.partials.popular_service_form',compact('category','brands'));
    }

    public function catgServicePost(Request $request){
        return redirect()->route('web-purches-service');
    }

    public function catgServicePurches(){
        return view('frontend.partials.popular_service_purchase');
    }
}
