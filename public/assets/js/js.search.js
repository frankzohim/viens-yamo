 
/* =============================================================================
  CUSTOM SEARCH EXTRAS
  ========================================================================== */

function ajax_load_after_search_complete(){
 
	// tooltip
	jQuery('[data-toggle="tooltip"]').tooltip();
	
	// jump to top
	if(jQuery('.home, .page-template-tpl-page-account').length > 0){	
	
		//jQuery("html, body").animate({ scrollTop: 0 }, "slow");					
	 	
	}else if(jQuery('.search-results').length > 0){
		
	jQuery("html, body").animate({ scrollTop: 0 }, "slow");
	}
 
	jQuery(".ppt-js-trigger-search-update").trigger('click');
	
	setTimeout(function(){ 	
		jQuery(".ppt-js-trigger-search-update").trigger('click');
	}, 5000)

	
}
/* =============================================================================
  DELETE FAVS
  ========================================================================== */

function ajax_delete_subscribers(uid){
   
       jQuery.ajax({
           type: "POST",
           url: ajax_site_url,		
   		data: {
               action: "favs_reset",
			   uid: uid,   		 
           },
           success: function(response) {	
		 		 	window.location.href= ajax_site_url + '/?s=&favs=1&favsdeleted=1';
           },
           error: function(e) {
               console.log(e)
           }
       });
}
/* =============================================================================
  SAVE SEARCH RESULTS
  ========================================================================== */

function savesearch_get(){

		jQuery("#savedsearcheshere").html('');	
   	  
       jQuery.ajax({
           type: "POST",
           url: ajax_site_url,
		   dataType: 'json',		
   			data: {
               action: "savesearch_get",   			 
           },
           success: function(response) {  
		   
		   		if(response.status == "ok"){
				
					jQuery("#savedsearcheshere").html(response.output);
				
				}					 
   			
           },
           error: function(e) {
               console.log(e)
           }
       });
}

function savesearch_go(id){
 
jQuery('#_filter_data').val(jQuery("#saveseachgo"+id).val());
_filter_newsearch();

}
function savesearch_remove(id){

		jQuery("#savedsearchdiv"+id).hide();	
   	  
       jQuery.ajax({
           type: "POST",	
           url: ajax_site_url,		
   			data: {
               action: "savesearch_remove",
   			   rid: id, 
           },
           success: function(response) { 
		   
           },
           error: function(e) {
               console.log(e)
           }
       });
}
function savedsearch_add(){
   	 	
	jQuery(".savesearchicon").removeClass('fa-star').addClass('fa-spinner');	
       jQuery.ajax({
           type: "POST",		  
           url: ajax_site_url,		
   			data: {
               action: "savesearch",
   			   details: jQuery('#_filter_data').val(), 
           },
           success: function(response) { 		   
				savesearch_get();   			
           },
           error: function(e) {
               console.log(e)
           }
       });
	   jQuery(".savesearchicon").removeClass('fa-spinner').addClass('fa-star');	
	    
   }

/* =============================================================================
  CUSTOM SEARCH CLASSES
  ========================================================================== */

function _updatecardlayout(thisone){
       jQuery('.filter_sortby.t2 a').removeClass('active');
      
	  jQuery('.activex').addClass('active').removeClass('activex');
       
	   jQuery('#filter-cardlayout').val(thisone)
       _filter_update();
}
function _updateselected(run){
 
	jQuery('.filter_sortby.t1 a:not(.show-mobile)').each(function () {
	
		if(jQuery(this).hasClass('active')){		
			 
			if(jQuery(this).hasClass('up')){
			
				jQuery(this).removeClass('up').addClass('down');
				jQuery(this).find('i').removeClass('ml-2 fa fa-sort-amount-up-alt').addClass('ml-2 fa fa-sort-amount-down-alt');
				
				jQuery('#filter-sortby-main').val(jQuery(this).attr("data-key")+'-u');
				
			}else{
				jQuery(this).removeClass('down').addClass('up');
				jQuery(this).find('i').removeClass('ml-2 fa fa-sort-amount-down-alt').addClass('ml-2 fa fa-sort-amount-up-alt');
				
				jQuery('#filter-sortby-main').val(jQuery(this).attr("data-key")+'-d');
			}
			 
			if(run == "yes"){
			_filter_update();
			}
			
		}else{
		
			jQuery(this).find('i').removeClass('ml-2 fa fa-sort-amount-down-alt').removeClass('ml-2 fa fa-sort-amount-up-alt');
		}	
	
	}); 
 

}



jQuery(document).on("click",".filter_sortby.t2 a", function (e) {
 
	if(jQuery(this).hasClass('customer-filter-btn-myfavs')){
		  
		if( jQuery(this).find("i").hasClass("text-dangerx") ){
			
			jQuery("#filter-custom-favs").removeClass('customfilter').val(0); 
			jQuery(this).removeClass('active').find("i").removeClass("fa text-dangerx").addClass("fal");
 			
		}else{
			
			jQuery(this).addClass('active').find("i").removeClass("fal").addClass("fa text-dangerx");
			jQuery("#filter-custom-favs").addClass('customfilter').val(1);	
			
		}
	
	 _filter_update();
		
	}

}); 

jQuery(document).ready(function() {
 _filter_update();
});

jQuery(document).on("click",".filter_sortby.t1 a", function (e) {
															 
 
 jQuery('.filter_sortby.t1 a').removeClass('active');
 jQuery(this).addClass('active');
 
 _updateselected('yes');

});  

jQuery(document).on("click",".filter_sortby_list .dropdown-item", function (e) {
	 
 jQuery('.filter_sortby_list .dropdown-item').removeClass('active');
 jQuery(this).addClass('active');
 
 _updateselectedlist('yes');

});

function customsortby(sortid){
	
	jQuery('.filter_sortby_list .dropdown-item').removeClass('active');
	
	jQuery('.filter_sortby_list a').each(function(i, obj) {		
 
		if(jQuery(this).data( "key" ) == sortid){
			 jQuery(this).addClass('active');
		 }
									  
	}); 
 
  _updateselectedlist('yes');
}

function _updateselectedlist(run){
 
	jQuery('.filter_sortby_list .dropdown-item').each(function () {
	
		if(jQuery(this).hasClass('active')){		
			 
			if(jQuery(this).hasClass('up')){
			
				jQuery(this).removeClass('up').addClass('down');
				jQuery(this).find('i').removeClass('ml-2 fa fa-sort-amount-up-alt').addClass('ml-2 fa fa-sort-amount-down-alt');
				
				jQuery('#filter-sortby-main').val(jQuery(this).attr("data-key")+'-u');
				
			}else{
				jQuery(this).removeClass('down').addClass('up');
				jQuery(this).find('i').removeClass('ml-2 fa fa-sort-amount-down-alt').addClass('ml-2 fa fa-sort-amount-up-alt');
				
				jQuery('#filter-sortby-main').val(jQuery(this).attr("data-key")+'-d');
			}
			 
			if(run == "yes"){
			_filter_update();
			}
			
		}else{
		
			jQuery(this).find('i').removeClass('ml-2 fa fa-sort-amount-down-alt').removeClass('ml-2 fa fa-sort-amount-up-alt');
		}	
	
	}); 

}

function _filter_update(){
	 
	 console.log("ppt ---------- filter update");
	 
	 jQuery('.ppt-modal-wrap').removeClass("show");
	 jQuery('.filterboxWrap').removeClass('_show');
	 
	jQuery('#_filter_data').val('');
	jQuery("#currentFilters").html('');
	 
	var i = 1;
	jQuery('.customfilter').each(function(index,item){
										  
		var id = this.id;	
		
		//console.log(jQuery(this).data('type')+' -- '+jQuery(this).val());
		 
		canContinue = false; 
		if(jQuery(this).data('type') == "checkbox" && jQuery(this).prop("checked") == true ){	
			canContinue = true;
			value = jQuery(this).data('value'); 
			addSearchTag(this);
		}
		
		if(jQuery(this).data('type') == "text" && jQuery(this).val() != "" ){
			canContinue = true;
			value = jQuery(this).val(); 
			addSearchTag(this);
		}
		
		if(jQuery(this).data('type') == "custom" && jQuery(this).val() != "" ){
			canContinue = true;
			value = jQuery(this).val(); 
			addSearchTag(this);
		}
		
		if(jQuery(this).data('type') == "custom-text" && jQuery(this).val() != "" ){
			canContinue = true;
			value = jQuery(this).val(); 
			addSearchTag(this);
		}
		
		if(jQuery(this).data('type') == "select" && jQuery(this).val() != "" ){
			canContinue = true;
			value = jQuery(this).val();
			addSearchTag(this);
			
		}		
		
		if(canContinue){			
			key = jQuery(this).data('key'); 
			jQuery('#_filter_data').val(jQuery('#_filter_data').val()+"["+key+':'+value+"]");
			 
		}   
	  
		  i++;
	 }); 
	 	
 
	_filter_removeTriggers();
	_filter_newsearch();
	
}

function _filter_removeTriggers(){
	
	var a = jQuery("#currentFilters > div:not(.hasTrigger)");
	a.each(function (a) {
		jQuery(this).addClass('hasTrigger');		
		jQuery(this).on("click", function (e) {
			 
			 jQuery(this).hide(); 
			
			 var val = jQuery(this).attr('data-val'); 
			 var key = jQuery(this).attr('data-key'); 
			  
			
			if (typeof val !== 'undefined' && val !== false) { 
			 
			 
				if(key == "taxonomy"){
					 
					if(jQuery("[custom-data-value='"+val+"']").length > 0){
						 
						jQuery("[custom-data-value='"+val+"']").removeClass('customfilter');
						jQuery("[custom-data-value='"+val+"']").remove();
						_filter_update();
						
					}else{
						
					jQuery("[data-value='"+val+"']").trigger('click');
					
					}
					
				}else{
					
					jQuery("[data-key='"+key+"']").val('');
					
					_filter_update();
					
				}
				
				console.log(key+' -- '+val);
				 
			}
			
		});				
	});  
	
}

function addSearchTag(input){
	
if(jQuery("#currentFilters").length > 0){

type = jQuery(input).attr('data-type');
key = jQuery(input).attr('data-key');

//console.log(key+'<---'+type+' --'+jQuery(input).attr('data-value'));

if(key == "keyword" || key == "taxonomy" || key == "radius" || key == "age1" || type == "custom-text" || (type == "text" && key != "images") ){

	if(jQuery("#currentFilters").html().length == 0){
		jQuery("#currentFilters").addClass('my-4'); 
	}
	
	var text = jQuery(input).val();
	var val = jQuery(input).attr('data-value');
	
	if(key == "radius"){
		 
		text = jQuery('[data-radius-text-'+jQuery(input).val()+']').html();
		val = 1;
		
	}else if(type == "custom"){
		 
		text = jQuery('[data-tag="'+jQuery(input).attr('data-custom-text')+'"] .filtertxt').html();
	
	}else if(type == "custom-text"){
		 
		text = jQuery(input).attr('data-custom-text');
		val = 1;
		
	}else if(key == "taxonomy"){
		
		text = jQuery(".f-"+jQuery(input).attr('data-value')+" .filtertxt").html();
	
	}else if(type == "text"){
			
		text = jQuery(input).attr('data-formatted-text');
		val = jQuery(input).val();
	
	}
	
	
	var customtxt = jQuery(input).attr('data-custom-text-value');
	if (typeof customtxt !== 'undefined' && customtxt !== false) { 	
		text = customtxt;	
	}
	
  
	if (typeof text !== 'undefined' && typeof val !== 'undefined' && val !== false) { 
 	
	jQuery("#currentFilters").html(jQuery("#currentFilters").html()+'<div class="badge badge-primary p-2 mr-2" data-val="'+jQuery(input).attr('data-value')+'" data-key="'+jQuery(input).attr('data-key')+'"><i class="fa fa-times mr-2"></i> '+text+'</div>');
	
	}
	
}

}

}



function _filter_page(pagenum){	
	
	jQuery('#_filter_data').val(jQuery('#_filter_data').val()+"[pagenum:"+pagenum+"]");
	 
	_filter_newsearch();	
}

function _filter_mapdata(){
 	
	
	jQuery(".dynamic_map").html("");
	
	jQuery('[data-long]').each(function(i, obj) {		
		 
		
		var title 		= jQuery(obj).find('._adtitle').text();	
		var url 		= jQuery(obj).find('._adtitle').attr('href');
		var img 		= jQuery(obj).find('.bg-image').attr('data-bg');
		 
		var pid 		= jQuery(obj).data('pid');
		
		if (typeof pid === "undefined") {
			
		} else {
			
		var lat 		= jQuery(obj).data('lat');
		var long 		= jQuery(obj).data('long');
		var address 	= jQuery(obj).data('address');
		 
		 
		jQuery(".dynamic_map").html(jQuery(".dynamic_map").html() + '{"id": "'+pid+'", "url": "'+ url +'", "title": "'+ title +'", "img": "'+ img +'", "lat":"'+lat+'","long":"'+long+'","address":"'+address+'", "price":""  },');
		
		}
						  
	});	
	
	// format
	jQuery(".dynamic_map").html('['+jQuery(".dynamic_map").html()+'{}]');
	
	setTimeout(function(){
	mainMap();
	}, 2000);
	 
}

function _filter_newsearch(){
 	
	//console.log("ppt - search - start");
	
	jQuery(".ajax-search-placeholders").hide();
	
	jQuery('#noresults').hide();
	jQuery('#ajax-sponsor-output').html('');
	if(jQuery('#filterssidebox').length > 0){
		
	jQuery('#ajax-search-output').html(); 
 
	}else if(jQuery('#ajax-search-output').length > 0){ 
	
 
	} 
	jQuery('#ajax-search-output').html(''); 
	jQuery('[data-'+jQuery('#filter-cardlayout').val()+']').show();
	
 	jQuery('#ajax-navbar-showhide').hide();
	jQuery('.ajax-search-found-wrap').hide(); 
	
	
	jQuery.ajax({
        type: "POST",
        url: ajax_site_url,	
		dataType: 'json',	
		data: {
            search_action: "search",
			search_data: jQuery('#_filter_data').val(),
        },
        success: function(response) { 
		
			jQuery(".ajax-search-placeholders").hide();
			
			if(response.status == "ok"){
				
				if(response.sponsor == null){
					
					jQuery('#ajax-sponsor-output').html('');
					
				}else if(response.sponsor == "" || response.sponsor.length == 118 ){
					
					jQuery('#ajax-sponsor-output').html('');
				}else{
					jQuery('#ajax-sponsor-output').html(response.sponsor);	
				}
				 
				 
				jQuery('#ajax-search-output').html(response.output);	
				jQuery('.ajax-search-pagenav').html(response.pagenav);
				jQuery('.ajax-search-found').html(response.total);	
				jQuery('.ajax-search-page').html(response.page);
				jQuery('.ajax-search-pageof').html(response.pageof);
				jQuery('.ajax-search-found-wrap').show();
				
				if(response.total == 0){
					jQuery('#noresults').show();
					jQuery('#ajax-navbar-showhide').hide();
					
				}else{
					jQuery('#noresults').hide();
					jQuery('#ajax-navbar-showhide').show();
				}
				
				if(response.total < 10){
				jQuery('#filerbuttonclick.collapsed').hide();
				
				}
				 
				if(response.location.address != null){
					
					//jQuery('#ajax-search-location').html(response.location.address).addClass('p-2 border mt-3 small');
					//jQuery('#ajax-search-location-map').html('<i class="fal fa-map-marker mr-2"></i>'+response.location.address).addClass('bg-light p-2 small');
				  
					//jQuery('#filterMap').attr('data-longitude', response.location.long).attr('data-latitude', );
					//setTimeout(function(){ 	
					//jQuery('#filterMap').trigger('click').show();
					//}, 3000);
					if(jQuery('#filterMap').length > 0){
					filterMap(response.location.lat, response.location.long, response.location.radius);
					}
				
				} 
				
				// MAP DATA
				if(jQuery('.search-mapside').length > 0){				
				_filter_mapdata();	
				}
				
				// FIX RATING ICONS
				setTimeout(function(){
				updateratingcolor();
				}, 1000);
				
				
				// CLEAN UP
				if(jQuery('.shortcode_excerpt').length > 0){
					setTimeout(function(){
						jQuery(".shortcode_excerpt").each(function (a) {
																			
							 thistext = jQuery(this).text();
																			
							var m = thistext.match(/"(.*?)"/); 
							 
							if(m !== null ){								
								jQuery(this).html(m[1]);
								
							} else {
								
								thistext = thistext + '"';
								
								var m = thistext.match(/"(.*?)"/); 
								if(m !== null ){								
									jQuery(this).html(m[1]);
								}
								
							}
							
							 
						}); 
					}, 1000);
				
				}
				
				
				_filter_counterupdate();
				
				ajax_load_after_search_complete(); 
  		 	
			}else{			
				jQuery('#ajax-search-output').html("Error trying to get results.");			
			}			
        },
        error: function(e) {
           console.log('error getting search results');
        }
    });
	
}

function _filter_counterupdate(){
	
	console.log("ppt - filter counter - updated");
 
	jQuery('.addcount .badge:not(.defaultvalue)').hide();
	
	jQuery('.addcount:not(.selectbox)').append('<b class="badge badge-pill badge-light text-light float-right novalue">0</b>');
	 
	jQuery('.addcount').each(function(){
											   
		var id = this.id;
		
		 if(jQuery(this).hasClass('selectbox updated')){
			 
		 }else if(jQuery(this).hasClass('selectbox')){
		 jQuery(this).addClass('updated');
		 jQuery(this).append('<b class="badge badge-pill badge-light text-light float-right novalue">0</b>');
	
		 }
		
		
		key = jQuery(this).data('countkey'); 
		 						
		if(jQuery('.'+ key).length > 50){
			
			jQuery(this).find('.novalue').html('50+');
		
		}else if(jQuery('.'+ key).length > 20){
			
			jQuery(this).find('.novalue').html('20+');
		
		}else if(jQuery('.'+ key).length > 0){
			
			jQuery(this).find('.novalue').html(jQuery('.'+ key).length);
		}
		
		
		if(jQuery('.'+ key).length > 0){
			
			jQuery(this).find('.novalue').removeClass('badge-light').addClass('badge-primary');
			
			jQuery(this).find('.defaultvalue').hide();
			
		}else{
			
			jQuery(this).find('.defaultvalue').hide();
		 
		 		
		}
		
												  
	});
 
	jQuery('#ajax-sponsor-output [data-long]').each(function () {		  
		
		var uid = jQuery(this).attr("data-pid");
	 	
		if(typeof uid !== "undefined"){
		
			/*jQuery('#ajax-search-output .card-ppt-search').each(function () {
																	   
				if(jQuery(this).attr("data-pid") == uid){
					//jQuery(this).closest('.col-6').attr('style','display: none !important');
				}
			});*/
		
		}
		
	}); 
	 
	 
}
