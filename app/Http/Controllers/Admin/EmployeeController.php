<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Admin;
use Validator;
use Brian2694\Toastr\Facades\Toastr;

class EmployeeController extends Controller
{
    public function inedx(){
        return view('backend.admin.employee.list');
    }
    public function employee(){
        $roles   =  Role::orderBy('id','desc')->get();
        return view('backend.admin.employee.create',compact('roles'));
    }

    public function employeeSave(Request $request){

       $validator  = Validator::make($request->all(),[
          'name'             => 'required',
          'phone'            => 'required',
          'email'            => 'required|unique:admins,email',
          'avatar'           => 'required|mimes:jpeg,jpg,png,gif|max:100',
        ]);
        if($validator->fails()){
            return back()
                    ->withErrors($validator)
                    ->withInput();
        } 

        if ($request->role_id == 1) {
            Toastr::warning('Access Denied!');
            return back();
        }

        $employee                =  new Admin;
        $employee->name          = $request->name;
        $employee->phone         = $request->phone;
        $employee->email         = $request->email;
        $employee->admin_role_id = $request->admin_role_id;
        $employee->password      = $request->password;
        $employee->status        = 1;
        $avatar = $request->avatar;
        if($avatar){
          $fileName       = time()."-hello-mistri-digital." .$request->file('avatar')->getClientOriginalExtension();
          $image_path     = $avatar->move(public_path('admin_assets/images/profile'), $fileName);
          $employee->avatar   = $fileName;
        } 
        $employee->save();
        Toastr::success('Employee added succesfully!');
            return redirect()->route('admin.employee');
    }
}
