<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="advanced custom search, agency, agent, business, clean, corporate, directory, google maps, homes, idx agent, listing properties, membership packages, property, real broker, real estate, real estate agent, real estate agency, realtor">
    <meta name="description" content="FindHouse - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- Title -->
    <title>FindHouse - Real Estate</title>
    <!-- Favicon -->
    <link href="{{asset('frontend/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{asset('frontend/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" />
</head>

    <body>

        <div class="wrapper">

            @if(\Illuminate\Support\Facades\Request::route()->getName() == 'index')

                @include('frontend.layout.header-index')
            @else
                @include('frontend.layout.header')
            @endif


            @include('frontend.layout.modal')

            @yield('top_section')
            @yield('main_section')

            @yield('main_content')

            @include('frontend.layout.footer')

        </div>


        <script type="text/javascript" src="{{asset('frontend/js/jquery-3.3.1.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/jquery-migrate-3.0.0.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/popper.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/jquery.mmenu.all.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/ace-responsive-menu.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/bootstrap-select.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/isotop.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/snackbar.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/simplebar.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/parallax.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/scrollto.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/jquery-scrolltofixed-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/jquery.counterup.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/wow.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/slider.js')}}"></script>
        <script type="text/javascript" src="{{asset('frontend/js/timepicker.js')}}"></script>
        <!-- Custom script for all pages -->
        <script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>

</body>