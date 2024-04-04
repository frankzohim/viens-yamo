@extends("layouts.Frontend.master")

@section('title')
Paiement annulé
@endsection

@section("content")
@csrf
<section class="section-60">
      <div class="container">
      <div class="row">
         <div class="col-md-6 offset-md-3">

<div class="card-popup rounded overflow-hidden" ppt-border1>
<div class="bg-primary pt-3"  style="background-color: #ED5858;color:white">

      <div class="card-popup-content">
      <div class="">
      <span class="smilecode" style="font-size: 40px;">&#x1F600;</span>
       <h5 class="text-white">Achat du nombre de credit annulé</h5>
       </div>
      </div>
</div>
<div class="card-body bg-white text-center">





                  <p class="text-600">votre Achat a été annulé

                    </p>
                  <p class="margin-top3">Si vous avez des questions,<a href="{{ route('contact') }}"> contactez nous.</a></p>


                                                    @if($user->role_id===2)
                                                         <div><a href="{{ route('db.escort.index') }}" data-ppt-btn class="btn-primary btn-lg my-3">Mon Tableau de bord</a></div>
                                                    @endif
                                                    @if($user->role_id===3)
                                                         <div><a href="{{ route('db.customer.index') }}" data-ppt-btn class="btn-primary btn-lg my-3">Mon Tableau de bord</a></div>
                                                    @endif









         </div>
      </div> </div></div>
      </section>
</div></main>
</div>


<div id="page-loading" style="height:800px; text-align:center; padding-top:200px;">
  <img src=" {{ asset('assets/images/loading.svg') }}" alt="loading page"
  style="max-width:150px;" /> </div>

				<input type="hidden" id="ppt-current-tho" value="" />
				<input type="hidden" id="ppt-current-dec" value="" />
				<input type="hidden" id="ppt-current-symbol" value="$" />
				<input type="hidden" id="ppt-current-position" value="left" />
                <input type="hidden" id="ppt-map-provider" value="google" />

        <script async src="{{ asset('assets/js/js.custom.js?v=10.9.3') }}" id="premiumpress-js"></script>

				<noscript id="deferred-styles">

								<link rel="stylesheet" type="text/css" id="boostrap-css" href="{{ asset('assets/css/_bootstrap.css?v=10.8.9') }}">
				<link rel="stylesheet" type="text/css" id="theme-fonts" href="{{ asset('assets/css/css.theme-fonts.css?v=10.8.9') }}">
				<link rel="stylesheet" type="text/css" id="theme-elementor" href="{{ asset('assets/css/css.theme-elementor.css') }}">
				<link rel="stylesheet" type="text/css" id="theme-maps" href="{{ asset('assets/css/css.theme-maps.css?v=10.8.9') }}">
				<link rel="stylesheet" type="text/css" id="theme-utilities" href="{{ asset('assets/css/css.theme-utilities.css?v=10.8.9') }}">
				<link rel="stylesheet" type="text/css" id="premiumpress-css" href="{{ asset('assets/css/css.premiumpress.css?v=10.8.9') }}">
				<link rel="stylesheet" type="text/css" id="premiumpress-chat" href="{{ asset('assets/css/_chat.css?v=10.8.9') }}">
				<link rel="stylesheet" type="text/css" id="premiumpress-theme-es" href="{{ asset('assets/css/_theme_es.css?v=10.8.9') }}">



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




@endsection
