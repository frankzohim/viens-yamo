@extends('layouts.backoffice.escort.app')
@section('title', __('My Subscriptions'))

@section('content')

@include('utils.utils')

<div class="fs-lg text-600 mb-2">{{ __("My Subscriptions")}} </div>

<p class="mb-4">{{ __("You have")}}  <span class="  ">{{ count($currentPurchase) }}</span> {{ __("subscriptions")}}.

  </p>


      <div id="ajax_makepayment_form"></div>




      <div class="card mb-5" id="myinvoicesform">

        <div class="card-body p-0">
          <div class="overflow-auto">
          @if(count($currentPurchase))
          <table class="table small table-orders">
            <thead>
              <tr>
                <th>{{ __("Ad")}}</th>
                <th class="text-center">{{ __("Subscription Type")}}</th>
                <th class="text-center">{{ __("Payment method")}}</th>

                <th class="text-center">{{ __("Expires on")}}</th>
                <th class="text-center dashhideme">Status</th>
              </tr>
            </thead>
            <tbody>
               @forelse ($currentPurchase as $purchase)
                  <tr class="row-14889" >
                    <td><span class="font-weight-bold">

                    <a href="{{ route('ads.details', ['username'=>$purchase['announce_title'],'slug'=>$purchase['slug']])}}" target="_blank">{{truncate($purchase['announce_title'], 15) }}</a>


                    </span> </td>
                    <td class="text-center">{{ $purchase['membership_type'] }}</td>
                    <td class="text-center">{{ $purchase['payment_type'] }}</td>
                    <td class="text-center">{{ $purchase['expire_at'] }}</td>
                    <td class="text-center">

                      @if($purchase['status']==1)

                         <span class="inline-flex items-center font-weight-bold order-status-icon status-1"> <span class="dot mr-2"></span>
                          <span>{{ __("In progress")}}</span> </span>
                      @else
                          <span class="inline-flex items-center font-weight-bold order-status-icon status-6"> <span class="dot mr-2"></span>
                          <span>{{ __("Expired")}}</span> </span>
                      @endif

                      </td>



                  </tr>
                 @empty

              @endforelse


          </tbody>
          </table>
          @else
           {{ __("You have no subscription")}}<a href="{{ route('db.escort.ads') }}"> {{ __("click here")}} </a> {{ __("to boost your ads")}}.
          @endif
          </div>



        </div>
      </div>





<script>


jQuery(document).ready(function(){

jQuery(".count-invoices-total").html('76');
jQuery(".count-invoices-unpaid").html('0');


jQuery(".count-balance").html("$2,222,400,798.52");

});




   function CheckFormData()
   {

   	var amount = document.getElementById("cashout-amount");
   	var message = document.getElementById("cashout-message");


   	if(message.value == '')
   	{
   		alert("Please provide payment method details.");
   		message.focus();
		jQuery("#pdetails").show();
   		message.style.border = 'thin solid red';
   		return false;
   	}


   	if(amount.value == '')
   	{
   		alert("Please enter a valid amount.");
   		amount.focus();
   		amount.style.border = 'thin solid red';
   		return false;
   	}

	  if(amount.value > 2222400798.52)
   	{
   		alert("Please enter a valid amount.");
   		amount.focus();
   		amount.style.border = 'thin solid red';
   		return false;
   	}

	jQuery("[data-btn-submit]").prop('disabled', true);



     jQuery.ajax({
           type: "POST",
           url: 'https://es10.premiummod.com/',
   		data: {
            action: "cashout_new",
			total: 	amount.value,
			msg: 	message.value,
			method: jQuery('#cashout-method').val(),
           },
           success: function(response) {

			jQuery('.cashoutformmsg').hide();
   			jQuery('#cashoutform').html('').hide();
   			jQuery('#cashoutnew').show();

           },
           error: function(e) {
               alert("error "+e)
           }
       });

   	return false;
   }


</script>
@endsection
