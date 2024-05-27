<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\DB;

class MailController extends Controller
{
     public function mailConfig(){
        return view('backend.admin.configration.mail_config');
    }

    public function mailConfigSave(Request $request){
          if($request->status == 'on'){
            $status = 1;
           }else{
               $status = 0;
           }
            DB::table('settings')->updateOrInsert(['type' => 'mail_config_smtp'], [
                'type' => 'mail_config_smtp',
                    'value' => json_encode([
                    "status" => $status,
                    "name" => $request['name'],
                    "host" => $request['host'],
                    "driver" => $request['driver'],
                    "port" => $request['port'],
                    "username" => $request['username'],
                    "email_id" => $request['email_id'],
                    "encryption" => $request['encryption'],
                    "password" => $request['password']
                ])
            ]);
            Toastr::success('Mail Smtp Setup Update Succesfully!');
            return back();
        }
   }
