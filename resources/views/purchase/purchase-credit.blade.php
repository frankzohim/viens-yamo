@extends("layouts.Frontend.master")

@section('title')
Achat de credit
@endsection

@section("content")


@if($price)
<div class="ppt-modal-wrap show modal-payment modal-bottom-rightxxx"><div class="ppt-modal-wrap-overlay"></div><div class="ppt-modal-item ppt-animate-bouncein bg-white w-500 ppt-modal-shadow"><div class="ppt-modal-container"><div class="card-popup large">
    <div class="bg-primary pt-3">
        <div class="card-popup-content">
        <div class="text-white mt-3">
            <strong class="">XAF{{ $price }}</strong>
            <div class="text-truncate mt-2 opacity-8 text-600">Achat de Credit</div>

        </div>
        </div>
    </div>

    <div class="card-body pop-animate fadeIn delay-200 text-center col-lg-10 mx-auto mb-4">

    <div class="text-center" id="spinner" style="display:none;">
        <div class="mb-5"><span class="fa fa-spin fa-3x fa-sync"></span></div>
        <div class="opacity-5">Redirecting to a secure payment page...</div>
    </div>


    <div id="pay_wrap">







    <hr>


    <div onclick="javascript:void(0);" class="text-decoration-none text-dark link-dark btn-block border shadow-sm p-3 rounded mb-4">
    <div class="d-flex payment-gateway_paypal">
        <div style="width:120px; height:40px;" class="mr-4 rounded overflow-hidden position-relative">
        <div class="bg-image js-image-trigger-set" style="background-image:url('{{ asset('assets/images/logo-cinetpay.webp') }}'); background-size: contain;"></div>
        </div>
        <div class="w-100">
        <div class="d-flex justify-content-between">
            <div class="text-700 mt-2">



    <form method="post" style="margin:0px !important;" action="{{route('purchase.init.credit')}}" name="checkout_paypal1">
        @csrf
        <input type="hidden" name="price" value="{{ $price }}">


    <button class="btn mt-n2  btn mt-n2-block font-weight-bold text-uppercase " style="cursor:pointer">Mobile Money avec Cinetpay</button><input type="hidden" name="bn" value="PREMIUMPRESSLIMITED_SP">
    <input type="hidden" name="charset" value="utf-8">
    <input type="hidden" name="custom" value="SUBS-mem1-10-1835253144" class="paymentcustomfield">
    <input type="hidden" name="rm" value="2">
    <input type="hidden" name="lc" value="">
    <input type="hidden" name="return" value="https://es10.premiummod.com/callback/?auth=1&amp;cid=SUBS-mem1-10-1835253144">
    <input type="hidden" name="cancel_return" value="https://es10.premiummod.com/callback/?cancel=1">
    <input type="hidden" name="notify_url" value="https://es10.premiummod.com/callback/">
    </form>


    </div>

    <i class="fa fa-chevron-right fa-2x mr-2 mt-1"></i>
    </div>

    </div>

    </div>
    </div>
    <div onclick="javascript:void(0);" class="text-decoration-none text-dark link-dark btn-block border shadow-sm p-3 rounded mb-4">
        <div class="d-flex payment-gateway_paypal">
            <div style="width:120px; height:40px;" class="mr-4 rounded overflow-hidden position-relative">
            <div class="bg-image js-image-trigger-set" style="background-image:url('{{ asset('assets/images/coolpay.png') }}'); background-size: contain;"></div>
            </div>
            <div class="w-100">
            <div class="d-flex justify-content-between">
                <div class="text-700 mt-2">



                    <form method="post" style="margin:0px !important;" action="{{route('init-cool-pay.credit')}}" name="checkout_paypal1">
                        @csrf
                        <input type="hidden" name="price" value="{{ $price }}">



                    <button class="btn mt-n2  btn mt-n2-block font-weight-bold text-uppercase " style="cursor:pointer">Mobile money avec Cool Pay</button><input type="hidden" name="bn" value="PREMIUMPRESSLIMITED_SP">
                    <input type="hidden" name="charset" value="utf-8">
                    <input type="hidden" name="custom" value="SUBS-mem1-10-1835253144" class="paymentcustomfield">
                    <input type="hidden" name="rm" value="2">
                    <input type="hidden" name="lc" value="">
                    <input type="hidden" name="return" value="https://es10.premiummod.com/callback/?auth=1&amp;cid=SUBS-mem1-10-1835253144">
                    <input type="hidden" name="cancel_return" value="https://es10.premiummod.com/callback/?cancel=1">
                    <input type="hidden" name="notify_url" value="https://es10.premiummod.com/callback/">
                    </form>


        </div>

        <i class="fa fa-chevron-right fa-2x mr-2 mt-1"></i>
        </div>

        </div>

        </div>
        </div>







     </div>
    <div class="mt-4 opacity-5 small">
    <div class=" d-inline-flex mx-auto">
        <div ppt-icon-16="" data-ppt-icon-size="16"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg></div>
        <div class="ml-2">
        All payment pages are secured using SSL.</div>
        </div>
    </div>


    <script>

    function togglePay(){

    jQuery('#spinner').show();
    jQuery('#pay_wrap').hide();

    }


    jQuery( "form button, form .btn:not(.btn-sm)" ).click(function() {
      togglePay();
    });
    </script>
    </div>
    </div></div><div class="show-mobile ppt-modal-mobile-close p-3 w-100"><a href="#" class="btn-system btn-close w-100 shadow-sm" data-ppt-btn="">X</a></div></div></div>

@endif
<section class="section-60">
      <div class="container">
      <div class="row">
         <div class="col-md-6 offset-md-3">

<div class="card-popup rounded overflow-hidden" ppt-border1>
<div class="bg-primary pt-3"  style="background-color: #ED5858;color:white">

      <div class="card-popup-content">


       <h5 class="text-white">Achat de Credit</h5>

      </div>
</div>
<div class="card-body bg-white text-center">


            <form action="{{ route('choice.type.payment') }}" method="get">
                @csrf
                <div class="form-group mt-4">

                    <label class="">Entrez le nombre de credit à acheter</label>

                    <select name="price" id="" class="form-control">
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="400">400</option>
                        <option value="500">500</option>
                        <option value="600">600</option>
                        <option value="700">700</option>
                        <option value="800">800</option>
                        <option value="900">900</option>
                        <option value="1000">1000</option>
                        <option value="2000">2000</option>
                        <option value="3000">3000</option>
                        <option value="4000">4000</option>
                        <option value="5000">5000</option>
                        <option value="6000">6000</option>
                        <option value="7000">7000</option>
                        <option value="8000">8000</option>
                        <option value="9000">9000</option>
                        <option value="10000">10000</option>
                    </select>


                    </div>

                    <div><button type="submit" data-ppt-btn class="btn-primary btn-lg my-3">Acheter</button></div>
            </form>










         </div>
      </div> </div></div>
      </section>
</div></main>
</div>


<div id="page-loading" style="height:800px; text-align:center; padding-top:200px;"> <img src="https://ppt1080.b-cdn.net/images/loading.svg" alt="loading page" style="max-width:150px;" /> </div>











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




</div>




@endsection

