@extends('layouts.frontend')
@section('title')
Coffee Blend, An online services 
    
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
	<div class="slider-item" style="background-image: url(frontend/images/bg_1.jpg);">
		<div class="overlay"></div>
	  <div class="container">
		<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

		  <div class="col-md-8 col-sm-12 text-center ftco-animate">
			  <span class="subheading">Welcome</span>
			<h1 class="mb-4">The Best Coffee Testing Experience</h1>
			<p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
		  <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="{{route('menu')}}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
		  </div>

		</div>
	  </div>
	</div>

	<div class="slider-item" style="background-image: url(frontend/images/bg_2.jpg);">
		<div class="overlay"></div>
	  <div class="container">
		<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

		  <div class="col-md-8 col-sm-12 text-center ftco-animate">
			  <span class="subheading">Welcome</span>
			<h1 class="mb-4">Amazing Taste &amp; Beautiful Place</h1>
			<p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
		  <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="{{route('menu')}}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
		  </div>

		</div>
	  </div>
	</div>

	<div class="slider-item" style="background-image: url(frontend/images/bg_3.jpg);">
		<div class="overlay"></div>
	  <div class="container">
		<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

		  <div class="col-md-8 col-sm-12 text-center ftco-animate">
			  <span class="subheading">Welcome</span>
			<h1 class="mb-4">Creamy Hot and Ready to Serve</h1>
			<p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
		  <p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="{{route('menu')}}" class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
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
							  <h3>000 (123) 456 7890</h3>
							  <p>A small river named Duden flows by their place and supplies.</p>
						  </div>
					  </div>
					  <div class="col-md-4 d-flex ftco-animate">
						  <div class="icon"><span class="icon-my_location"></span></div>
						  <div class="text">
							  <h3>198 West 21th Street</h3>
							  <p>	203 Fake St. Mountain View, San Francisco, California, USA</p>
						  </div>
					  </div>
					  <div class="col-md-4 d-flex ftco-animate">
						  <div class="icon"><span class="icon-clock-o"></span></div>
						  <div class="text">
							  <h3>Open Monday-Friday</h3>
							  <p>8:00am - 9:00pm</p>
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="book p-4">
				  <h3>Book a Table</h3>
			  <form action="{{route('reserve')}}" method="POST" class="appointment-form">
				            @csrf
					  <div class="d-md-flex">
						  <div class="form-group">
							  <input type="text" name="first_name" class="form-control" placeholder="First Name">
						  </div>
						  <div class="form-group ml-md-4">
							  <input type="text" name="second_name" class="form-control" placeholder="Last Name">
						  </div>
						  <div class="form-group ml-md-4">
							<input type="email" name="email" required class="form-control" placeholder="Email">
						</div>
					  </div>
					  <div class="d-md-flex">
						  <div class="form-group">
							  <div class="input-wrap">
						  <div class="icon"><span class="ion-md-calendar"></span></div>
						  <input type="text" name="date" class="form-control appointment_date" placeholder="Date">
					  </div>
						  </div>
						  <div class="form-group ml-md-4">
							  <div class="input-wrap">
						  <div class="icon"><span class="ion-ios-clock"></span></div>
						  <input type="text" name="time" class="form-control appointment_time" placeholder="Time">
					  </div>
						  </div>
						  <div class="form-group ml-md-4">
							  <input type="tel" name="phone"  class="form-control" placeholder="Phone">
						  </div>
					  </div>
					  <div class="d-md-flex">
						  <div class="form-group">
					<textarea  name="message" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
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

    <section class="ftco-about d-md-flex">
    	<div class="one-half img" style="background-image: url(frontend/images/about.jpg);"></div>
    	<div class="one-half ftco-animate">
    		<div class="overlap">
	        <div class="heading-section ftco-animate ">
	        	<span class="subheading">Discover</span>
	          <h2 class="mb-4">Our Story</h2>
	        </div>
	        <div>
	  				<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
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
                <h3 class="heading">Quality Coffee</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row align-items-center">
    			<div class="col-md-6 pr-md-5">
    				<div class="heading-section text-md-right ftco-animate">
	          	<span class="subheading">Discover</span>
	            <h2 class="mb-4">Our Menu</h2>
	            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
	            <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
	          </div>
    			</div>
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(frontend/images/menu-1.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(frontend/images/menu-2.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry">
		    					<a href="#" class="img" style="background-image: url(frontend/images/menu-3.jpg);"></a>
		    				</div>
    					</div>
    					<div class="col-md-6">
    						<div class="menu-entry mt-lg-4">
		    					<a href="#" class="img" style="background-image: url(frontend/images/menu-4.jpg);"></a>
		    				</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(frontend/images/bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
        	<div class="col-md-10">
        		<div class="row">
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="100">0</strong>
		              	<span>Coffee Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="85">0</strong>
		              	<span>Number of Awards</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="10567">0</strong>
		              	<span>Happy Customer</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		              	<div class="icon"><span class="flaticon-coffee-cup"></span></div>
		              	<strong class="number" data-number="900">0</strong>
		              	<span>Staff</span>
		              </div>
		            </div>
		          </div>
		        </div>
		      </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Best Coffee Sellers</h2>
            <p> Coffee is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain Coffea species. Once ripe, coffee berries are picked, processed, and dried. Dried coffee seeds are roasted to varying degrees, depending on the desired flavor..</p>
          </div>
        </div>
        <div class="row">
			@foreach ($item as $value)
			<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url('{{ asset('uploads/item/'.$value->image)}}');"></a>
    					<div class="text text-center pt-4">
						<h3><a href="#">{{$value->title}}</a></h3>
						<p>{{$value->subtitle}}</p>
						<p class="price"><span>NPR:{{$value->price}}</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
			@endforeach
        	
        	
        	
        	
        </div>
    	</div>
    </section>

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(frontend/images/gallery-1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(frontend/images/gallery-2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(frontend/images/gallery-3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="gallery.html" class="gallery img d-flex align-items-center" style="background-image: url(frontend/images/gallery-4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-search"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

	

    @include('frontend.section.testinomy')

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Recent from blog</h2>
            <p>Coffee is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain Coffea species. Once ripe, coffee berries are picked, processed, and dried. Dried coffee seeds are roasted to varying degrees, depending on the desired flavor.</p>
          </div>
        </div>
        
        <div class="row d-flex">
            @foreach ($blog as $blog1)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset('uploads/blog/'.$blog1->image)}}');">
                </a>
                <div class="text py-4 d-block">
                    <div class="meta">
                    <div><a href="#">{{$blog1->created_at}}</a></div>
                    <div><a href="#">Admin</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                <h3 class="heading mt-2"><a href="#">{{$blog1->title}}</a></h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
            @endforeach
          
          
          
        </div>
      </div>
    </section>

		
	<section class="ftco-appointment">
			<div class="overlay"></div>
    	<div class="container-wrap">
    		<div class="row no-gutters d-md-flex align-items-center">
    			<div class="col-md-6 d-flex align-self-stretch">
    				<div id="map"></div>
    			</div>
	    		<div class="col-md-6 appointment ftco-animate">
	    			<h3 class="mb-3">Book a Table</h3>
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
		              <input type="submit" value="Appointment" class="btn btn-primary py-3 px-4">
		            </div>
	    				</div>
	    			</form>
	    		</div>    			
    		</div>
    	</div>
	</section>
	
    @endsection    