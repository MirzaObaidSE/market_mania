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
            <div class="large-offset-2 large-8 columns">
                <div class="box bg-white">
                    <!-- Profile -->
                    <div class="profile">
                        
                         <img alt="" class="" src="{{asset('./img/logo.png')}}">
                        
                        <h3>Market Mania <small>1.0</small></h3>

                    </div>

        <div class="box-body " style="display: block;">
            <div class="row">
                <div class="large-12 columns">
                    <div class="row">
                        <div class="edumix-signup-panel">
                            <p class="welcome"> Welcome to this awesome app!</p>
                            {!! Form::open( ['route' => 'billing_payment', 'class' => '', 'role' => 'form', 'id' => 'subscription-form' ] ) !!}
                            <div class="payment-errors"></div>
                                    
                                    <div class="row collapse">
                                        
                                              
                                               <h5> Available Plans </h5>
                                            
                                        
                                    </div>

                                    <div class="form-control form-fields">
                                        <div class="row collapse ">
                                            <div class="left small-4 columns">
                                                <span class="prefix bg-green"> 
                                                    {!! Form::radio('subscription', 'twitter-monthly', true ,['class' => 'subscription_element']) !!}
                                                    <span class="subscription_label">Twitter Monthly ($10/Month)</span>
                                                </span>
                                            </div>
                                            <div class=" small-4 columns">
                                                <span class="prefix bg-green">
                                                       {!! Form::radio('subscription', 'facebook-monthly' ,['class' => 'subscription_element']) !!}
                                                    <span class="subscription_label">Facebook Monthly($8/Month)</span> 
                                                </span>
                                            </div>                              
                                            <div class=" small-4 columns">
                                                <span class="prefix bg-green">
                                                    {!! Form::radio('subscription', 'platinum-plan', ['class' => 'subscription_element']) !!}
                                                    <span class="subscription_label">Platinum Plan($20/Month)</span>
                                                </span>
                                            </div>          
                                        </div>
                                    </div>
        <div class="row collapse">
                <div class="row collapse small-4 columns">
                    <span class=""> 
                        Enter Credit Card Details
                    </span>
                </div>
        </div>


        <div style="margin-top=20px;">
            <div class="form-control form-fields">
                <div class="row collapse">
                    <div class="small-5 columns">
                        <span class="prefix bg-green">   
                            {!! Form::label( 'ccn', 'Credit card number', ['class' => 'credit-labels']) !!}
                        </span>
                    </div>
                
                    <div class="left small-7 columns">
                        {!! Form::text('ccn', '', [ 'data-stripe' => 'number', 'placeholder' => 'Enter Credit Card Number']) !!}
                    </div>
                </div>


            <div class="form-control form-fields">
                <div class="row collapse">
                    <div class="small-5 columns">
                        <span class="prefix bg-green"> 
                            {!! Form::label( 'cvc', 'CVC number', ['class' => 'credit-labels']) !!}
                        </span>
                    </div> 
                    <div class="left small-7 columns">                               
                        {!! Form::text('cvc', '', [ 'data-stripe' => 'cvc' , 'placeholder' => 'CVC']) !!}
                    </div>
                </div>
            </div>

            <div class="form-control form-fields">
                <div class="row collapse">
                    <div class="small-5 columns">
                        <span class="prefix bg-green"> 
                            {!! Form::label( 'expiration', 'Expiration date', ['class' => 'credit-labels']) !!}
                        </span>
                    </div>
                    <div class="left small-3 columns"> 
                            {!! Form::text('month', '', [ 'data-stripe' => 'exp-month' , 'placeholder' => 'MM','class' => 'expiration_element']) !!}
                    </div>
                    <div class="left small-4 columns"> 
                        {!! Form::text('year', '', [ 'data-stripe' => 'exp-year' , 'placeholder' => 'YYYY','class' => 'expiration_element']) !!}
                    </div>
                </div>
            </div>
           
                <!-- Button -->
                
                    <div class="row collapse">
                                                
                        <button id="btn-signup" class="bg-green small-12  columns" type="submit"><span> Subscribe </span></button>
                                             
                    </div>
                
          




    {!! Form::close() !!}

    <script type='text/javascript' src="{{asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/preloader-script.js')}}"></script>
    <!-- foundation javascript -->
    <script type='text/javascript' src="{{asset('js/foundation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/foundation.min.js')}}"></script>
    

    <!-- main edumix javascript -->
    <script type="text/javascript" src="{{asset('js/slimscroll/jquery.slimscroll.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/slicknav/jquery.slicknav.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/sliding-menu.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/scriptbreaker-multiple-accordion-1.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/number/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/circle-progress/jquery.circliful.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <!-- additional javascript -->
    <script type='text/javascript' src="{{asset('js/number-progress-bar/jquery.velocity.min.js')}}"></script>
    <script type='text/javascript' src="{{asset('js/number-progress-bar/number-pb.js') }}"></script>
    <script type='text/javascript' src="{{asset('js/loader/loader.js') }}"></script>
    <script type='text/javascript' src="{{asset('js/loader/demo.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/skycons/skycons.js')}}"></script>
@section('script')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
        Stripe.setPublishableKey("{!!env('STRIPE_KEY')!!}");
        $('#subscription-form').submit(function(event) {
            var $form = $(this);

            // Disable the submit button to prevent repeated clicks
            $form.find('button').prop('disabled', true);

            Stripe.card.createToken($form, stripeResponseHandler);

            // Prevent the form from submitting with the default action
            return false;
      });


       var stripeResponseHandler = function(status, response) {
        var $form = $('#subscription-form');

        if (response.error) {
          // Show the errors on the form
          $form.find('.payment-errors').text(response.error.message);
          $form.find('button').prop('disabled', false);
        } else {
          // token contains id, last4, and card type
          var token = response.id;

          // Insert the token into the form so it gets submitted to the server
          $form.append($('<input type="hidden" name="stripe-token">').val(token));
          // and submit
          $form.get(0).submit();
        }
      };        
    </script>
