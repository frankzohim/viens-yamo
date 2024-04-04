<div class="card-mobile-transparent p-3 mb-4  mobile-negative-margin-x" ppt-border1>
<nav ppt-nav class="sepetator">

<ul>

<li  class="w-100">

<div class="d-flex">





</a>


<div class=" ml-4">
<a href="#">

    <div class="d-flex align-items-center">
    <div class="fs-md text-600">{{ ucfirst($user->username) }}</div>

    </div>

    <div class="fs-sm opacity-5 text-truncate" style="max-width:350px">
        Téléphone &bull; {{ $user->phone_number }}
    </div>
</a>
</div>

</div>
</li>





<li class=" ppt-badges ml-auto hide-mobile hide-ipad" ppt-flex-middle >
<a href="{{ route('purchase.credit') }}"    style="background-color: #ED5858;color:white" data-ppt-btn>

<div class="d-flex">


    <div class="badge_tooltip text-center" data-direction="top">
    <div class="badge_tooltip__initiator">

   <i class="fal fa fa-star" style="color:#000000"></i> Acheter du crédit  </div>
    <div class="badge_tooltip__item">Achat Crédit </div>
  </div>

</div>
</a>
</li>

<li class=" ppt-badges ml-auto hide-mobile hide-ipad" ppt-flex-middle >
<a href=""   style="color:#FBFBFB;background-color:#2BA346;" data-ppt-btn>
<div class="d-flex">


    <div class="badge_tooltip text-center" data-direction="top">
        <div class="badge_tooltip__initiator">
            <i class="fal fa fa-user" style="color:#FBFBFB"></i>
                &nbsp;
                Balance : {{ $userBalance }}
        </div>
    <div class="badge_tooltip__item">Profil Verifie </div>
  </div>

</div>
</a>
</li>

{{-- <li class=" ppt-badges ml-auto hide-mobile hide-ipad" ppt-flex-middle >
<a href="{{ route('escort.details', ['id' => $escort['id']]) }}"
    style="color:#FBFBFB;background-color:#DFABE1;" target="_blank" data-ppt-btn>
<div class="d-flex">
    <div class="badge_tooltip text-center" data-direction="top">
        <div class="badge_tooltip__initiator">
            <i class="fal fa fa-user" style="color:#FBFBFB"></i>
             Visiter mon profil
        </div>
    <div class="badge_tooltip__item">Voir mon profil public </div>
  </div>

</div>
</a>
</li> --}}



<li class=" ml-auto ml-lg-2 ml-xl-2" ppt-flex-middle>
<a href="" class="btn-system" data-ppt-btn>
 <div ppt-icon-16 data-ppt-icon-size="16" class="show-mobile py-3 float-right" ppt-flex-middle onclick="event.preventDefault(); document.getElementById('logoutprofile').submit();">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
    stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
</svg></div>
  <form method="POST" action="{{ route('logout') }}" id="logoutprofile">
                                @csrf
                            </form>
<span class="hide-mobile" onclick="event.preventDefault(); document.getElementById('logoutprofile').submit();">Déconnexion</span>

</a>
</li>

</ul>
</nav>

</div>
