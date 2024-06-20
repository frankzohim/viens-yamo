@extends('layouts.backoffice.escort.app')
@section('title', __('Profile update'))

@section('content')



<p class="mb-4">{{ __("Here you can view, edit and manage your profile details")}}.</p>

@if ($errors->any())
<div id="ppt-invalid-fields" >
    <div class="container py-5 my-5">
        <div class="alert alert-danger p-3  alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-exclamation-triangle mr-2"></i>  {{ __("Error")}} : </strong> <span id="ppt-invalid-fields-text">
				{{ implode('', $errors->all('<div>:message</div>')) }}
			</span>
        </div>
    </div>
</div>
@endif

<form method="post" action="{{ route('user.update',$user->id) }}"  class="save_store_form" id="global-form">

 @csrf

 <input type="hidden" name="id" value="{{ $user->id }}">
<div class="row mb-4">

    <div class="col-md-3 mb-4 storeimage">
    </div>
    <div class="col-md-9"></div>


    <div class="col-md-6 mb-3">
    <label class="text-600">{{ __("Username")}} <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="username"
	data-key="username" id="username" data-required="1"
	value="{{ ucfirst($user->username) }}" />
    </div>

    <div class="col-md-6 mb-3">
    <label class="text-600">Email <span class="text-danger"></span></label>
    <input type="text" class="form-control" name="email" data-key="email"
	id="email" data-type="email"  value="{{ $user->email }}" />
    </div>

    <div class="col-md-6 mb-3">
    <label class="text-600">{{ __("Phone number")}}</label>
    <input type="text" class="form-control" name="phone_number" data-key="phone" id="phone"
	 value="{{ $user->phone_number }}" />
    </div>
    <div class="col-md-6 mb-3">
        <label class="text-600">{{ __("Password")}}</label>
        <input type="password" class="form-control" name="password" data-key="phone" id="phone"
          />
        </div>
    <div class="col-md-6 mb-3">
    <label class="text-600">{{ __("Town")}}</label>
    <select name="town_id" id="town" data-key="town" class="form-control">
		@foreach ($towns as $town)
			<option value="{{ $town['id'] }}" @if ($town['id'] == $user->town->id) selected @endif>
				 {{ $town['town_name'] }}</option>
		@endforeach
	</select>
</div>


<div class="col-12">

<div ppt-flex-between>
<button type="button" data-ppt-btn class="btn-primary mt-4" onclick="processSubmitForm()">{{ __("Save")}}</button>

</div>

</div>

</div>
</form>

<script>

function processSubmitForm(){

	canContinue = true;

	jQuery('#ppt-invalid-fields').hide();

	jQuery(".form-control").removeClass('required-active');
	jQuery(".ppt-add-listing-error").html('');



	if(!canContinue){
	return;
	}


	//Validating username

	if(jQuery('#username').val() === "" || jQuery('#username').val() === undefined){
			// steps('5','this');
			jQuery('[data-key="username"]').addClass('required-active');
			jQuery('#ppt-invalid-fields').show();
			jQuery('#ppt-invalid-fields-text').html("Veuillez renseigné le nom d'utilisateur");
			scrollTop();
			return false;
	}

	//Validating phone number
	//console.log("in process "+jQuery('#valide-phone-number').val());
	if(jQuery('#phone').val() === "" || jQuery('#phone').val() === undefined){
			// steps('5','this');
			jQuery('[data-key="phone"]').addClass('required-active');
			jQuery('#ppt-invalid-fields').show();
			jQuery('#ppt-invalid-fields-text').html("Le numéro de téléphone est incorrect");
			scrollTop();
			return false;
	}


	if(jQuery('#town').val() === "" || jQuery('#town').val() === undefined){
			// steps('5','this');
			jQuery('[data-key="town"]').addClass('required-active');
			jQuery('#ppt-invalid-fields').show();
			jQuery('#ppt-invalid-fields-text').html("Veuillez renseigné la ville");
			scrollTop();
			return false;
	}


	 // GOOGLE RECAPTURE

	// MOVE ALL FORM DATA INTO PLACE
	jQuery('#SUBMISSION_FORM').html('');
	jQuery('.form-control').each(function(){

		var attr = jQuery(this).attr('name');
		if (typeof attr !== 'undefined' && attr !== false) {

			var type = jQuery(this).attr('type');

			if(  ( type == "checkbox" || type == "radio"  ) && !jQuery(this).prop("checked") ){

			 //console.log(type+' skipped '+attr);

			}else{

			jQuery('#SUBMISSION_FORM').append('<textarea type="text" name="'+jQuery(this).attr('name')+'">'+jQuery(this).val()+'</textarea>');

			}
		}

		//jQuery(this).html().clone().appendTo(jQuery('#SUBMISSION_FORM'));

	});

	// SHOW SPINNER
	if(canContinue){

		jQuery('#ppt-add-listing-form').hide();
		jQuery('#ppt-add-listing-save').show();

		document.getElementById('global-form').submit()

	}

}

</script>

@endsection
