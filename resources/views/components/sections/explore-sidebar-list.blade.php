<div id="wrapper-content" class="wrapper-content bg-gray-04 pb-0">
            <div class="container">
                <ul class="breadcrumb breadcrumb-style-02 py-7">
                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item">Category Listing</li>
                </ul>
                <div class="page-container row">
                    <div class="sidebar col-12 col-lg-4 order-1 order-lg-0">
                        <div class="card rounded-0 mb-6 map p-0">
                            <!-- <div id="googleMap" data-google-map="true" class="small-map"
                                 style="width:100%;height:179px;"></div> -->
                            <!-- <div class="map-content">
                                <a href="#" class="btn btn-primary btn-icon-left font-size-md px-5 lh-18"><i
                                        class="fas fa-map-marker-alt"></i>See
                                    On Map</a>
                            </div> -->
                        </div>
                        <div class="card search bg-white mb-6 border-0 rounded-0 px-6">
                            <div class="row">
                                
                        @foreach($categories as $c)
                        <div class="list-inline-item py-2 ">
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
                            </div>
                        </div>
                        <!-- <div class="card widget-filter bg-white mb-6 border-0 rounded-0 px-6">
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
                                                <input class="custom-control-input" type="checkbox" id="electronics">
                                                <label class="custom-control-label" for="electronics">
                                                    Design
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="books">
                                                <label class="custom-control-label" for="books">
                                                    Developer
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="fashion">
                                                <label class="custom-control-label" for="fashion">
                                                    Programer
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="vintage">
                                                <label class="custom-control-label" for="vintage">
                                                    Consulting
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="gift">
                                                <label class="custom-control-label" for="gift">
                                                    Accounting
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="furniture">
                                                <label class="custom-control-label" for="furniture">
                                                    Transporter
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="women-clothing">
                                                <label class="custom-control-label" for="women-clothing">
                                                    Technology
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="men-clothing">
                                                <label class="custom-control-label" for="men-clothing">
                                                    Waiter
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="shoes">
                                                <label class="custom-control-label" for="shoes">
                                                    Intership
                                                </label>

                                            </div>
                                            <div class="custom-control custom-checkbox lh-19">
                                                <input class="custom-control-input" type="checkbox" id="jewelry">
                                                <label class="custom-control-label" for="jewelry">
                                                    Controllers
                                                </label>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="campaign">
                            <img src="{{asset('images/other/campaign.jpg')}}" alt="Campaign">
                        </div> -->
                    </div>
                    <div class="page-content col-12 col-lg-8">
                        <div class="explore-filter d-lg-flex align-items-center d-block">
                            <div class="text-dark font-weight-semibold font-size-md mb-4 mb-lg-0">{{$vendorsinlocationcount}} Results found</div>
                            <div class="form-filter d-flex align-items-center ml-auto">
                                <!-- <div class="form-group row no-gutters align-items-center">
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
                                </div> -->
                                <!-- <div class="format-listing ml-auto">
                                    <a href="explore-sidebar-grid#"><i class="fas fa-th"></i></a>
                                    <a href="#" class="active"><i class="fal fa-bars"></i></a>
                                </div> -->
                            </div>
                        </div>
                        <div class="store-listing-style store-listing-style-02">
                            <div class="mb-6">
                                @foreach($vendorsinlocation as $vendor)
                                <div class="store media align-items-stretch bg-white job-store">
                                    <strong> 
                                        <h4>
                                        {{$vendor->Hospital_name}} in {{$vendor->Hospital_city}}
                                        </h4>
                                        <br>

                                        {{$vendor->Hospital_address}} - {{$vendor->Hospital_city}} - {{$vendor->Hospital_pin_Code}}
                                    
                                        <br>

                                      Features:  {{$vendor->Hospital_features}}

                                        <br> From : {{$vendor->Hospital_start_time}}
                                        To: {{$vendor->Hospital_end_time}}

                                        <br>
                                        @if($vendor->Hospital_status == "1")
                                        <p style="color:red">New</p>   
                                        @else
                                        <p style="color:green">Verified</p>
                                        @endif 
                                        <a href="https://www.{{$vendor->Hospital_website_URl}}" class="btn btn-danger">
                                            Visit their website
                                        </a>
                                    </strong>
                                </div>
                            </div>
                            @endforeach
                            
                    </div>
                </div>
            </div>
            
        </div>