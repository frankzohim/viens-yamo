
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="en-US">
<!--[if lte IE 8 ]><html lang="en" class="ie ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
    <title> @yield('title')</title>

    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <style>.preload-hide { display:none; }</style><meta name='robots' content='max-image-preview:large' />
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>

<style>


    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
      background-color: #000000;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      bottom: 23px;
      right: 28px;
      width: 280px;
      z-index: 99;

    }

    /* The popup form - hidden by default */
    .form-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid red;

      z-index: 9;
      background-color: rgb(37, 37, 37);
    }

    /* Add styles to the form container */
    .form-container {
      width:300px;
      margin-top: 20px;
      padding-bottom: 70px;
      padding-left:30px;
      padding-top: :270px;
        padding-right: 30px;
      background-color: rgb(37, 37, 37);
    }

    /* Full-width input fields */
    .form-container input[type=text], .form-container input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
      background-color: #04AA6D;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom:10px;
      opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
      background-color: red;
      margin-bottom: 10px;

    }

    /* Add some hover effects to buttons */

    </style>
<script src="{{ asset('assets/wp-includes/js/jquery/jquery.min.js?ver=3.7.0') }}" id="jquery-core-js"></script>


</head>
<body class="page-template page-template-templates page-template-tpl-page-account page-template-templatestpl-page-account-php page page-id-4 logged-in body-hide-footer demomode theme-es tall-images innerpage" >

<div id="wrapper" style="display:none;" class="">

<div id="sidebar-wrapper"  style="display:none; " class="shadow">
</div>

<main id="page-content-wrapper" class="with-mobilemenu">
    @if($user->isSecure==0)
    <div>

        <button class="open-button" onclick="openForm()">Sécurisé votre compte</button>

        <div class="form-popup" id="myForm">
          <form action="/action_page.php" class="form-container">
            <p style="color:white;text-align:center"> Votre compte n'est pas encore securisé...</p>
            <a class="btn" href="{{ route('selectQuestion') }}">
                Sécuriser maintenant
            </a>
            <button type="button" class="btn cancel" onclick="closeForm()">Fermer</button>
          </form>
        </div>
    </div>
    @endif
@include('layouts.Frontend.header')


<div class="container my-sm-4">


  @include('layouts.backoffice.customer.topbar')

<div>


</div>


<div ppt-border1 class="border-bottom-0 mobile-mb-2 mb-4 mb-xl-0 show-mobile">
  <div class="d-xl-flex" >
    <div class="h-100 account-left">

      <div ppt-box class="w-100 dropdown nohover show" id="menutopx">


        <div class="_header border-0 cursor" ppt-flex-row  onclick="AccountMenuToggle();">
          <div class="_title">
            Rubriques
          </div>

          <div class="_close" >
            <div ppt-icon-24 data-ppt-icon-size="24">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
              fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round"
              stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
            </div>
          </div>
      </div>

      </div>
    </div>

    <div class="w-100 d-none d-lg-block">

      <div ppt-box class="flex-column account-right">

        <div class="_header hide-mobile border-0 account-right-top" ppt-flex-row>
          <div class="_title">
          Tableau de bord
          </div>
          <a href="#" class="text-dark">
          <div class="_close">
            <div ppt-icon-24 data-ppt-icon-size="24">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>            </div>
          </div>
          </a>
        </div>

      </div>
    </div>
  </div>
</div>


<div ppt-border1 class="mb-4 bg-light border-top-0 page-">
  <div class="d-xl-flex" >


      @include('layouts.backoffice.customer.sidebar')


    <div class="w-100 bg-white">

      <div ppt-box class="flex-column account-right shadow-0">

        <div class="_content p-lg-5 p-3" >



        @yield('content')




        </div>
      </div>
    </div>
  </div>
</div>

<script>


    jQuery(document).ready(function(){
						 jQuery('#_account_menuitems').("show");
						});


function AccountMenuToggle(){

jQuery('#_account_menuitems').toggleClass("hide");


}
function AccountMenuOff(){
jQuery('#_account_menuitems').addClass("hide");
jQuery('.account-right-top').hide();
}
function AccountMenuOn(){
jQuery('#_account_menuitems').removeClass("hide");

jQuery('.account-right-top').show();
}
jQuery(window).on('resize',function () {

	var wins = jQuery(window).width();
	if (wins  < 1200){

	if(jQuery('#menutopx').hasClass("show")){

	}else{
	AccountMenuOff();
	}


	}else{
	AccountMenuOn();
	}
});
jQuery(window).on('load',function () {

	var wins = jQuery(window).width();
	if (wins  < 1200){
	AccountMenuOff();
	}else{
	AccountMenuOn();
	}

});
</script>
<style>


@media (min-width: 1200px) {
.account-left > [ppt-box]  { min-width:355px; max-width:355px; margin: -1px; }
.account-left {  background:red; }
}

@media (min-width: 575.98px) {
.account-right { border-bottom:0px!important; }
}
@media (max-width: 1200px) {
.account-left { margin: -1px; }
.account-right { margin: -1px; border-top: 0px!important;; }
}

.account-right { margin-right: -1px;    margin-top: -1px; }
#_account_menuitems.hide [ppt-list-item]  { display:none; }

.hover-bg-light:hover, .hover-bg-light.active { background:#fbfbfb; }

</style>
</div>
  @include('layouts.Frontend.footer')


</main>
</div>


<div id="page-loading" style="height:400px; text-align:center; padding-top:300px;"> <img src="https://ppt1080.b-cdn.net/images/loading.svg" alt="loading page" style="max-width:150px;" /> </div>

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

      <script async src="{{ asset('assets/js/js.custom.js?v=10.9.3') }}" id="premiumpress-js"></script>
      <script async src="{{ asset('assets/js/js.up.js?v=10.9.3') }}" id="premiumpress-up-js"></script>
      <script async src="{{ asset('assets/js/js.zclip.js?v=10.9.3') }}" id="premiumpress-zclip-js"></script>
      <script async src="{{ asset('assets/js/js.chart2.js?v=10.9.3') }}" id="premiumpress-charts-js"></script>

				<noscript id="deferred-styles">

								<link rel="stylesheet" type="text/css" id="boostrap-css" href="{{ asset('assets/css/_bootstrap.css?v=10.9.3') }}"/>
								<link rel="stylesheet" type="text/css" id="theme-fonts" href="{{ asset('assets/css/css.theme-fonts.css?v=10.9.3') }}"/>
								<link rel="stylesheet" type="text/css" id="theme-elementor" href="{{ asset('assets/css/css.theme-elementor.css?v=10.9.3') }}"/>
								<link rel="stylesheet" type="text/css" id="theme-maps" href="{{ asset('assets/css/css.theme-maps.css?v=10.9.3') }}"/>
								<link rel="stylesheet" type="text/css" id="theme-utilities" href="{{ asset('assets/css/css.theme-utilities.css?v=10.9.3') }}"/>
								<link rel="stylesheet" type="text/css" id="premiumpress-css" href="{{ asset('assets/css/css.premiumpress.css?v=10.9.3') }}"/>
								<link rel="stylesheet" type="text/css" id="premiumpress-account" href="{{ asset('assets/css/_account.css?v=10.9.3') }}"/>
								<link rel="stylesheet" type="text/css" id="premiumpress-chat" href="{{ asset('assets/css/_chat.css?v=10.9.3') }}"/>
								<link rel="stylesheet" type="text/css" id="premiumpress-up" href="{{ asset('assets/css/_up.css?v=10.9.3') }}"/>
								<link rel="stylesheet" type="text/css" id="premiumpress-mobileprefix" href="{{ asset('assets/css/_mobileprefix.css?v=10.9.3') }}"/>
								<link rel="stylesheet" type="text/css" id="premiumpress-theme-es" href="{{ asset('assets/css/_theme_es.css?v=10.9.3') }}"/>

                				<style>
				.bg-primary, .bg-primary:hover,.bg-primary:focus, a.bg-primary:focus, a.bg-primary:hover, button.bg-primary:focus, button.bg-primary:hover, .badge-primary { background:#FFC300 !important; } .btn-primary, .btn-primary:hover { color: #fff; background-color: #FFC300 !important; border-color: #FFC300 !important; } .text-primary, .filters_col .distance span { color: #FFC300 !important; } .btn-outline-primary { color: #FFC300 !important; border-color: #FFC300 !important; } .btn-outline-primary:hover { background:none !important; } .text-primary a { color: #FFC300 !important; } [ppt-nav].active-underline > ul > li.active > a { border-bottom: 2px solid #FFC300!important; }				</style>

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

</div>




</div>


<script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>
</body>
</html>
