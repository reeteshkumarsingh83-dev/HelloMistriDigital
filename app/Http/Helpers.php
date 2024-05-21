<?php
use App\Models\Setting; 
use App\Models\Page;

  if (!function_exists('get_setting')) {
    function get_setting($key)
    {
        $settings = Setting::where('type', $key)->first();
        return $settings == null ? $settings : $settings->value;
    }
   }

    if (!function_exists('static_assets')) {
      /**
       * Generate an asset path for the application.
       *
       * @param string $path
       * @param bool|null $secure
       * @return string
       */
      function static_assets($path)
      {
          $static_assets =  url('/').'/assets/'.$path;
          return $static_assets;
      }

      function admin_assets($path)
      {
          $admin_assets =  url('/').'/admin_assets/'.$path;
          return $admin_assets;
      }

      function get_upload_image($path)
      {
          $get_upload_image =  url('/').'/admin_assets/images/'.$path;
          return $get_upload_image;
      }

    if (!function_exists('page')) {
      function page($key)
      {
            $page = Page::where('slug', $key)->first();
            return $page;
        }
       }

  }
?>