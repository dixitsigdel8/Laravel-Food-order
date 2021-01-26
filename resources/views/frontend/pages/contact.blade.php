@extends('layouts.frontend')
@section('title')
Coffee Blend, Contact Page 
    
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
              <h1 class="mb-3 mt-5 bread">Contact Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('site')}}">Home</a></span> <span>About</span></p>
          </div>

        </div>
      </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container mt-5">
      <div class="row block-9">
                  <div class="col-md-4 contact-info ftco-animate">
                      <div class="row">
                          <div class="col-md-12 mb-4">
                <h2 class="h4">Contact Information</h2>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
              </div>
              <div class="col-md-12 mb-3">
                <p><span>Website:</span> <a href="#">yoursite.com</a></p>
              </div>
                      </div>
                  </div>
                  <div class="col-md-1"></div>
        <div class="col-md-6 ftco-animate">
        <form action="{{route('contact-send')}}" method="POST" class="contact-form">
            @csrf
              <div class="row">
                  <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Your Email">
                  </div>
                  </div>
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>
      </div>
    </div>
</section>

  <div id="map"></div>
    
@endsection