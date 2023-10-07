 <input type="number" name="money" value={{$tien}} hidden />@extends('layouts.app') 
@section('content')
<script src="{{URL::asset('http://code.jquery.com/jquery-1.10.2.js')}}"></script>
<script src="{{URL::asset('http://code.jquery.com/ui/1.11.2/jquery-ui.js')}}"></script>
<script src="{{URL::asset('http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js')}}"></script>
<style>
    .StripeElement {
        background-color: white;
        height: 40px;
        padding: 10px 12px;
        border-radius: 4px;
        border: 1px solid transparent;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
        border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }
</style>
<div class="row">
    <div class="row">
        <div class="col-md-6 col-md-offset-3" style="margin-top: 69px;">
            <div class="panel panel-default" style="border-top-color: #e74c3c;">
                <div class="panel-heading">Thẻ tín dụng hoặc thẻ ghi nợ :</div>
                <div class="panel-body">
                    <form action="/api/payment" method="POST" id="payment-form">
                        {{ csrf_field()}}
                        <div class="form-row">
                            <br>
                             <input type="number" name="money" value="{{$tien}}" hidden />
                             <input type="number" name="id" value="{{$idreser}}" hidden />
                            <label for="card-element">
                            Số Tiền : {{$tien}}
                            </label><br>
                            <label for="card-element">
                            Nhập thẻ visa của bạn:
                            </label>
                            <div id="card-element">
                            </div>
                            <br>
                            <input type="text" name="emailuser" value={{$email}} hidden />
                            <input type="text" name="infor" value={{$hotel}} hidden />
                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                            <input type="submit" class="btn btn-primary" value="Thanh toán">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('pk_test_ItuZYuR5FyuPR4aFtaEFKlmh');
            var elements = stripe.elements();
            var style = {
        base: {
        // Add your base input styles here. For example:
        fontSize: '16px',
        color: "#32325d",
      }
    };
    
    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});
    
    // Add an instance of the card Element into the card-element <div>.
    card.mount('#card-element');
    card.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();
    
      stripe.createToken(card).then(function(result) {
        if (result.error) {
          // Inform the customer that there was an error.
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
        } else {
            console.log("222");
            
          // Send the token to your server.
          stripeTokenHandler(result.token);
        }
      });
    });
    function stripeTokenHandler(token) {
        console.log('2',token);
        
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);
    
      // Submit the form
      form.submit();
    }
    </script>
</div>
@endsection