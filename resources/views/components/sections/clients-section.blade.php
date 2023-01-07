<section class="home-main-testimonial pt-12 pb-13" id="section-04">
    <div class="container">
        <h2 class="mb-8">
            <span class="font-weight-semibold">Clients </span>
            <span class="font-weight-light">Review</span>
        </h2>
        <div class="container">
            <div class="row">
                <div class="col col-md-12">
                    <div class="slick-slider testimonials-slider arrow-top"
                         data-slick-options='{"slidesToShow": 2,"autoplay":false,"dots":false,"responsive":[{"breakpoint": 992,"settings": {"slidesToShow": 1,"arrows":false}}]}'>
                        @foreach($reviews as $r)
                        <div class="box">
                            <div class="card testimonial h-100 border-0 bg-transparent">
                                <a href="#" class="author-image">
                                    <img src="./assets/images/listing/client-1.png" alt="Testimonial"
                                         class="rounded-circle">
                                </a>
                                <div class="card-body bg-white">
                                    <div class="testimonial-icon text-right">
                                        <svg class="icon icon-quote">
                                            <use xlink:href="#icon-quote"></use>
                                        </svg>
                                    </div>
                                    <ul class="list-inline mb-4 d-flex align-items-end flex-wrap">
                                        <li class="list-inline-item">
                                            <a href="#"
                                               class="font-size-lg text-dark font-weight-semibold d-inline-block">{{$r->name}}
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <span class="h5 font-weight-light mb-0 d-inline-block ml-1 text-gray">/</span>
                                        </li>
                                        <li class="list-inline-item">
                                        <span class="text-gray">
                                            Opted for {{$r->Service_name}}
                                        </span>
                                        </li>

                                    </ul>
                                    <div class="card-text text-gray pr-4">
                                        {{$r->Review_matter}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                  </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>