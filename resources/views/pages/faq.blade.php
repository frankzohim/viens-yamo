@extends('layouts.Frontend.master')

@section('title')

Faq
@endsection


@section('content')
 <nav class="page-breadcrumbs border-bottom">

<div class="container py-4">

<h1 class="text-center text-sm-left h3 mb-0 pb-0">FAQs</h1>

</div>

</nav>
<div class="bg-light ppt-page-body">

<style>
.icon-wrap-1 { display: inline-block;    border-radius: 10%;    width: 30px;    height: 30px;    text-align: center;    margin-right: 20px;    line-height: 30px; }
</style>




<style>

.text111 .card-header {
    margin-bottom: 0;
    background: 0 0;
    border: 0;
    padding: 0.9rem 1.3rem 0.85rem;

}
.text111 .card-header .btn { font-size:16px; }
</style>
<section data-ppt-blockid='text111'  data-ppt-blocktype='text'  data-ppt-section  class="section-60 ppt-block-text text111">
  <div class="container py-14 py-md-16">


    <div class="row">


      <div class="col-lg-6">
            @forelse ($faqs as $faq)
                <div class="ppt-show-hide mb-4" ppt-border1>
                    <div class="card-header">
                    <div class="text-600" data-ppt-f5a>{{ $faq->questions }}</div>
                    </div>

                    <div class="hide">
                    <div class="card-body">
                        <p data-ppt-f5b>{{ $faq->answer }}</p>
                    </div>

                    </div>

                </div>
            @empty
                <p class="text-center">{{ __("No FAQs available")}}</p>
            @endforelse





      </div>

    </div>

  </div>

</section>

</div>
@endsection
