<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Validator;

class ServiceController extends Controller
{
    public function service(){
        $services   =  Service::orderBy('id','desc')->get();
        return view('backend.admin.service.list',compact('services'));
    }

    public function addNewService(){
        return view('backend.admin.service.add_new');
    }

    public function save(Request $request){
        $validator  = Validator::make($request->all(),[
          'name'           => 'required',
          'description'     => 'required',
          'image'           => 'required|mimes:jpeg,jpg,png,gif|max:200',
        ]);
        if($validator->fails()){
            return back()
                    ->withErrors($validator)
                    ->withInput();
        } 
        $service   =  new Service;
        $service->name               =     $request->name;
        $service->slug               =     $this->make_slug($request->name);
        $service->description        =     $request->description;
        $image = $request->image;
        if($image){
              $fileName       = time()."-hello-mistri-digital." .$request->file('image')->getClientOriginalExtension();
              $image_path     = $image->move(public_path('admin_assets/images/services'), $fileName);
              $service->image   = $fileName;
        } 
        $service->save();
        return redirect()->route('admin.service-list');
    }


    public function edit($id){
        $service_id   =  Service::where('id',$id)->first();
        return view('backend.admin.service.edit', compact('service_id'));
    }

    public function update(Request $request){
       $validator  = Validator::make($request->all(),[
          'name'           => 'required',
          'description'     => 'required',
          'image'           => 'sometimes|mimes:jpeg,jpg,png,gif|max:200',
        ]);
        if($validator->fails()){
            return back()
                    ->withErrors($validator)
                    ->withInput();
        } 
        $service   =   Service::where('id',$request->service_id)->first();
        $service->name               =     $request->name;
        $service->slug               =     $this->make_slug($request->name);
        $service->description        =     $request->description;
        $image = $request->image;
        if($image){
              $fileName       = time()."-hello-mistri-digital." .$request->file('image')->getClientOriginalExtension();
              $image_path     = $image->move(public_path('admin_assets/images/services'), $fileName);
              $service->image   = $fileName;
        } 
        $service->save();
        return redirect()->route('admin.service-list');
    }

    public function delete($id){
        Service::destroy($id);
        return response()->json(['message'=> 'Data delete succesfully']); 
    }

    public function status(Request $request){
        if ($request->ajax()) {
            $service = Service::find($request->id);
            $service->status = $request->status;
            $service->save();
            $data = $request->status;
            return response()->json($data);
        }
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
