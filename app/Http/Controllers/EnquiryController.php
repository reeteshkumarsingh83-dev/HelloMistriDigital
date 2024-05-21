<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Enquiry;
use Validator;

class EnquiryController extends Controller
{
    public function enquiry(Request $request){

     $validator  = Validator::make($request->all(),[
        'name'              => 'required',
        'mobile'            => 'required|max:10|min:10',
        'addhar_number'     => 'required|max:12|min:12',
        'addhar_front_side' => 'required',
        'addhar_back_side'  => 'required',
        'user_image'        => 'required',
     ]);

       if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $enquiry  = new Enquiry;
        $enquiry->name = $request->name;
        $enquiry->mobile = $request->mobile;
        $enquiry->addhar_number = $request->addhar_number;

        $file1 = $request->addhar_front_side;
        if($file1){
               $fileName       = rand()."." .$file1->getClientOriginalExtension();
               $image_path = $file1->move(public_path('assets/app/public/enquiry/'), $fileName);
               $enquiry->addhar_front_side = $fileName;
        }
        $file2 = $request->addhar_back_side;
        if($file2){
               $fileName       = rand()."." .$file2->getClientOriginalExtension();
               $image_path = $file2->move(public_path('assets/app/public/enquiry/'), $fileName);
               $enquiry->addhar_back_side = $fileName;
        }
        $file3 = $request->user_image;
        if($file3){
               $fileName       = rand()."." .$file3->getClientOriginalExtension();
               $image_path = $file3->move(public_path('assets/app/public/enquiry/'), $fileName);
               $enquiry->user_image = $fileName;
        }

        $enquiry->save();
        return back()->with(['error' => 'Data save successfully !']);

    }


}
