@extends('layouts.Frontend.master')
@section('title', __('List of cities'))
@section('content')

<div class="border-bottom">
<div class="container py-4">
 
<h1 class=" h3 mb-0 pb-0">{{ __("Top cities Cameroon")}} </h1>
<hr>


    <div class="container">
        <div class="row">
            @forelse ($announcements as $announcement)
                
           
            <div class="col-md-4">
                <i class='fas fa-map-marker-alt' style='font-size:24px; color:#DA9ADC'></i> &nbsp;
                <strong class="h4">
                    <a href="{{ route('ads.town', ['id'=>$announcement['town_id'] ]) }}" class="text-dark">
                        {{ $announcement['town_name'] }} ({{ $announcement['totalAnnounces']  }})
                    </a>
                </strong>
            </div>

            @empty
                
            @endforelse
        </div>
    </div>


</div>
</div>

<div class="border-bottom">
<div class="container py-4">
 
<h1 class=" h3 mb-0 pb-0">Toutes les villes</h1>
<hr>


    <div class="container">
        <div class="row">

            @forelse ($allTowns as $town)
                
           
            <div class="col-md-3 col-sm-6 mb-3">
                <i class='fas fa-map-marker-alt' style='font-size:24px; color:#DA9ADC'></i> &nbsp;
                <strong class="h4">
                    <a href="{{ route('ads.town', ['id'=>$town['id']]) }}" class="text-dark">
                        {{ $town['town_name'] }} 
                    </a>
                </strong>
            </div>

            @empty
                
            @endforelse

           
        </div>
    </div>


</div>
</div>
@endsection