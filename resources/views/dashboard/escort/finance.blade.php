@extends('layouts.backoffice.escort.app')
@section('title', __('My Transactions'))

@section('content')





<div ppt-border1 class="mb-4 bg-light border-top-0 page-orders">
  <div class="d-xl-flex" >



    <div class="h-100 account-left">
      <div ppt-box class="w-100">


        <div class="_content p-0" id="_account_menuitems">
        </div>
      </div>
    </div>


    <div class="w-100 bg-white">

      <div ppt-box class="flex-column account-right shadow-0">

        <div class="_content p-lg-5 p-3" >


<div class="fs-lg text-600 mb-2">{{ __("My Transactions")}}  </div>

<p class="mb-4">{{ __("Your account has")}} <span class="">{{ $userBalance }} {{ __("of credits")}}</span>.

  </p>







      <div id="ajax_makepayment_form"></div>
            <div class="card mb-5" id="myinvoicesform">

        <div class="card-body p-0">
          <div class="overflow-auto">
            @if(count($payments)!=0)
            <table class="table small table-orders">
                <thead>
                  <tr>
                    <th> ID</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">{{ __("Amount")}}</th>

                    <th class="text-center">Status</th>
                    <th class="text-center dashhideme">Type</th>
                  </tr>
                </thead>
                <tbody>


                   @foreach ($payments as $payment)
                   <tr class="row-2989" >
                    <td><span class="font-weight-bold">

                       {{ $payment->id }}


                        </span>
                    </td>
                    <td class="text-center text-muted">{{ $payment->created_at }}</td>
                    <td class="text-center">{{ $payment->price }} XAF</td>

                    <td class="text-center">




                       @if($payment->status=="2")
                        <span class="inline-flex items-center font-weight-bold order-status-icon status-1"> <span class="dot mr-2"></span>
                        <span>{{ __("Paid")}}</span> </span>
                        @endif
                         @if($payment->status=="1")
                        <span class="inline-flex items-center font-weight-bold order-status-icon status-5"> <span class="dot mr-2"></span>
                        <span>{{ __("Failed")}}</span> </span>
                        @endif




                    </td>


                            <td class="text-center dashhideme"><a href="https://es10.premiummod.com/?invoiceid=2989" class="btn btn-system btn-sm" target="_blank">{{ $payment->payment_type }}</a>
                              </td>
          </tr>
                   @endforeach

                        </tbody>
              </table>
            @endif
              @if (count($payments)==0)
              {{ __("You have not yet made any transactions")}}.
              @endif
          </div>



        </div>
      </div>






<script>


jQuery(document).ready(function(){

jQuery(".count-invoices-total").html('80');
jQuery(".count-invoices-unpaid").html('0');


jQuery(".count-balance").html("$2,222,394,955.52");

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

	  if(amount.value > 2222394955.52)
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




        </div>
      </div>
    </div>
  </div>
</div>

@endsection
