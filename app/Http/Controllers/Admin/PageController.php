<?php

namespace App\Http\Controllers\Admin;
use App\Models\Page;
use Validator;
use Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pages(){
        $pages  = Page::orderBy('id','desc')->paginate(10);
        return view('backend.admin.pages.dynamic_page',compact('pages'));
    } 

    public function PageCreate(){
        return view('backend.admin.pages.create');
    }

    public function PageSave(Request $request){
    $validator  = Validator::make($request->all(),[
        'title'           => 'required',
        'slug'            => 'sometimes|unique:pages|regex:/^\S*$/u',
        'banner'          => 'required|mimes:jpeg,jpg,png|max:200',
        'description'     => 'required',
    ],[
        'title.required'       => "This field is required",
        'banner.required'      => "This field is required",
        'description.required' => "This field is required",

    ]);
    if($validator->fails()){
    return back()
            ->withErrors($validator)
            ->withInput();
    }

    $page = new Page;
    $page->title  = $request->title;
    $page->url    = $request->url;
    if ($request->slug != null) :
        $page->slug             = $request->slug; 
    else :
        $page->slug             = $this->make_slug($request->title);
    endif;
    $page->description  = $request->description;
    $banner = $request->banner;
    if($banner){
          $fileName       = time()."-hello-mistri-digital." .$request->file('banner')->getClientOriginalExtension();
          $image_path     = $banner->move(public_path('admin_assets/images/pages'), $fileName);
          $page->banner   = $fileName;
    } 
    $page->save();
    return redirect()->route('admin.pages')->with('success','Page Create successfully!');

    }

    public function PageEdit($id){
        $page = Page::where('id',$id)->first();
        return view('backend.admin.pages.edit',compact('page'));
    }

    public function PageUpdate(Request $request){

    $validator  = Validator::make($request->all(),[
        'title'           => 'required',
        'banner'          => 'sometimes|mimes:jpeg,jpg,png,gif|max:300',
        'description'     => 'required',
    ],[
        'title.required'        => "This field is required",
        'url.required'          => "This field is required",
        'description.required'  => "This field is required",

    ]);
    if($validator->fails()){
    return back()
            ->withErrors($validator)
            ->withInput();
    }
   
   $page = Page::where('id',$request->edit_id)->first();
   $page->title  = $request->title;
   $page->description  = $request->description;
   $banner = $request->banner;
   if($banner){
          $fileName       = time()."-hello-mistri-digital." .$request->file('banner')->getClientOriginalExtension();
          $image_path     = $banner->move(public_path('admin_assets/images/pages'), $fileName);
          $page->banner   = $fileName;
    } 
    $page->save();
    return redirect()->route('admin.pages')->with('success','Page Update successfully!');
    }

    public function PageDelete($id){
        Page::destroy($id);
        return response()->json(['message'=> 'Data delete succesfully']); 
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
