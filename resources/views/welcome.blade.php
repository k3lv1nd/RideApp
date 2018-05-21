<!DOCTYPE HTML>

<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ride App &mdash; </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="RidersApp" />
    <meta name="keywords" content="" />
    <meta name="author" content="kelvin_david" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
    <!-- Themify Icons-->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css')}}">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">

    <!-- Theme style  -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <!-- Modernizr JS -->
    {{-- <script src="js/modernizr-2.6.2.min.js"></script> --}}
    <script src="{{ asset('js/modernizr-2.6.2.min') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    </head>
    <body>
        
    <div class="gtco-loader"></div>
    
    <div id="page">

    
    <!-- <div class="page-inner"> -->
    <nav class="gtco-nav" role="navigation">
        <div class="gtco-container">
            
            <div class="row">
                <div class="col-sm-4 col-xs-12">

                    <div id="gtco-logo"><a href="{{route('about-us')}}">RideApp <em>.</em></a></div>
                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>
                        <li><a href="{{ route('register')}}">Register</a></li>
                        <li><a href="{{route('about-us')}}">About Us</a></li>

                    </ul>   
                </div>
            </div>
            
        </div>
    </nav>
    
    <header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
        <div class="overlay"></div>
        <div class="gtco-container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0 text-left">
                    

                    <div class="row row-mt-15em">
                        <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                            <h1>Join Us To Get Or Give A Ride..</h1> 
                        </div>
                        <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                            <div class="form-wrap">
                                <div class="tab">
                                    
                                    <div class="tab-content">
                                        <div class="tab-content-inner active" data-content="signup">
                                            <h3>Sign In</h3>

        <form action="{{ route('login') }}" method="POST">
            {{csrf_field()}}
            <div class="row form-group">
                <div class="col-md-12">
                    <label for="fullname">Your Email</label>
                <input type="email" name="email" id="fullname" class="form-control" value="{{ old('email')}}">
                    @if($errors->has('email'))
                         <small style="color: red;">{{ $errors->first('email')}}</small>
                    @endif
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <label for="Password">Your Password</label>
                    <input name="password" type="password" id="fullname" class="form-control">
                        @if($errors->has('password'))
                             <small style="color: red;">{{ $errors->first('password')}}</small>
                        @endif
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-12">
                    <input type="submit" class="btn btn-primary btn-block" value="Submit">
                </div>
            </div>
        </form> 
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                    
                </div>
            </div>
        </div>
    </header>
    <!-- </div> -->

    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>
    
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- jQuery Easing -->
    <script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
    <!-- Carousel -->
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <!-- countTo -->
    <script src="{{ asset('js/jquery.countTo.js')}}"></script>

    <!-- Stellar Parallax -->
    <script src="{{ asset('js/jquery.stellar.min.js')}}"></script>

    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/magnific-popup-options.js')}}"></script>
    
    <!-- Datepicker -->
    <script src="{{ asset('js/bootstrap-datepicker.min.js')}}"></script>
    

    <!-- Main -->
    <script src="{{ asset('js/main.js')}}"></script>

    <script>
        // toastr.success("kimaniiii");
      @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;
            
            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
      @endif
</script>


    </body>
</html>

