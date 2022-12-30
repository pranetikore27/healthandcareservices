<section id="section-01" class="home-main-intro">
    <div class="home-main-intro-container">
        <div class="container">
            <div class="heading mb-9">
                <h1 class="mb-7">
                    <span class="d-block" data-animate="slideInLeft">Your health</span>
                    <span class="font-weight-light d-block"
                          data-animate="fadeInRight">is our priority</span>
                </h1>
                <p class="h5 font-weight-normal text-secondary mb-0" data-animate="fadeInDown">
                    Find hospitals, medcals, bloodbank, and many more medicals services quickly...
                </p>
            </div>
            <div class="form-search form-search-style-02 pb-9" data-animate="fadeInDown">
                <form action="{{ route('search') }}" method="POST">
                    @csrf 
                    <div class="row align-items-end no-gutters">
                        <div class="col-xl-6 mb-4 mb-xl-0 py-3 px-4 bg-white border-right position-relative rounded-left form-search-item">
                            <label for="Category"
                                   class="font-size-md font-weight-semibold text-dark mb-0 lh-1">What</label>
                            <div class="input-group dropdown show">
                                <input type="text" autocomplete="on" id="Category_name" name="Category_name"
                                       class="form-control form-control-mini border-0 px-0 bg-transparent"
                                       placeholder="Ex: hospital, ambulance, medical, bloodbank" data-toggle="dropdown"
                                       aria-haspopup="true">
                                
                                <ul class="dropdown-menu form-search-ajax" aria-labelledby="Category_name">
                                    @foreach($category as $c)
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-bed">
                                                <use xlink:href="#icon-bed"></use>
                                            </svg>
                                            <span class="font-size-md">{{$c->Category_name}}</span>
                                        </a>
                                    </li>
                                    @endforeach
                                    
                                </ul>
                            </div>

                        </div>
                        <div class="col-xl-4 mb-4 mb-xl-0 py-3 px-4 bg-white position-relative rounded-right form-search-item">
                            <label for="Location_cityName"
                                   class="font-size-md font-weight-semibold text-dark mb-0 lh-1">Where</label>
                            <div class="input-group dropdown show">
                                <input type="text" autocomplete="on" id="Location_cityName" name="Location_cityName"
                                       class="form-control form-control-mini border-0 px-0 bg-transparent"
                                       placeholder="Pune" data-toggle="dropdown"
                                       aria-haspopup="true">
                                <a href="#" class="input-group-append text-decoration-none"
                                   data-toggle="dropdown">
                                    <i class="fal fa-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu form-search-ajax" aria-labelledby="region">
                                    @foreach($locations as $l)
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            {{$l->Location_cityName}}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-2 button">
                            <button type="submit" class="btn btn-primary btn-lg btn-icon-left btn-block"><i
                                    class="fal fa-search"></i>Search
                            </button>
                        </div>
                    </div>

                </form>
            </div>
            <div class="font-size-lg mb-4">
                Or browse the highlights
            </div>
            <div class="list-inline pb-8 flex-wrap my-n2 flex">
                @foreach($category as $c)
                <div class="list-inline-item py-2">
                    <a href="{{route('trial.show', $c->Category_id)}}"
                       class="card border-0 icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <img class="w-14 m-auto invert-image" src="{{asset('./assets/icons/hospital.png')}}" alt="Hospitals">
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                {{$c->Category_name}}
                            </span>
                        </div>
                    </a>
                </div>
                @endforeach
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html"
                       class="card border-0 icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                                <img class="w-14 m-auto invert-image" src="{{asset('./assets/icons/medicine.png')}}" alt="Medicals">
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Medicals
                            </span>
                        </div>

                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html"
                       class="card border-0 icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <img class="w-14 m-auto invert-image" src="{{asset('./assets/icons/ambulance.png')}}" alt="Ambulance">
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Ambulance
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html"
                       class="card border-0 link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <img class="w-14 m-auto invert-image" src="{{asset('./assets/icons/blood-bag.png')}}" alt="Blood Bank">
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Blood Bank
                            </span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html"
                       class="card border-0 link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <img class="w-14 m-auto invert-image" src="{{asset('./assets/icons/insurance.png')}}" alt="Insurance">
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
                                Insurance
                            </span>
                        </div>

                    </a>
                </div>
            </div>
        </div>
        <div class="home-main-how-it-work bg-white pt-11">
            <div class="container">
                <h2 class="mb-8">
                    <span>See</span>
                    <span class="font-weight-light">How It Works</span>
                </h2>
                <div class="row no-gutters pb-11">
                    <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
                        <div class="media icon-box-style-02" data-animate="fadeInDown">
                            <div class="d-flex flex-column align-items-center mr-6">
                                <svg class="icon icon-checkmark-circle">
                                    <use xlink:href="#icon-checkmark-circle"></use>
                                </svg>
                                <span class="number h1 font-weight-bold">1</span>
                            </div>
                            <div class="media-body lh-14">
                                <h5 class="mb-3 lh-1">
                                    Choose What To Do
                                </h5>
                                <p class="font-size-md text-gray mb-0 text-muted">
                                    Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit
                                    or a mall to do some shopping?
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
                        <div class="media icon-box-style-02" data-animate="fadeInDown">
                            <div class="d-flex flex-column align-items-center mr-6">
                                <svg class="icon icon-checkmark-circle">
                                    <use xlink:href="#icon-checkmark-circle"></use>
                                </svg>
                                <span class="number h1 font-weight-bold">2</span>
                            </div>
                            <div class="media-body lh-14">
                                <h5 class="mb-3 lh-1">
                                    Find What You Want
                                </h5>
                                <p class="font-size-md text-gray mb-0 text-muted">
                                    Search and filter hundreds of listings, read reviews, explore photos and
                                    find the perfect spot.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0 px-0 px-lg-4">
                        <div class="media icon-box-style-02" data-animate="fadeInDown">
                            <div class="d-flex flex-column align-items-center mr-6">
                                <svg class="icon icon-checkmark-circle">
                                    <use xlink:href="#icon-checkmark-circle"></use>
                                </svg>
                                <span class="number h1 font-weight-bold">3</span>
                            </div>
                            <div class="media-body lh-14">
                                <h5 class="mb-3 lh-1">
                                    Explore Amazing Places
                                </h5>
                                <p class="font-size-md text-gray mb-0 text-muted">
                                    Go and have a good time or even make a booking directly from the listing
                                    page. All of those, thanks to TheDir!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom"></div>
            </div>
        </div>
    </div>
</section>