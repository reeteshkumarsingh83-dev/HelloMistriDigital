<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use Brian2694\Toastr\Facades\Toastr;

class RoleAndPermission extends Controller
{
    public function rolePermission(){
        $roles   =  Role::orderBy('id','desc')->get();
        return view('backend.admin.role_and_permission.index',compact('roles'));
    }

    public function rolePermissionSet(Request $request){
           DB::table('roles')->insert([
            'name'=>$request->name,
            'module_access'=>json_encode($request['modules']),
            'status'=>1,
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        Toastr::success('Role added successfully!');
        return back();
    }

    public function rolePermissionEdit($id){
        $role =   Role::where('id',$id)->first();
        return view('backend.admin.role_and_permission.edit',compact('role'));
    }

    public function rolePermissionUpdate(Request $request, $id){
          $request->validate([
            'name' => 'required',
        ],[
            'name.required'=>'Role name is required!'
        ]);

        DB::table('roles')->where(['id'=>$id])->update([
            'name'=>$request->name,
            'module_access'=>json_encode($request['modules']),
            'status'=>1,
            'updated_at'=>now()
        ]);
        Toastr::success('Role updated successfully!');
        return redirect()->route('admin.role-and-permission');
    }

    public function rolePermissionDelete($id){
        Role::destroy($id);
        return response()->json(); 
    }

    public function rolePermissionStatus(Request $request){
        if ($request->ajax()) {
            $role = Role::find($request->id);
            $role->status = $request->status;
            $role->save();
            $data = $request->status;
            return response()->json($data);
        }
    }
}
