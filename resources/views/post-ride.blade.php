<!DOCTYPE HTML>

<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ride App &mdash; </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RidesApp" />
    <meta name="keywords" content="" />
    <meta name="author" content="kelvin_david" />
    

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
                    <div id="gtco-logo"><a href="{{route('home')}}">RideApp <em>.</em></a></div>

                </div>
                <div class="col-xs-8 text-right menu-1">
                    <ul>

                        <li><a href="#">Welcome ,<i>{{Auth::user()->username}}</i>&nbsp&nbsp&nbsp</a></li>
                        <li><a href="{{ route('home') }}">Book Ride</a></li>
                        <li><a href="{{ route('view-my-ride')}}">View My Rides</a></li>
                        <li><a href="{{route('about-us')}}">About Us</a></li>

                        <li><a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
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
                    
                    <div class="row-mt-15em" style="margin-top: 7em;">
                        <p style="color: #fff;text-align: center;">Post a Ride</p>
                    <form action="{{ route('post-ride')}}" style="background-color: #fff;padding: 20px" 
                            method="POST"   class="col-md-6 col-md-offset-3">
                            {{csrf_field()}}
                        <div class="form-group">
                            <label for="Origin">Origin</label>
                            <input type="text" class="form-control" name="origin" placeholder="From">
                        </div>
                        <div class="form-group">
                            <label for="Destination">Destination</label>
                            <input type="text" class="form-control" name="destination" placeholder="To">
                        </div>
                        <div class="form-group">
                            <label for="Capacity">Capacity</label>
                            <input type="text" class="form-control" name="capacity" placeholder="Vehicle Sits Available">
                        </div>
                        <div class="form-group">
                            <label for="date-start">Date Travel</label>
                            <input type="text" class="form-control" name="travelDate" id="date-start" placeholder="Must be a future date">
                        </div>
                        <div class="form-group">
                            <label for="Time">Time</label>
                            <input type="number" class="form-control" min="1" max="24" id="startTime" 
                                name="startTime" 
                                placeholder="Ride Time ie 02:00hrs" onchange="changeValue(this.value)">
                                <small id="startTimeshow" style="color: green;"></small>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Add Ride</button>
                        </div>
                    </form>
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
    <script type="text/javascript">
        function changeValue(value) {
            if (value<=24) {
                if (value=="") {
                    document.getElementById("startTimeshow").innerHTML="";
                }
                console.log(value);
                document.getElementById("startTimeshow").innerHTML="";
                // body... 
                if (value<10) {
                    var newvalue="0"+value+":00hrs";
                    document.getElementById("startTimeshow").innerHTML=newvalue;
                    
                }else{
                    var newvalue=value+":00hrs";
                    document.getElementById("startTimeshow").innerHTML=newvalue;

                }
                
            }else{
                document.getElementById("startTimeshow").innerHTML="";
            }
        }
    </script>
    <script src="{{ asset('js/jquery.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

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

    </body>

<script>
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

</html>

