<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Hash;
use Auth;

class UserController extends Controller
{
    public function login()
      { 
       if(Auth::check()){
            return redirect()->route('admin.dashboard');
        }else{
            return view('frontend.login');
        }
      }
      

    public function registerSave(Request $request){

        $validator   =  Validator::make($request->all(),[
            "fname"        => 'required',
            'lname'        => 'required',
            "mobile"       => 'required',
            "email"        => 'required|unique:users,email',
            "password"     => 'required',
            'password_confirmation' => 'required|same:password'
       ]);
       if($validator->fails()){
                      return back()
                      ->withErrors($validator)
                      ->withInput();
       }

        $user = new User;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->phone = $request->mobile;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login');
        
      } 

    public function register(){

        if(Auth::check()){
            return redirect()->route('admin.dashboard');
        }else{
            return view('frontend.registration');
        }
      }  

    
    public function loginSave(Request $request){
     $validator   =  Validator::make($request->all(),[
           "email"    => 'required|exists:users,email',
           "password" => 'required',
       ]);
       if($validator->fails()){
                      return back()
                      ->withErrors($validator)
                      ->withInput();
       }
       $user  =   User::where('email',$request->email)->first();
        if (!Hash::check($request->get('password'), $user->password)) {
                return redirect()->back()->with(['error' => 'Invalid Credentials !']);
            }
        if($user->status == 1){
        if (\Auth::attempt($request->only('email','password'))) {

            if (auth()->user()->user_type == 'customer') {
                return redirect()->route('user.dashboard');
            }else {
                if (session('link') != null) {
                    return redirect(session('link'));
                } else {
                    return redirect()->route('home');
                }
            }

         }
       }else{
        return redirect()->back()->with(['error' => 'Your Account Not Activated !']);
       }
      }  
}



