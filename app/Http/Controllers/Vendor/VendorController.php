<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;
use App\Models\User;
use App\Models\Vendor;
use Validator;
use Hash;

class VendorController extends Controller
{

    public function getLogin()
    {dd("OK");
         return view('backend.auth.login');
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
        return view('backend.dashboard');
       }else{
          return redirect()->route('home');
       } 
    }
  
}
