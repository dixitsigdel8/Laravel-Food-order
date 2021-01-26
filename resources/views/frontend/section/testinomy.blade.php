<section class="ftco-section img" id="ftco-testimony" style="background-image: url(frontend/images/bg_1.jpg);"  data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Testimony</span>
          <h2 class="mb-4">Customers Says</h2>
          <p>Coffee is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain Coffea species. Once ripe, coffee berries are picked, processed, and dried. Dried coffee seeds are roasted to varying degrees, depending on the desired flavor.</p>
        </div>
      </div>
    </div>
   
    <div class="container-wrap">
        <div class="row d-flex no-gutters">
            @foreach ($testimony as $testo)
          <div class="col-lg align-self-sm-end ftco-animate">
            <div class="testimony">
               <blockquote>
               <p>&ldquo;{{$testo->description}}&rdquo;</p>
                </blockquote>
                <div class="author d-flex mt-4">
                  <div class="image mr-3 align-self-center">
                  <img src="{{asset('/uploads/testimony/'.$testo->image)}}" alt="">
                  </div>
                  <div class="name align-self-center">{{$testo->title}} <span class="position">Illustrator Designer</span></div>
                </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
        
   
    
</section>