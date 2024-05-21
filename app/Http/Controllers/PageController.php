<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Contact;
use App\Models\Page;

class PageController extends Controller
{
    public function contact(){
        return view('frontend.pages.contact');
    }

    public function contactSave(Request $request){
        
        $validator = Validator::make($request->all(),[
           'fullname'  =>  'required',
           'email'     =>  'required',
           'phone'     =>  'required',
           'subject'   =>  'required',
           'message'   =>  'required',
        ]);
        if($validator->fails()){
             return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
        }

        $contact  = new Contact;
        $contact->fullname = $request->fullname;
        $contact->email    = $request->email;
        $contact->phone    = $request->phone;
        $contact->subject  = $request->subject;
        $contact->message  = $request->message;
        $contact->save();
        return redirect()->back()->with(['success' => 'Your Contact Data
        Send Successfully Submit !']);

    }

    public function about(){
         return view('frontend.pages.about');
    }

    public function SlugPage($slug){
         $page = Page::where('slug',$slug)->first();
         return view('frontend.pages.multi_pages',compact('page'));
    }
}
