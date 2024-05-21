<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Auth;

class ContactController extends Controller
{
    public function index(){
        if(Auth::check() && Auth::user()->user_type == 'admin'){
            $contacts = Contact::orderBy('id','desc')->paginate(10);
            return view('backend.admin.contacts.index',compact('contacts'));
        }else{
          return redirect()->route('home');
       } 
    }
}
