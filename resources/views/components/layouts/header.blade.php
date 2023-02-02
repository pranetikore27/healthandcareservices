<header id="header"
                class="main-header header-sticky header-sticky-smart header-style-01 header-float text-uppercase">
            <div class="header-wrapper sticky-area">
                <div class="container container-1720">
                    <nav class="navbar navbar-expand-xl">
                        <div class="header-mobile d-flex d-xl-none flex-fill justify-content-between align-items-center">
                            <div class="navbar-toggler toggle-icon" data-toggle="collapse"
                                 data-target="#navbar-main-menu">
                                <span></span>
                            </div>
                            <a class="navbar-brand navbar-brand-mobile" href="{{route('home')}}">
                                <img src="./assets/images/brand-logo/spo2-logo.png" alt="TheDir">
                            </a>
                            <a class="mobile-button-search" href="#search-popup"
                               data-gtf-mfp="true"
                               data-mfp-options='{"type":"inline","mainClass":"mfp-move-from-top mfp-align-top search-popup-bg","closeOnBgClick":false,"showCloseBtn":false}'><i
                                    class="far fa-search"></i></a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-main-menu">
                            <a class="navbar-brand d-none d-xl-block mr-auto" href="{{route('home')}}">
                                <img src="./assets/images/brand-logo/spo2-logo.png" alt="TheDir">
                            </a>

                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Search for <span class="caret"><i
                                            class="fas fa-angle-down"></i></span></a>
                                    <ul class="sub-menu x-animated x-fadeInUp">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('home')}}">
                                                Hospitals
                                            </a>
                                            <a class="nav-link" href="{{route('home')}}">
                                                Medicals
                                            </a>
                                            <a class="nav-link" href="{{route('home')}}">
                                                Blood Bank
                                            </a>
                                            <a class="nav-link" href="{{route('home')}}">
                                                Ambulance
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Insurance policy<span class="caret"><i
                                            class="fas fa-angle-down"></i></span></a>
                                    <div class="sub-menu x-menu-mega x-animated x-fadeInUp width-800">
                                        <div class="container">
                                            <div class="row w-100">
                                                <div class="col-lg-4">
                                                    <h5>Health</h5>
                                                    <ul class="mega-menu-col">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Get new</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Exchange</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Renewal</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">More...</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h5>Life care</h5>
                                                    <ul class="mega-menu-col">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Get new</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Exchange</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Renewal</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">More...</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h5>Accident</h5>
                                                    <ul class="mega-menu-col">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Get new</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Exchange</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">Renewal</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#">More...</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Read about us <span class="caret"><i
                                            class="fas fa-angle-down"></i></span></a>
                                    <ul class="sub-menu x-animated x-fadeInUp">
                                        <li class="nav-item">
                                            <a class="nav-link" href="document/introduction#">Why we</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="starter/introduction#">Who we are
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="starter/introduction#">Connect with us
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="header-customize justify-content-end align-items-center d-none d-xl-flex">
                                <div class="header-customize-item">
                                    <!-- <a href="#login-popup" class="link" data-gtf-mfp="true"
                                       data-mfp-options='{"type":"inline"}'> -->
                                       <!-- <a href="{{url('login')}}" class="link" data-gtf-mfp="true" -->
                                       <!-- data-mfp-options='{"type":"inline"}'>  -->
                                       @guest
                                       <a href="{{url('login')}}" class="link">
                                        <svg class="icon icon-user-circle-o">
                                            <use xlink:href="#icon-user-circle-o"></use>
                                        </svg>
                                        Log in</a>
                                        @endguest

                                </div>
                                <div class="header-customize-item button">
                                    <a href="{{url('add-new-listings')}}" class="btn btn-primary btn-icon-right">Add
                                        Listing
                                        <i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

 