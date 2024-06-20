<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <link rel="manifest" href="{{ asset('assets/favicon/manifest.json') }}">

    <title>{{ __("Log In")}}</title>

    <style>.preload-hide { display:none; }</style>
    <meta name='robots' content='max-image-preview:large'>
    <style id='classic-theme-styles-inline-css' type='text/css'>
      .wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
    </style>
    <style id='global-styles-inline-css' type='text/css'>
    body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
    .wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
    :where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
    :where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
    .wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
    </style>

    <script src="{{ asset('assets/js/jquery.min.js') }}" id="jquery-core-js"></script>

</head>

<body class="ppt_login body-hide-footer theme-es tall-images innerpage">

<div id="wrapper" style="display:none;" class="">

<div id="sidebar-wrapper" style="display:none; " class="shadow">
</div>

<main id="page-content-wrapper" class="with-mobilemenu">




<div id="ppt-register" class="ppt-forms bg-white">
  <div class="container-fluid px-0">
    <div class="row g-0 min-vh-100">
      <div class="col-md-4 bg-light hide-mobile">
        <div class="bg-primary bg-overlay-primary">
        </div>
        <div class="bg-image" data-bg="{{ asset('assets/images/escorte-login.png') }}">
        </div>
      </div>
      <div class="col-md-6 offset-md-1 col-lg-6 col-xl-5 d-md-flex flex-column align-items-center">
        <div class="container pt-4">
          <div class="row g-0">
            <div class="col-11 col-md-10 col-lg-9 mx-auto">
              <div class="logo">
                <a href="/">


                    {{-- <div class='textlogo navbar-brand-dark'>
                      Viens <span style="color:#DA9DDC;">Yamo <i class="fa fa-heart"></i></span>
                    </div> --}}
                       <div class='textlogo navbar-brand-dark'>
                          <img src="{{ asset('assets/images/logo-vy.png') }}" alt="">
                      </div>
                  </a>
              </div>
            </div>
          </div>
        </div>
        <div class="container my-auto py-5">
          <div class="row g-0">
            <div class="col-11 col-md-10 col-lg-9 mx-auto">


<div class="pb-3">
  <h1>{{ __("Log In")}}</h1>
</div>

<div class="">

@if(Session::get("error"))
    <div id="login_form_message" class="text-danger mb-4">
        {{ Session::get('error') }}
    </div>
@endif

@if(Session::get("success"))
    <div id="login_form_message" class="text-primary mb-4">
        {{ Session::get('success') }}
    </div>
@endif
<script>


function login_process(){


	var user_login 	= document.getElementById("phone_number");
	var user_pass 	= document.getElementById("password");

	canContinue = true;

		if(user_login.value == '')
		{
				jQuery("#login_form_message").addClass('text-danger mb-4').html("Please complete all required fields.");
				user_login.style.border = 'thin solid red';
				canContinue = false;
		}

		if(user_pass.value == '')
		{
				jQuery("#login_form_message").addClass('text-danger mb-4').html("Please complete all required fields.");
				user_pass.focus();
				user_pass.style.border = 'thin solid red';
				canContinue = false;
		}

  if(canContinue){

   var formd = jQuery("#form_user_login").serialize();

  jQuery('#login_form_message').html('<div class="text-center text-primary"><i class="fa fa-spinner fa-3x fa-spin"></i></div>');
  jQuery('#form_user_login').hide();
  jQuery('.loginbottomextras').hide();

   jQuery.ajax({
        type: "POST",
        url: "http://127.0.0.1:8000/api/login",
		dataType: 'json',
   		data: {
            phone_number:user_login,
            password:user_pass,

			   formdata: formd,
           },
           console.log("pass")
           success: function(response) {
                console.log("level")
				 if(response.status == "error"){

				 	jQuery("#login_form_message").addClass('text-danger mb-4').html(response.msg);

					jQuery('#form_user_login').show();
					jQuery('.loginbottomextras').show();

				 }else if(response.status == "func_mem"){
                    console.log("level")
					jQuery(".ppt-modal-wrap").removeClass('show');
					processNewPayment(response.link);

				 }else if(response.status == "reload"){
                    console.log("level")
				 	window.location.reload();

				 }else if(response.status == "ok"){
                    console.log("level")
					window.location.href= response.link;

				 }

           },
           error: function(e) {
               console.log(e)
           }
       });

  }

}
</script>


<form id="form_user_login" name="form_login" action="{{ route('login') }}" method="post">
    @csrf
  <div class="form-group position-relative">
    <input type="text" class="form-control" placeholder="{{ __('Enter your phone number')}}" name="phone_number" id="phone_number" value="" autocomplete="current-password">
    <i class="fal fa-phone"></i>
  </div>
  <div class="form-group position-relative">
    <input type="password" placeholder="{{ __('Enter your password')}}" class="form-control" name="password" id="password" value="" autocomplete="current-password">

    <i class="fal fa-lock"></i>

    <i class="fa fa-eye" onclick="TogglePass('password');"></i>
  </div>
    <div class="form-group">
    <button type="submit" data-ppt-btn="" id="btn" style="background: rgba(214, 214, 214, 0.884);cursor:cell" class=" btn-block  btn-lg font-weight-bold text-uppercase">{{ __("Log In")}}</button>
  </div>
  <!-- Google Recaptcha -->
        <div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>
        <br>
  <div class="row small opacity-8">
    <div class="col-md-6">
      <label class="custom-control custom-checkbox">
      <input type="checkbox" name="remember" class="custom-control-input" checked="">
      <div class="custom-control-label">
       {{ __("Remember me")}}      </div>
      </label>
    </div>
    <div class="col-md-6 text-center text-md-right">
      <a href="{{ route('check-number') }}"><u>{{ __("Forgot your password?")}}</u></a>
    </div>
    <div class="col-md-12  text-md-right">
        {{ __("No account?")}}
        <a href="{{ route('register') }}" rel="nofollow"><u>{{ __("Register")}}</u></a>
      </div>
  </div>
  <input type="hidden" name="testcookie" value="1">
  <input type="hidden" name="rememberme" id="rememberme" value="1">
</form>




</div>


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</main>
</div>


<div id="page-loading" style="height:400px; text-align:center; padding-top:300px;">
   <img src="{{ asset('assets/images/loading.svg') }}" alt="loading page" style="max-width:150px;">
</div>

<!-- PREMIUMPRESS THEMES V.10.8.9 -->



               <script>
				var ajax_img_url = "https://ppt1080.b-cdn.net/";
				var ajax_site_url = "http://escort.test/index.php";
				var ajax_framework_url = "http://escort.test/wp-content/themes/ES10/";
				var ajax_googlemaps_key = "";
				 </script>

				<input type="hidden" id="ppt-current-tho" value=",">
				<input type="hidden" id="ppt-current-dec" value=".">
				<input type="hidden" id="ppt-current-symbol" value="<i class='fab fa-bitcoin'>&nbsp;</i>">
				<input type="hidden" id="ppt-current-position" value="left">
                <input type="hidden" id="ppt-map-provider" value="mapbox">

                <script async="" src="{{ asset('assets/js/js.custom.js?v=10.8.9') }}" id="premiumpress-js"></script>

                                  <noscript id="deferred-styles">

                                    <link rel="stylesheet" type="text/css" id="boostrap-css" href="{{ asset('assets/css/_bootstrap.css?v=10.8.9') }}">
                                    <link rel="stylesheet" type="text/css" id="theme-fonts" href="{{ asset('assets/css/css.theme-fonts.css?v=10.8.9') }}">
                                    <link rel="stylesheet" type="text/css" id="theme-elementor" href="{{ asset('assets/css/css.theme-elementor.css') }}">
                                    <link rel="stylesheet" type="text/css" id="theme-maps" href="{{ asset('assets/css/css.theme-maps.css?v=10.8.9') }}">
                                    <link rel="stylesheet" type="text/css" id="theme-utilities" href="{{ asset('assets/css/css.theme-utilities.css?v=10.8.9') }}">
                                    <link rel="stylesheet" type="text/css" id="premiumpress-css" href="{{ asset('assets/css/css.premiumpress.css?v=10.8.9') }}">
                                    <link rel="stylesheet" type="text/css" id="premiumpress-chat" href="{{ asset('assets/css/_chat.css?v=10.8.9') }}">
                                    <link rel="stylesheet" type="text/css" id="premiumpress-theme-es" href="{{ asset('assets/css/_theme_es.css?v=10.8.9') }}">

                                    <style>
                    .bg-primary, .bg-primary:hover,.bg-primary:focus, a.bg-primary:focus, a.bg-primary:hover, button.bg-primary:focus, button.bg-primary:hover, .badge-primary { background:#FFC300 !important; } .btn-primary, .btn-primary:hover { color: #fff; background-color: #ED5858!important; border-color: #FFC300 !important; } .text-primary, .filters_col .distance span { color: #FFC300 !important; } .btn-outline-primary { color: #FFC300 !important; border-color: #FFC300 !important; } .btn-outline-primary:hover { background:none !important; } .text-primary a { color: #FFC300 !important; } [ppt-nav].active-underline > ul > li.active > a { border-bottom: 2px solid #FFC300!important; }				</style>

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







<script>
    const phone_number=document.getElementById("phone_number");
    const password=document.getElementById("password");
    let btn=document.getElementById("btn");
    btn.disabled = true;

    phone_number.addEventListener("input",()=>{
        if(phone_number.value.length>0 && password.value.length>0){
            btn.disabled=false;
            btn.classList.add("btn-primary")
            btn.style.cursor="pointer"
        }else{
            btn.disabled=true;
            btn.classList.remove("btn-primary")
        }
    })

    password.addEventListener("input",()=>{
        if(password.value.length>0){
            btn.disabled=false;
            btn.classList.add("btn-primary")
            btn.style.cursor="pointer"
        }else{
            btn.disabled=true;
            btn.classList.remove("btn-primary")
        }
    })

function login(){


}
</script>

</body>
</html>
