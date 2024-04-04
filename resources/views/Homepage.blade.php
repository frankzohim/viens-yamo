@extends('layouts.Frontend.master')
@section('title', __('Viens Yamo'))
@section("meta_title","Annonces d'escortes girls au cameroun")
@section('meta_description',"Viens-Yamo Le géant de l'escorte girls et boys")
@section("meta_image",asset('assets/meta/home.png'))
@section('content')

<style>



  .cardbox {
    padding: 30px;
}
.cardbox {
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.035);
    border: 1px solid #dee2e6;
    text-align: center;
    border-radius: 8px;
    cursor: pointer;
    margin-bottom: 20px;
}


.fa-map-marker:before {
    content: "\f041";
}
</style>

<html>
  <body>
@include('utils.utils')


<div class=" bg-white navbar-light border-bottom" data-block-id="header">


  <div class="my-3 text-center">
          @if (isset($banners))

              @foreach ($banners as $banner)
                  @if($banner['position'] == 'header_promo' && $banner['status'] == 1)
                      <a href='javascript:void(0)' class='samplebanneronly'>
                        <img src='{{ route('display.banner',['id'=>$banner['id']] )}}'
                        class='img-fluid' alt='sample banner'>
                      </a>
                  @endif
              @endforeach

          @endif


      </div>
  <div class="container h-100 px-0 show-mobile">
        <div class="suha-footer-nav h-100">
          <ul class="h-100 list-unstyled d-flex align-items-center justify-content-between pl-0">

          <li><a href="{{ route('db.escort.index') }}" class="">
                <i class="fa fa-user" style="color: #ED5858;"></i>Mon Compte</a></li>

          <li><a href="{{ route('ads.create') }}" class="">
                <i class="fal fa-plus-circle" style="color: #ED5858;"></i> Créer une annonce</a></li>
          <li><a href="{{ route('ads.list') }}" class="">
                <i class="fal fa-sparkles" style="color: #ED5858;"></i> Annonces</a></li>



          </ul>
        </div>
   </div>

   <div class="position-relative filter-keyword show-mobile" style="margin: 25px 25px;">

	 <form method="get" action="{{ route('search') }}" >
                  @csrf
			<input type="text" class="form-control shadow-sm"
			required name="s" data-type="text" data-type="text"
			data-key="keyword" autocomplete="on"  data-formatted-text="Keyword"
			placeholder="Rechercher.." value="" style="height:50px;">


			  <button class="btn iconbit" type="submit"
			style="position:absolute; top:5px; right:5px;" >

				  <span ppt-icon-24 data-ppt-icon-size="24">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
				stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round"
				stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
			  </span>

			  </button>
		</form>

	</div>

       <div class="container show-mobile">
         <div class="d-flex justify-content-center">
            <div class=>

            <div class>
      <a href="https://api.whatsapp.com/send?phone=18328820957&text=Hello j'ai besoin d'aide pour m'inscrire"
      target="_blank" class="btn-md  mt-2" data-ppt-btn="" style="background-color: #F44336; color:white" data-ppt-btn-link=""
                 class="btn-system">Besoin d'aide pour s'inscrire?cliquez ici </a>

            </div>
            <div>

            </div>
         </div>

      </div>
      </div>


      <br>
 <div class="show-mobile mb-3 mt-2">
  <div class="container ">

        <a href="#">Viens-Yamo Le géant de l'escorte girls et boys  </a>

    @if(isset($numberAdsByTowns))


		<div class="row">
			@forelse ( $numberAdsByTowns as $numberAdsByTown )

		      @if($loop->index < 3)


				<div class="col-6" style="margin-top:10px">
					<i class="fa fa-map-marker"></i><a href="{{ route('ads.town', ['id'=>$numberAdsByTown['town_id'] ]) }}" >
						{{ $numberAdsByTown['town_name'] }} ({{ $numberAdsByTown['totalAnnounces']  }})
				    </a>
				</div>



			@endif
					@empty

			@endforelse
      @endif
			<div class="col-6" style="margin-top:10px">
					<i class="fa fa-map-marker"></i><a href="{{ route('adstown') }}" >
						Autres Villes
				    </a>
				</div>

		</div>
  </div>




</div>

</div>


@if (Session::has('checkAge'))
  <input type="hidden" id="checkAge" value="true">
@else
<input type="hidden" id="checkAge" value="false">
  <!-- Modal -->
<div class="modal fade" id="CheckAgeModal" tabindex="-1"
aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" >
    <div class="modal-content" style="background-color: #1a1c1e">

      <div class="modal-body text-center">

         <div class="row justify-content-center" style="color: red; font-size:50px; font-weight:bold">
            21+
          </div>
          <div class="row justify-content-center" style="padding-left: 20px; padding-right:20px">
               <span class="text-white"> Veuillez confirmer que vous avez plus de 21 ans ou quitter le site Web. <br>
            Ce site utilise des cookies uniquement pour analyser le trafic</span>
          </div>
          <hr>
          <div class="row justify-content-center" >
             <a href="http://www.google.com">
              <button type="button" class="btn btn-secondary">
                <i class="fa fa-arrow-left"></i>&nbsp; QUITTER</button>
             </a> &nbsp;
        <a href="#">
          <button type="button" class="btn btn-primary" id="button-session" data-bs-dismiss="modal">
          <i class="fa fa-check" aria-hidden="true"></i>&nbsp; J'AI AU MOINS 21 ANS</button>

        </a>
          </div>

      </div>

    </div>
  </div>
</div>
@endif




@if(count ($vipAds))
<section data-ppt-blockid="hero3" data-ppt-blocktype="hero" data-ppt-section=""
    class="position-relative " data-overlay="gradient-left">


    <div class="container position-relative z-10 py-0 py-sm-5 _contents">
            <div class="row align-items-center">





                            <div class="col-lg-12 text-light">
                                <h1 data-ppt-title="">Annonces ULTRA VIP
                                </h1> <br/>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                @php
                                                    $countVip=count($vipAds);
                                                    $numberCaroussel=$countVip/2;

                                                @endphp
                                                @if($countVip%2===1)
                                                @php
                                                    $numberCaroussel=($numberCaroussel+1) - 0.5;
                                                @endphp

                                                @endif

                                                @for($i = 1; $i < $numberCaroussel; $i++)
                                                @if($i===1)
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" class="active"></li>
                                                @endif

                                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>
                                                @endfor

                                            </ol>
                                            <div class="carousel-inner">



                                                        @if(count($vipAds) > 0)
                                                            @for($i=0; $i <=count($vipAds)-1 ; $i=$i+2)
                                                                <div class="carousel-item @if($i===0)
                                                                active
                                                                @endif">
                                                                    <section data-ppt-blockid="listings99" data-ppt-blocktype="listings" data-ppt-section="" class="section-old-60 section-40">
                                                                        <div class="container">
                                                                            <div class="row">

                                                                            <div class="col-12">
                                                                                <div class='row'>

                                                                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">

                                                                                        <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
                                                                                        data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

                                                                                            <figure>

                                                                                            <div class="button-featured-new-wrap es">
                                                                                                <div class="button-featured-new">ULTRA VIP</div>
                                                                                            </div>

                                                                                            <div class="buttons-wrap">



                                                                                            <div class="button-new" style="background-color: #DA9DDC">{{ $vipAds[$i]['age'] }} Ans</div>

                                                                                            </div>
                                                                                            <a href="{{ route('ads.details', ['username' => $vipAds[$i]['user']['username'],'slug'=>$vipAds[$i]['slug']]) }}">

                                                                                            <div ppt-border1="" class="p-1">

                                                                                                <div class="search-gradient"> </div>

                                                                                                <div class="bg-light position-relative overflow-hidden" style="height:360px;">
                                                                                                <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
                                                                                                    <div class="text-white fs-4 text-600">

                                                                                                            </div>
                                                                                                    <div class="fs-sm text-white opacity-5 text-400">
                                                                                                    {{ truncate($vipAds[$i]['title'],30) }}  
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$vipAds[$i]['id'], 'path'=>$vipAds[$i]['images'][0]['id']] )}}">
                                                                                                     
                                                                                                </div>

                                                                                            <div ppt-search-badges="" style="z-index:1" class="right">


                                                                                                <div class="badge" style="color:white;background-color:black;">
                                                                                                <span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($vipAds[$i]['town']['town_name']) }}   </div>
																								@if($vipAds[$i]['user']['isVerify']== 1)
																								<div class="badge" style="color:#FBFBFB;background-color:#ED5858;">
																								<span class="fal fa fa-check" style="color:#FBFBFB"> </span> Vérifié  </div>
																								@endif

                                                                                            </div>


                                                                                                </div>


                                                                                            </div>
                                                                                            </a>


                                                                                            </figure>

                                                                                            </div>



                                                                                            <div class="show-mobile">
                                                                                            <div class="position-relative mb-3">
                                                                                                <a href="{{ route('ads.details', ['username' => $vipAds[$i]['user']['username'],'slug'=>$vipAds[$i]['slug']]) }}">
                                                                                                <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
                                                                                                <div class="h-100 position-relative">
                                                                                                    <figure>


                                                                                                        <div class="buttons-wrap">

                                                                                                            <div class="button-new"
                                                                                                            style="background-color: #DA9DDC; font-size:10px;">{{ $vipAds[$i]['age'] }} Ans</div>

                                                                                                        </div>
                                                                                                        <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

                                                                                                                    <div class="fs-sm text-white  text-600">
                                                                                                                    {{ ucfirst($vipAds[$i]['town']['town_name']) }}  
                                                                                                                    </div>
                                                                                                        </div>
                                                                                                        <div class="bg-image z-0"
                                                                                                        data-bg="{{ route('display.ads.image',['id'=>$vipAds[$i]['id'], 'path'=>$vipAds[$i]['images'][0]['id']] )}}"> 
                                                                                                        </div>
                                                                                                        <div ppt-search-badges="" style="z-index:1, border-radius:80%" class="right">
                                                                                                        <div class="badge" style="color:#fff;background-color:red;">
                                                                                                        <span class="fal fa fa-star" style="color:#000000"> </span> ULTRA </br> VIP  </div>

																										@if($vipAds[$i]['user']['isVerify']== 1)
																										<div class="badge" style="color:#FBFBFB;background-color:#ED5858;">
																										<span class="fal fa fa-check" style="color:#FBFBFB"> </span> Vérifié  </div>
																										@endif


                                                                                                    </div>
                                                                                                        </figure>
                                                                                                    </div>
                                                                                                </div>
                                                                                                </a>
                                                                                                <div class="lh-20 " style="margin-top:20px;">
                                                                                                        <span class="text-online">•</span>
                                                                                                        <a href="{{ route('ads.details', ['username' => $vipAds[$i]['user']['username'],'slug'=>$vipAds[$i]['slug']]) }}" class="text-white">
                                                                                                        {{ truncate($vipAds[$i]['title'],15) }}</span></a>
                                                                                                </div>

                                                                                            </div>
                                                                                            </div>

                                                                                    </div>
                                                                                    @if($i<=count($vipAds)-2)
                                                                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">

                                                                                      <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
                                                                                      data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

                                                                                          <figure>


                                                                                          <div class="button-featured-new-wrap es">
                                                                                              <div class="button-featured-new">ULTRA VIP</div>
                                                                                          </div>


                                                                                          <div class="buttons-wrap">



                                                                                          <div class="button-new" style="background-color: #DA9DDC">{{ $vipAds[$i+1]['age'] }} Ans</div>

                                                                                          </div>
                                                                                          <a href="{{ route('ads.details', ['username' => $vipAds[$i+1]['user']['username'],'slug'=>$vipAds[$i+1]['slug']]) }}">


                                                                                          <div ppt-border1="" class="p-1">

                                                                                              <div class="search-gradient"> </div>

                                                                                              <div class="bg-light position-relative overflow-hidden" style="height:360px;">
                                                                                              <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
                                                                                                  <div class="text-white fs-4 text-600">

                                                                                                          </div>
                                                                                                  <div class="fs-sm text-white opacity-5 text-400">
                                                                                                  {{ truncate($vipAds[$i+1]['title'],30) }}  
                                                                                                  </div>
                                                                                              </div>
                                                                                              <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$vipAds[$i+1]['id'], 'path'=>$vipAds[$i+1]['images'][0]['id']] )}}">
                                                                                                   
                                                                                              </div>

                                                                                          <div ppt-search-badges="" style="z-index:1" class="right">


                                                                                              <div class="badge" style="color:white;background-color:black;">
                                                                                              <span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($vipAds[$i+1]['town']['town_name']) }}   </div>
																							  @if($vipAds[$i+1]['user']['isVerify']== 1)
																								<div class="badge" style="color:#FBFBFB;background-color:#ED5858;">
																								<span class="fal fa fa-check" style="color:#FBFBFB"> </span> Vérifié  </div>
																								@endif

                                                                                          </div>


                                                                                              </div>


                                                                                          </div>
                                                                                          </a>


                                                                                          </figure>

                                                                                          </div>



                                                                                          <div class="show-mobile">
                                                                                          <div class="position-relative mb-3">

                                                                                                <a href="{{ route('ads.details', ['username' => $vipAds[$i+1]['user']['username'],'slug'=>$vipAds[$i+1]['slug']]) }}">
                                                                                              <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
                                                                                              <div class="h-100 position-relative">
                                                                                                  <figure>


                                                                                                      <div class="buttons-wrap">

                                                                                                          <div class="button-new"
                                                                                                          style="background-color: #DA9DDC; font-size:10px;">{{ $vipAds[$i+1]['age'] }} Ans</div>

                                                                                                      </div>
                                                                                                      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

                                                                                                                  <div class="fs-sm text-white  text-600">
                                                                                                                  {{ ucfirst($vipAds[$i+1]['town']['town_name']) }}  
                                                                                                                  </div>
                                                                                                      </div>
                                                                                                      <div class="bg-image z-0"
                                                                                                      data-bg="{{ route('display.ads.image',['id'=>$vipAds[$i+1]['id'], 'path'=>$vipAds[$i+1]['images'][0]['id']] )}}"> 
                                                                                                      </div>
                                                                                                      <div ppt-search-badges="" style="z-index:1, border-radius:80%" class="right">
                                                                                                      <div class="badge" style="color:#fff;background-color:red;">
                                                                                                      <span class="fal fa fa-star" style="color:#000000"> </span> ULTRA </br> VIP  </div>
																								@if($vipAds[$i+1]['user']['isVerify']== 1)
																								<div class="badge" style="color:#FBFBFB;background-color:#ED5858;">
																								<span class="fal fa fa-check" style="color:#FBFBFB"> </span> Vérifié  </div>
																								@endif

                                                                                                  </div>
                                                                                                      </figure>

                                                                                                  </div>
                                                                                              </div>
                                                                                              </a>
                                                                                              <div class="lh-20 " style="margin-top:20px;">
                                                                                                      <span class="text-online">•</span>
                                                                                                      <a href="{{ route('ads.details', ['username' => $vipAds[$i+1]['user']['username'],'slug'=>$vipAds[$i+1]['slug']]) }}" class="text-white">
                                                                                                          {{ truncate($vipAds[$i+1]['title'],15) }}</span></a>
                                                                                              </div>

                                                                                          </div>
                                                                                          </div>

                                                                                  </div>
                                                                                    @endif




                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            @endfor
                                                        @endif

                                    </div>
                                    @if(count($vipAds) >2)
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                      <div class="carousel-nav-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 20 20">
                                          <path d="M10,20A10,10,0,1,0,0,10,10,10,0,0,0,10,20ZM11.289,4.3,12.711,5.7l-4.3,4.344L12.7,14.289,11.3,15.711,5.586,10.063Z"/>
                                        </svg>
                                      </div>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                       <div class="carousel-nav-icon">
                                         <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 20 20">
                                          <path d="M10,20A10,10,0,1,0,0,10,10,10,0,0,0,10,20ZM8.711,4.3l5.7,5.766L8.7,15.711,7.3,14.289l4.289-4.242L7.289,5.7Z"/>
                                        </svg>
                                      </div>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    @endif

                            </div>







            </div>
            </div>
    </div>

        <div class="bg-image" style="background-image:url('{{ asset('assets/images/hero/hero4.png') }}');" data-ppt-image-bg=""
        data-bg="{{ asset('assets/images/hero/hero4.png') }}"> </div>

</section>
@endif
<div class="my-3 text-center">
          @if (isset($banners))

              @foreach ($banners as $banner)
                  @if($banner['position'] == 'home_top' && $banner['status'] == 1)
                      <a href='javascript:void(0)' class='samplebanneronly'>
                        <img src='{{ route('display.banner',['id'=>$banner['id']] )}}'
                        class='img-fluid' alt='sample banner'>
                      </a>
                  @endif
              @endforeach

          @endif


      </div>

@if (count($goldAds))


<div class="container mt-5">
    <div class="row">
          <div class="col-lg-12">
        <div class="d-flex justify-content-between">
          <h2 class="mb-1" data-ppt-title="">Annonces GOLD</h2>
          <div>
                        <a href="{{ route('ads.list', ['membership' => 2]) }}" data-ppt-btn="" data-ppt-btn-link="" class="btn-system">Tout Voir</a>
                      </div>
        </div>
      </div>

	  </div>
</div>
@endif

@if (count($goldAds))
<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" data-interval="10000">
  <ol class="carousel-indicators">
    @php
        $countgold=count($goldAds);
        $numberCarousselGold=$countgold/2;

    @endphp
    @if($countgold%2===1)
    @php
        $numberCarousselGold=($numberCarousselGold+1) - 0.5;
    @endphp

    @endif

    @for($i = 1; $i < $numberCarousselGold; $i++)
    @if($i===1)
        <li data-target="#carouselExampleIndicators1" data-slide-to="{{ $i }}" class="active"></li>
    @endif

        <li data-target="#carouselExampleIndicators1" data-slide-to="{{ $i }}"></li>
    @endfor

</ol>
  <div class="carousel-inner">



    @if(count($goldAds) > 0)
    @for($i=0; $i <=count($goldAds)-1; $i=$i+4)
    <div class="carousel-item @if($i===0)
    active
    @endif">
        <section data-ppt-blockid="listings99" data-ppt-blocktype="listings" data-ppt-section="" class="section-old-60 section-40">
      <div class="container">
        <div class="row">

        <div class="col-12">
            <div class='row'>

                <div class="col-6 col-sm-6 col-md-3 col-lg-3">

                    <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
                    data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

                          <figure>


                        <div class="buttons-wrap">

                            <div class="button-new">GOLD</div>

                        </div>
                        <a href="{{ route('ads.details', ['username' => $goldAds[$i]['user']['username'],'slug'=>$goldAds[$i]['slug']]) }}">

                          <div ppt-border1="" class="p-1">

                            <div class="search-gradient"> </div>

                            <div class="bg-light position-relative overflow-hidden" style="height:360px;">
                              <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
                                <div class="text-white fs-4 text-600">

                                          </div>
                                <div class="fs-sm text-white opacity-5 text-400">
                                  {{ truncate($goldAds[$i]['title'],30) }}  
                                </div>
                              </div>
                              <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$goldAds[$i]['id'], 'path'=>$goldAds[$i]['images'][0]['id']] )}}">
                                 
                              </div>

                        <div ppt-search-badges="" style="z-index:1" class="right">


                            <div class="badge" style="color:white;background-color:black">
                            <span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($goldAds[$i]['town']['town_name']) }}   </div>

							@if($goldAds[$i]['user']['isVerify']== 1)
									<div class="badge" style="color:#FBFBFB;background-color:#ED5858;">
											<span class="fal fa fa-check" style="color:#FBFBFB"> </span> Vérifié
									</div>
							@endif

                        </div>


                            </div>


                          </div>
                        </a>


                        </figure>

                        </div>



                        <div class="show-mobile">
                          <div class="position-relative mb-3">
                            <a href="{{ route('ads.details', ['username' => $goldAds[$i]['user']['username'],'slug'=>$goldAds[$i]['slug']]) }}">
                            <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
                              <div class="h-100 position-relative">
                                <figure>


                                    <div class="buttons-wrap">

                                        <div class="button-new"
                                        style="background-color: #DA9DDC; font-size:10px;">{{ $goldAds[$i]['age'] }} Ans</div>

                                    </div>
                                    <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

                                                <div class="fs-sm text-white  text-600">
                                                 {{ ucfirst($goldAds[$i]['town']['town_name']) }}  
                                                </div>
                                    </div>
                                    <div class="bg-image z-0"
                                    data-bg="{{ route('display.ads.image',['id'=>$goldAds[$i]['id'], 'path'=>$goldAds[$i]['images'][0]['id']] )}}"> 
                                    </div>
                                    <div ppt-search-badges="" style="z-index:1" class="right">
                                        <div class="badge" style="color:#000000;background-color:#FFC300;">
                                        <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

										@if($goldAds[$i]['user']['isVerify']== 1)
											<div class="badge" style="color:#FBFBFB;background-color:#ED5858;">
												<span class="fal fa fa-check" style="color:#FBFBFB"> </span> Vérifié  </div>
										@endif

                                    </div>

                                    </figure>
                                </div>
                            </div>
                            </a>
                            <div class="lh-20 " style="margin-top:20px;">
                                    <span class="text-online">•</span>
                                    <a href="{{ route('ads.details', ['username' => $goldAds[$i]['user']['username'],'slug'=>$goldAds[$i]['slug']]) }}" class="text-dark">
                                    {{ truncate($goldAds[$i]['title'],15) }}</span></a>
                            </div>

                          </div>
                        </div>

                </div>
                @if($i+1<count($goldAds))
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">

                    <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
                    data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

                          <figure>

                        <div class="buttons-wrap">

                            <div class="button-new">GOLD</div>

                        </div>
                        <a href="{{ route('ads.details', ['username' => $goldAds[$i+1]['user']['username'],'slug'=>$goldAds[$i+1]['slug']]) }}">

                          <div ppt-border1="" class="p-1">

                            <div class="search-gradient"> </div>

                            <div class="bg-light position-relative overflow-hidden" style="height:360px;">
                              <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
                                <div class="text-white fs-4 text-600">

                                          </div>
                                <div class="fs-sm text-white opacity-5 text-400">
                                  {{ truncate($goldAds[$i+1]['title'],30) }}  
                                </div>
                              </div>
                              <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$goldAds[$i+1]['id'], 'path'=>$goldAds[$i+1]['images'][0]['id']] )}}">
                                 
                              </div>

                        <div ppt-search-badges="" style="z-index:1" class="right">


                            <div class="badge" style="color:white;background-color:black;">
                            <span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($goldAds[$i+1]['town']['town_name']) }}   </div>

							@if($goldAds[$i+1]['user']['isVerify']== 1)
									<div class="badge" style="color:#FBFBFB;background-color:#ED5858;">
											<span class="fal fa fa-check" style="color:#FBFBFB"> </span> Vérifié
									</div>
							@endif

                        </div>


                            </div>


                          </div>
                        </a>


                        </figure>

                        </div>



                        <div class="show-mobile">
                          <div class="position-relative mb-3">
                            <a href="{{ route('ads.details', ['username' => $goldAds[$i+1]['user']['username'],'slug'=>$goldAds[$i+1]['slug']]) }}">

                            <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
                              <div class="h-100 position-relative">
                                <figure>


                                    <div class="buttons-wrap">

                                        <div class="button-new"
                                        style="background-color: #DA9DDC; font-size:10px;">{{ $goldAds[$i+1]['age'] }} Ans</div>

                                    </div>
                                    <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

                                                <div class="fs-sm text-white  text-600">
                                                 {{ ucfirst($goldAds[$i+1]['town']['town_name']) }}  
                                                </div>
                                    </div>
                                    <div class="bg-image z-0"
                                    data-bg="{{ route('display.ads.image',['id'=>$goldAds[$i+1]['id'], 'path'=>$goldAds[$i+1]['images'][0]['id']] )}}"> 
                                    </div>
                                    <div ppt-search-badges="" style="z-index:1" class="right">
                                        <div class="badge" style="color:#000000;background-color:#FFC300;">
                                        <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

										@if($goldAds[$i+1]['user']['isVerify']== 1)
											<div class="badge" style="color:#FBFBFB;background-color:#ED5858;">
													<span class="fal fa fa-check" style="color:#FBFBFB"> </span> Vérifié
											</div>
									    @endif
                                    </div>

                                    </figure>

                                </div>
                            </div>
                            </a>
                            <div class="lh-20 " style="margin-top:20px;">
                                    <span class="text-online">•</span>
                                    <a href="{{ route('ads.details', ['username' => $goldAds[$i+1]['user']['username'],'slug'=>$goldAds[$i+1]['slug']]) }}" class="text-dark">
                                   {{ truncate($goldAds[$i+1]['title'],15) }}</span></a>
                            </div>

                          </div>
                        </div>

                </div>
                @endif

                @if($i+2<count($goldAds))
                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">

                        <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
                        data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

                            <figure>

                            <div class="buttons-wrap">

                                <div class="button-new">GOLD</div>

                            </div>
                            <a href="{{ route('ads.details', ['username' => $goldAds[$i+2]['user']['username'],'slug'=>$goldAds[$i+2]['slug']]) }}">

                            <div ppt-border1="" class="p-1">

                                <div class="search-gradient"> </div>

                                <div class="bg-light position-relative overflow-hidden" style="height:360px;">
                                <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
                                    <div class="text-white fs-4 text-600">

                                            </div>
                                    <div class="fs-sm text-white opacity-5 text-400">
                                    {{ truncate($goldAds[$i+2]['title'],30) }}  
                                    </div>
                                </div>
                                <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$goldAds[$i+2]['id'], 'path'=>$goldAds[$i+2]['images'][0]['id']] )}}">
                                     
                                </div>

                            <div ppt-search-badges="" style="z-index:1" class="right">


                                <div class="badge" style="color:white;background-color:black;">
                                <span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($goldAds[$i+2]['town']['town_name']) }}   </div>

								@if($goldAds[$i+2]['user']['isVerify']== 1)
									<div class="badge" style="color:#FBFBFB;background-color:#ED5858;">
											<span class="fal fa fa-check" style="color:#FBFBFB"> </span> Vérifié
									</div>
							@endif

                            </div>


                                </div>


                            </div>
                            </a>


                            </figure>

                            </div>



                            <div class="show-mobile">
                            <div class="position-relative mb-3">
                                <a href="{{ route('ads.details', ['username' => $goldAds[$i+2]['user']['username'],'slug'=>$goldAds[$i+2]['slug']]) }}">


                                <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
                                <div class="h-100 position-relative">
                                    <figure>


                                        <div class="buttons-wrap">

                                            <div class="button-new"
                                            style="background-color: #DA9DDC; font-size:10px;">{{ $goldAds[$i+2]['age'] }} Ans</div>

                                        </div>
                                        <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

                                                    <div class="fs-sm text-white  text-600">
                                                    {{ ucfirst($goldAds[$i+2]['town']['town_name']) }}  
                                                    </div>
                                        </div>
                                        <div class="bg-image z-0"
                                        data-bg="{{ route('display.ads.image',['id'=>$goldAds[$i+2]['id'], 'path'=>$goldAds[$i+2]['images'][0]['id']] )}}"> 
                                        </div>
                                        <div ppt-search-badges="" style="z-index:1" class="right">
                                            <div class="badge" style="color:#000000;background-color:#FFC300;">
                                            <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

											@if($goldAds[$i+2]['user']['isVerify']== 1)
													<div class="badge" style="color:#FBFBFB;background-color:#ED5858;">
															<span class="fal fa fa-check" style="color:#FBFBFB"> </span> Vérifié
													</div>
											@endif
                                        </div>

                                        </figure>

                                    </div>
                                </div>
                                </a>
                                <div class="lh-20 " style="margin-top:20px;">
                                        <span class="text-online">•</span>
                                        <a href="{{ route('ads.details', ['username' => $goldAds[$i+2]['user']['username'],'slug'=>$goldAds[$i+2]['slug']]) }}" class="text-dark">
                                        {{ truncate($goldAds[$i+2]['title'],15) }}</span></a>
                                </div>

                            </div>
                            </div>

                    </div>
                @endif

                @if($i+3<count($goldAds))
                <div class="col-6 col-sm-6 col-md-3 col-lg-3">

                    <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
                    data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

                          <figure>

                        <div class="buttons-wrap">

                            <div class="button-new">GOLD</div>

                        </div>
                        <a href="{{ route('ads.details', ['username' => $goldAds[$i+3]['user']['username'],'slug'=>$goldAds[$i+3]['slug']]) }}">


                          <div ppt-border1="" class="p-1">

                            <div class="search-gradient"> </div>

                            <div class="bg-light position-relative overflow-hidden" style="height:360px;">
                              <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
                                <div class="text-white fs-4 text-600">

                                          </div>
                                <div class="fs-sm text-white opacity-5 text-400">
                                  {{ truncate($goldAds[$i+3]['title'],30) }}  
                                </div>
                              </div>
                              <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$goldAds[$i+3]['id'], 'path'=>$goldAds[$i+3]['images'][0]['id']] )}}">
                                 
                              </div>

                        <div ppt-search-badges="" style="z-index:1" class="right">


                            <div class="badge" style="color:white;background-color:black;">
                            <span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($goldAds[$i+3]['town']['town_name']) }}   </div>

							@if($goldAds[$i+3]['user']['isVerify']== 1)
									<div class="badge" style="color:#FBFBFB;background-color:#ED5858;">
											<span class="fal fa fa-check" style="color:#FBFBFB"> </span> Vérifié
									</div>
							@endif

                        </div>


                            </div>


                          </div>
                        </a>


                        </figure>

                        </div>



                        <div class="show-mobile">
                          <div class="position-relative mb-3">
                            <a href="{{ route('ads.details', ['username' => $goldAds[$i+3]['user']['username'],'slug'=>$goldAds[$i+3]['slug']]) }}">

                            <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
                              <div class="h-100 position-relative">
                                <figure>


                                    <div class="buttons-wrap">

                                        <div class="button-new"
                                        style="background-color: #DA9DDC; font-size:10px;">{{ $goldAds[$i+3]['age'] }} Ans</div>

                                    </div>
                                    <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

                                                <div class="fs-sm text-white  text-600">
                                                 {{ ucfirst($goldAds[$i+3]['town']['town_name']) }}  
                                                </div>
                                    </div>
                                    <div class="bg-image z-0"
                                    data-bg="{{ route('display.ads.image',['id'=>$goldAds[$i+3]['id'], 'path'=>$goldAds[$i+3]['images'][0]['id']] )}}"> 
                                    </div>
                                    <div ppt-search-badges="" style="z-index:1" class="right">
                                        <div class="badge" style="color:#000000;background-color:#FFC300;">
                                        <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

										@if($goldAds[$i+3]['user']['isVerify']== 1)
												<div class="badge" style="color:#FBFBFB;background-color:#ED5858;">
														<span class="fal fa fa-check" style="color:#FBFBFB"> </span> Vérifié
												</div>
										@endif

                                    </div>
                                    </figure>

                                </div>
                            </div>
                            </a>
                            <div class="lh-20 " style="margin-top:20px;">
                                    <span class="text-online">•</span>
                                    <a href="{{ route('ads.details', ['username' => $goldAds[$i+3]['user']['username'],'slug'=>$goldAds[$i+3]['slug']]) }}" class="text-dark">
                                    {{ truncate($goldAds[$i+3]['title'],15) }}</span></a>
                            </div>

                          </div>
                        </div>

                </div>
                @endif


            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
@endfor
    @endif

  </div>
   <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
      <div class="carousel-nav-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 20 20">
              <path d="M10,20A10,10,0,1,0,0,10,10,10,0,0,0,10,20ZM11.289,4.3,12.711,5.7l-4.3,4.344L12.7,14.289,11.3,15.711,5.586,10.063Z"/>
          </svg>
      </div>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
        <div class="carousel-nav-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 20 20">
              <path d="M10,20A10,10,0,1,0,0,10,10,10,0,0,0,10,20ZM8.711,4.3l5.7,5.766L8.7,15.711,7.3,14.289l4.289-4.242L7.289,5.7Z"/>
            </svg>
        </div>
        <span class="sr-only">Next</span>
    </a>
</div>
@endif


    <section data-ppt-blockid="text136"  data-ppt-blocktype="text" data-ppt-section="" class="section-40">

        <div class="container py-5 text-center rounded-lg text-light" style="background-color: #ED5858;">

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


 @if($homeAds)
<section data-ppt-blockid="listings99" data-ppt-blocktype="listings" data-ppt-section="" class="section-old-60 section-40">
  <div class="container">
    <div class="row">
          <div class="col-lg-12">
        <div class="d-flex justify-content-between">
          <h2 class="mb-5" data-ppt-title="">Annonces En Vedettes</h2>
          <div>
                        <a href="{{ route('ads.list') }}" data-ppt-btn="" data-ppt-btn-link="" class="btn-system">Voir Plus</a>
                      </div>
        </div>
      </div>
    <div class="col-12">
        <div class='row'>

	@forelse($homeAds as $ad)

	<div class="col-6 col-sm-6 col-md-4 col-lg-4">

	<div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
	data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

		  <figure>



		<div class="buttons-wrap">



		<div class="button-new" style="background-color: #DA9DDC">{{ $ad['age'] }} Ans</div>

		</div>
        <a href="{{ route('ads.details', ['username' => $ad['user']['username'],'slug'=>$ad['slug']]) }}">


		  <div ppt-border1="" class="p-1">

			<div class="search-gradient"> </div>

			<div class="bg-light position-relative overflow-hidden" style="height:360px;">
			  <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
				<div class="text-white fs-4 text-600">

						  </div>
				<div class="fs-sm text-white opacity-5 text-400">
				  {{ ucfirst($ad['town']['town_name']) }}  
				</div>
			  </div>
			  <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$ad['images'][0]['id']] )}}">
				 
			  </div>

		<div ppt-search-badges="" style="z-index:1" class="right">


			@if($ad['subscribe_id'] ===2)
								<div class="badge" style="color:#000000;background-color:#FFC300;">
								<span class="fal fa fa-star" style="color:#000000"> </span> GOLD </div>
                            @endif
                            @if($ad['subscribe_id'] ===3)
                            <div class="badge" style="color:#000000;background-color:red;color:white">
                            <span class="fal fa fa-star" style="color:#000000"> </span> ULTRA VIP  </div>
                        @endif
			@if($ad['user']['isVerify']== 1)
									<div class="badge" style="color:#FBFBFB;background-color:#ED5858;">
											<span class="fal fa fa-check" style="color:#FBFBFB"> </span> Vérifié
									</div>
							@endif

		</div>


			</div>

			 <div class="p-4 bg-white"  style="min-height:220px;">
			  <div class="d-sm-flex flex-sm-column">
				<div class="fs-6  mb-2">
                    <a href="{{ route('ads.details', ['username' => $ad['user']['username'],'slug'=>$ad['slug']]) }}" class="text-dark _adtitle">
            {{ truncate($ad['title'],40) }}

					</a>

				</div>

			   <nav ppt-nav="" class="seperator pl-0 text-muted mb-3">

					<ul class="list-unstyled">

						<li> <span style="font-weight:bold"><i class="fa fa-map-marker"></i> </span>
              &nbsp; {{ ucfirst($ad['quarter']['quarter_name']) }}, &nbsp;{{ ucfirst($ad['town']['town_name']) }}
              </li>

					</ul>
					<span style="font-weight:bold">Client accepté :</span> {{ $ad['accepted'] }} <br>
					<span style="font-weight:bold">Lieu :</span> {{ $ad['location'] }}

				</nav>

				<div style="min-height:60px;">
				  <span class="shortcode_excerpt"> {{ substr($ad['description'],0,100) }}...</span>
				</div>




			   </div>


			  </div>
		  </div>
		</a>


		</figure>

		</div>





		<div class="show-mobile">
		  <div class="position-relative mb-3">
            <a href="{{ route('ads.details', ['username' => $ad['user']['username'],'slug'=>$ad['slug']]) }}">
			<div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
			  <div class="h-100 position-relative">
				<figure>


					<div class="buttons-wrap">

						<div class="button-new"
						style="background-color: #DA9DDC; font-size:10px;">{{ $ad['age'] }} Ans</div>

					</div>
					<div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

								<div class="fs-sm text-white  text-600">
								 {{ ucfirst($ad['town']['town_name']) }}  
								</div>
					</div>
					<div class="bg-image z-0"
					data-bg="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$ad['images'][0]['id']] )}}"> 
				    </div>
					<div ppt-search-badges="" style="z-index:1" class="right">
								@if($ad['subscribe_id'] ===2)
								<div class="badge" style="color:#000000;background-color:#FFC300;">
								<span class="fal fa fa-star" style="color:#000000"> </span> GOLD </div>
                            @endif
                            @if($ad['subscribe_id'] ===3)
                            <div class="badge" style="color:#000000;background-color:red;">
                            <span class="fal fa fa-star" style="color:#000000"> </span> ULTRA VIP  </div>
                        @endif

						@if($ad['user']['isVerify']== 1)
									<div class="badge" style="color:#FBFBFB;background-color:#ED5858;">
											<span class="fal fa fa-check" style="color:#FBFBFB"> </span> Vérifié
									</div>
							@endif

							</div>
					</figure>
			    </div>
			</div>
			</a>
			<div class="lh-20 text-700" style="margin-top:20px;">
					<span class="text-online">•</span>
                    <a href="{{ route('ads.details', ['username' => $ad['user']['username'],'slug'=>$ad['slug']]) }}" class="text-dark">
					{{ truncate($ad['title'],10) }}</span></a>
			</div>
			<div class="lh-20" style="margin-top:0px;">
                <a href="{{ route('ads.details', ['username' => $ad['user']['username'],'slug'=>$ad['slug']]) }}" class="text-dark lh-20 text-300">

						{{ truncate($ad['description'],40) }}</span></a>
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
</section>
@endif


<section data-ppt-blockid="text102" data-ppt-blocktype="text" data-ppt-section="" class="section-60">
  <div class="container">
    <div class="row  y-middle">
      <div class="col-md-6 pr-lg-5 pe-lg-5" style="overflow: hidden; max-height:400px">
        <img data-src="{{ asset('assets/images/nake-girl.jpg') }}"
		class="img-fluid lazy rounded shadow-sm  mobile-mb-2" alt="image" data-ppt-image="">
      </div>
      <div class="col-md-6 pl-xl-5 ps-xl-5">

        <h2 data-ppt-title="">Nous vous mettons en contact avec des filles et des gars à proximité !</h2>

        <p class="my-3" data-ppt-subtitle="">Que vous recherchiez un compagnon de soirée captivant,
          un rendez-vous charmant pour un événement spécial, une masseuse qualifiée, ou si vous
          souhaitez passez des moments très excitants et agréables notre annuaires d'escorte vous
          propose une multitude d'options pour répondre à vos envies.
          Votre prochaine expérience mémorable n'est qu'à quelques clics.</p>


                <a href="{{ route('ads.list') }}" class="btn-lg btn-primary  mt-2" data-ppt-btn="" data-ppt-btn-txt="">Annonces</a>


      </div>
    </div>
  </div>
</section>


 <div class="bg-light ppt-page-body">
<div class="border-bottom">

<style>
.tablist .tab { padding: 5px 15px;  }
.tablist .tab.active { background:#111; border-radius:4px; }
.tablist .tab.active a { color:#fff; font-weight:bold; }
.bg-image-wrap { height:130px; width:100%; border-radius:4px; position:relative; background: #fff; border: 1px solid #ddd; }
.bg-image-wrap .bg-image { background-size: unset; background-repeat: no-repeat;  }

@media (max-width: 575.98px) {
.bg-image-wrap { height:100px; }
.bg-image-wrap .bg-image {
    background-size: contain;

}
}
</style>

<script>

document.getElementById("button-session").addEventListener("click", function(){
    // SETTING checkAge
		jQuery.ajax({
			type: "GET",
			dataType: 'json',
			url: '/check-age',
			timeout: 15000,
			data: {
				name: name,
				request: 2,
			},
			success: function(response, statusCode) {
				console.log('success: ' + response);
				//console.log(response.);

			},
			error: function(response, statusCode) {

				console.log(statusCode);
				console.log(response);

			},


		});
});


function scrollTop(){
	jQuery('body,html').animate({
				scrollTop: 0
			}, 100);
}

// function setSession(){
//   console.log('Session');
//   @php
//     session(['checkAge' => 'true']);
//   @endphp


// }




jQuery(document).ready(function(){

scrollTop();
  if(jQuery('#checkAge').val() == 'false'){

      jQuery('#CheckAgeModal').modal({backdrop: 'static', keyboard: false});
      jQuery('#CheckAgeModal').modal('show');

  }

});

</script>
</div>


<section data-ppt-blockid='text122' data-ppt-blocktype='text' data-ppt-section="" class="bg-primary section-40 hide-mobile">
  <div class="container">
    <div class="row align-items-center  text-center text-md-right">
      <div class="col-md-8 mobile-mb-2">

        <div class="text-md-left">

          <h2 class="text-light m-0" data-ppt-title="">Créez votre compte gratuit aujourd'hui !</h2>

       </div>
      </div>
      <div class="col-10 mx-auto col-md-4 text-center text-md-right">

        <a href="/register" class="btn-rounded-25  font- btn-xl btn-light  mt-0  btn-icon icon-after" data-ppt-btn="" data-ppt-btn-link="">
          <span data-ppt-btn-txt="">Inscription</span> <i class="fa fa-long-arrow-alt-right">&nbsp;</i> </a>

      </div>
    </div>
  </div>
</section>

 <div class="my-3 text-center">
          @if (isset($banners))

              @foreach ($banners as $banner)
                  @if($banner['position'] == 'home_bottom' && $banner['status'] == 1)
                      <a href='javascript:void(0)' class='samplebanneronly'>
                        <img src='{{ route('display.banner',['id'=>$banner['id']] )}}'
                        class='img-fluid' alt='sample banner'>
                      </a>
                  @endif
              @endforeach

          @endif


      </div>


@endsection
