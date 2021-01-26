@extends('layouts.frontend')
@section('title')
Coffee Blend, Menu Page 
    
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
              <h1 class="mb-3 mt-5 bread">Our Menu</h1>
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Menu</span></p>
          </div>

        </div>
      </div>
    </div>
</section>


<section class="ftco-intro">
    <div class="container-wrap">
        <div class="wrap d-md-flex align-items-xl-end">
            <div class="info">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-phone"></span></div>
                        <div class="text">
                            <h3>+977 9845392777</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-my_location"></span></div>
                        <div class="text">
                            <h3>Pulchowk </h3>
                            <p>	Pulchowk, Narayani River View, Narayanghad, Chitwan, Nepal</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="icon"><span class="icon-clock-o"></span></div>
                        <div class="text">
                            <h3>Open Sunday-Friday</h3>
                            <p>8:00am - 9:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="book p-4">
                <h3>Book a Table</h3>
                <form action="#" class="appointment-form">
                    <div class="d-md-flex">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                            <div class="input-wrap">
                        <div class="icon"><span class="ion-md-calendar"></span></div>
                        <input type="text" class="form-control appointment_date" placeholder="Date">
                    </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <div class="input-wrap">
                        <div class="icon"><span class="ion-ios-clock"></span></div>
                        <input type="text" class="form-control appointment_time" placeholder="Time">
                    </div>
                        </div>
                        <div class="form-group ml-md-4">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>
                    </div>
                    <div class="d-md-flex">
                        <div class="form-group">
                  <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group ml-md-4">
                  <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
                </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    
    <div class="container">
    <div class="row">
        <div class="col-md-6 mb-5 pb-3">
        <h3 class="mb-5 heading-pricing ftco-animate">Breakfast</h3>
            @foreach ($item as $menu)
            @if ($menu->category->title=='Breakfast')
            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image:  url('{{ asset('uploads/item/'.$menu->image)}}');"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                    <h3><span>{{$menu->title}}</span></h3>
                    <span class="price">NPR:{{$menu->price}}</span>
                    </div>
                    <div class="d-block">
                    <p>{{$menu->subtitle}}</p>
                    </div>
                </div>
            </div>
            @endif
       
            @endforeach
            
        </div>

        <div class="col-md-6 mb-5 pb-3">
            <h3 class="mb-5 heading-pricing ftco-animate">Dinner</h3>
            @foreach ($item as $menu1)
            @if ($menu1->category->title=="Dinner")
            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image:  url('{{ asset('uploads/item/'.$menu1->image)}}');"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                    <h3><span>{{$menu1->title}}</span></h3>
                    <span class="price">NPR:{{$menu1->price}}</span>
                    </div>
                    <div class="d-block">
                    <p>{{$menu1->subtitle}}</p>
                    </div>
                </div>
            </div>
            @endif  
            @endforeach
        </div>

        <div class="col-md-6">
            <h3 class="mb-5 heading-pricing ftco-animate">Special</h3>
            @foreach ($item as $menu2)
            @if ($menu2->category->title=="Special")

            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image:  url('{{ asset('uploads/item/'.$menu2->image)}}');"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                    <h3><span>{{$menu2->title}}</span></h3>
                    <span class="price">NPR:{{$menu2->price}}</span>
                    </div>
                    <div class="d-block">
                    <p>{{$menu2->subtitle}}</p>
                    </div>
                </div>
            </div>
            @endif
                
            @endforeach
        </div>

        <div class="col-md-6">
            <h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
            @foreach ($item as $menu3)
            @if ($menu3->category->title=="Drink")
            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image:  url('{{ asset('uploads/item/'.$menu3->image)}}');"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                    <h3><span>{{$menu3->title}}</span></h3>
                    <span class="price">NPR:{{$menu3->price}}</span>
                    </div>
                    <div class="d-block">
                    <p>{{$menu3->subtitle}}</p>
                    </div>
                </div>
            </div>
            @endif
                
            @endforeach
            
        </div>
        <div class="col-md-6">
            <h3 class="mb-5 heading-pricing ftco-animate">Dessert</h3>
            @foreach ($item as $menu4)
            @if ($menu4->category->title=="Dessert")

            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image:  url('{{ asset('uploads/item/'.$menu4->image)}}');"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                    <h3><span>{{$menu4->title}}</span></h3>
                    <span class="price">{{$menu4->price}}</span>
                    </div>
                    <div class="d-block">
                    <p>{{$menu4->subtitle}}</p>
                    </div>
                </div>
            </div>
            @endif
                
            @endforeach
            
        </div>

        <div class="col-md-6">
            <h3 class="mb-5 heading-pricing ftco-animate">Launch</h3>
            @foreach ($item as $menu5)
            @if ($menu5->category->title=="Launch")

            <div class="pricing-entry d-flex ftco-animate">
                <div class="img" style="background-image: url('{{ asset('uploads/item/'.$menu5->image)}}');"></div>
                <div class="desc pl-3">
                    <div class="d-flex text align-items-center">
                    <h3><span>{{$menu5->title}}</span></h3>
                    <span class="price">NPR:{{$menu5->price}}</span>
                    </div>
                    <div class="d-block">
                    <p>{{$menu5->subtitle}}</p>
                    </div>
                </div>
            </div>
            @endif
                
            @endforeach
            
        </div>
    </div>
    </div>
</section>

<section class="ftco-menu mb-5 pb-5">
    <div class="container">
        <div class="row justify-content-center mb-5">
      <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Discover</span>
        <h2 class="mb-4">Our Products</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
    </div>
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Main Dish</a>

                  <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

                  <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Desserts</a>
                </div>
              </div>
              <div class="col-md-12 d-flex align-items-center">
                
                <div class="tab-content ftco-animate" id="v-pills-tabContent">

                  <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                      <div class="row">
                        @foreach ($item as $menu6)
                        @if ($menu6->category->title=="Launch")
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="#" class="menu-img img mb-4" style="background-image:url('{{ asset('uploads/item/'.$menu6->image)}}');"></a>
                                  <div class="text">
                                  <h3><a href="#">{{$menu6->title}}</a></h3>
                                  <p>{{$menu6->subtitle}}</p>
                                  <p class="price"><span>NRP: {{$menu6->price}}</span></p>
                                  <p><a href="#" class="btn btn-primary btn-outline-primary" data-id="{{$menu6->id}}" data-quantity="1">Add to cart</a></p>
                                  </div>
                              </div>
                            </div>
                        @endif
                
                        @endforeach
                      </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                    <div class="row">
                        @foreach ($item as $menu3)
                        @if ($menu3->category->title=="Drink")
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="#" class="menu-img img mb-4" style="background-image: url('{{ asset('uploads/item/'.$menu3->image)}}');"></a>
                                  <div class="text">
                                      <h3><a href="#">{{$menu3->title}}</a></h3>
                                  <p>{{$menu3->subtitle}}</p>
                                  <p class="price"><span>NPR:{{$menu3->price}}</span></p>
                                      <p><a href="#" class="btn btn-primary btn-outline-primary" data-id="{{$menu3->id}}" data-quantity="1">Add to cart</a></p>
                                  </div>
                              </div>
                          </div>
                          @endif
                
                          @endforeach
                      </div>
                  </div>

                  <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                    <div class="row">
                        @foreach ($item as $menu4)
                        @if ($menu4->category->title=="Dessert")
                          <div class="col-md-4 text-center">
                              <div class="menu-wrap">
                                  <a href="#" class="menu-img img mb-4" style="background-image: url('{{ asset('uploads/item/'.$menu4->image)}}');"></a>
                                  <div class="text">
                                  <h3><a href="#">{{$menu4->title}}</a></h3>
                                  <p>{{$menu4->subtitle}}</p>
                                  <p class="price"><span>NPR:{{$menu4->price}}</span></p>
                                      <p><a href="#" class="btn btn-primary btn-outline-primary" data-id="{{$menu4->id}}" data-quantity="1">Add to cart</a></p>
                                </div>
                            </div>
                          </div>
                          @endif
                
                      @endforeach
                    </div>
                      
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</section>
@endsection