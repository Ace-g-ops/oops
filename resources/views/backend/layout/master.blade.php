
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from grandetest.com/theme/findhouse-html/page-add-new-property.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 05 Nov 2020 14:13:53 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
    <meta name="description" content="FindHouse - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/dashbord_navitaion.css')}}">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <!-- Title -->
    <title>FindHouse - Real Estate HTML Template</title>
    <!-- Favicon -->
    <link href="{{asset('frontend/images/favicon.ico')}}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{'frontend/images/favicon.ico'}}" sizes="128x128" rel="shortcut icon" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<!--    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    <!--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    {{--    <![endif]-->--}}
</head>

<body>

    <div class="wrapper">

        <div class="preloader"></div>

        @include('backend.layout.header')
        @include('backend.layout.sidebar')

        @yield('main_content')


    </div>


<!-- Wrapper End -->

<script type="text/javascript" src="{{asset('frontend/js/jquery-3.3.1.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.mmenu.all.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/ace-responsive-menu.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/snackbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/simplebar.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/scrollto.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery-scrolltofixed-min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.counterup.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/progressbar.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/timepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/smartuploader.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/dashboard-script.js')}}"></script>
<script type="text/javascript" src="{{asset('frontend/js/googlemaps1.js')}}"></script>

<!-- Custom script for all pages -->
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>

</body>
</html>

