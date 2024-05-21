<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Validator;

class CategoryController extends Controller
{
    public function category(){
        $categories  = Category::orderBy('id','desc')->get();
        return view('backend.admin.categories.category',compact('categories'));
    }

    public function categorySave(Request $request){
       
       $validator  = Validator::make($request->all(),[
          'name'           => 'required',
          'priority_number'=> 'required',
          'icon'           => 'required|mimes:jpeg,jpg,png,gif|max:500',
        ]);
        if($validator->fails()){
            return back()
                    ->withErrors($validator)
                    ->withInput();
        } 
        $categories   =  new Category;
        $categories->name               =     $request->name;
        $categories->priority_number    =     $request->priority_number;
        $categories->slug               =     $this->make_slug($request->name);
        $categories->parent_id          =     0;
        $categories->position           =     0;
        $icon = $request->icon;
        if($icon){
              $fileName       = time()."-hello-mistri-digital." .$request->file('icon')->getClientOriginalExtension();
              $image_path     = $icon->move(public_path('admin_assets/images/categories'), $fileName);
              $categories->icon   = $fileName;
        } 
        $categories->save();
        return back();
    }

    public function Subcategory(){
        $sub_categories  = Category::orderBy('id','desc')->where('parent_id','!=', 0)->get();
        $categories      = Category::orderBy('id','desc')->get(); 
        return view('backend.admin.categories.sub_category',compact('sub_categories','categories'));
    }


    public function SubcategorySave(Request $request){
       $validator  = Validator::make($request->all(),[
          'name'           => 'required',
          'priority_number'=> 'required',
          'icon'           => 'required|mimes:jpeg,jpg,png,gif|max:500',
        ]);
        if($validator->fails()){
            return back()
                    ->withErrors($validator)
                    ->withInput();
        } 
        $categories   =  new Category;
        $categories->name               =     $request->name;
        $categories->priority_number    =     $request->priority_number;
        $categories->slug               =     $this->make_slug($request->name);
        $categories->parent_id          =     $request->parent_id;
        $categories->position           =     1;
        $icon = $request->icon;
        if($icon){
              $fileName       = time()."-hello-mistri-digital." .$request->file('icon')->getClientOriginalExtension();
              $image_path     = $icon->move(public_path('admin_assets/images/categories'), $fileName);
              $categories->icon   = $fileName;
        } 
        $categories->save();
        return back();
    }




    private function make_slug($string){

        $table = array(
            'Š' => 'S', 'š' => 's', 'Đ' => 'Dj', 'đ' => 'dj', 'Ž' => 'Z', 'ž' => 'z', 'Č' => 'C', 'č' => 'c', 'Ć' => 'C', 'ć' => 'c',
            'À' => 'A', 'Á' => 'A', 'Â' => 'A', 'Ã' => 'A', 'Ä' => 'A', 'Å' => 'A', 'Æ' => 'A', 'Ç' => 'C', 'È' => 'E', 'É' => 'E',
            'Ê' => 'E', 'Ë' => 'E', 'Ì' => 'I', 'Í' => 'I', 'Î' => 'I', 'Ï' => 'I', 'Ñ' => 'N', 'Ò' => 'O', 'Ó' => 'O', 'Ô' => 'O',
            'Õ' => 'O', 'Ö' => 'O', 'Ø' => 'O', 'Ù' => 'U', 'Ú' => 'U', 'Û' => 'U', 'Ü' => 'U', 'Ý' => 'Y', 'Þ' => 'B', 'ß' => 'Ss',
            'à' => 'a', 'á' => 'a', 'â' => 'a', 'ã' => 'a', 'ä' => 'a', 'å' => 'a', 'æ' => 'a', 'ç' => 'c', 'è' => 'e', 'é' => 'e',
            'ê' => 'e', 'ë' => 'e', 'ì' => 'i', 'í' => 'i', 'î' => 'i', 'ï' => 'i', 'ð' => 'o', 'ñ' => 'n', 'ò' => 'o', 'ó' => 'o',
            'ô' => 'o', 'õ' => 'o', 'ö' => 'o', 'ø' => 'o', 'ù' => 'u', 'ú' => 'u', 'û' => 'u', 'ý' => 'y', 'ý' => 'y', 'þ' => 'b',
            'ÿ' => 'y', 'Ŕ' => 'R', 'ŕ' => 'r', '/' => '-', ' ' => '-', '\\' => '-'
        );

        // -- Remove duplicated spaces
        $stripped = preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $string);

        // -- Returns the slug
        return strtolower(strtr($string, $table));
        // return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', trim($string))));
        //return preg_replace('/\s+/u', '-', trim($string));
    }
}
