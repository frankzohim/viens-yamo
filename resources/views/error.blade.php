@extends('layouts.Frontend.master')
@section('title', __('Viens Yamo'))
@section('content')
<section data-ppt-blockid='text99'  data-ppt-blocktype='text'  data-ppt-section  class="section-60 ppt-block-text">

 
  <div class="container">
    <div class="row align-items-center">
      
     
     
      <div class="col-lg-6 pl-lg-5 ps-lg-5">
      
        <h2 class="mb-3" data-ppt-title>Une erreur est survenue.</h2>
        
        <p class="lead" data-ppt-subtitle>Oops..., une erreur inattendue s'est produite</p>
       
        <p class="mb-6" data-ppt-desc>Quelque chose ne s'est pas bien passée, 
            nous travaillons pour arranger cela. Veuillez recommencer dans peu de temps. </p>
        
        
                  
                <a href="{{ route("homepage") }}" class="btn-lg btn-primary  mt-2" data-ppt-btn data-ppt-btn-txt>Accueil</a>
                        
                
      </div>

       <div class="col-md-8 col-lg-6 position-relative pr-lg-5 pe-lg-5 mobile-mb-2 hide-mobile">
        
        <figure class="rounded">
            <img data-src="{{ asset('assets/images/error.png') }}" 
            class="img-fluid lazy" height="500px"  alt="image" data-ppt-image></figure>
     
      </div>
     
    </div>
  
  </div>
</section>

@endsection