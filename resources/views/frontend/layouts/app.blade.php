<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- FAVICONS ICON -->
    <link rel="icon" href="{{asset('images/mistri_icons.png')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/mistri_icons.png')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- PAGE TITLE HERE -->
    <title>Hello Mistri Digital</title>
    @include('frontend.layouts.css')

    @yield('styles')

</head>

<body>


	<div class="page-wraper">
        {{-- @if($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif --}}

    <!-- HEADER START -->
    @include('frontend.layouts.header')

    <!-- HEADER END -->

        <!-- Content -->
        @yield('content')
        <!-- Content END-->

        <!-- FOOTER START -->
        @include('frontend.layouts.footer')
        @include('frontend.layouts.js')
        <form method="POST" action="" id="searchResult">
            @csrf
            <input type="hidden" name="service" id="service_srch" />
        </form>
        <script>
            function search(id) {
                $('#service_srch').val(id);
                $('#searchResult').submit();
            }
        </script>
        @yield('scripts')
</body>
</html>

