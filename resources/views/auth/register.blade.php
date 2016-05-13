
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Market Mania</title>

   
   <link rel="stylesheet" type="text/css" href="{{asset('css/foundation.css')}}"/>
    <!-- Custom styles for this template -->

    
    <link rel="stylesheet" type="text/css" href="{{asset('css/dashboard.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/dripicon.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/typicons.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/theme.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}"/>
    <!-- pace loader -->
    
    <script src="{{asset('js/pace/pace.js')}}"></script>
    <link href="{{asset('js/pace/themes/orange/pace-theme-flash.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('js/slicknav/slicknav.css')}}"/>
    <script type="text/javascript" src="{{asset('/js/vendor/modernizr.js')}}"></script>
</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- End of preloader -->
    <!-- right sidebar wrapper -->

    <div class="inner-wrap">
        <div class="wrap-fluid">
            <br>
            <br>
            <!-- Container Begin -->
            <div class="large-offset-4 large-4 columns">
                <div class="box bg-white">
                    <!-- Profile -->
                    <div class="profile">
                        
                         <img alt="" class="" src="{{asset('./img/logo.png')}}">
                        
                        <h3>Market Mania <small>1.0</small></h3>

                    </div>
                    <!-- End of Profile -->

                    <!-- /.box-header -->
                    <div class="box-body " style="display: block;">
                        <div class="row">

                            <div class="large-12 columns">
                                <div class="row">
                                    <div class="edumix-signup-panel">
                                        <p class="welcome"> Welcome to this awesome app!</p>
                                      <form method="POST" action="/auth/register">
                                            {!! csrf_field() !!}
                                            <div class="row collapse">
                                                <div class="small-5  columns">
                                                    <span class="prefix bg-green">Enter Company Name</span>
                                                </div>
                                                <div class="small-7  columns">
                                                      <input type="text" name="name" value="{{ old('name') }}">
                                                </div>
                                            </div>
                                            <div class="row collapse">
                                                <div class="small-5  columns">
                                                    <span class="prefix bg-green">Enter Email</span>
                                                </div>
                                                <div class="small-7  columns">
                                                      <input type="text" name="email" value="{{ old('email') }}">
                                                </div>
                                            </div>
                                            <div class="row collapse">
                                                <div class="small-5 columns ">
                                                    <span class="prefix bg-green">Enter Password</span>
                                                </div>
                                                <div class="small-7 columns ">
                                                    <input type="password" name="password">
                                                </div>
                                            </div>
                                            <div class="row collapse">
                                                <div class="small-5 columns ">
                                                    <span class="prefix bg-green">Confirm Password</span>
                                                </div>
                                                <div class="small-7 columns ">
                                                    <input type="password" name="password_confirmation">
                                                </div>
                                            </div>
                                            <div class="row collapse">
                                                <div class="small-5  columns">
                                                    <span class="prefix bg-green">Phone No</span>
                                                </div>
                                                <div class="small-7  columns">
                                                      <input type="text" name="phone_no" value="{{ old('phone_no') }}">
                                                </div>
                                            </div>
                                             <div class="row collapse">
                                                <div class="small-5  columns">
                                                    <span class="prefix bg-green">Website</span>
                                                </div>
                                                <div class="small-7  columns">
                                                      <input type="text" name="website" value="{{ old('website') }}">
                                                </div>
                                            </div>
                                            <div class="row collapse">
                                                
                                            <button class="bg-green small-12  columns" type="submit"><span> Register </span></button>
                                             
                                            </div>

  
                                        </form>
                                        
                                     
                                        
            
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end .timeline -->
                </div>
                <!-- box -->
            </div>
        </div>
        <!-- End of Container Begin -->
    </div>

    <!-- end paper bg -->



    <!-- end of inner-wrap -->



    <!-- main javascript library -->
    
    <script type='text/javascript' src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/preloader-script.js')}}"></script>
    <!-- foundation javascript -->
    <script type="text/javascript" src="{{asset('js/foundation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/foundation/foundation.dropdown.js')}}"></script>
    <!-- main edumix javascript -->
    <script type="text/javascript" src="{{asset('js/slimscroll/jquery.slimscroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slicknav/jquery.slicknav.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sliding-menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/scriptbreaker-multiple-accordion-1.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/number/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/circle-progress/jquery.circliful.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <!-- additional javascript -->



    <script>
    $(document).foundation();
    </script>



</body>

</html>
