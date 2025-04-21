 <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 ftco-animate">
            <div class="row ftco-animate">
              <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                  @if(isset($testmony))
                  @foreach($testmony as $testmonies)
                  <div class="item">
                    <div class="testimony-wrap py-4 pb-5">
                      <div class="user-img mb-4" style="background-image: url(clientimage/{{$testmonies->image}})">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text text-center">
                        <p class="mb-4">{{$testmonies->caption}}</p>
                        <p class="name">{{$testmonies->name}}</p>
                        
                      </div>
                    </div>
                  </div>
                  @endforeach
                  @endif

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>