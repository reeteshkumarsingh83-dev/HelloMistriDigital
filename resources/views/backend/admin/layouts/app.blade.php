<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">
  <head>
    <meta charset="utf-8" />
    <title>Dashboard | Hello Mistri Digital - Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ admin_assets('images/favicon.ico') }}">
    <!-- jsvectormap css -->
    <link href="{{ admin_assets('libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />
    <!--Swiper slider css-->
    <link href="{{ admin_assets('libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Layout config Js -->
    <script src="{{ admin_assets('assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ admin_assets('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ admin_assets('css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ admin_assets('css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ admin_assets('css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ admin_assets('ckeditor/ckeditor.js') }}"></script>

    <!-- dropzone css -->
    <link href="{{ admin_assets('libs/dropzone/dropzone.css') }}" type="text/css" rel="stylesheet"/>
    <!-- Filepond css -->
    <link rel="stylesheet" href="{{ admin_assets('libs/filepond/filepond.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ admin_assets('libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
    <link rel="stylesheet" href="{{ admin_assets('css/toastr.css') }}" type="text/css" />

  </head>
  <body>
    <main class="main oh" id="main">
      <div id="layout-wrapper"> @include('backend.admin.inc.side_menu') @include('backend.admin.inc.nav_bar') @yield('content') @yield('script') </div>
    </main>
    <!-- Footer Area Start Here -->
    <!-- Vendor JS Files -->

    <script type="text/javascript">
      // Initialize CKEditor
      CKEDITOR.replace('tiny_mce',{
        width: "100%",
         height: "200px"
      }); 
    </script>

    <!-- Jquery JS-->
    <script src="{{ admin_assets('libs/jQuery/jquery-3.2.1.min.js') }}"></script>

    <script src="{{ admin_assets('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ admin_assets('libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ admin_assets('libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ admin_assets('libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ admin_assets('js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ admin_assets('js/plugins.js') }}"></script>
    <!-- apexcharts -->
    <script src="{{ admin_assets('libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Vector map-->
    <script src="{{ admin_assets('libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ admin_assets('libs/jsvectormap/maps/world-merc.js') }}"></script>
    <!--Swiper slider js-->
    <script src="{{ admin_assets('libs/swiper/swiper-bundle.min.js') }}"></script>
    <!-- Dashboard init -->
    <script src="{{ admin_assets('js/pages/dashboard-ecommerce.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ admin_assets('js/app.js') }}"></script>

    <!-- dropzone min -->
    <script src="{{ admin_assets('libs/dropzone/dropzone-min.js') }}"></script>
    <!-- filepond js -->
    <script src="{{ admin_assets('libs/filepond/filepond.min.js') }}"></script>
    <script src="{{ admin_assets('libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
    <script src="{{ admin_assets('libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
    <script src="{{ admin_assets('libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
    <script src="{{ admin_assets('libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>

    <script src="{{ admin_assets('js/pages/form-file-upload.init.js') }}"></script>
    
    <!-- sweet alert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script src="../source/alert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ admin_assets('js/toastr.js') }}"></script>
  
  </body>
</html>