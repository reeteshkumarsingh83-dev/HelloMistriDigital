<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Admin;
use Validator;
use Hash;
use Brian2694\Toastr\Facades\Toastr;

class EmployeeController extends Controller
{
    public function inedx(){
        $roles   =  Admin::orderBy('id','desc')->where('admin_role_id','!=', 1)->get();
        return view('backend.admin.employee.list',compact('roles'));
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
        $employee->password      = Hash::make($request->password);
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

    public function employeeEdit($id){
        $roles   =  Admin::orderBy('id','desc')->where('admin_role_id','!=', 1)->get();
        $employee   =  Admin::where('id',$id)->first();
        return view('backend.admin.employee.edit',compact('employee','roles'));
    }

    public function employeeUpdate(Request $request){
        $validator  = Validator::make($request->all(),[
          'name'             => 'required',
          'phone'            => 'required',
          'avatar'           => 'sometimes|mimes:jpeg,jpg,png,gif|max:100',
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
        $employee                = Admin::where('id',$request->employee_edit)->first();
        $employee->name          = $request->name;
        $employee->phone         = $request->phone;
        $employee->admin_role_id = $request->admin_role_id;
        if($employee->password){
           $employee->password      = Hash::make($request->password);
        }
        $employee->status        = 1;
        $avatar = $request->avatar;
        if($avatar){
          $fileName       = time()."-hello-mistri-digital." .$request->file('avatar')->getClientOriginalExtension();
          $image_path     = $avatar->move(public_path('admin_assets/images/profile'), $fileName);
          $employee->avatar   = $fileName;
        } 
        $employee->save();
        Toastr::success('Employee Updated succesfully!');
            return redirect()->route('admin.employee');
    }

    public function employeeStatus(Request $request){
        if ($request->ajax()) {
            $admin = Admin::find($request->id);
            $admin->status = $request->status;
            $admin->save();
            $data = $request->status;
            return response()->json($data);
        }
    }

    public function delete($id){
        Admin::destroy($id);
        return response()->json(); 
    }
}
