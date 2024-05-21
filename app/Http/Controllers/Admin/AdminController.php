<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Models\User;
use App\Models\Admin;
use Validator;
use Hash;

class AdminController extends Controller
{

    public function getLogin()
    {
         return view('backend.admin.auth.login');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password],$request->get('remember'))) {

            return redirect()->route('admin.dashboard');

        } else {
            session()->flash('error','Either Email/Password is incorrect');
            return back()->withInput($request->only('email'));
        }

    }

    public function logout() {
        Auth::guard('admin')->logout();
        return redirect()->route('adminLogin');
    }

    public function index(){
       if(Auth::check()){
        return view('backend.admin.dashboard');
       }else{
          return redirect()->route('home');
       } 
    }

   public function profile(){
      if(Auth::check() && Auth::user()->user_type == 'admin'){
         return view('backend.admin.profile');
       }else{
          return redirect()->route('home');
       } 
   } 

    public function update(Request $request){

            $admin             =  User::where('id', Auth::user()->id)->first();
            $admin->name       = $request->name;
            $admin->email      = $request->email;
            $admin->country    = $request->country;
            $admin->address    = $request->address;
            $admin->phone      = $request->phone;
            $file              = $request->avatar;
            if($file){
               $fileName       = time()."-post-world." .$file->getClientOriginalExtension();
               $image_path     = $file->move(public_path('assets/img'), $fileName);
               $admin->avatar  = 'img/'.$fileName;
            }
         $admin->save();
          return back()->with('success','Update successfully!');
     }
    public function updatePassword(Request $request){

         $validator = Validator::make($request->all(),[
            'old_password'               => 'required|different:password',
            'password'                   => 'required|min:6|max:30',
            'password_confirmation'      => 'required|same:password|min:6|max:30'
        ],[
            'old_password.required'           => 'This field is required.',
            'password.required'               => 'This field is required.',
            'password_confirmation.required'  => 'This field is required.',
            'password_confirmation.same'      => 'Password missmatch.'
        ]); 
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
          }   

         $admin  =  User::where('id', Auth::user()->id)->first();
         $admin->password = Hash::make($request->new_password);
         $admin->save();
         return back()->with('success','Password Update successfully!');
    }

    public function deleteProfileImage(){
      $user =  User::find(Auth::user()->id)->first();
      $user->avatar = null;
      $user->save();
     return back()->with('success','Delete successfully!');
    }
}
