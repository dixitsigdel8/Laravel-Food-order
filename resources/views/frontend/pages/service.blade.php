@extends('layouts.frontend')
@section('title')
Coffee Blend, Service Page 
    
@endsection

@section('meta')
<meta name="keywords" content="online,food,coffee,resturant,dinner,breakfast">
<meta name="description" content="Coffee Blend is one of the leading websites and first online services in Nepal">
<meta name="author" content="Coffee Blend">
<meta property="og:url"content="{{ url('/')}}" />
<meta property="og:type"content="website" />
<meta property="og:title"content="Coffee Blend is one of the leading websites " />
<meta property="og:description"content="Coffee Blend is one of the leading websites and first online services in Nepal" />
<meta property="og:image"content="{{asset('frontend/images/about.jpg')}}" />
    
@endsection

@section('section')
<section class="home-slider owl-carousel">

    <div class="slider-item" style="background-image: url(frontend/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center">

          <div class="col-md-7 col-sm-12 text-center ftco-animate">
              <h1 class="mb-3 mt-5 bread">Services</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('site')}}">Home</a></span> <span>About</span></p>
          </div>

        </div>
      </div>
    </div>
</section>

<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-choices"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Easy to Order</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-delivery-truck"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Fastest Delivery</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="media d-block text-center block-6 services">
          <div class="icon d-flex justify-content-center align-items-center mb-5">
              <span class="flaticon-coffee-bean"></span></div>
          <div class="media-body">
            <h3 class="heading">Quality Coffee and Food</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>    
      </div>
    </div>
    </div>
</section>
    
@endsection