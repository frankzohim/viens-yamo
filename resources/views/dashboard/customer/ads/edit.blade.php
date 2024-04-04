@extends('layouts.backoffice.escort.app')
@section('title', __('Modifier mon annonce'))

@section('content')

<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
      
<div class="fs-lg text-600 mb-2">Editer votre annonce </div>

    
      <main id="page-content-wrapper" class="with-mobilemenu">



<div id="ppt-add-listing-save" style="display:none;">
    <div class="container py-5 my-5">
        <div class="alert alert-primary p-3 alert-dismissible fade show" role="alert">
            <strong><i class="fa fa-spin fa-sync mr-3"></i>  Saving Your Changes</strong> - This may take a few minutes, please wait...
        </div>
    </div>
</div>

<div id="ppt-add-listing-save-success" style="display:none;">
    <div class="container py-5 my-5">
        <div class="alert alert-success p-3  alert-dismissible fade show" role="alert">
            <strong><i class="fa fa-check mr-3"></i>  Super</strong> - Votre annonce a été créée, cliquez ici pour la mettre en avant.
        </div>
    </div>
</div>

@if (session('success'))
<div id="" >
    <div class="container py-5 my-5">
        <div class="alert alert-success p-3  alert-dismissible fade show" role="alert">
            <strong><i class="fa fa-check mr-3"></i>  Super</strong> - Votre annonce a été mise à jour avec succès.
        </div>
    </div>
</div>
@endif

@if($errors->any())
<div id="ppt-invalid-fields1" >
    <div class="container py-5 my-5">
        <div class="alert alert-danger p-3  alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-exclamation-triangle mr-2"></i>  Erreur : </strong> <span id="ppt-invalid-fields-text">{{$errors->first()}}</span>
        </div>
    </div>
</div>
@endif

<div id="ppt-invalid-fields" style="display:none;">
    <div class="container py-5 my-5">
        <div class="alert alert-danger p-3  alert-dismissible fade show" role="alert">
            <strong><i class="fas fa-exclamation-triangle mr-2"></i>  Erreur : </strong> <span id="ppt-invalid-fields-text"></span>
        </div>
    </div>
</div>


<div id="ppt-add-listing-form" class="my-5 ppt-forms style3" data-step="1">


<section class="container px-0 add-block block1 active">

 <div class="ppt-add-listing-error"></div>

<div class="add-block-wrap">

    <div class="row no-gutters">

    


    <div class="col-lg-12">

    <div class="card card-add-block mb-0"><div class="card-body">

<form  action="{{ route('ads.update') }}" id="global-form"  method="post">
@csrf
<input type="hidden" name="ads_id" id="ads_id" value="{{ $ad['id'] }}">
<div class="row">

<div class="col-md-6 mobile-mb-2">
<label>Titre <span class="text-danger">*</span> </label>

<div class="form-group position-relative">
    <input type="text" placeholder="Entrer le titre de l'annonce" class="form-control" 
    name="title" id="title" data-key="title" value="{{ $ad['title'] }}" autocomplete="current-password">

  </div>

</div>

<div class="col-md-6 mobile-mb-2">

<label>Catégorie <span class="text-danger">*</span> </label>
<div class="form-group position-relative">
  
	@if($adsCategories)
    <select class="form-control" name="category" id="category">
		@forelse ($adsCategories as $category)
			<option value="{{  $category['id'] }}" @if ($ad['category']['id'] ==$category['id']) selected @endif >
        {{ $category['title'] }}</option>
		@empty
		@endforelse

	</select>
	@endif
  </div>

</div>

</div>

<div class="row">

<div class="col-md-6 mobile-mb-2">

	<label>Déplacement<span class="text-danger">*</span> </label>
		<input type="hidden" id="user_id" value="{{ $user->id }}" name="user_id">
		<div class="form-group position-relative">
				
					 <select class="form-control" name="location" id="location">
						<option value="Reçoit ou se déplace" @if ($ad['accepted'] =="Reçoit ou se déplace") selected @endif>Reçoit ou se déplace</option>
						<option value="Se déplace seulement" @if ($ad['accepted'] =="Se déplace seulement") selected @endif>Se déplace seulement</option>
						<option value="Reçoit seulement" @if ($ad['accepted'] =="Reçoit seulement") selected @endif>Reçoit seulement</option>
				</select>
        </div>

		
</div>

<div class="col-md-6 mobile-mb-2">

	<label> Clients Acceptés <span class="text-danger">*</span> </label>
<div class="form-group position-relative">
  
    <select class="form-control" name="accepted" id="accepted">
			<option value="Hommes" @if ($ad['accepted'] =="Hommes") selected @endif>Hommes</option>
			<option value="Femmes" @if ($ad['accepted'] =="Femmes") selected @endif>Femmes</option>
			<option value="Tout le monde"  @if ($ad['accepted'] =="Tout le monde") selected @endif>Tout le monde</option>
	</select>
  </div>

</div>

</div>
<div class="row">
<div class="col-md-12 mobile-mb-2">
  
  <div class="form-group">
  <div id="textarea_counter" class="text-muted small float-right">
    <span></span>
  </div>
  <input type="hidden" name="textarea_counter_hidden" value="100" id="textarea_counter_hidden">
  <input type="hidden" id="adsdesciption" value="1" name="adsdesciption">
    <label class="w-100">Description  <span class="text-danger">*</span> </label>
    <textarea name="form[post_content]"  rows='5' class="form-control rounded-0 required-field" tabindex="2" 
    data-key="field-post_content" id="field-post_content">{{ $ad['description'] }}</textarea>
  </div>
	
</div>

</div>
@csrf
					 
						
</form>
<div class="row">
<div class="col-md-12 mobile-mb-2">
	
  <div class="card-sponsored p-3 mb-4 rounded overflow-hidden" style="overflow-x: visible; display:none;" ppt-border1>


<div class="owl-carousel owl-theme" data-1200="8" data-1000="6" data-600="4" 
data-0="2" data-margin="20" data-autoplay="1" style="z-index:12">

    @forelse ($ad['images'] as $image)
      
   
		<div class="item">


		<div class="badge_tooltip" data-direction="top">
			<div class="badge_tooltip__initiator"> 
		 
		  
		<div class="position-relative overflow-hidden rounded border" style="height:100px;max-width:120px;">
			<div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$image['path']] )}}">
			   
			</div>
		</div>
		  
		 
			</div>
			<div class=" text-center">
			<div class='small opacity-5'><a href="#" class="text-dark" data-toggle="modal" data-target="#exampleModal{{$image['id']}}"><i class="fa fa-trash" style="color:red;"></i> </a></div>    </div>
		  </div>


		  

		</div>
     @empty
      
    @endforelse    

</div>
</div>
       @forelse ($ad['images'] as $image)
       <div class="modal fade" id="exampleModal{{$image['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Suppression</h5>
                                                    <button class="btn-close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('ads.delete',['id' => $image['id']]) }}" id="delete-form{{$ad['id']}}">
                                                    @csrf
                                                    <p>{{ __('Voulez vous supprimer cet élément?') }}</p>
                                                   
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Oui</button>
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                          @empty
      
    @endforelse            
	<div >
			<label class="w-100">Photos (10 maximum) ( vous pouvez encore ajouter {{ 10 - count($ad['images']) }} images) <span class="text-danger">*</span> (.png, .jpg, .jpeg) </label> 
		   
			<div class="cardbox closed" onclick="jQuery('#ratesbox, #ratesbit').toggle();">
				  <i class="fa fa-cloud-upload" style="color:red"></i>
				  <div class="small">
					 <form  class="dropzone" action="{{ route('update.image') }}" id="ads-dropzone" name="file" files="true" enctype="multipart/form-data">
					  @csrf
						 <input type="hidden" name="ads_id" id="ads_id" value="{{ $ad['id'] }}">
						
					 </form>     
				  </div>
				</div>
			
          

            
     </div>

</div>
</div>
 
 <script>
  Dropzone.options.adsDropzone = { // camelized version of the `id`
    paramName: "file", // The name that will be used to transfer the file
    maxFilesize: 2, // MB
	maxFiles : 5,
    acceptedFiles: ".jpeg,.jpg,.png",
	Name: "Chargez vos fichiers ici",
    init: function() {
    this.on("addedfile", file => {
		//Check number of added photos
		if(this.files.length > 5){
			this.removeFile(file);
			return;
		}
       if (this.files.length) {
        var _i, _len;
        for (_i = 0, _len = this.files.length; _i < _len - 1; _i++) // -1 to exclude current file
        {
            if(this.files[_i].name === file.name && this.files[_i].size === file.size && this.files[_i].lastModified.toString() === file.lastModified.toString())
            {
                this.removeFile(file);
            }
        }
    }
    });
  }
  };
</script>




<!-- Google Recaptcha -->
        <div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>
<div class="row mb-2">



<input type="hidden" class="form-control" name="custom[lookinggen]" id="switchVal" value="">



<input type="hidden" class="form-control" name="tax[dagender]" id="gender" value="2">


<script>

function CheckNewStore(val){

if(val == "-1"){
jQuery('#switchNewStore').show();
jQuery('#switchNewStore').find('input').addClass('form-control');
}

}

function processGender(id){
	jQuery('.gender').removeClass('checked');
	jQuery('.gender-'+id).addClass('checked');
	jQuery("#gender").val(id);
	jQuery("#reg_field_tax_dagender").val(id);
}
function processSwitch(id){

	jQuery(".switchValDiv").hide()
	if(id == 2){
		jQuery(".switchValDiv").show();
		LoadStoreList();
	}
	jQuery('.ingender').removeClass('checked');
	jQuery('.ingender-'+id).addClass('checked');
	jQuery("#switchVal").val(id);

}
function processInterested(id){
	jQuery('.ingender1').removeClass('checked');
	jQuery('.ingender1-'+id).addClass('checked');
	jQuery("#ingender").val(id);

}

jQuery(document).ready(function() {
	jQuery('#reg_field_tax_dagender').on('change', function () {
		processGender(jQuery("#reg_field_tax_dagender").val());
	});
});

jQuery(document).ready(function() {
	processSwitch();
});


</script>
</div>




<div id="default_map_data">
<input type="hidden" name="custom[map-country]" value=""><input type="hidden" name="custom[map-city]" value="">
		<input type="hidden" name="custom[map-log]" value="0"><input type="hidden" name="custom[map-lat]" value="0"></div>




    </div>
    <div class="card-footer">


    <div class="d-flex justify-content-between p-2 text-600">
		<div class="row">
<div class="col-md-8 mobile-mb-2">


</div>


    <div>
    <button data-ppt-btn="" class=" btn-system btn-forward btn-lg scroll-top-quick text-600" type="button" id="register-btn"
	onclick="processSubmitForm()">Enregistrer l'annonce</button>


    </div>


    </div>

     </div>

    </div>

    </div>

    </div>


</div>



</section>

 </div>

<section class="mb-5  text-600 show-mobile">
<div class="container">

<button type="button" data-ppt-btn="" class=" btn-lg btn-secondary btn-save" id="mainSaveBtn">Créer l'annonce</button>

</div>
</section>




</main>
    

<script>

jQuery(document).ready(function(){

	textarealimit();

	jQuery('.scroll-top-quick').click(function () {
			jQuery('body,html').animate({
				scrollTop: 0
			}, 100);
			return false;
	});





	jQuery(".btn-save").on('click',function(e) {
		processSubmitForm();
	});

		setTimeout(function(){

			showcustomfields();

		}, 2000);



});

function steps(id,action){

	jQuery('.add-block').removeClass('active');

	if(action == "this"){
		jQuery('.block'+id).addClass('active');
	}else if(action == "forward"){
		nxt = parseFloat(id)+1;
		console.log(nxt);
		jQuery('.block'+nxt).addClass('active');
	}else{
		console.log(id);
		nxt = parseFloat(id)-1;
		console.log(nxt);
		jQuery('.block'+nxt).addClass('active');
	}

}


function processEditData(btype){

	fd = btype;

	 if(btype != "map" && btype != "category" && jQuery(".modal-"+fd).length > 0){

		 jQuery(".modal-"+fd).remove();

	 }else{

	jQuery.ajax({
			type: "POST",
			url: ajax_site_url,
			data: {
				   action: "load_editlisting_form",
				   type: btype,
				   eid: 0,

			   },
			   success: function(response) {


			   pptModal(btype, response, "modal-bottom-rightxxx", "ppt-animate-fadein bg-white w-700 p-3", 0);

				if(btype == "map"){

				jQuery('head').append('<link rel="stylesheet" href="'+ CNDPath + 'css/css.plugins-flag.css" type="text/css" id="ppt-loaded-flags" />');

				}

				if(btype == "sms"){

					loadJS(CNDPath + 'js/js.mobileprefixU.js', 'ppt-mobile-sms', function(el) {

						var handleChange = function() {
							jQuery("#mobilenum-input").val(iti.getNumber());
						}

						var input = document.querySelector("#mobilenum-input");
						var iti = window.intlTelInput(input, {
						  onlyCountries :["FR"],
						  utilsScript: "https://ppt1080.b-cdn.net/js/js.mobileprefixU.js",
						 // autoHideDialCode: false,
						  nationalMode: true,

						});

						input.addEventListener('change', handleChange);
						input.addEventListener('keyup', handleChange);

						jQuery(".iti__country-list li").click(function(e) {
							jQuery("#mobilenum-input").val( '+' + jQuery(this).data('dial-code') );

						});
					});

				}


			   },
			   error: function(e) {
				   console.log(e)
			   }
		   });

	}

}


function processSubmitForm(){

	canContinue = true;

	
	

	jQuery('#ppt-invalid-fields').hide();

	jQuery(".form-control").removeClass('required-active');
	jQuery(".ppt-add-listing-error").html('');



	if(!canContinue){
	return;
	}

	//Validating title

	if(jQuery('#title').val() === "" || jQuery('#title').val() === undefined){
			// steps('5','this');
			jQuery('[data-key="title"]').addClass('required-active');
			jQuery('#ppt-invalid-fields').show();
			jQuery('#ppt-invalid-fields-text').html("Veuillez renseigné le titre de l'annonce");
			return false;
	}

 	


    	if(jQuery('#field-post_content').val() === "" || jQuery('#field-post_content').val() === undefined){
			// steps('5','this');
			jQuery('[data-key="field-post_content"]').addClass('required-active');
			jQuery('#ppt-invalid-fields').show();
			jQuery('#ppt-invalid-fields-text').html("La description est requise");
			return false;
	}

	//Checking if at least one image has been successfully uploaded
	// let adsDropzone = document.getElementById("ads-dropzone");
	// let children = adsDropzone.children;
	// var numberUpload = 0;
	// for (let i = 0; i < children.length; i++) {
	
	// 	if (Array.from(children[i].classList).includes('dz-success')){
	// 		numberUpload++;
	// 	}
	// }

	// if(numberUpload < 1){
	// 	jQuery('#ppt-invalid-fields').show();
	// 	jQuery('#ppt-invalid-fields-text').html("Veuillez renseigné au moins une image");
	// 	return false;
	// }


	// if(jQuery('#g-recaptcha-response').val() === "" || jQuery('#g-recaptcha-response').val() === undefined){
		
	// 		jQuery('[data-key="g-recaptcha-response"]').addClass('required-active');
	// 		jQuery('#ppt-invalid-fields').show();
	// 		jQuery('#ppt-invalid-fields-text').html("Veuillez compléter le captcha");
	// 		return false;
	// }


		// BUSINESS HOURS PLUGIN
	jQuery('.startTime').attr('name', 'startTime[]');
	jQuery('.endTime').attr('name', 'endTime[]');
	jQuery('.isActive').attr('name', 'isActive[]');


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


function textarealimit(){


   	text_max = 1000;

     if(text_max == 0 || text_max == ""){
   	  jQuery('#textarea_counter').hide();
	  jQuery('#textarea_counter_hidden').val('1');
   	  return;
     }

	 if(jQuery('#field-post_content').length){

     	var text_length = jQuery('#field-post_content').val().length;
         jQuery('#adsdesciption').val(jQuery('#field-post_content').val());
		 var text_remaining = text_max - text_length;
		 if(text_remaining < 0){
		 jQuery('#textarea_counter').hide();
		 }

		 jQuery('#textarea_counter span').html( '<b>' + text_remaining + '</b> caractères restants');

		  jQuery('#field-post_content').keyup(function() {

			   var text_length = jQuery('#field-post_content').val().length;
			   var text_remaining = text_max - text_length;

			   jQuery('#textarea_counter span').html( '<b>' + text_remaining + '</b> caractères restants');

			if(text_remaining < 0){
				jQuery('#textarea_counter').hide();
				 jQuery('#textarea_counter_hidden').val('1');
			}else{
				jQuery('#textarea_counter').show();
				 jQuery('#textarea_counter_hidden').val('0');
			}

		  });

	 }

}

</script>             
        
@endsection