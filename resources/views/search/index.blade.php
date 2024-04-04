@extends('layouts.Frontend.master')
@section('title', __('Résultats de recherche'))
@section('content')
@include('utils.utils')
<style>
    .LC20lb {
    display: inline-block;
    line-height: 1.3;
    margin-bottom: 3px;
}
.MBeuO {
    font-family: arial,sans-serif;
    font-size: 20px;
    font-weight: 400;
}
.DKV0Md {
    margin-top: 18px;
}

.lEBKkf {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
        color: #70757a;
    -webkit-line-clamp: 2;
}
</style>

<div id="ppt-register" class="ppt-forms bg-white">
  <div class="container-fluid px-0">
    <div class="row g-0 min-vh-100">
      <div class="col-md-4 bg-light hide-mobile">
        <div class="overlay-inner">
        </div>
        <div class="bg-image" data-bg="{{ asset('assets/images/nake-girl.jpg') }}">
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-7 d-md-flex flex-column align-items-center">
        <div class="container pt-4">
          <div class="row g-0">
            <div class="col-12 col-xl-10 mx-auto">
              <div class="logo">
               <a href="/">

            <div class='textlogo navbar-brand-dark'></div>
          </a>
              </div>
            </div>
          </div>
        </div>
        <div class="container my-auto py-5">

				    <div class="my-3 text-center">
          @if (isset($banners))

              @foreach ($banners as $banner)
                  @if($banner['position'] == 'search_result' && $banner['status'] == 1)
                      <a href='javascript:void(0)' class='samplebanneronly'>
                        <img src='{{ route('display.banner',['id'=>$banner['id']] )}}'
                        class='img-fluid' alt='sample banner'>
                      </a>
                  @endif
              @endforeach

          @endif


      </div>
				  <div class="row g-0">
						<div class="col-12 col-xl-10 mx-auto">



									<div class="clearfix mb-3">


									 <h2 class="text-600 mb-3">
										<span class="smilecode float-right" style="font-size: 40px;">&#x1F600;</span> {{ count($results) }} Résultats de recherche </h2>

									 <p>Résultats de recherche pour : {{ $term }} </p>



									</div>


										@if(count($results))
										@foreach($types as $key=>$value)
											<h2>{{ $value }}</h2> <br>
											<div class="row">
											@foreach($results as $result)

												@if ($result['type'] == $key)

													@switch($result['type'])

															@case('announcements')

																		<div class="col-md-6 col-sm-6  col-lg-6 col-6">

																		  <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
																		  data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

																			  <figure>


																		@if($result['searchable']['subscribe_id'])
																			<div class="buttons-wrap">



																					@if($result['searchable']['subscribe_id'] === 1)
                                                                                    <div class="button-new" style="background-color: green;">
																						PREMIUM
                                                                                    </div>
																					 @endif

																					 @if($result['searchable']['subscribe_id'] === 2)
                                                                                     <div class="button-new" style="background-color: #FFC300;">
																						GOLD
                                                                                    </div>

																					 @endif
																					 @if($result['searchable']['subscribe_id'] === 3)
                                                                                     <div class="button-new" style="background-color: red;">
																						ULTRA VIP
                                                                                    </div>
																					@endif



																			</div>
																		@endif
																			  <a href="{{ route('ads.details', ['username' => $result['searchable']['user']['username'], 'slug' => $result['searchable']['slug']]) }}">

																			  <div ppt-border1="" class="p-1">

																			  <div class="search-gradient"> </div>

																			  <div class="bg-light position-relative overflow-hidden" style="height:360px;">
																				<div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
																				<div class="text-white fs-4 text-600">
																				{{ ucfirst($result['searchable']['user']['username']) }}
																					  <span class="text-online">•</span>
																					  </div>
																				<div class="fs-sm text-white opacity-5 text-400">
																				  {{ truncate($result['searchable']['title'],40) }}  
																				</div>
																				</div>
																				<div class="bg-image"
																				data-bg="{{ route('display.ads.image',['id'=>$result['searchable']['id'], 'path'=>$result['searchable']['images'][0]['id']] )}}">
																				 
																				</div>

																			<div ppt-search-badges="" style="z-index:1" class="right">


																			  <div class="badge" style="color:white;background-color:black;">
																			  <span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($result['searchable']['town']['town_name']) }}   </div>

																			</div>


																			  </div>


																			  </div>
																			</a>


																			</figure>

																			</div>





																			<div class="show-mobile">
																			  <div class="position-relative mb-3">
																			  <a href="{{ route('ads.details', ['username' => $result['searchable']['user']['username'], 'slug' => $result['searchable']['slug']]) }}">
																			  <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
																				<div class="h-100 position-relative">
																				<figure>


																				  <div class="buttons-wrap">

																					<div class="button-new"
																					style="background-color: #DA9DDC; font-size:10px;">{{ $result['searchable']['age'] }} Ans</div>

																				  </div>
																				  <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

																						<div class="fs-sm text-white  text-600">
																						{{ ucfirst($result['searchable']['town']['town_name']) }}  
																						</div>
																				  </div>
																				  <div class="bg-image z-0"
																				  data-bg="{{ route('display.ads.image',['id'=>$result['searchable']['id'], 'path'=>$result['searchable']['images'][0]['id']] )}}"> 
																				  </div>
                                          @if ($result['searchable']['subscribe_id'])


																				  <div ppt-search-badges="" style="z-index:1" class="right">
																					<div class="badge" style="color:#000000;background-color:#FFC300;">
																					<span class="fal fa fa-star" style="color:#000000"> </span>
                                              	@if($result['searchable']['subscribe_id'] === 1)
                                                    PREMIUM
                                                  @endif

                                                  @if($result['searchable']['subscribe_id'] === 2)
                                                    GOLD
                                                  @endif
                                                  @if($result['searchable']['subscribe_id'] === 3)
                                                      ULTRA VIP
                                                  @endif
                                        </div>

																				  </div>
                                        @endif
																				  </figure>
																				</div>
																			  </div>
																			  </a>
																			  <div class="lh-20 " style="margin-top:20px;">
																				  <span class="text-online">•</span>
																				  <a href="{{ route('ads.details', ['username' => $result['searchable']['user']['username'], 'slug' => $result['searchable']['slug']]) }}"
																					class="text-dark">{{ truncate($result['searchable']['title'],40) }}</span></a>
																			  </div>

																			  </div>
																			</div>



																	  </div>

																 <br>
																@break

															@case('towns')
																<li class="LC20lb MBeuO"><a href="{{ route('ads.town', ['id'=>$result['searchable']['id']]) }}">{{ $result['title'] }}</a></li>
																<br>
																@break

															@case('quarters')
																<li class="LC20lb MBeuO"><a href="{{ route('ads.quarter', ['id'=>$result['searchable']['id']]) }}">{{ $result['title'] }}</a></li>
																<br>
																@break

															@case('users')

																@forelse ($result['searchable']['ads'] as $ad)


																<div class="col-md-6 col-sm-6  col-lg-6 col-6">

																		  <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
																		  data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

																			  <figure>


																		@if($ad['subscribe_id'])
																			<div class="buttons-wrap">

																					<div class="button-new">

																					@if($ad['subscribe_id'] === 1)
																						PREMIUM
																					 @endif

																					 @if($ad['subscribe_id'] === 2)
																						GOLD
																					 @endif
																					 @if($ad['subscribe_id'] === 3)
																							 ULTRA VIP
																					@endif

																					</div>

																			</div>
																		@endif
																			  <a href="{{ route('ads.details', ['username' => $result['searchable']['username'], 'slug' => $ad['slug']]) }}">

																			  <div ppt-border1="" class="p-1">

																			  <div class="search-gradient"> </div>

																			  <div class="bg-light position-relative overflow-hidden" style="height:360px;">
																				<div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
																				<div class="text-white fs-4 text-600">
																				{{ ucfirst($result['searchable']['username']) }}
																					  <span class="text-online">•</span>
																					  </div>
																				<div class="fs-sm text-white opacity-5 text-400">
																				  {{ truncate($ad['title'],40) }}  
																				</div>
																				</div>
																				<div class="bg-image"
																				data-bg="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$ad['images'][0]['id']] )}}">
																				 
																				</div>

																			<div ppt-search-badges="" style="z-index:1" class="right">


																			  <div class="badge" style="color:#000000;background-color:#FFC300;">
																			  <span class="fal fa fa-star" style="color:#000000"> </span>
                                        {{ ucfirst($ad['town']['town_name']) }}   </div>

																			</div>


																			  </div>


																			  </div>
																			</a>


																			</figure>

																			</div>





																			<div class="show-mobile">
																			  <div class="position-relative mb-3">
																			  <a href="{{ route('ads.details', ['username' => $result['searchable']['username'], 'slug' => $ad['slug']]) }}">
																			  <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
																				<div class="h-100 position-relative">
																				<figure>


																				  <div class="buttons-wrap">

																					<div class="button-new"
																					style="background-color: #DA9DDC; font-size:10px;">{{ $ad['age'] }} Ans</div>

																				  </div>
																				  <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

																						<div class="fs-sm text-white  text-600">

																						</div>
																				  </div>
																				  <div class="bg-image z-0"
																				  data-bg="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$ad['images'][0]['id']] )}}"> 
																				  </div>
                                          @if ($ad['subscribe_id'])


																				  <div ppt-search-badges="" style="z-index:1" class="right">
																					<div class="badge" style="color:#000000;background-color:#FFC300;">
																					<span class="fal fa fa-star" style="color:#000000"> </span>

                                            	@if($ad['subscribe_id'] === 1)
																						PREMIUM
																					 @endif

																					 @if($ad['subscribe_id'] === 2)
																						GOLD
																					 @endif
																					 @if($ad['subscribe_id'] === 3)
																							 ULTRA VIP
																					@endif
                                          </div>

																				  </div>
                                          @endif
																				  </figure>
																				</div>
																			  </div>
																			  </a>
																			  <div class="lh-20 " style="margin-top:20px;">
																				  <span class="text-online">•</span>
																				  <a href="{{ route('ads.details', ['username' => $result['searchable']['username'], 'slug' => $ad['slug']]) }}"
																					class="text-dark">{{ truncate($ad['title'],40) }}</span></a>
																			  </div>

																			  </div>
																			</div>



															    </div>
																 @empty

																@endforelse
															@break

															@default

														@endswitch
												@endif



											@endforeach
											</div>
											<hr />
										@endforeach



									@endif




							</div>
					  </div>
			</div>
  </div>
</div>

</main>
<script>

						function scrollTop(){
							jQuery('body,html').animate({
										scrollTop: 0
									}, 100);
						}

						scrollTop();


						jQuery(document).ready(function(){
						  scrollTop();
							
						});
						</script>
</div>
@endsection
