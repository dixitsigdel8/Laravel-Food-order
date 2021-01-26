@extends('layouts.frontend')
@section('title')
Coffee Blend, About Page 
    
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
              <h1 class="mb-3 mt-5 bread">About Us</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{route('site')}}">Home</a></span> <span>About</span></p>
          </div>

        </div>
      </div>
    </div>
</section>

<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url(frontend/images/about.jpg);"></div>
    <div class="one-half ftco-animate">
        <div class="overlap">
        <div class="heading-section ftco-animate ">
            <span class="subheading">Discover</span>
          <h2 class="mb-4">Our Story</h2>
        </div>
        <div>
                  <p style="text-align: center"> Coffee is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain Coffea species. 
                      Once ripe, coffee berries are picked, processed, and dried. 
                      Dried coffee seeds (referred to as "beans") are roasted to varying degrees, depending on the desired flavor. 
                      Roasted beans are ground and then brewed with near-boiling water to produce the beverage known as coffee.</p>

                  <p style="text-align: center">  Coffee is darkly colored, bitter, slightly acidic and has a stimulating effect in humans, primarily due to its caffeine content. 
                    It is one of the most popular drinks in the world,and it can be prepared and presented in a variety of ways (e.g., espresso, French press, caffè latte). 
                    It is usually served hot, although iced coffee is a popular alternative.</p>
                    
                   <p style="text-align: center"> Clinical studies indicate that moderate coffee consumption is benign or mildly beneficial in healthy adults, with continuing research on whether long-term consumption reduces the risk of some diseases, although those long-term studies are generally of poor quality.</p>
                    
                   <p style="text-align: center"> The earliest credible evidence of coffee-drinking as the modern beverage appears in modern-day Yemen in southern Arabia in the middle of the 15th century in Sufi shrines.
                     It was in what is now Yemen that coffee seeds were first roasted and brewed in a manner similar to how it is now prepared for drinking.
                      But the coffee seeds had to be first exported from East Africa to Yemen, as Coffea arabica is thought to have been indigenous to the former.
                       The Yemenis obtained their coffee via Somali traders from Berbera who in turn procured the beans from the Ethiopian Highlands and began to cultivate the seed.
                        By the 16th century, the drink had reached the rest of the Middle East and North Africa. 
                        From there, it spread to Europe and the rest of the world.</p>
                    
                   <p style="text-align: center"> The two most commonly grown are C. arabica and C. robusta. 
                     Coffee plants are now cultivated in over 70 countries, primarily in the equatorial regions of the Americas,
                      Southeast Asia, the Indian subcontinent, and Africa. 
                   </p>
                   <p style="text-align: center"> As of 2018, Brazil was the leading grower of coffee beans, producing one-third of the world total. 
                    It is one of the most valuable commodities exported by developing countries. 
                    Green, unroasted coffee is one of the most traded agricultural commodities in the world.
                     The way developed countries trade coffee with developing nations has been criticised, as well as the impact on the environment with regards to the clearing of land for coffee-growing and water use.
                     Consequently, the markets for fair trade and organic coffee are expanding.</p>
        </div>
          </div>
    </div>
</section>

@endsection