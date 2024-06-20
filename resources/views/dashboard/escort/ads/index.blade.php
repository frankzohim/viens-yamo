@extends('layouts.backoffice.escort.app')
@section('title', __('My Ads'))

@section('content')

@include('utils.utils')

<div class="fs-lg text-600 mb-2"> {{ __("My Ads")}} </div>

<p class="mb-4">{{ __("You have")}} <span class="  ">{{ count($ads) }}</span> {{ __("Ads")}}.

  </p>


      <div id="ajax_makepayment_form"></div>




      <div class="card mb-5" id="myinvoicesform">

        <div class="card-body p-0">
          <div class="overflow-auto">
          @if(count($ads))
          <table class="table small table-orders">
            <thead>
              <tr>
                <th>{{ __("Title")}}</th>
                <th class="text-center">Description</th>
                <th class="text-center">{{ __("Category")}}</th>

                <th class="text-center">Status</th>
                <th class="text-center dashhideme">Actions</th>
              </tr>
            </thead>
            <tbody>
               @forelse ($ads as $ad)
                  <tr class="row-14889" >
                    <td><span class="font-weight-bold">

                    <a href="{{ route('ads.details', ['username'=>$ad['user']['username'],'slug'=>$ad['slug']])}}" target="_blank">{{truncate($ad['title'], 20) }}</a>


                    </span> </td>
                    <td class="text-center text-muted">{{truncate($ad['description'], 20) }}</td>
                    <td class="text-center">{{ $ad['category']['title'] }}</td>

                    <td class="text-center">

                      @if($ad['status']===1)

                         <span class="inline-flex items-center font-weight-bold order-status-icon status-1"> <span class="dot mr-2"></span>
                          <span> {{ __("Publish")}}</span> </span>
                      @else
                          <span class="inline-flex items-center font-weight-bold order-status-icon status-6"> <span class="dot mr-2"></span>
                          <span> {{ __("Unpublish")}}</span> </span>
                      @endif

                      </td>


                    <td class="text-center dashhideme">
                      <a href="{{ route('ads.edit', ['id' => $ad['id']]) }}" class="tooltip1">
                         <span class="tooltiptext1">{{ __("Edit")}}</span>
                        <i class="fa fa-edit me-2 font-success"></i></a>
                        &nbsp;
                      <a href="{{ route('ads.delete',['id' => $ad['id']])  }}" class="tooltip1" data-toggle="modal" data-target="#exampleModal{{$ad['id']}}">
                         <span class="tooltiptext1">{{ __("Delete")}}</span>
                        <i class="fa fa-trash font-danger"></i>
                      </a>
                       &nbsp;
                      @if($ad['isSubscribe']===0)
                        <a href="{{ route('membership.display',['adsId' => $ad['id'], 'membership' =>'null'])  }}" class="tooltip1">
                          <span class="tooltiptext1">{{ __("Boost")}}</span>
                            <i class="fa fa-plane font-danger"></i>
                        </a>

                      @else
                        <a href="{{ route('membership.display',['adsId' => $ad['id'], 'membership' =>'null'])  }}" class="tooltip1">
                            <span class="tooltiptext1">{{ __("Boosted")}}</span>
                            <i class="fa fa-check font-danger"></i>
                        </a>
                      @endif


                       <div class="modal fade" id="exampleModal{{$ad['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">{{ __("Deletion")}}</h5>
                                                    <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('ads.delete',['id' => $ad['id']]) }}" id="delete-form{{$ad['id']}}">
                                                    @csrf
                                                    <p>{{ __('Do you want to delete this item?') }}</p>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">{{ __("Yes")}}</button>
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">{{ __("Cancel")}}</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                    </td>
                  </tr>
                 @empty

              @endforelse


          </tbody>
          </table>
          @else
           {{ __("You have no ads")}} <a href="{{ route('ads.create') }}"> {{ __("click here")}} </a>  {{ __("to create one")}}.
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
