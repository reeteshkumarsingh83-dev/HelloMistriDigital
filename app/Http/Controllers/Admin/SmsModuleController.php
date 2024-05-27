<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;

class SmsModuleController extends Controller
{
    public function sms(){
        return view('backend.admin.configration.sms');
    }

    public function smsSave(Request $request)
    { 
        if($request->status == 'on'){
         $status = 1;
        }else{
            $status = 0;
        }
        DB::table('settings')->updateOrInsert(['type' => 'twilio_sms'], [
                'type' => 'twilio_sms',
                'value' => json_encode([
                    'status' => $status,
                    'sid' => $request['sid'],
                    'messaging_service_sid' => $request['messaging_service_sid'],
                    'token' => $request['token'],
                    'from' => $request['from'],
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        Toastr::success('SMS Update Succesfully!');
        return back();
    }
}
