<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Plan;
use Validator;
use DataTables;


class PlanController extends Controller
{
    public function plans(Request $request){
         if(\request()->ajax()){
            $data = Plan::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="delete btn btn-danger btn-sm" onclick="PlanDelete('.$row->id.')">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
         return view('backend.admin.plans.list');
    }

    public function planCreate(){
        return view('backend.admin.plans.create');
    }

    public function planSave(Request $request){
       $validator  = Validator::make($request->all(),[
          'title'                => 'required',
          'price'                => 'required',
          'time_duration'        => 'required',
          'affordable_amount'    => 'required',
          'category_id'          => 'required',
        ]);
        if($validator->fails()){
            return back()
                    ->withErrors($validator)
                    ->withInput();
        } 
        $plans   =  new Plan;
        $plans->title              =     $request->title;
        $plans->slug               =     $this->make_slug($request->title);
        $plans->category_id        =     $request->category_id;
        $plans->service_id         =     $request->service_id;
        $plans->price              =     $request->price;
        $plans->time_duration      =     $request->time_duration;
        $plans->affordable_amount  =     $request->affordable_amount;

        $plans->benefits   =   json_encode($request['benefits']);
        $plans->save();
        Toastr::success('Plan added succesfully!');
        return redirect()->route('admin.plans');
    }

    public function planEdit($id){
        $plan            = Plan::where('id',$id)->first();
        $plans_benefits   =   explode(',', $plan->benefits);
        return view('backend.admin.plans.edit',compact('plan','plans_benefits'));
    }

    public function delete($id){
        Plan::destroy($id);
        return response()->json();
    }

    public function status(Request $request){
        if ($request->ajax()) {
            $plan = Plan::find($request->id);
            $plan->status = $request->status;
            $plan->save();
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
