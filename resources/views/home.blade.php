<!DOCTYPE HTML>

<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ride App &mdash; </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="RidersApp" />
    <meta name="keywords" content="" />
    <meta name="author" content="Kelvin_David" />


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

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            background-color: white;
            margin-top: 7em;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #d1d6d5a8;
        }
        button.bookride{
            background-color: #08c;
            color: #f7f5f5;
            border: none;
            font-size: 15px;
        }
    </style>

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
                        
                        <li><a href="#">Welcome ,<i>{{Auth::user()->username}}</i>&nbsp&nbsp&nbsp</a></li>
                        <li><a href="{{ route('view-my-ride')}}">View My Rides</a></li>
                        <li><a href="{{ route('post-ride')}}">Post A Ride</a></li>

                        <li><a href="{{ route('about-us')}}">About Us</a></li>
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
                <table>
                  <tr>
                    <caption style="text-align: center;color: white;">Available Rides </caption>
                    <th>Origin</th>
                    <th>Destionation</th>
                    <th>Capacity Of Vehicle</th>

                    <th>Driver</th>

                    <th>Phone Number</th>
                    <th>Travel Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  @foreach($rides as $ride)

                          <tr>
                            <td>{{$ride->origin}}</td>
                            <td>{{$ride->destination}}</td>
                            <td style="text-align: center;">{{$ride->capacity}}</td>
                            <td>{{$ride->user->username}}</td>
                            <td>{{$ride->user->phonenumber}}</td>
                            <td>{{$ride->travelDateTime}}</td>
                            @if($ride->user->id ===Auth::user()->id)
                            <td colspan="2" style="color: blue;">You Posted This Ride</td>
                            @else
                            <td>{{$ride->status}}</td>
                            <td> 
                                <button type="button" class="bookride" id="bookride{{$ride->id}}" onclick="BookRide('{{$ride->id}}')">Book</button> 
                            </td>
                            @endif
                          </tr>
                        

                   @endforeach
                </table>
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

    <script type="text/javascript">
        function BookRide(id){
            btnId="bookride"+id;
            $('#'+btnId).css({
                'backgroundColor':'green'
            });
            document.getElementById(btnId).innerHTML="Booking !";
            if(id!=""){

                $.ajax({
                    url:"{{route('personbookride')}}",
                    type:"GET",
                    data:{id:id},
                    success:function(response){

                        toastr.success('You have Successfullly booked this Ride.');
                        setTimeout(function(){
                            location.reload();
                        },2000);
                    },
                    error:function(response){
                        console.log(response);
                    }

                });
            }
            
        }
    </script>
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
    </body>
</html>

