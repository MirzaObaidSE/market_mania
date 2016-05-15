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
                                      <form method="POST" action="/auth/login" id="loginform">
                                        {!! csrf_field() !!}
                                            <div class="row collapse">
                                                <div class="small-2  columns">
                                                    <span class="prefix bg-green"><i class="text-white icon-user"></i></span>
                                                </div>
                                                <div class="small-10  columns">
                                                  <input type="text" name="email" value="{{ old('email') }}">
                                                </div>
                                            </div>
                                            <div class="row collapse">
                                                <div class="small-2 columns ">
                                                    <span class="prefix bg-green"><i class="text-white icon-lock"></i></span>
                                                </div>
                                                <div class="small-10 columns ">
                                                  <input type="password" name="password">
                                                </div>
                                            </div>
                                             <div class="row collapse">
                                                <div class="small-2 columns ">
                                                  <input type="checkbox" name="remember"> 
                                                </div>
                                                <div class="small-10 columns ">
                                                    <span class="prefix bg-green"> Remmember me</span>
                                                </div>
                                                
                                            </div>
                                        <p>Already have an account? <a href="#">Forgot password ?</a>
                                        </p>
                                        <div class="row collapse">
                                        <button class="bg-green small-12 columns" type="submit"><span>Log in</span></button>
                                        </div>
                                        <h2><span>New User? Register here</span></h2>
                                        <a href="{{ action("Auth\AuthController@getRegister")}}" class="bg-green"><span>Sign Up</span> </a>
                                        <br>
                                        </form>
                                        <h2><span>Connect with</span></h2>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="large-5 columns no-pad">
                                        <div class="edumix-footer-panel">
                                            <a href="#"><span class="bg-aqua"><i class="fa fa-twitter"></i>&nbsp;&nbsp;sign in with twitter</span></a>
                                        </div>
                                    </div>
                                    <div class="large-2 columns"></div>
                                    <div class="large-5 columns no-pad">
                                        <div class="edumix-footer-panel">
                                            <a href="#"><span class="bg-dark-blue"><i class="fa fa-facebook"></i>&nbsp;&nbsp;sign in with facebook</span></a>
                                        </div>
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
    <script type='text/javascript' src="{{asset('js/jquery.validate.min.js')}}"></script>
    <!-- additional javascript -->



  
<!-- $(document).foundation();-->
    <script type="text/javascript">
        $('#loginform').validate({
            rules: {
                email: {
                    required: true, 
                    email: true    
                },
                password:{
                    required:true
                },            
            },

        });
    </script>



</body>

</html>
