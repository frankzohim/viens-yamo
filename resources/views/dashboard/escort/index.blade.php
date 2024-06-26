@extends('layouts.backoffice.escort.app')
@section('title', __('MY DASHBOARD'))

@section('content')


<div style="display: flex;align-items:center;">
    <div style="flex: 1">
        <div class="fs-lg text-600 mb-2 hide-mobile">{{ __("Welcome back!")}}</div>

    <p class="mb-4 hide-mobile">{{ __("Here is an overview of your account.")}}</p>
    </div>
    {{-- <div>
        Balance : {{ $userBalance }} Xp
    </div> --}}
    </div>

<div ppt-border1="" class="p-3 p-md-4  hide-mobile mt-2 mb-5">


<div class="d-md-flex justift-content-between">


    <div class="d-md-flex border-right pr-3 w-100 mr-3 ">
        <div ppt-icon-size="32" class="mr-3 hide-ipad show-desktop-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div>
         <a href="/dashboard//?tab=details&sub=username" class="text-black text-decoration-none">
        <span>
            <div class="text-600">{{ __("Name")}}</div>
            <div class="small opacity-8" style="max-width:150px;">{{ ucfirst($user->username) }}</div>
        </span>
        </a>
    </div>


    <div class="d-md-flex border-right pr-3 w-100 mr-3 ">
        <div ppt-icon-size="32" class="mr-3 hide-ipad show-desktop-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg></div>
        <a href="/dashboard/my-account//?tab=details&sub=address" class="text-black text-decoration-none">
        <span>
            <div class="text-600">{{ __("My Position")}}</div>
            <div class="small opacity-8 text-truncate" style="max-width:150px;">{{ $user->town->town_name }}</div>
        </span>
        </a>
    </div>

    <div class="d-md-flex w-100">
        <div ppt-icon-size="32" class="mr-3 hide-ipad show-desktop-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg></div>
        <a href="/dashboard/my-account//?tab=details&sub=contact" class="text-black text-decoration-none">
        <span>
            <div class="text-600">{{ __("My WhatsApp")}} </div>
            <div class="small opacity-8 text-truncate" style="max-width:150px;">{{ $user->phone_number }}</div>
        </span>
        </a>
    </div>

</div>

</div>


<div class="bg-light p-3 p-md-5 rounded-lg mb-4 position-relative mt-xl-n3" >


<div class="row">
<div class="col-md-6 align-center">

<div class="lh-30">
<div class="fs-5 text-600 mb-2">{{ __("Welcome back!")}}</div>
{{ __("We are constantly updating and improving our service. If you have any questions or comments,contact us - we'd love to hear them.")}}</div>

<div class="mt-3 fs-sm contactuslink"><a href="/contact/" class="btn-xs btn-system" data-ppt-btn>{{ __("Contact us")}}</a></div>

</div>
<div class="col-md-6">
<div class="my-4 my-md-0">

<div class="position-relative">
<img src="{{ asset('assets/images/test.png') }}" class="img-fluid rounded-lg" alt="img" />

</div>

</div>
</div>

</div>



</div>

@endsection
