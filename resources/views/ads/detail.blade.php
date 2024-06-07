<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> {{ ucfirst($ad['title']) }}</title>
    <Meta name=" robots " content="index, follow" />
    <meta name="twitter:card" content="{{ ucfirst($ad['title']) }}" />
    <meta name="twitter:site" content="{{ url()->current() }}" />
    <meta name="twitter:title" content="{{ ucfirst($ad['title']) }}" />
    <meta name="twitter:description" content="{{ ucfirst($ad['description']) }}" />
    <meta name="twitter:image" content="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=> $ad['images'][0]['path']] )}}" />


    <style>.preload-hide { display:none; }</style><meta name='robots' content='max-image-preview:large'>
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
	<script src="{{ asset('assets/wp-includes/js/jquery/jquery.min.js?ver=3.7.0') }}" id="jquery-core-js"></script>

<style>

    .popup-card{
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.589);
        z-index: 99;
        position: fixed;
        top: 0;

        visibility: hidden;
      }
      .card-2{
        top:-400px;
        position: absolute;
        width: 50%;
        height: 50%;
       z-index: 999;
        background: white;

      }
</style>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

.che{
    color:#f5bccf ;
}




    .comments{
        margin-top: 5%;

    }


    .comment{

        float: left;
        border-radius: 5px;
        padding-left: 40px;
        padding-right: 30px;
        padding-top: 10px;
        margin-left: 70px;
    }
    .comment h5,.comment span,.darker h5,.darker span{
        display: inline;
    }

    .comment p,.comment span,.darker p,.darker span{
        color: black;
    }

    h1,h4{
        color: black;
    }
    label{
        color: rgb(212, 208, 208);
    }

    #align-form{
        margin-top: 20px;
    }




    #darker img{
        margin-right: 15px;
        position: static;
    }



.card {
position: relative;
display: flex;
flex-direction: column;
min-width: 0;
padding: 20px;
width: 100%;
word-wrap: break-word;
background-color: #fff;
background-clip: border-box;
border-radius: 6px;
-moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1)
}
.comment-box {
padding: 5px
}
.comment-area textarea {
resize: none;
border: 1px solid #ad9f9f
}
.form-control:focus {
color: #495057;
background-color: #fff;
border-color: #ffffff;
outline: 0;
box-shadow: 0 0 0 1px #f5bccf !important
}
.send {
color: #fff;
background-color: #f5bccf;
border: none;
}
.send:hover {
color: #fff;
background-color: #f5bccf;
border-color: #f5bccf
}
.rating {
display: flex;
margin-top: -10px;
flex-direction: row-reverse;
margin-left: -4px;
float: left
}
.rating>input {
display: none
}
.rating>label {
position: relative;
width: 19px;
font-size: 25px;
color: #f5bccf;
cursor: pointer
}
.rating>label::before {
content: "\2605";
position: absolute;
opacity: 0
}
.rating>label:hover:before,
.rating>label:hover~label:before {
opacity: 1 !important
}
.rating>input:checked~label:before {
opacity: 1
}
.rating:hover>input:checked~label:before {
opacity: 0.4
}
</style>

</head>
<body class="listing_type-template-default single single-listing_type postid-33 single-format-standard body-hide-footer single-design4 theme-es tall-images innerpage">

<div id="wrapper" style="display:none;" class="">

<div id="sidebar-wrapper" style="display:none; " class="shadow">
</div>

<main id="page-content-wrapper" class="with-mobilemenu">

@include('layouts.Frontend.header')
@include('utils.utils')

<div class="border-bottom py-3">
  <div class="container">
    <div class="list-list small letter-spacing-1 arrow">
      <span><a href="{{ route('homepage') }}" class="text-dark">Accueil</a></span>
            <span><a href="#" class="text-dark">Annonces</a></span>
                  <span><a href="#" class="text-dark"> {{ ucfirst($ad['title']) }}</a></span>
                      </div>
  </div>
</div>

    <div id="mobileGallery"></div>



<div class="container py-md-5">

			  <div class="row d-flex flex-row-reverse">

					<div class="col-lg-5 col-xl-4 mb-4 hide-mobile">

								<div class="mb-4 pb-3 border-bottom">



								<h6 class="fs-lg text-100">
								 <div class="addeditmenu" data-key="title"></div>Contactez l'escorte	</h6>



								</div>
						<div class="ppt-single-button-box">


                            @if($ad['subscribe_id']===3)

                                @if(isset($user) && $subscribeOrNot===1)
                                <a  href="javascript:void(0);" onclick="showPhone()" class=" btn-block btn-lg list mb-3  btn-lg " style="background-color: #ED5858;color:white" data-ppt-btn="">
                                    <span class="_text text-light"><i class="fal fa-phone-alt mr-2"></i> <span>+237 6*** ***</span></span>
                                    <span class="_number" style="display:none;">+ {{ $ad['whatsapp'] }} </span>
                                    </a>
                                @endif
                                @if(isset($user) && $subscribeOrNot!==1)
                                <a  data-toggle="modal" data-target="#staticBackdrop" class=" btn-block btn-lg list mb-3  btn-lg " style="background-color: #ED5858;color:white" data-ppt-btn="">
                                    <span class="_text text-light"><i class="fal fa-phone-alt mr-2"></i> <span>+237 6*** ***</span></span>
                                    <span class="_number" style="display:none;">+ {{ $ad['whatsapp'] }} </span>
                                    </a>
                                @endif

                                @if(empty($user))
							
								  <a  data-toggle="modal" data-target="#staticBackdrop" class=" btn-block btn-lg list mb-3  btn-lg " style="background-color: #ED5858;color:white" data-ppt-btn="">
                                    <span class="_text text-light"><i class="fal fa-phone-alt mr-2"></i> <span>+237 6*** ***</span></span>
                                    <span class="_number" style="display:none;">+ {{ $ad['whatsapp'] }} </span>
                                    </a>
                                @endif

                            @endif

                            @if($ad['subscribe_id']===3)

                            @if(isset($user) && $subscribeOrNot===1)
                            <a href="https://api.whatsapp.com/send?phone={{ $ad['whatsapp'] }}&text=Bonjour {{ $ad['title']}} je suis intéressé par ta publication sur viens-yamo.com" target="_blank" rel="nofollow"
							class="btn-block btn-lg list mb-3 btn-whatsapp mobile-buynow-trigger" data-ppt-btn="">
                                <i class="fab fa-whatsapp mr-2"></i> <span>WhatsApp Moi !</span>
                                </a>
                                @endif

                                @if(isset($user) && $subscribeOrNot!==1)
                                    <a data-toggle="modal" data-target="#staticBackdrop" class=" btn-block btn-lg list mb-3 btn-whatsapp mobile-buynow-trigger" data-ppt-btn="">

                                        <span><i class="fab fa-whatsapp mr-2"></i> <span>WhatsApp Moi !</span>
                                        </a>
                                @endif

                                @if(empty($user))
                                <a href="{{ route('upgrade-plan', ['membership'=>'null']) }}" class=" btn-block btn-lg list mb-3 btn-whatsapp mobile-buynow-trigger" data-ppt-btn="">

                                    <span><i class="fab fa-whatsapp mr-2"></i> <span>WhatsApp Moi !</span>
                                    </a>
                                @endif
                            @endif

                            @if($ad['subscribe_id']!==3)
                                <a href="javascript:void(0);" onclick="showPhone()" class=" btn-block btn-lg list mb-3  btn-lg " style="background-color: #ED5858;color:white" data-ppt-btn="">
                                    <span class="_text text-light"><i class="fal fa-phone-alt mr-2"></i> <span>+237 6*** ***</span></span>
                                    <span class="_number" style="display:none;">+ {{ $ad['whatsapp'] }} </span>
                                    </a>
                            @endif


							  <script>
							  function showPhone(){

									jQuery('._text').hide();
									jQuery('._number').show();
							  }

							  </script>



                              @if($ad['subscribe_id']!==3)
                                <a href="https://api.whatsapp.com/send?phone={{ $ad['whatsapp'] }}&text=Bonjour {{ $ad['title']}} je suis intéressé par ta publication sur viens-yamo.com" target="_blank" rel="nofollow" class=" btn-block btn-lg list mb-3 btn-whatsapp mobile-buynow-trigger" data-ppt-btn="">
                                    <i class="fab fa-whatsapp mr-2"></i> <span>WhatsApp Moi !</span>
                                    </a>

							   @endif
						</div>


						@if ($ad['video'] != null)
						<div ppt-box class="rounded">
								<div class="_content p-3">


								<div class="addeditmenu" data-key="video" style="margin-right:100px;"></div>
								<div class="row">

								<div class="col-12">

								<div class="single-video rounded-lg overflow-hidden">
								<figure>
								<a href="javascript:void(0);" data-toggle="modal" data-target="#videoModal">

								<video width="100%" height="240" controls>
									<source src="{{ route('displayVideo', ['id'=>$ad['id'], 'path'=>$ad['video']]) }}" >
									Your browser does not support the video tag.
								</video>

								<i class="fa fa-play-circle opacity-8" style="font-size:80px; left:45%;"></i>
								</a>

								</figure>

								</div></div>
								</div>


								</div>
						</div>
						@endif
						<div ppt-box="" class="rounded">
						  <div class="_header d-md-flex align-items-center">
							<div class="_title w-100">
							  VIENS YAMO   </div>
						  </div>
							<a href="javascript:void(0);" onclick="processLogin();" class="text-dark">
						  <div class="_content py-4 h-100" ppt-flex-middle="">
							<div class="text-center my-4">
							  <div ppt-icon-64="" data-ppt-icon-size="64" style="color: #ED5858">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewbox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>      </div>
							  <div class="fs-5 text-600 mt-3">
								N'oubliez pas de mentionner VIENS YAMO lors de votre appel!    </div>
							</div>
						  </div>
						  </a>
						  </div>

						  <div ppt-box="" class="rounded">
						  <div class="_header d-md-flex align-items-center">
							<div class="_title w-100">
							  EVITEZ LES ARNAQUES   </div>
						  </div>
							 <ul>


							<li class="text-center my-4 p-3">
							<span>&#10060; Ne JAMAIS payer le transport à un(e) client(e) que vous ne connaissez pas.</span>
							</li>
							<li class="text-center my-4 p-3">
							  <span>&#10060; Ne JAMAIS faire d'avance de paiement sans être avec la personne concernée.</span>
							  </li>


							<li class="text-center my-4 p-3">
							  <span>&#10060; Ne pas faire confiance pour un service trop beau pour être vrai.
								</span></li>


							<li class="text-center my-4 p-3">
							  <span>&#9989; Dénoncer l'annonce plus bas avec preuves si vous êtes victime d'une tentative d'arnaque.</span>
							</li>




								</ul>
						  </div>

						<div class="p-4 rounded" ppt-box="">
						   <a href="{{ route('report', ['id'=>$ad['id'], 'type'=>'ads']) }}"><button class=" text-600  text-center" data-ppt-btn=""
									style="min-width:60px; background-color: #ED5858;color:white">
								Dénoncer cette annonce
							  </button></a>
						</div>


						<div class="p-4 hide-mobile rounded" ppt-box="">

						<p class="text-600">Partagez cette annonce via</p>


						<style>

						.card-share :is(header, .icons, .field){  display: flex;  align-items: center;  justify-content: space-between;}
						.card-share .icons a{  display: flex;  align-items: center;  border-radius: 50%;  justify-content: center;  transition: all 0.3s ease-in-out;}
						.card-share .icons{  margin: 15px 0 20px 0; padding: 0px;}
						.card-share .icons a{  height: 50px;  width: 50px;  font-size: 20px;  text-decoration: none;  border: 1px solid transparent;}
						.card-share .icons a i{  transition: transform 0.3s ease-in-out;}
						.card-share .icons a:nth-child(1){  color: #1877F2;  border-color: #b7d4fb;}
						.card-share .icons a:nth-child(1):hover{  background: #1877F2;}
						.card-share .icons a:nth-child(2){  color: #46C1F6;  border-color: #b6e7fc;}
						.card-share .icons a:nth-child(2):hover{  background: #46C1F6;}
						.card-share .icons a:nth-child(3){  color: #e1306c;  border-color: #f5bccf;}
						.card-share .icons a:nth-child(3):hover{  background: #e1306c;}
						.card-share .icons a:nth-child(4){  color: #f64c5b;  border-color: #f64c5b;}
						.card-share .icons a:nth-child(4):hover{  background: #f64c5b;}
						.card-share .icons a:nth-child(5){  color: #0088cc;  border-color: #b3e6ff;}
						.card-share .icons a:nth-child(5):hover{  background: #0088cc;}
						.card-share .icons a:hover{  color: #fff;  border-color: transparent;}
						.card-share .icons a:hover i{  transform: scale(1.2);}
						.card-share .field{  margin: 12px 0 -5px 0;  height: 45px;  border-radius: 4px;  padding: 0 5px;  border: 1px solid #e1e1e1;}
						.card-share .field.active{  border-color: #000;}
						.card-share .field i{  width: 50px;  font-size: 18px;  text-align: center;}
						.card-share .field.active i{  color: #000;}
						.card-share .field input{  width: 100%;  height: 100%;  border: none;  outline: none;  font-size: 12px;}

						</style>

						<div class="card-share">


						 <ul class="icons">
								<a href="https://facebook.com/sharer.php?u={{ url()->current() }}" target="_blank" rel="nofollow"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com/share?url={{ url()->current() }}" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/" target="_blank" rel="nofollow"><i class="fab fa-instagram"></i></a>
								<a href="https://pinterest.com/pin/create/button/?url={{ url()->current() }}" target="_blank" rel="nofollow"><i class="fab fa-pinterest"></i></a>
								<a href="https://www.linkedin.com/sharing/share-offsite/?url={{ url()->current() }}" target="_blank" rel="nofollow"><i class="fab fa-linkedin"></i></a>

						</ul>

							  <p class="small opacity-8">Ou copier le lien</p>
							  <div class="field">
								<i class="fa fa-link"></i>
								<input type="text" readonly="" id="copylink" value="{{ url()->current() }}">
								<button class=" btn-sm text-600 js-copy-link text-center" style="background-color :#ED5858;color:white" data-ppt-btn=""
									data-clipboard-target="#copylink" style="min-width:60px;">
								Copier
							  </button>
							  </div>

						</div>

						<script>

						function scrollTop(){
							jQuery('body,html').animate({
										scrollTop: 0
									}, 100);
						}

						scrollTop();


						jQuery(document).ready(function(){
						  scrollTop();
							setTimeout(function() {
								var clipboard = new ClipboardJS('.js-copy-link');
								clipboard.on('success', function(e) {

								jQuery(".card-share .field").addClass("active");

								 alert("Lien enregistré dans votre presse-papiers.");

								 });

							},5000);
						});
						</script> </div>

					</div>

					<div class="col-lg-7 col-xl-8 maincontent pr-lg-5">
								<h6 class="fs-lg text-100">
								<div class="addeditmenu" data-key="title"></div>{{ $ad['title'] }}	</h6>

								<div class="mt-3 d-md-flex text-600 link-dark fs-7 mt-3 download-bar mobile-mb-2">
											<a class="mr-3 text-dark" href="#">
												<i class="fal fa-map-marker mr-2 text-primary"></i> <span>{{ ucfirst($ad['quarter']['quarter_name']) }}, {{ ucfirst($ad['town']['town_name']) }}</span>
											</a>

											<div class=" d-inline-flex cursor">
												<div class="mr-2"><i class="fal fa-star mr-2 text-primary"></i></div> <span>
												<div data-type="favs" data-pid="0" data-uid="0" class="button_user_add " data-text="1"
												data-button="0">

													<span>{{ $ad['age'] }} Ans</span>

												</div>

												</span>
											</div>
											&nbsp;&nbsp;&nbsp;
											<div class=" d-inline-flex cursor">
												@if($ad['subscribe_id'] != 0)
													<div class="mr-2"><i class="fal fa-shield mr-2 text-primary"></i></div>
												@endif
												<span>
												<div data-type="favs" data-pid="0" data-uid="0" class="button_user_add " data-text="1"
												data-button="0">

													<span>

														@if($ad['subscribe_id'] ===1)
																PREMIUM
														@endif
														@if($ad['subscribe_id'] ===2)
																GOLD
														@endif
														@if($ad['subscribe_id'] ===3)
															ULTRA VIP
														@endif
													</span>

												</div>

												</span>
											</div>
											&nbsp;&nbsp;&nbsp;
											@if($ad['user']['isVerify']== 1)
												<div class=" d-inline-flex cursor">
													<div class="mr-2"><i class="fal fa-check-circle mr-2 text-primary"></i></div> <span>
													<div data-type="favs" data-pid="0" data-uid="0" class="button_user_add " data-text="1"
													data-button="0">

														<span>Vérifié</span>

													</div>

													</span>
												</div>
											@endif

											&nbsp;&nbsp;&nbsp;
											  <div
											  style="display: flex;align-items:center">
													<div class="badge_tooltip__initiator">
												<i class="fal fa fa-eye" style="color:#000000"></i>&nbsp;&nbsp;&nbsp; {{ $ad['visits'] }}  vues	    </div>
													<div class="badge_tooltip__item">{{ $ad['visits'] }}	vues </div>
												</div>
												&nbsp;&nbsp;&nbsp;


							    </div>
							  <br>
						<div class="addeditmenu" data-key="images"></div>
						<div id="mobileGalleryMove" class="hide-mobile">
						<div class="row no-gutters mb-4">

							@forelse ($ad['images'] as $image)
								@if ($loop->index == 3)
									@break
								@endif

							<div class="col-6">
								<a href="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$image['id']] )}}" data-toggle="lightbox" data-gallery="ppt-full-gallery" data-type="image">
								<div class="m-sm-1">
							  <div class="position-relative rounded overflow-hidden img-wrap border-0" ppt-border1="">
								<div class="bg-image" style="background-image:url({{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$image['id']] )}});">
								  &nbsp;
								</div>
									  </div>
							</div>
								</a>
							</div>
							@empty
							@endforelse

							@forelse ($ad['images'] as $image)
								@if ($loop->index != 3)
									@continue
								@endif
							<div class="col-6">
								<a href="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$image['id']] )}}" data-toggle="lightbox" data-gallery="ppt-full-gallery" data-type="image">
								<div class="m-sm-1">
							  <div class="position-relative rounded overflow-hidden img-wrap border-0" ppt-border1="">
								<div class="bg-image"
								style="background-image:url({{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$image['id']] )}});">
								  &nbsp;
								</div>
										<div class="allphotos z-10 h-100 position-absolute w-100 y-middle text-light text-700">
								  Toutes les Photos       </div>
								<div class="overlay-inner" style="z-index:1">
								</div>
									  </div>
							</div>
								</a>
							  </div>
							@empty
							@endforelse


							@forelse ($ad['images'] as $image)
								@if ($loop->index <= 3)
									@continue
								@endif
						  <a href="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$image['id']] )}}" data-toggle="lightbox" data-gallery="ppt-full-gallery" data-type="image"></a>
						   @empty
							@endforelse



						</div>
						</div>

						<style>

						.img-wrap  { height:450px; }
						@media (max-width: 575.98px) {
						.img-wrap  { height:250px; margin:5px; }
						}
						</style>


						@if ($ad['video'] != null)


						<div ppt-box class="rounded show-mobile" style="margin-top:-40px">
								<div class="_content p-3">


								<div class="addeditmenu" data-key="video" style="margin-right:100px;"></div>
								<div class="row">

								<div class="col-12">

								<div class="single-video rounded-lg overflow-hidden">
								<figure>
								<a href="javascript:void(0);" >

								<video width="100%" height="240" controls>
									<source src="{{ route('displayVideo', ['id'=>$ad['id'], 'path'=>$ad['video']]) }}" >
									Your browser does not support the video tag.
								</video>


								</a>

								</figure>

								</div></div>
								</div>


								</div>
						</div>
						@endif

						<div ppt-box="" class="rounded">
						  <div class="_header d-md-flex align-items-center">
							<div class="_title w-100">
							  Description de l'annonce    </div>
							<div class="lh-10 w-100 mt-2 pt-1 mr-3 hide-mobile" ppt-flex-end="">

							<div class="ppt-badges clearfix mb-3">




							<div class="flex" style="display: flex">




						<div class="_badge " style="color:white;background-color:#ED5858;">



						<div class="badge_tooltip text-center" data-direction="top">
							<div class="badge_tooltip__initiator">
						   <i class="fal fa fa-users" style="color:white"></i> {{ $ad['accepted'] }}	    </div>
							<div class="badge_tooltip__item">{{ $ad['accepted'] }}	 </div>
						  </div>


						</div>


						<div class="_badge " style="color:#FEFEFE;background-color:#2266C6;">



						<div class="badge_tooltip text-center" data-direction="top">
							<div class="badge_tooltip__initiator">
						   <i class="fal fa fa-map-marker" style="color:#FEFEFE"></i> {{ $ad['location'] }}	   </div>
							<div class="badge_tooltip__item">{{ $ad['location'] }}	 </div>
						  </div>


						</div>


								</div>


							</div>
								</div>
						  </div>
						  <div class="_content py-3 pl-4 py-lg-4">




						<div class="ppt-single-desc _style1">

						<div class="addeditmenu" data-key="content"></div>


						<div>


								<div class="overflow-hidden">
								<p>{{ $ad['description'] }}</p>


								</div>


								</div>


						</div>













						  </div>

						</div>
                        <div ppt-box="" class="rounded p-3">
                            <div class="_header d-md-flex align-items-center">
                              <div class="_title w-100">
                                Commentaires   </div>

                            </div>
                            <div class="card ">

                                <div class="flex justify-center align-items-center" style="display: flex;flex-direction:row;justify-content:space-between">
                                    <div class="hide-mobile" style="width: 100px;"><img src="{{ asset('assets/images/user (1).png') }}" width="50" class="rounded-circle mt-2"> </div>
                                    <div style="flex: 1" class="comment-box ml-2">
                                        <h4>Noter cette annonce</h4> <br>
                                        <form action="{{ route('review.user',$ad['id']) }}" method="post">
                                            @csrf
											 <label for="stars">Choississez le nombre d'etoile</label>  <br>
                                            <div class="rating">
												<input type="radio"  name="rating" value="5" id="5"><label for="5">☆</label>
												<input type="radio" name="rating" value="4" id="4"><label for="4">☆</label>
												<input type="radio" name="rating" value="3" id="3"><label for="3">☆</label>
												<input type="radio" name="rating" value="2" id="2"><label for="2">☆</label>
												<input type="radio" name="rating" value="1" id="1"><label for="1">☆</label>

											</div>
											<br>


                                            <div class="comment-area"> <textarea placeholder="Ajouter un commentaire" required name="comment" class="form-control" rows="4"></textarea> </div>
                                            <div class="comment-btns mt-2">
                                            <div class="row">
                                            <div class="col-6">
                                                <div class="pull-right"> <button type="submit" class="send">Envoyer<i class="fa fa-long-arrow-right ml-1"></i></button> </div>
                                            </div>

                                            </div>
                                            </div>
                                        </form>

                                        </div>
                                </div>

                                @if(count($reviews)!==0)
                                <div style="margin-top: 50px;">
                                    <h3 style="text-align: center;color:rgb(85, 85, 85);">Commentaires les plus récents</h3>
                                </div>
                                @endif


                                @forelse ($reviews as $review)
                                <div class="comment mt-4 text-justify float-left">
                                    <img src="{{ asset('assets/images/user (1).png') }}" alt="" class="rounded-circle" width="40" height="40">
                                    <h5>{{ $review['user'] }}</h5>
                                    <span style="font-style: initial">{{ $review['created_at'] }}</span>

                                    <br>
                                    @php
                                        $countReview=$review['stars'];
                                        $countNotReview=5-$review['stars'];
                                    @endphp

                                    <div style="font-size: 15px;margin-left:50px;text-align: justify;">
                                        @for($i = 0; $i < $countReview; $i++)
                                            <span class="fa fa-star" style="color: #f5bccf "></span>
                                        @endfor
                                        @for($i = 0; $i < $countNotReview; $i++)
                                        <span class="fa fa-star"></span>
                                    @endfor
                                    </div>

                                    <p style="font-size: 15px;margin-left:50px;text-align: justify;color:rgb(85, 85, 85);">{{ $review['comment'] }}</p>
                                </div>
                                @empty
                                <p style="font-size: 15px;margin-left:50px;text-align: center;color:rgb(85, 85, 85);">Aucun Commentaires disponible</p>
                                @endforelse

                                    </div>
                                </div>
					</div>

					    <section data-ppt-blockid="text136" data-ppt-blocktype="text" data-ppt-section="" class="section-40">

        <div class="container py-5 text-center bg-danger rounded-lg text-light">

          <div class="row">

            <div class="col-md-11 col-lg-11 col-xl-11 mx-auto text-center">

              <h2 class="fs-lg mb-3" data-ppt-title="" underline_color="#000"><span class="ppt-headline">
                Avertissement<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 150" preserveAspectRatio="none">
                  <path style="stroke:#000" d="M9.3,127.3c49.3-3,150.7-7.6,199.7-7.4c121.9,0.4,189.9,0.4,282.3,7.2C380.1,129.6,181.2,130.6,70,139 c82.6-2.9,254.2-1,335.9,1.3c-56,1.4-137.2-0.3-197.1,9"/></svg>

      </span></h2>

              <p class="lead" data-ppt-subtitle="">
                Les publications sur ce site sont faites de façon décentralisée, et automatique par toutes personnes voulant vendre ses services pour adultes.
                En utilisant le site vous acceptez que le propriétaire du site soit décliné de toutes éventuelles reponsabilités
                quelque soit la nature. Si vous n'êtes pas  d'accord avec certains contenus de ce site veuillez le quitter en urgence</p>

                      <a href="http://google.com" data-ppt-btn="" class="btn-system rounded">Quitter</a>

            </div>

          </div>

        </div>

      </section>
					<br>
					<div class="col-lg-5 col-xl-4 mb-4 show-mobile">

								<div class="mb-4 pb-3 border-bottom">



								<h6 class="fs-lg text-100">
								 <div class="addeditmenu" data-key="title"></div>Contactez l'escorte	</h6>



								</div>
						<div class="ppt-single-button-box">

							@if($ad['subscribe_id']===3)

                                @if(isset($user) && $subscribeOrNot===1)
                                    <a href="javascript:void(0);" onclick="showPhone()" class=" btn-block btn-lg list mb-3  btn-lg " style="background-color :#ED5858" data-ppt-btn="">
                                        <span class="_text text-light"><i class="fal fa-phone-alt mr-2"></i> <span>+237 6*** ***</span></span>
                                        <span class="_number" style="display:none;">+ {{ $ad['whatsapp'] }} </span>
                                        </a>
                                @endif
                                @if(isset($user) && $subscribeOrNot!==1)
                                <a  class=" btn-block btn-lg list mb-3 btn-primary btn-lg" data-toggle="modal" data-target="#staticBackdrop" data-ppt-btn="">

                                    <span class="_text text-light"><i class="fal fa-phone-alt mr-2"></i> <span>+237 6*** ***</span></span>
                                    </a>
                                @endif

                                @if(empty($user))
                              
									 <a  data-toggle="modal" data-target="#staticBackdrop" class=" btn-block btn-lg list mb-3  btn-lg " style="background-color: #ED5858;color:white" data-ppt-btn="">
                                    <span class="_text text-light"><i class="fal fa-phone-alt mr-2"></i> <span>+237 6*** ***</span></span>
                                    <span class="_number" style="display:none;">+ {{ $ad['whatsapp'] }} </span>
                                    </a>
                                @endif

                            @endif

                            @if($ad['subscribe_id']===3)

                            @if(isset($user) && $subscribeOrNot===1)
                            <a href="https://api.whatsapp.com/send?phone={{ $ad['whatsapp'] }}&text=Bonjour {{ $ad['title']}} je suis intéressé par ta publication sur viens-yamo.com" target="_blank" rel="nofollow" class=" btn-block btn-lg list mb-3 btn-whatsapp mobile-buynow-trigger" data-ppt-btn="">
                                <i class="fab fa-whatsapp mr-2"></i> <span>WhatsApp Moi !</span>
                                </a>
                                @endif

                                @if(isset($user) && $subscribeOrNot!==1)
                                <a data-toggle="modal" data-target="#staticBackdrop" class=" btn-block btn-lg list mb-3 btn-whatsapp mobile-buynow-trigger" data-ppt-btn="">

                                    <span><i class="fab fa-whatsapp mr-2"></i> <span>WhatsApp Moi !</span>
                                    </a>
                                @endif

                                @if(empty($user))
                                <a data-toggle="modal" data-target="#staticBackdrop" class=" btn-block btn-lg list mb-3 btn-whatsapp mobile-buynow-trigger" data-ppt-btn="">

                                    <span><i class="fab fa-whatsapp mr-2"></i> <span>WhatsApp Moi !</span>
                                    </a>
                                @endif
                            @endif

                            @if($ad['subscribe_id']!==3)
                                <a href="javascript:void(0);" onclick="showPhone()" class=" btn-block btn-lg list mb-3  btn-lg " style="background-color:#ED5858" data-ppt-btn="">
                                    <span class="_text text-light"><i class="fal fa-phone-alt mr-2"></i> <span>+237 6*** ***</span></span>
                                    <span class="_number" style="display:none;">+ {{ $ad['whatsapp'] }} </span>
                                    </a>
                            @endif


							  <script>
							  function showPhone(){

									jQuery('._text').hide();
									jQuery('._number').show();
							  }

							  </script>



                              @if($ad['subscribe_id']!==3)
                                <a href="https://api.whatsapp.com/send?phone={{ $ad['whatsapp'] }}&text=Bonjour {{ $ad['title']}} je suis intéressé par ta publication sur viens-yamo.com" target="_blank" rel="nofollow" class=" btn-block btn-lg list mb-3 btn-whatsapp mobile-buynow-trigger" data-ppt-btn="">
                                    <i class="fab fa-whatsapp mr-2"></i> <span>WhatsApp Moi !</span>
                                    </a>

							   @endif


						</div>

						<div ppt-box="" class="rounded">
						  <div class="_header d-md-flex align-items-center">
							<div class="_title w-100">
							  VIENS YAMO   </div>
						  </div>
							<a href="javascript:void(0);" onclick="processLogin();" class="text-dark">
						  <div class="_content py-4 h-100" ppt-flex-middle="">
							<div class="text-center my-4">
							  <div ppt-icon-64="" data-ppt-icon-size="64" class="text-primary">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewbox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v13m0-13V6a2 2 0 112 2h-2zm0 0V5.5A2.5 2.5 0 109.5 8H12zm-7 4h14M5 12a2 2 0 110-4h14a2 2 0 110 4M5 12v7a2 2 0 002 2h10a2 2 0 002-2v-7"></path></svg>      </div>
							  <div class="fs-5 text-600 mt-3">
								N'oubliez pas de mentionner VIENS YAMO lors de votre appel!    </div>
							</div>
						  </div>
						  </a>
						  </div>

						  <div ppt-box="" class="rounded">
						  <div class="_header d-md-flex align-items-center">
							<div class="_title w-100">
							  EVITEZ LES ARNAQUES   </div>
						  </div>
							 <ul>


							<li class="text-center my-4 p-3">
							<span>&#10060; Ne JAMAIS payer le transport à un(e) client(e) que vous ne connaissez pas.</span>
							</li>
							<li class="text-center my-4 p-3">
							  <span>&#10060; Ne JAMAIS faire d'avance de paiement sans être avec la personne concernée.</span>
							  </li>


							<li class="text-center my-4 p-3">
							  <span>&#10060; Ne pas faire confiance pour un service trop beau pour être vrai.
								</span></li>


							<li class="text-center my-4 p-3">
							  <span>&#9989; Dénoncer l'annonce plus bas avec preuves si vous êtes victime d'une tentative d'arnaque.</span>
							</li>




								</ul>
						  </div>

						<div class="p-4 rounded" ppt-box="">
						   <a href="{{ route('report', ['id'=>$ad['id'], 'type'=>'ads']) }}"><button class="btn-primary text-600  text-center" data-ppt-btn=""
									style="min-width:60px; background-color: red;">
								Dénoncer cette annonce
							  </button></a>
						</div>

						<div class="p-4 hide-mobile rounded" ppt-box="">

						<p class="text-600">Partagez cette annonce via</p>


						<style>

						.card-share :is(header, .icons, .field){  display: flex;  align-items: center;  justify-content: space-between;}
						.card-share .icons a{  display: flex;  align-items: center;  border-radius: 50%;  justify-content: center;  transition: all 0.3s ease-in-out;}
						.card-share .icons{  margin: 15px 0 20px 0; padding: 0px;}
						.card-share .icons a{  height: 50px;  width: 50px;  font-size: 20px;  text-decoration: none;  border: 1px solid transparent;}
						.card-share .icons a i{  transition: transform 0.3s ease-in-out;}
						.card-share .icons a:nth-child(1){  color: #1877F2;  border-color: #b7d4fb;}
						.card-share .icons a:nth-child(1):hover{  background: #1877F2;}
						.card-share .icons a:nth-child(2){  color: #46C1F6;  border-color: #b6e7fc;}
						.card-share .icons a:nth-child(2):hover{  background: #46C1F6;}
						.card-share .icons a:nth-child(3){  color: #e1306c;  border-color: #f5bccf;}
						.card-share .icons a:nth-child(3):hover{  background: #e1306c;}
						.card-share .icons a:nth-child(4){  color: #f64c5b;  border-color: #f64c5b;}
						.card-share .icons a:nth-child(4):hover{  background: #f64c5b;}
						.card-share .icons a:nth-child(5){  color: #0088cc;  border-color: #b3e6ff;}
						.card-share .icons a:nth-child(5):hover{  background: #0088cc;}
						.card-share .icons a:hover{  color: #fff;  border-color: transparent;}
						.card-share .icons a:hover i{  transform: scale(1.2);}
						.card-share .field{  margin: 12px 0 -5px 0;  height: 45px;  border-radius: 4px;  padding: 0 5px;  border: 1px solid #e1e1e1;}
						.card-share .field.active{  border-color: #000;}
						.card-share .field i{  width: 50px;  font-size: 18px;  text-align: center;}
						.card-share .field.active i{  color: #000;}
						.card-share .field input{  width: 100%;  height: 100%;  border: none;  outline: none;  font-size: 12px;}

						</style>

						<div class="card-share">


						 <ul class="icons">
								<a href="../../login-18.php?u=http://escort.test/listing/adrianna/" target="_blank" rel="nofollow"><i class="fab fa-facebook-f"></i></a>
								<a href="https://twitter.com/share?url=http://escort.test/listing/adrianna/&text=Adrianna" target="_blank" rel="nofollow"><i class="fab fa-twitter"></i></a>
								<a href="https://www.instagram.com/" target="_blank" rel="nofollow"><i class="fab fa-instagram"></i></a>
								<a href="https://pinterest.com/pin/create/button/?url=http://escort.test/listing/adrianna/&description=Adrianna" target="_blank" rel="nofollow"><i class="fab fa-pinterest"></i></a>
								<a href="https://www.linkedin.com/cws/share?url=http://escort.test/listing/adrianna/" target="_blank" rel="nofollow"><i class="fab fa-linkedin"></i></a>

						</ul>

							  <p class="small opacity-8">Ou copier le lien</p>
							  <div class="field">
								<i class="fa fa-link"></i>
								<input type="text" readonly="" id="copylink" value="">
								<button class="btn-primary btn-sm text-600 js-copy-link text-center" data-ppt-btn=""
									data-clipboard-target="#copylink" style="min-width:60px;">
								Copier
							  </button>
							  </div>

						</div>

						<script>

						function scrollTop(){
							jQuery('body,html').animate({
										scrollTop: 0
									}, 100);
						}

						scrollTop();


						jQuery(document).ready(function(){
						  scrollTop();
							setTimeout(function() {
								var clipboard = new ClipboardJS('.js-copy-link');
								clipboard.on('success', function(e) {

								jQuery(".card-share .field").addClass("active");

								 alert("Lien enregistré dans votre presse-papiers.");

								 });

							},5000);
						});
						</script> </div>

					</div>
			  </div>
</div>

  <div class="my-3 text-center">
          @if (isset($banners))

              @foreach ($banners as $banner)
                  @if($banner['position'] == 'ads_detail_bottom' && $banner['status'] == 1)
                      <a href='javascript:void(0)' class='samplebanneronly'>
                        <img src='{{ route('display.banner',['id'=>$banner['id']] )}}'
                        class='img-fluid' alt='sample banner'>
                      </a>
                  @endif
              @endforeach

          @endif


      </div>
<div id="recommended" class="section-60 border-top pb-4 pb-sm-0 mb-4 mb-sm-0 mobile-mb-6">
<div class="container">
  <div class="row">

    <div class="col-12">

<div class="mb-5 text-700">Annonces Similaires</div>


<div class='row'>

  @php
	shuffle($ads);
				@endphp
	@forelse($ads as $ad1)
	  	@if ($loop->index == 12)
						@break
					@endif
	    @if ($ad['id'] == $ad1['id'])
			@continue;
		@endif

  <div class="col-6 col-sm-6 col-md-4 col-lg-4">

    	<div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
		data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

		  <figure>



		<div class="buttons-wrap">



		<div class="button-new" style="background-color: #DA9DDC">{{ $ad1['age'] }} Ans</div>

		</div>
		  <a href="{{ route('ads.details', ['username' => $ad1['user']['username'],'slug'=>$ad1['slug']]) }}">

		  <div ppt-border1="" class="p-1">

			<div class="search-gradient"> </div>

			<div class="bg-light position-relative overflow-hidden" style="height:360px;">
			  <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
				<div class="text-white fs-4 text-600">
				 {{ ucfirst($ad1['user']['username']) }}
							<span class="text-online">•</span>
						  </div>
				<div class="fs-sm text-white opacity-5 text-400">
				  {{ ucfirst($ad1['town']['town_name']) }}  
				</div>
			  </div>
			  <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$ad1['id'], 'path'=>$ad1['images'][0]['id']] )}}">
				 
			  </div>

		<div ppt-search-badges="" style="z-index:1" class="right">
			@if($ad1['subscribe_id'] ===1)
								<div class="badge" style="color:#000000;background-color:#FFC300;">
								<span class="fal fa fa-star" style="color:#000000"> </span> PREMIUM </div>
                            @endif
			@if($ad1['subscribe_id'] ===2)
								<div class="badge" style="color:#000000;background-color:#FFC300;">
								<span class="fal fa fa-star" style="color:#000000"> </span> GOLD </div>
                            @endif
                            @if($ad1['subscribe_id'] ===3)
                            <div class="badge" style="color:#000000;background-color:#FFC300;">
                            <span class="fal fa fa-star" style="color:#000000"> </span> ULTRA VIP  </div>
                        @endif

		</div>


			</div>

			 <div class="p-4 bg-white"  style="min-height:220px;">
			  <div class="d-sm-flex flex-sm-column">
				<div class="fs-6  mb-2">

				  <a href="{{ route('ads.details', ['username' => $ad1['user']['username'],'slug'=>$ad1['slug']]) }}"
					class="text-dark _adtitle">
            {{ truncate($ad1['title'],40) }}

					</a>

				</div>

			   <nav ppt-nav="" class="seperator pl-0 text-muted mb-3">

					<ul class="list-unstyled">

						<li> <span style="font-weight:bold"><i class="fa fa-map-marker"></i> </span>
              &nbsp; {{ ucfirst($ad1['quarter']['quarter_name']) }}, &nbsp;{{ ucfirst($ad1['town']['town_name']) }}
              </li>

					</ul>
					<span style="font-weight:bold">Client accepté :</span> {{ $ad1['accepted'] }} <br>
					<span style="font-weight:bold">Lieu :</span> {{ $ad1['location'] }}

				</nav>

				<div style="min-height:60px;">
				  <span class="shortcode_excerpt"> {{ truncate($ad1['description'],100) }}</span>
				</div>




			   </div>


			  </div>
		  </div>
		</a>


		</figure>

		</div>




	<div class="show-mobile">
		  <div class="position-relative mb-3">
          <a href="{{ route('ads.details', ['username' => $ad1['user']['username'],'slug'=>$ad1['slug']]) }}">
          <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
            <div class="h-100 position-relative">
            <figure>


              <div class="buttons-wrap">

                <div class="button-new"
                style="background-color: #DA9DDC; font-size:10px;">{{ $ad1['age'] }} Ans</div>

              </div>
              <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

                    <div class="fs-sm text-white  text-600">
                    {{ ucfirst($ad1['town']['town_name']) }}  
                    </div>
              </div>
              <div class="bg-image z-0"
              data-bg="{{ route('display.ads.image',['id'=>$ad1['id'], 'path'=>$ad1['images'][0]['id']] )}}"> 
                </div>
              <div ppt-search-badges="" style="z-index:1" class="right">

                   @if($ad1['subscribe_id'] ===1)
								<div class="badge" style="color:#000000;background-color:#FFC300;">
								<span class="fal fa fa-star" style="color:#000000"> </span> PREMIUM </div>
                            @endif
			@if($ad1['subscribe_id'] ===2)
								<div class="badge" style="color:#000000;background-color:#FFC300;">
								<span class="fal fa fa-star" style="color:#000000"> </span> GOLD </div>
                            @endif
                            @if($ad1['subscribe_id'] ===3)
                            <div class="badge" style="color:#000000;background-color:#FFC300;">
                            <span class="fal fa fa-star" style="color:#000000"> </span> ULTRA VIP  </div>
                        @endif

                  </div>
              </figure>
              </div>
          </div>
          </a>
          <div class="lh-20 text-700" style="margin-top:20px;">
              <span class="text-online">•</span>
              <a href="{{ route('ads.details', ['username' => $ad1['user']['username'],'slug'=>$ad1['slug']]) }}"
                class="text-dark">
				{{ truncate($ad1['title'],40) }}
			</span></a>
          </div>
          <div class="lh-20" style="margin-top:0px;">
              <a href="{{ route('ads.details', ['username' => $ad1['user']['username'],'slug'=>$ad1['slug']]) }}"
                class="text-dark lh-20 text-300">
				{{ truncate($ad1['description'],65) }}
			</span></a>
          </div>
          </div>
	</div>

</div>
@empty
	@endforelse
</div>
    </div>
  </div>
</div>
</div>
</main>
</div>

   @include('layouts.Frontend.footer')
<div id="page-loading" style="height:400px; text-align:center; padding-top:300px;">
  <img src="{{ asset('assets/images/loading.svg') }}" alt="loading page" style="max-width:150px;"> </div>






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
                                  <script async="" src="{{ asset('assets/js/js.zclip.js?v=10.8.9') }}" id="premiumpress-zclip-js"></script>

				<noscript id="deferred-styles">

								<link rel="stylesheet" type="text/css" id="boostrap-css" href="{{ asset('assets/css/_bootstrap.css?v=10.8.9') }}">
								<link rel="stylesheet" type="text/css" id="theme-fonts" href="{{ asset('assets/css/css.theme-fonts.css?v=10.8.9') }}">
								<link rel="stylesheet" type="text/css" id="theme-elementor" href="{{ asset('assets/css/css.theme-elementor.css?v=10.8.9') }}">
								<link rel="stylesheet" type="text/css" id="theme-maps" href="{{ asset('assets/css/css.theme-maps.css/?v=10.8.9') }}">
								<link rel="stylesheet" type="text/css" id="theme-utilities" href="{{ asset('assets/css/css.theme-utilities.css?v=10.8.9') }}">
								<link rel="stylesheet" type="text/css" id="premiumpress-css" href="{{ asset('assets/css/css.premiumpress.css?v=10.8.9') }}">
								<link rel="stylesheet" type="text/css" id="premiumpress-chat" href="{{ asset('assets/css/_chat.css?v=10.8.9') }}">
								<link rel="stylesheet" type="text/css" id="premiumpress-theme-es" href="{{ asset('assets/css/_theme_es.css?v=10.8.9') }}">

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

<div class="popup-card">
    <div class="card-2">
        <div class="card-header">

            <h4 class="text-center">Fonctionnalité disponible pour membre VIP</h4>
                <div style="position: absolute;right:5px;top:-6px">
                    <i id="close" style="width: 12px;cursor: pointer;" class="fa fa-window-close"></i>
                </div>
        </div>

        <div class="card-body flex justify-content-center" style="display: flex;align-items:center;justify-content:center">
            <span>Cette fonctionnalité est disponible uniquement pour les membres. Pour contacter une escorte ULTRA VIP,  vous devez tout d'abord créer votre compte 'membre', ensuite prendre un abonnement. Au cas contraire contactez plutôt les escortes Gold et Premium</span>

        </div>
        <div class="card-footer">
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <button class="btn btn-danger">Aller aux escortes Gold et Premium</button>
                </div>
                <div>
                    <a href="{{ route('upgrade-plan', ['membership'=>'null']) }}"> <button class="btn btn-primary">Souscrire Maintenant</button></a>

                </div>
            </div>
        </div>
    </div>
</div>

@if ($ad['video'] != null)


<!-- Modal to display video -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
        <video width="100%" height="240" controls id="myVideoPlayer">
				<source src="{{ route('displayVideo', ['id'=>$ad['id'], 'path'=>$ad['video']]) }}" >
				Your browser does not support the video tag.
		</video>
      </div>
      <div class="modal-footer">
        <button type="button" id="stop" onclick="stopVideo();" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>
@endif

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Fonctionnalité VIP</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			 <h5 class="modal-title" style="color: red">Fermer</h5>
		</button>
      </div>
      <div class="modal-body">
        Cette fonctionnalité est disponible uniquement pour les membres. Pour contacter une escorte ULTRA VIP,  vous devez tout d'abord créer votre compte 'membre', ensuite prendre un abonnement. Au cas contraire contactez plutôt les escortes Gold et Premium
      </div>
      <div class="modal-footer">
	    <a href="{{ route('upgrade-plan', ['membership'=>'null']) }}"> <button type="button" class="btn btn-primary">Souscrire Maintenant</button></a>
        <a href="{{ route('ads.nonvip') }}"> <button type="button" class="btn btn-secondary">Voir Non VIP</button> </a>

      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="memberOnly" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="memberOnlyLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="memberOnlyLabel">Membre seulement</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Cette fonctionnalité est disponible uniquement pour les membres.Vous êtes escort.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-body">
            <div class="card-header">

                <h4 class="text-center">Fonctionnalité disponible pour membre VIP</h4>
                    <div style="position: absolute;right:5px;top:-6px">
                        <i id="close" style="width: 12px;cursor: pointer;" class="fa fa-window-close"></i>
                    </div>
            </div>

            <div class="card-body flex justify-content-center" style="display: flex;align-items:center;justify-content:center">
                <span>Cette fonctionnalité est disponible uniquement pour les membres. Pour contacter une escorte ULTRA VIP,  vous devez tout d'abord créer votre compte 'membre', ensuite prendre un abonnement. Au cas contraire contactez plutôt les escortes Gold et Premium</span>

            </div>
            <div class="card-footer">
                <div class="d-flex align-items-center" style="justify-content:space-between">
                    <div>
                        <button class="btn btn-danger">Aller aux escortes Gold et Premium</button>
                    </div>
                    <div>
                        <a href="{{ route('upgrade-plan', ['membership'=>'null']) }}"> <button class="btn btn-primary">Souscrire Maintenant</button></a>

                    </div>
                </div>
            </div>
        </div>

      </div>
    </div>
  </div>
<script>
    // const btn=document.querySelectorAll(".popup-premium");
    // const popup=document.querySelector('.popup-card');
    // const card=document.querySelector('.card-2');
    // const closeBtn=document.getElementById('close');
    // const url=window.location.hostname;
    // console.log(url);
    // closeBtn.addEventListener('click',()=>{

    //     card.style.top='-500px';
    //     card.style.transition="top 1s";
    //     popup.style.visibility="hidden";
    //     popup.style.transition="visibility 1s";
    // })
    // btn.forEach((b)=>{
    //     b.addEventListener('click',()=>{
    //         popup.style.visibility="visible";

    //         popup.style.display='flex';
    //         popup.style.alignItems='center';
    //         popup.style.justifyContent='center';
    //         card.style.top='0'
    //         card.style.transition="top 1s";
    //         popup.style.transition="all 1s ease-out;";
    //     })
    // })

</script>
<script>
     var video = document.getElementById("myVideoPlayer");
     function stopVideo(){
		console.log(video);
		 console.log('Hello');
          video.pause();
          video.currentTime = 0;
     }
	 $("#stop").on('click', function(){
    stopVideo();
});
</script>
</body>
</html>
