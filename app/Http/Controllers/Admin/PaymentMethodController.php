<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;

class PaymentMethodController extends Controller
{
    public function payment(){
        return view('backend.admin.payment.index');
    }

    public function paymentUpdate(Request $request){
        if($request->status == 'on'){
            $status = 1;
           }else{
               $status = 0;
           }
           
           if($request->payment_type == 'razor_pay'){
            DB::table('settings')->updateOrInsert(['type' => 'razor_pay'], [
                'type' => 'razor_pay',
                    'value' => json_encode([
                    "status" => $status,
                    "key" => $request['key'],
                    "secret_key" => $request['secret_key'],
                ])
            ]);
           }elseif($request->payment_type == 'paypal'){
              DB::table('settings')->updateOrInsert(['type' => 'paypal'], [
                'type' => 'paypal',
                    'value' => json_encode([
                    "status" => $status,
                    "environment" => $request['environment'],
                    "client_id" => $request['client_id'],
                    "secret_key" => $request['secret_key'],
                ])
            ]);
           }
            Toastr::success('Payment Setup Update Succesfully!');
            return back();   
         }
}
