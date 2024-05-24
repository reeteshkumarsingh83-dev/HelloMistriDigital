<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Validator;

class BrandController extends Controller
{
    public function brand(){
         $brands = Brand::orderBy('id','asc')->get();
         return view('backend.admin.brand.list',compact('brands'));
    }
    public function addNew(){
        return view('backend.admin.brand.add_new');
    }

    public function save(Request $request){
        $validator  = Validator::make($request->all(),[
          'name'           => 'required',
          // 'icon'           => 'required|mimes:jpeg,jpg,png,gif|max:100',
        ]);
        if($validator->fails()){
            return back()
                    ->withErrors($validator)
                    ->withInput();
        } 
        $brands   =  new Brand;
        $brands->name               =     $request->name;
        $brands->category_id        =     $request->category_id;
        $icon = $request->icon;
        if($icon){
              $fileName       = time()."-hello-mistri-digital." .$request->file('icon')->getClientOriginalExtension();
              $image_path     = $icon->move(public_path('admin_assets/images/brands'), $fileName);
              $brands->icon   = $fileName;
        } 
        $brands->save();
        return back();
    }

    public function edit($id){
        $brand_data   = Brand::where('id',$id)->first();
        return view('backend.admin.brand.edit',compact('brand_data'));
    }

    public function update(Request $request){
        $validator  = Validator::make($request->all(),[
          'name'           => 'required',
          'icon'           => 'sometimes|mimes:jpeg,jpg,png,gif|max:100',
        ]);
        if($validator->fails()){
            return back()
                    ->withErrors($validator)
                    ->withInput();
        } 
        $brands   =  Brand::where('id',$request->brand_id)->first();
        $brands->name               =     $request->name;
        $brands->category_id        =     $request->category_id;
        $icon = $request->icon;
        if($icon){
              $fileName       = time()."-hello-mistri-digital." .$request->file('icon')->getClientOriginalExtension();
              $image_path     = $icon->move(public_path('admin_assets/images/brands'), $fileName);
              $brands->icon   = $fileName;
        } 
        $brands->save();
        return back();
    }

    public function delete($id){
        Brand::destroy($id);
        return response()->json(['message'=> 'Data delete succesfully']); 
    }

    public function status(Request $request){
        if ($request->ajax()) {
            $brand = Brand::find($request->id);
            $brand->status = $request->status;
            $brand->save();
            $data = $request->status;
            return response()->json($data);
        }
    }
}
