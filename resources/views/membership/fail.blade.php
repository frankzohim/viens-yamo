@extends("layouts.Frontend.master")

@section('title')
Echec du Paiement
@endsection

@section("content")
@csrf
<section class="section-60">
      <div class="container">
      <div class="row">
         <div class="col-md-6 offset-md-3">

<div class="card-popup rounded overflow-hidden" ppt-border1>
<div class="bg-primary pt-3">

      <div class="card-popup-content">
      <div class="">
      <span class="smilecode" style="font-size: 40px;">&#x1F600;</span>
       <h5 class="text-white">Votre paiement à échoué</h5>
       </div>
      </div>
</div>
<div class="card-body bg-white text-center">





                  <p class="text-600">Veuillez réessayez!.

                    </p>
                  <p class="margin-top3">Si vous avez des questions, n'hésitez pas à nous contacter.</p>


         <!-- RETURN USER TO THE PURCHASED/PAID ITEM --->
                                                <div><a href="{{ route('db.escort.ads') }}" data-ppt-btn class="btn-primary btn-lg my-3">Booster une annonce</a></div>






         </div>
      </div> </div></div>
      </section>
</div></main>
</div>


<div id="page-loading" style="height:400px; text-align:center; padding-top:300px;"> <img src="https://ppt1080.b-cdn.net/images/loading.svg" alt="loading page" style="max-width:150px;" /> </div>



<div class="footer-nav-area hidepage " style="display:none;" id="mobile-bottom-bar">
      <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
          <ul class="h-100 list-unstyled d-flex align-items-center justify-content-between pl-0">


	<li><a href="https://es10.premiummod.com" class="">
        <i class="fal fa-house"></i> Home</a></li>


	<li><a href="https://es10.premiummod.com/?s=" class="">
        <i class="fal fa-search"></i> Search</a></li>


	<li><a href="https://es10.premiummod.com/add-listing/" class="">
        <i class="fa fa-plus"></i> </a></li>


	<li><a href="https://es10.premiummod.com/my-account/" class="">
        <i class="fa fa-users-crown"></i> My Account</a></li>


	<li><a href="https://es10.premiummod.com/blog/" class="">
        <i class="fal fa-sparkles"></i> Blog</a></li>



          </ul>
        </div>
      </div>
</div>

<!-- PREMIUMPRESS THEMES V.10.9.3 -->



               <script>
				var ajax_img_url = "https://ppt1080.b-cdn.net/";
				var ajax_site_url = "https://es10.premiummod.com/index.php";
				var ajax_framework_url = "https://es10.premiummod.com/wp-content/themes/ES10/";
				var ajax_googlemaps_key = "AIzaSyBhXeBRfGfmKU0s9kpCqBtkKFj33HWWZRI";
				 </script>

				<input type="hidden" id="ppt-current-tho" value="" />
				<input type="hidden" id="ppt-current-dec" value="" />
				<input type="hidden" id="ppt-current-symbol" value="$" />
				<input type="hidden" id="ppt-current-position" value="left" />
                <input type="hidden" id="ppt-map-provider" value="google" />

                                  <script async src="https://ppt1080.b-cdn.net/js/js.custom.js?v=10.9.3" id="premiumpress-js"></script>

				<noscript id="deferred-styles">

								<link rel="stylesheet" type="text/css" id="boostrap-css" href="https://ppt1080.b-cdn.net/css/_bootstrap.css?v=10.9.3"/>
								<link rel="stylesheet" type="text/css" id="theme-fonts" href="https://ppt1080.b-cdn.net/css/css.theme-fonts.css?v=10.9.3"/>
								<link rel="stylesheet" type="text/css" id="theme-elementor" href="https://ppt1080.b-cdn.net/css/css.theme-elementor.css?v=10.9.3"/>
								<link rel="stylesheet" type="text/css" id="theme-maps" href="https://ppt1080.b-cdn.net/css/css.theme-maps.css?v=10.9.3"/>
								<link rel="stylesheet" type="text/css" id="theme-utilities" href="https://ppt1080.b-cdn.net/css/css.theme-utilities.css?v=10.9.3"/>
								<link rel="stylesheet" type="text/css" id="premiumpress-css" href="https://ppt1080.b-cdn.net/css/css.premiumpress.css?v=10.9.3"/>
								<link rel="stylesheet" type="text/css" id="premiumpress-chat" href="https://ppt1080.b-cdn.net/css/_chat.css?v=10.9.3"/>
								<link rel="stylesheet" type="text/css" id="premiumpress-theme-es" href="https://ppt1080.b-cdn.net/css/_theme_es.css?v=10.9.3"/>

                				<style>
								</style>

				</noscript>




				<script>
				var loadDeferredStyles = function() {
						var addStylesNode = document.getElementById("deferred-styles");
						var replacement = document.createElement("div");
						replacement.innerHTML = addStylesNode.textContent;
						document.body.appendChild(replacement)
						addStylesNode.parentElement.removeChild(addStylesNode);
				};
				var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
						  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
					  if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
					  else window.addEventListener('load', loadDeferredStyles);

				</script>
                <!----------------- -->
<div id="ppt-notice-new-custom" style="display:none;">

<div class="p-3 bg-white rounded shadow-lg position-relative" style="min-width: 250px; max-width:400px;">
  <div class="d-flex">
    <div>
      <div style="height:50px; width:50px;" class="rounded bg-light mr-4 position-relative">
        <div class="bg-image rounded bg-light">
        </div>
      </div>
    </div>
    <div class="pr-5">
      <div ppt-icon-24 data-ppt-icon-size="24" class="btn-close position-absolute" style="right:10px; top:10px;cursor:pointer;">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>      </div>
      <a href="#" class="_link btn-close text-dark">
      <div class="_username">
        <strong>Sammy</strong> has updated her photo. Do you like it?
      </div>
      </a>
    </div>
  </div>
</div>

</div>

<div id="ppt-notice-new-notifications" style="display:none;">

<div ppt-box class="rounded">
  <div class="_content py-3">
    <div class="d-flex">
      <div style="width:150px;" class="hide-mobile">
        <div style="height:60px; width:60px;" class="bg-light rounded position-relative overflow-hidden" ppt-flex-middle>
          <div ppt-icon-size="32" data-ppt-icon class="text-warning">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg>          </div>
        </div>
      </div>
      <div class="w-100 mx-3" ppt-flex>
        <div class="text-600 fs-5">
          New Notification        </div>
        <div class="lh-20 mt-2 fs-sm">
          You have a new notification.        </div>
      </div>
      <div ppt-flex-between ppt-flex-end>
        <a href="#" class="btn-close _ok btn-warning" data-ppt-btn>
        <div ppt-icon-size="24" data-ppt-icon>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" /></svg>        </div>
        </a> <a href="#" class="btn-system  _cancel btn-close hide-mobile"  data-ppt-btn>
        <div ppt-icon-size="24" data-ppt-icon>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>        </div>
        </a>
      </div>
    </div>
  </div>
</div>
</div>

<div id="ppt-notice-new-message" style="display:none;">


<div class="bg-white p-3 rounded shadow" style="max-width:400px;">
          <div class="d-flex">
            <div>
              <div style="height:50px; width:50px;" class="rounded bg-light mr-4 position-relative">
                <div class="bg-image rounded" data-bg="">&nbsp;</div>
              </div>
            </div>
            <div class="fs-5">
              <strong class="_username">Mark</strong> Has sent you a message, take a look!            </div>
          </div>

        <div class="d-flex w-100 mt-4">
          <button class="_ok w-100 btn-primary btn-close" data-ppt-btn>Read</button>
          <button class="_cancel w-100 btn-system btn-close" data-ppt-btn>Cancel</button>
        </div>
      </div>
</div>
</div>

<div id="ppt-notice-new-login" style="display:none;">

    <div class="card-body">
          <div class="d-flex">
            <div>
              <div style="height:50px; width:50px;" class="rounded bg-light mr-4 position-relative">
                <div class="bg-image rounded" data-bg="">
                </div>
              </div>
            </div>
            <div class="_msg_login"><a href="#" class="_link"><strong class="_username">Mark</strong> Has just logged in. Say hello!</a></div>
            <div class="_msg_logout"><a href="#" class="_link"><strong class="_username">Mark</strong> Has just logged of. Say Goodbye.</a></div>
           <div class="_msg_upgrade"><a href="#" class="_link"><strong class="_username">Mark</strong> Has has just upgraded their account.</a></div>


          </div>
        </div>
</div>



<div class="notify-footer hide-mobile">
  <div class="chat-handle text-white p-2">
    <div class="d-md-flex justify-content-between">
      <div class="m_count  btn-block" onClick="jQuery('#userListBox').slideToggle(); ProcessUserMsgList(10); ">
       <strong>&nbsp;</strong>  <span><div class="fa fa-circle"></div> <small class="text-truncate preload-hide">demo</small>  </span>
      </div>
      <div class="position-relative">
        <div class="n_count">
          <div class="single-page-edit-button" style="display:none; top: -17px; left: -29px;">
            <i class="fa fa-bell text-white"></i> <span class="ripple"></span><span class="ripple"></span><span class="ripple"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="userListBox" class="bg-white" style="display: none;">
    <div style="min-height:150px;" id="ajax_msg_list" data-link="https://es10.premiummod.com/my-account//?showtab=messages" data-title="No Messages"></div>
  </div>
</div>
</div>




@endsection
