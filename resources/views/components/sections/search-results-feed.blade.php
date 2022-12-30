        <div id="wrapper-content" class="wrapper-content bg-gray-04 pb-0">
            <div class="container">
                <ul class="breadcrumb breadcrumb-style-02 py-7">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item">Search Results</li>
                </ul>
                <div class="page-container row">
                    <div class="sidebar col-lg-4 order-1 order-lg-0 mb-8 mb-lg-0">
                        <div class="card rounded-0 mb-6 map p-0">
                            <div id="googleMap" data-google-map="true" class="small-map"
                                 style="width:100%;height:179px;"></div>
                            <div class="map-content">
                                <a href="#" class="btn btn-primary btn-icon-left font-size-md px-5 lh-18"><i
                                        class="fas fa-map-marker-alt"></i>See
                                    On Map</a>
                            </div>
                        </div>
                        <div class="card search bg-white mb-6 border-0 rounded-0 px-6">
                            <div class="card-header bg-transparent border-0 pt-4 pb-0 px-0">
                                <h5 class="card-title mb-0">Search</h5>
                            </div>
                            <div class="card-body px-0 pb-42">
                                <div class="form-search form-search-style-03">
                                    <div class="form-group">
                                        <div class="input-group d-flex align-items-center">
                                            <label for="what"
                                                   class="input-group-prepend text-dark font-weight-semibold">What</label>
                                            <input type="text" class="form-control bg-transparent" id="what"
                                                   placeholder="Any keywords...">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group d-flex align-items-center">
                                            <label for="where"
                                                   class="input-group-prepend text-dark font-weight-semibold">Where</label>
                                            <input type="text" class="form-control bg-transparent" id="where"
                                                   placeholder="City, postcode...">
                                        </div>
                                    </div>
                                    <button type="submit"
                                            class="btn btn-primary btn-block btn-icon-left font-size-md">
                                        <i class="fal fa-search"></i>
                                        Search
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card widget-filter bg-white mb-6 border-0 rounded-0 px-6">
                            <div class="card-header bg-transparent border-0 pt-4 pb-0 px-0">
                                <h5 class="card-title mb-0">Filter</h5>
                            </div>
                            <div class="card-body px-0">
                                <div class="form-filter">
                                    <form>
                                        <div class="form-group category">
                                            <div class="select-custom">
                                                <select class="form-control">
                                                    <option value="0">Categories</option>
                                                    <option value="1">New York</option>
                                                    <option value="1">LA</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group price-range">
                                            <label class="form-label">
                                                Price Range
                                            </label>
                                            <div id="price" data-slider="true"
                                                 data-slider-options='{"min":0,"max":4000,"values":[0,2000]}'></div>
                                            <div class="description">
                                                From <input type="text" readonly class="amount border-0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" value="Open Now" class="form-control bg-transparent">
                                                <span class="input-group-append"><i class="fal fa-clock"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" value="Highest Rated"
                                                       class="form-control bg-transparent">
                                                <span class="input-group-append"><i class="fas fa-star"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" value="Most Reviewed"
                                                       class="form-control bg-transparent">
                                                <span class="input-group-append"><i class="fal fa-comment"></i></span>
                                            </div>
                                        </div>
                                        <div class="form-group filter-tags">
                                            <label class="form-label">Filter by tags</label>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="street-foody">
                                                <label class="custom-control-label" for="street-foody">
                                                    Street Foody
                                                </label>
                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="luxury">
                                                <label class="custom-control-label" for="luxury">
                                                    Luxury
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="chinese">
                                                <label class="custom-control-label" for="chinese">
                                                    Chinese
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="fast-food">
                                                <label class="custom-control-label" for="fast-food">
                                                    Fast Food
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="drinking">
                                                <label class="custom-control-label" for="drinking">
                                                    Drinking
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="coffee">
                                                <label class="custom-control-label" for="coffee">
                                                    Coffee
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="italian">
                                                <label class="custom-control-label" for="italian">
                                                    Italian
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="beer-club">
                                                <label class="custom-control-label" for="beer-club">
                                                    Beer Club
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="vegetarian">
                                                <label class="custom-control-label" for="vegetarian">
                                                    Vegetarian
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="hotpots">
                                                <label class="custom-control-label" for="hotpots">
                                                    Hotpots
                                                </label>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="campaign">
                            <img src="images/other/campaign.jpg" alt="Campaign">
                        </div>
                    </div>
                    <div class="page-content col-12 col-lg-8 order-0 order-lg-1 mb-8 mb-lg-0">
                        <div class="explore-filter d-lg-flex align-items-center d-block">
                            <div class="text-dark font-weight-semibold font-size-md mb-4 mb-lg-0">56 Results found</div>
                            <div class="form-filter d-flex align-items-center ml-auto">
                                <div class="form-group row no-gutters align-items-center">
                                    <label for="sort-by"
                                           class="col-sm-3 text-dark font-size-md font-weight-semibold mb-0">Sort
                                        by</label>
                                    <div class="select-custom col-sm-9 bg-white">
                                        <select id="sort-by" class="form-control bg-transparent">
                                            <option value="0">Latest</option>
                                            <option value="1">New York</option>
                                            <option value="1">LA</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="format-listing ml-auto">
                                    <a href="#" class="active"><i class="fas fa-th"></i></a>
                                    <a href="explore-sidebar-list.html"><i class="fal fa-bars"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row equal-height">
                            @foreach()
                            <div class="col-lg-6 mb-6">
                                <div class="store card border-0 rounded-0">
                                    <div class="position-relative store-image">
                                        <a href="listing-details-full-image.html">
                                            <img src="images/shop/popular-place-2.jpg" alt="store 1"
                                                 class="card-img-top rounded-0">
                                        </a>
                                        <div class="image-content position-absolute d-flex align-items-center">
                                            <div class="content-right ml-auto d-flex">
                                                <a href="images/shop/full-popular-place-2.jpg"
                                                   class="item viewing"
                                                   data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Quick view" data-gtf-mfp="true">
                                                    <svg class="icon icon-expand">
                                                        <use xlink:href="#icon-expand"></use>
                                                    </svg>
                                                </a>
                                                <a href="#" class="item marking" data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-4">
                                        <a href="listing-details-full-image.html"
                                           class="card-title h5 text-dark d-inline-block mb-2"><span
                                                class="letter-spacing-25">Fruit Cake - Halsey St </span></a>
                                        <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                            <li class="list-inline-item"><span
                                                    class="badge badge-success mr-1 d-inline-block">4.8</span><span
                                                    class="number">2 rating</span>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="mr-1">From</span><span
                                                    class="text-danger font-weight-semibold">$4.0</span></li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="text-green">Open now!</span></li>
                                        </ul>
                                        <div class="media">
                                            <a href="#" class="d-inline-block mr-3"><img
                                                    src="images/listing/testimonial-1.png"
                                                    alt="testimonial" class="rounded-circle">
                                            </a>
                                            <div class="media-body lh-14 font-size-sm">They specialize in makgeolli at
                                                this
                                                Korean-style pub in Seorae Village. And they use...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
                                        <div class="border-top pt-3">
											<span
                                                    class="d-inline-block mr-1"><i
                                                    class="fal fa-map-marker-alt">
											</i>
												</span>
                                            <a href="#" class="text-secondary text-decoration-none address">92
                                                Halsey St,
                                                Brooklyn, NY</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="col-lg-6 mb-6">
                                <div class="store card border-0 rounded-0">
                                    <div class="position-relative store-image">
                                        <a href="listing-details-full-image.html">
                                            <img src="images/shop/popular-place-3.jpg" alt="store 1"
                                                 class="card-img-top rounded-0">
                                        </a>
                                        <div class="image-content position-absolute d-flex align-items-center">
                                            <div class="content-right ml-auto d-flex">
                                                <a href="images/shop/full-popular-place-3.jpg"
                                                   class="item viewing"
                                                   data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Quick view" data-gtf-mfp="true">
                                                    <svg class="icon icon-expand">
                                                        <use xlink:href="#icon-expand"></use>
                                                    </svg>
                                                </a>
                                                <a href="#" class="item marking" data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-4">
                                        <a href="listing-details-full-image.html"
                                           class="card-title h5 text-dark d-inline-block mb-2"><span
                                                class="letter-spacing-25">EBI Coffe Vintage - Hobbits Ave St</span></a>
                                        <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                            <li class="list-inline-item"><span
                                                    class="badge badge-success d-inline-block mr-1">4.7</span><span
                                                    class="number">6 rating</span>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="mr-1">From</span><span
                                                    class="text-danger font-weight-semibold">$2.50</span></li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="text-green">Open now!</span></li>
                                        </ul>
                                        <div class="media">
                                            <a href="#" class="d-inline-block mr-3"><img
                                                    src="images/listing/testimonial-5.png"
                                                    alt="testimonial" class="rounded-circle">
                                            </a>
                                            <div class="media-body lh-14 font-size-sm">After a yoga class changed her
                                                life, Maz
                                                became
                                                vegan, launched...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
                                        <div class="border-top pt-3">
										<span
                                                class="d-inline-block mr-1"><i
                                                class="fal fa-map-marker-alt">
											</i>
												</span>
                                            <a href="#" class="text-secondary text-decoration-none address">275
                                                Hobbits
                                                Ave St,
                                                Queen, NY</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-6">
                                <div class="store card border-0 rounded-0">
                                    <div class="position-relative store-image">
                                        <a href="listing-details-full-image.html">
                                            <img src="images/shop/popular-place-5.jpg" alt="store 1"
                                                 class="card-img-top rounded-0">
                                        </a>
                                        <div class="image-content position-absolute d-flex align-items-center">
                                            <div class="content-right ml-auto d-flex">
                                                <a href="images/shop/full-popular-place-5.jpg"
                                                   class="item viewing"
                                                   data-toggle="tooltip"
                                                   data-placement="top" data-gtf-mfp="true"
                                                   title="Quick view">
                                                    <svg class="icon icon-expand">
                                                        <use xlink:href="#icon-expand"></use>
                                                    </svg>
                                                </a>
                                                <a href="#" class="item marking" data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-4">
                                        <a href="listing-details-full-image.html"
                                           class="card-title h5 text-dark d-inline-block mb-2"><span
                                                class="letter-spacing-25">Meet Grilled - Lower Rd St</span></a>
                                        <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                            <li class="list-inline-item"><span
                                                    class="badge badge-success d-inline-block mr-1">4.8</span><span
                                                    class="number">2 rating</span>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="mr-1">From</span><span
                                                    class="text-danger font-weight-semibold">$12.50</span></li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="text-danger">Close now!</span>
                                            </li>
                                        </ul>

                                        <div class="media">
                                            <a href="#" class="d-inline-block mr-3"><img
                                                    src="images/listing/testimonial-3.png"
                                                    alt="testimonial" class="rounded-circle">
                                            </a>
                                            <div class="media-body lh-14 font-size-sm">Established in 1895, these
                                                style merchants have set the standard in Sydney suiting for
                                                generations...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
                                        <div class="border-top pt-3">
										<span
                                                class="d-inline-block mr-1"><i
                                                class="fal fa-map-marker-alt">
											</i>
												</span>
                                            <a href="#" class="text-secondary text-decoration-none address">212
                                                Lower
                                                Rd St,
                                                Linden,
                                                NY</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-6">
                                <div class="store card border-0 rounded-0">
                                    <div class="position-relative store-image">
                                        <a href="listing-details-full-image.html">
                                            <img src="images/shop/popular-place-6.jpg" alt="store 1"
                                                 class="card-img-top rounded-0">
                                        </a>
                                        <div class="image-content position-absolute d-flex align-items-center">
                                            <div class="content-right ml-auto d-flex">
                                                <a href="images/shop/full-popular-place-6.jpg"
                                                   class="item viewing"
                                                   data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Quickview" data-gtf-mfp="true">
                                                    <svg class="icon icon-expand">
                                                        <use xlink:href="#icon-expand"></use>
                                                    </svg>
                                                </a>
                                                <a href="#" class="item marking" data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-4">
                                        <a href="listing-details-full-image.html"
                                           class="card-title h5 text-dark d-inline-block mb-2"><span
                                                class="letter-spacing-25">Water Melon Pudding - 55 Orchar..</span></a>
                                        <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                            <li class="list-inline-item"><span
                                                    class="badge badge-success d-inline-block mr-1">4.9</span><span
                                                    class="number">6 rating</span>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="mr-1">From</span><span
                                                    class="text-danger font-weight-semibold">$3.20</span></li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="text-green">Open now!</span></li>
                                        </ul>
                                        <div class="media">
                                            <a href="#" class="d-inline-block mr-3"><img
                                                    src="images/listing/testimonial-5.png"
                                                    alt="testimonial" class="rounded-circle">
                                            </a>
                                            <div class="media-body lh-14 font-size-sm">Overlooking Bloomsbury's Russell
                                                Square
                                                and
                                                a 2 minutes' walk from the tube station of the same name...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
                                        <div class="border-top pt-3">
										<span
                                                class="d-inline-block mr-1"><i
                                                class="fal fa-map-marker-alt">
											</i>
												</span>
                                            <a href="#" class="text-secondary text-decoration-none address">55
                                                Orchard
                                                St, Jeersy
                                                City, NY</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-6">
                                <div class="store card border-0 rounded-0">
                                    <div class="position-relative store-image">
                                        <a href="listing-details-full-image.html">
                                            <img src="images/shop/popular-place-1.jpg" alt="store 1"
                                                 class="card-img-top rounded-0">
                                        </a>
                                        <div class="image-content position-absolute d-flex align-items-center">
                                            <div class="content-right ml-auto d-flex">
                                                <a href="images/shop/full-popular-place-1.jpg"
                                                   class="item viewing"
                                                   data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Quick view" data-gtf-mfp="true">
                                                    <svg class="icon icon-expand">
                                                        <use xlink:href="#icon-expand"></use>
                                                    </svg>
                                                </a>
                                                <a href="#" class="item marking" data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-4">
                                        <a href="listing-details-full-image.html"
                                           class="card-title h5 text-dark d-inline-block mb-2"><span
                                                class="letter-spacing-25">Japan Rice Mixed Seafood</span></a>
                                        <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                            <li class="list-inline-item"><span
                                                    class="badge badge-success mr-1 d-inline-block">5.0</span><span
                                                    class="number">4 rating</span>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="mr-1">From</span><span
                                                    class="text-danger font-weight-semibold">$9.0</span></li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                        <div class="media">
                                            <a href="#" class="d-inline-block mr-3"><img
                                                    src="images/listing/testimonial-1.png"
                                                    alt="testimonial" class="rounded-circle">
                                            </a>
                                            <div class="media-body lh-14 font-size-sm">Overlooking Bloomsbury’s Russell
                                                Square and a
                                                2
                                                minutes’ walk from the tube station of the same name...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
                                        <div class="border-top pt-3">
										<span
                                                class="d-inline-block mr-1"><i
                                                class="fal fa-map-marker-alt">
											</i>
												</span>
                                            <a href="#" class="text-secondary text-decoration-none address">534
                                                Salem
                                                Rd St,
                                                Newark, NY</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-6">
                                <div class="store card border-0 rounded-0">
                                    <div class="position-relative store-image">
                                        <a href="listing-details-full-image.html">
                                            <img src="images/shop/popular-place-4.jpg" alt="store 1"
                                                 class="card-img-top rounded-0">
                                        </a>
                                        <div class="image-content position-absolute d-flex align-items-center">
                                            <div class="content-right ml-auto d-flex">
                                                <a href="images/shop/full-popular-place-4.jpg"
                                                   class="item viewing"
                                                   data-toggle="tooltip" data-gtf-mfp="true"
                                                   data-placement="top"
                                                   title="Quick view">
                                                    <svg class="icon icon-expand">
                                                        <use xlink:href="#icon-expand"></use>
                                                    </svg>
                                                </a>
                                                <a href="#" class="item marking" data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-4">
                                        <a href="listing-details-full-image.html"
                                           class="card-title h5 text-dark d-inline-block mb-2"><span
                                                class="letter-spacing-25">Strawberry Cocktail - Main St</span></a>
                                        <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                            <li class="list-inline-item"><span
                                                    class="badge badge-warning d-inline-block mr-1">4.4</span><span
                                                    class="number">4 rating</span>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="mr-1">From</span><span
                                                    class="text-danger font-weight-semibold">$5.00</span></li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="text-green">Open now!</span>
                                            </li>
                                        </ul>

                                        <div class="media">
                                            <a href="#" class="d-inline-block mr-3"><img
                                                    src="images/listing/testimonial-2.png"
                                                    alt="testimonial" class="rounded-circle">
                                            </a>
                                            <div class="media-body lh-14 font-size-sm">Most items can be packed securely
                                                in
                                                these boxes, which are available in several sizes...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
                                        <div class="border-top pt-3">
										<span
                                                class="d-inline-block mr-1"><i
                                                class="fal fa-map-marker-alt">
											</i>
												</span>
                                            <a href="#" class="text-secondary text-decoration-none address">
                                                306 Main St, Queen, NY</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-6">
                                <div class="store card border-0 rounded-0">
                                    <div class="position-relative store-image">
                                        <a href="listing-details-full-image.html">
                                            <img src="images/shop/top-place-1.jpg" alt="store 1"
                                                 class="card-img-top rounded-0">
                                        </a>
                                        <div class="image-content position-absolute d-flex align-items-center">
                                            <div class="content-right ml-auto d-flex">
                                                <a href="images/shop/full-top-place-1.jpg" class="item viewing"
                                                   data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Quickview" data-gtf-mfp="true">
                                                    <svg class="icon icon-expand">
                                                        <use xlink:href="#icon-expand"></use>
                                                    </svg>
                                                </a>
                                                <a href="#" class="item marking" data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-4">
                                        <a href="listing-details-full-image.html"
                                           class="card-title h5 text-dark d-inline-block mb-2"><span
                                                class="letter-spacing-25">Thai’s Taste Restaurant</span></a>
                                        <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                            <li class="list-inline-item"><span
                                                    class="badge badge-success mr-1 d-inline-block">5.0</span><span
                                                    class="number">4 rating</span>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="mr-1">From</span><span
                                                    class="text-danger font-weight-semibold">$9.0</span></li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="text-green">Open now!</span>
                                            </li>
                                        </ul>
                                        <div class="media">
                                            <a href="#" class="d-inline-block mr-3"><img
                                                    src="images/listing/testimonial-1.png"
                                                    alt="testimonial" class="rounded-circle">
                                            </a>
                                            <div class="media-body lh-14 font-size-sm">Overlooking Bloomsbury’s Russell
                                                Square and a
                                                2
                                                minutes’ walk from the tube station of the same name...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
                                        <div class="border-top pt-3">
										<span
                                                class="d-inline-block mr-1"><i
                                                class="fal fa-map-marker-alt">
											</i>
												</span>
                                            <a href="#" class="text-secondary text-decoration-none address">534
                                                Salem
                                                Rd St,
                                                Newark, NY</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-6">
                                <div class="store card border-0 rounded-0">
                                    <div class="position-relative store-image">
                                        <a href="listing-details-full-image.html">
                                            <img src="images/shop/top-place-2.jpg" alt="store 2"
                                                 class="card-img-top rounded-0">
                                        </a>
                                        <div class="image-content position-absolute d-flex align-items-center">
                                            <div class="content-right ml-auto d-flex">
                                                <a href="images/shop/full-top-place-2.jpg" data-gtf-mfp="true"
                                                   class="item viewing" data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Quick view">
                                                    <svg class="icon icon-expand">
                                                        <use xlink:href="#icon-expand"></use>
                                                    </svg>
                                                </a>
                                                <a href="#" class="item marking" data-toggle="tooltip"
                                                   data-placement="top"
                                                   title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pb-4">
                                        <a href="listing-details-full-image.html"
                                           class="card-title h5 text-dark d-inline-block mb-2"><span
                                                class="letter-spacing-25">Pepperoni’s Pizza Restaurant</span></a>
                                        <ul class="list-inline store-meta mb-4 font-size-sm d-flex align-items-center flex-wrap">
                                            <li class="list-inline-item"><span
                                                    class="badge badge-warning d-inline-block mr-1">4.4</span><span
                                                    class="number">4 rating</span>
                                            </li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="mr-1">From</span><span
                                                    class="text-danger font-weight-semibold">$5.00</span></li>
                                            <li class="list-inline-item separate"></li>
                                            <li class="list-inline-item"><span class="text-green">Open now!</span>
                                            </li>
                                        </ul>

                                        <div class="media">
                                            <a href="#" class="d-inline-block mr-3"><img
                                                    src="images/listing/testimonial-2.png"
                                                    alt="testimonial" class="rounded-circle">
                                            </a>
                                            <div class="media-body lh-14 font-size-sm">Most items can be packed securely
                                                in
                                                these boxes, which are available in several sizes...
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer rounded-0 border-top-0 pb-3 pt-0 bg-transparent">
                                        <div class="border-top pt-3">
										<span
                                                class="d-inline-block mr-1"><i
                                                class="fal fa-map-marker-alt">
											</i>
												</span>
                                            <a href="#" class="text-secondary text-decoration-none address">
                                                306 Main St, Queen, NY</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pagination mt-7">
                            <a href="#" class="btn btn-lg btn-dark-red btn-block font-size-h5 lh-18">
                                More Results...48/56
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="recent-view pt-9 bg-white pb-10">
                <div class="container">
                    <div class="mb-6">
                        <h5 class="mb-0">
                            Recently Viewed
                        </h5>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="store media align-items-stretch bg-white">
                                <div class="store-image position-relative">
                                    <a href="listing-details-full-image.html">
                                        <img src="images/shop/recent-view-1.jpg" alt="Recent view 1">
                                    </a>
                                    <div class="image-content position-absolute d-flex align-items-center">
                                        <div class="content-right ml-auto d-flex">
                                            <a href="images/shop/full-top-place-3.jpg"
                                               class="item viewing"
                                               data-toggle="tooltip"
                                               data-placement="top"
                                               title="Quickview" data-gtf-mfp="true">
                                                <svg class="icon icon-expand">
                                                    <use xlink:href="#icon-expand"></use>
                                                </svg>
                                            </a>
                                            <a href="#" class="item marking" data-toggle="tooltip"
                                               data-placement="top"
                                               title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0">
                                    <a href="listing-details-full-image.html"
                                       class="font-size-md font-weight-semibold text-dark d-inline-block mb-2 lh-11"><span
                                            class="letter-spacing-25">Canabo View Street, Main St</span> </a>
                                    <ul class="list-inline store-meta mb-2 lh-1 font-size-sm d-flex align-items-center flex-wrap">
                                        <li class="list-inline-item"><span
                                                class="badge badge-warning d-inline-block mr-1">4.3</span><span
                                                class="number">6 rating</span>
                                        </li>
                                        <li class="list-inline-item separate"></li>
                                        <li class="list-inline-item"><span class="mr-1">From</span><span
                                                class="text-danger font-weight-semibold">$8.00</span></li>
                                    </ul>
                                    <div>
											<span
                                                    class="d-inline-block mr-1"><i
                                                    class="fal fa-map-marker-alt">
											</i>
												</span>
                                        <a href="#" class="text-secondary text-decoration-none address">77 Main St,
                                            Queen,
                                            NY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="store media align-items-stretch bg-white">
                                <div class="store-image position-relative">
                                    <a href="listing-details-full-image.html">
                                        <img src="images/shop/recent-view-2.jpg" alt="Recent view 1">
                                    </a>
                                    <div class="image-content position-absolute d-flex align-items-center">
                                        <div class="content-right ml-auto d-flex">
                                            <a href="images/shop/full-top-place-4.jpg"
                                               class="item viewing"
                                               data-toggle="tooltip"
                                               data-placement="top"
                                               title="Quickview" data-gtf-mfp="true">
                                                <svg class="icon icon-expand">
                                                    <use xlink:href="#icon-expand"></use>
                                                </svg>
                                            </a>
                                            <a href="#" class="item marking" data-toggle="tooltip"
                                               data-placement="top"
                                               title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0">
                                    <a href="listing-details-full-image.html"
                                       class="font-size-md font-weight-semibold text-dark d-inline-block mb-2 lh-11"><span
                                            class="letter-spacing-25">Japan's Sushi - 10th Ave St</span> </a>
                                    <ul class="list-inline store-meta mb-2 lh-1 font-size-sm d-flex align-items-center flex-wrap">
                                        <li class="list-inline-item"><span
                                                class="badge badge-success d-inline-block mr-1">5.0</span><span
                                                class="number">7 rating</span>
                                        </li>
                                        <li class="list-inline-item separate"></li>
                                        <li class="list-inline-item"><span class="mr-1">From</span><span
                                                class="text-danger font-weight-semibold">$12.00</span></li>
                                    </ul>
                                    <div>
											<span
                                                    class="d-inline-block mr-1"><i
                                                    class="fal fa-map-marker-alt">
											</i>
												</span>
                                        <a href="#" class="text-secondary text-decoration-none address">99 10th Ave
                                            St,
                                            Mahattan, NY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <div class="store media align-items-stretch bg-white">
                                <div class="store-image position-relative">
                                    <a href="listing-details-full-image.html">
                                        <img src="images/shop/recent-view-3.jpg" alt="Recent view 1">
                                    </a>
                                    <div class="image-content position-absolute d-flex align-items-center">
                                        <div class="content-right ml-auto d-flex">
                                            <a href="images/shop/full-top-place-5.jpg"
                                               class="item viewing"
                                               data-toggle="tooltip"
                                               data-placement="top"
                                               title="Quickview" data-gtf-mfp="true">
                                                <svg class="icon icon-expand">
                                                    <use xlink:href="#icon-expand"></use>
                                                </svg>
                                            </a>
                                            <a href="#" class="item marking" data-toggle="tooltip"
                                               data-placement="top"
                                               title="Bookmark"><i class="fal fa-bookmark"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="media-body pl-0 pl-sm-3 pt-4 pt-sm-0">
                                    <a href="listing-details-full-image.html"
                                       class="font-size-md font-weight-semibold text-dark d-inline-block mb-2 lh-11"><span
                                            class="letter-spacing-25">Korean Bingsu Shop</span></a>
                                    <ul class="list-inline store-meta mb-2 lh-1 font-size-sm d-flex align-items-center flex-wrap">
                                        <li class="list-inline-item"><span
                                                class="badge badge-success d-inline-block mr-1">5.0</span><span
                                                class="number">7 rating</span>
                                        </li>
                                        <li class="list-inline-item separate"></li>
                                        <li class="list-inline-item"><span class="mr-1">From</span><span
                                                class="text-danger font-weight-semibold">$12.00</span></li>
                                    </ul>
                                    <div>
											<span
                                                    class="d-inline-block mr-1"><i
                                                    class="fal fa-map-marker-alt">
											</i>
												</span>
                                        <a href="#" class="text-secondary text-decoration-none address">534 Salem
                                            Rd St,
                                            Newark, NY</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #wrapper-content end -->

    