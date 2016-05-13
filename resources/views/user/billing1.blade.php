@extends('layouts.user_master')
@section('content')
	{!! Form::open( ['route' => 'billing_payment', 'class' => '', 'role' => 'form', 'id' => 'subscription-form' ] ) !!}
		<div class="payment-errors"></div>
		<div class="form-control form-fields">
	        {!! Form::label('subscription', 'Available Plans')!!}
	        {!! Form::radio('subscription', 'twitter-monthly', true ,['class' => 'subscription_element']) !!}
	        <span class="subscription_label">Twitter Monthly ($10/Month)</span>

	        <div class="clr"></div>
	    </div>
        <div class="form-control form-fields">
            {!! Form::label('subscription', "&nbsp;")!!}
            {!! Form::radio('subscription', 'facebook-monthly' ,['class' => 'subscription_element']) !!}
            <span class="subscription_label">Facebook Monthly($8/Month)</span>

            <div class="clr"></div>
        </div>
        <div class="form-control form-fields">
            {!! Form::label('subscription', "&nbsp;")!!}
            {!! Form::radio('subscription', 'platinum-plan', ['class' => 'subscription_element']) !!}
            <span class="subscription_label">Platinum Plan($20/Month)</span>

            <div class="clr"></div>
        </div>

        

        <h3>Enter Credit Card Details</h3>

        <div class="sub_wrapper">
            <div class="form-control form-fields">
                {!! Form::label( 'ccn', 'Credit card number', ['class' => 'credit-labels']) !!}

                {!! Form::text('ccn', '', [ 'data-stripe' => 'number', 'placeholder' => 'Enter Credit Card Number']) !!}
            </div>

            <div class="form-control form-fields">
                {!! Form::label( 'cvc', 'CVC number', ['class' => 'credit-labels']) !!}

                {!! Form::text('cvc', '', [ 'data-stripe' => 'cvc' , 'placeholder' => 'CVC']) !!}

            </div>

            <div class="form-control form-fields">
                {!! Form::label( 'expiration', 'Expiration date', ['class' => 'credit-labels']) !!}

                {!! Form::text('month', '', [ 'data-stripe' => 'exp-month' , 'placeholder' => 'MM','class' => 'expiration_element']) !!}

                {!! Form::text('year', '', [ 'data-stripe' => 'exp-year' , 'placeholder' => 'YYYY','class' => 'expiration_element']) !!}
                <div class="clr"></div>
            </div>
            <div class="sub_button_wrapper">
                <!-- Button -->
                {!! Form::button('Submit', [ 'type' => 'submit', 'id'  => 'btn-signup', 'class' => 'button green'] ) !!}
                
            </div>

        </div>




	{!! Form::close() !!}
@endsection

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
@endsection