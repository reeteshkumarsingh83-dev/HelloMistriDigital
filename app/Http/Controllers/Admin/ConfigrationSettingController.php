<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Banner;
use Validator;
use Storage;
use Auth;
use Brian2694\Toastr\Facades\Toastr;

class ConfigrationSettingController extends Controller
{
    public function configration(){
        return view('backend.admin.configration.web_config');
    }

    public function configrationUpdate(Request $request){
      $validator  = Validator::make($request->all(),[

          'web_logo'           => 'sometimes|mimes:jpeg,jpg,png,gif|max:100',
          'web_footer_logo'    => 'sometimes|mimes:jpeg,jpg,png,gif|max:100',
          'web_fav_icon'       => 'sometimes|mimes:jpeg,jpg,png,gif|max:100',
          'loader_gif'         => 'sometimes|mimes:jpeg,jpg,png,gif|max:100',
        ]);
        if($validator->fails()){
            return back()
                    ->withErrors($validator)
                    ->withInput();
        } 
        if($request['email_verification'] == 1 && $request['phone_verification'] == 1){
            Toastr::error('Both Phone & Email verification can not be active at a time');
            return back();
        }

        if ($request['email_verification'] == 1) {
            $request['phone_verification'] = 0;
        } elseif ($request['phone_verification'] == 1) {
            $request['email_verification'] = 0;
        }

        $setting        =  Setting::where('type','web_logo')->first();
        $web_logo       = $request->web_logo;
        if($web_logo != null){
            $fileName   = rand()."." .$web_logo->getClientOriginalExtension();
            $image_path = $web_logo->move(public_path('admin_assets/images/settings'), $fileName);
            $setting->value  = $fileName;
            $setting->save();
        }

        $setting           =  Setting::where('type','web_footer_logo')->first();
        $web_footer_logo       = $request->web_footer_logo;
        if($web_footer_logo != null){
            $fileName   = rand()."." .$web_footer_logo->getClientOriginalExtension();
            $image_path = $web_footer_logo->move(public_path('admin_assets/images/settings'), $fileName);
            $setting->value  = $fileName;
            $setting->save();
        }

        $setting           =  Setting::where('type','web_fav_icon')->first();
        $web_fav_icon       = $request->web_fav_icon;
        if($web_fav_icon != null){
            $fileName   = rand()."." .$web_fav_icon->getClientOriginalExtension();
            $image_path = $web_fav_icon->move(public_path('admin_assets/images/settings'), $fileName);
            $setting->value  = $fileName;
            $setting->save();
        }
        
        $setting           =  Setting::where('type','loader_gif')->first();
        $loader_gif       = $request->loader_gif;
        if($loader_gif != null){
            $fileName   = rand()."." .$loader_gif->getClientOriginalExtension();
            $image_path = $loader_gif->move(public_path('admin_assets/images/settings'), $fileName);
            $setting->value  = $fileName;
            $setting->save();
        }
        $web_color_primary            =  Setting::where('type','web_color_primary')->first();
        $web_color_primary->value     = $request->web_color_primary;
        $web_color_primary->save();


        $web_color_secondary            =  Setting::where('type','web_color_secondary')->first();
        $web_color_secondary->value = $request->web_color_secondary;
        $web_color_secondary->save();

        $company_name            =  Setting::where('type','company_name')->first();
        $company_name->value        = $request->company_name;
        $company_name->save();

        $company_email            =  Setting::where('type','company_email')->first();
        $company_email->value       = $request->company_email;
        $company_email->save();

        $phone            =  Setting::where('type','phone')->first();
        $phone->value               = $request->phone;
        $phone->save();

        $shop_address            =  Setting::where('type','shop_address')->first();
        $shop_address->value        = $request->shop_address;
        $shop_address->save();

        $country            =  Setting::where('type','country')->first();
        $country->value             = $request->country;
        $country->save();

        $company_copy_right            =  Setting::where('type','company_copy_right')->first();
        $company_copy_right->value  = $request->company_copy_right;
        $company_copy_right->save();

        $phone_verification   = Setting::where('type','phone_verification')->first();
        $phone_verification->value   =  $request['phone_verification'];
        $phone_verification->save();

        $email_verification   = Setting::where('type','email_verification')->first();
        $email_verification->value   =  $request['email_verification'];
        $email_verification->save();


        Toastr::success('Setting Update Succesfully!');
        return back();

    }

    public function Banner(){
        $banners =  Banner::orderBy('id','desc')->get(); 
        return view('backend.admin.banner.list', compact('banners'));
    }

    public function BannerCreate(){
        return view('backend.admin.banner.create');
    }

    public function BannerSave(Request $request){
        $validator  = Validator::make($request->all(),[

          'title'           => 'required',
          'url'             => 'required',
          'banner'          => 'required|mimes:jpeg,jpg,png,gif|max:200',
        ]);
        if($validator->fails()){
            return back()
                    ->withErrors($validator)
                    ->withInput();
        } 

        $banner  =  new Banner;
        $banner->title   =  $request->title;
        $banner->url     =  $request->url;
        $banner_img      = $request->banner;
        if($banner_img != null){
            $fileName   = rand()."." .$banner_img->getClientOriginalExtension();
            $image_path = $banner_img->move(public_path('admin_assets/images/banners'), $fileName);
            $banner->banner  = $fileName;

        }
        $banner->save();
        Toastr::success('Banner add succesfully!');
        return back();

    }

    public function BannerEdit($id){
         $edit_banner  = Banner::where('id',$id)->first();
         return view('backend.admin.banner.edit',compact('edit_banner'));
    }

    public function BannerUpdate(Request $request){
        $validator  = Validator::make($request->all(),[

          'banner'             => 'sometimes|mimes:jpeg,jpg,png|max:205',
          'title'              =>  'required',
          'url'                =>  'required',
        ]);
        if($validator->fails()){
            return back()
                    ->withErrors($validator)
                    ->withInput();
        } 
        $banner                = Banner::where('id',$request->banner_id)->first();
        $banner->title   =  $request->title;
        $banner->url     =  $request->url;
        $banner_img      = $request->banner;
        if($banner_img != null){
            $fileName   = rand()."." .$banner_img->getClientOriginalExtension();
            $image_path = $banner_img->move(public_path('admin_assets/images/banners'), $fileName);
            $banner->banner  = $fileName;

        }
        $banner->save();
        Toastr::success('Banner update succesfully!');
        return redirect()->route('admin.banner');
    }

    public function BannerDelete($id){
        Banner::destroy($id);
        return response()->json(); 
    }

    public function BannerStatus(Request $request){
        if ($request->ajax()) {
            $banner = Banner::find($request->id);
            $banner->status = $request->status;
            $banner->save();
            $data = $request->status;
            return response()->json($data);
        }
    }
}
