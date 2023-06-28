<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
    <meta name="description" content="FindHouse - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href={{{asset('/frontend/css/bootstrap.min.css')}}}>
    <link rel="stylesheet" href={{asset('/frontend/css/style.css')}}>
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href={{asset('/frontend/css/responsive.css')}}>
    <!-- Title -->
    <title>FindHouse - Real Estate HTML Template</title>
    <!-- Favicon -->
    <link href={{asset('/frontend/images/favicon.ico')}} sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href={{asset('/frontend/images/favicon.ico')}} sizes="128x128" rel="shortcut icon" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
<!--    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
    <!--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->
</head>

<div class="wrapper">
    <div class="preloader"></div>




    <!-- Our LogIn Register -->
    <section class="our-log-reg bgc-fa">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 offset-lg-3">
                    <div class="sign_up_form inner_page">
                        <div class="heading">
                            <h3 class="text-center">Register to start learning</h3>
                            <p class="text-center">Have an account?
                                <a class="text-thm" href={{route('adminIndex')}}>Login</a>
                            </p>
                        </div>
                        <div class="details">
                            <form method="POST" action="{{route('adminUserRegistration')}}">
                                @csrf
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" id="exampleInputName2" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" id="exampleInputEmail3" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input NAME="password_confirmation"  type="password" class="form-control" id="exampleInputPassword5" placeholder="Confirm Password">
                                </div>

                                <button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>


<!-- Wrapper End -->
<script type="text/javascript" src={{asset('/frontend/js/jquery-3.3.1.js/')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/jquery-migrate-3.0.0.min.js')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/popper.min.js')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/bootstrap.min.js')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/jquery.mmenu.all.js')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/ace-responsive-menu.js')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/bootstrap-select.min.js')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/snackbar.min.js')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/simplebar.js')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/parallax.js')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/scrollto.js')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/jquery-scrolltofixed-min.js')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/jquery.counterup.js')}}></script>
<script type="text/javascript" src="{{asset('/frontend/js/wow.min.js')}}"></script>
<script type="text/javascript" src={{asset('/frontend/js/progressbar.js')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/slider.js')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/timepicker.js')}}></script>
<script type="text/javascript" src={{asset('/frontend/js/wow.min.js')}}></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src={{asset('/frontend/js/script.js')}}></script>
</body>

</html>


