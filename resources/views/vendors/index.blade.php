@extends('layouts.dashboard')


@section('content')

<!-- #site-wrapper start -->
<div id="site-wrapper" class="site-wrapper page-shop shop-listing">
        <!-- #header start -->
        <header id="header" class="main-header header-sticky header-sticky-smart header-style-01 text-uppercase">
            <div class="header-wrapper sticky-area">
                <div class="container container-1720">
                    <nav class="navbar navbar-expand-xl">
                        <div class="header-mobile d-flex d-xl-none flex-fill justify-content-between align-items-center">
                            <div class="navbar-toggler toggle-icon" data-toggle="collapse"
                                 data-target="#navbar-main-menu">
                                <span></span>
                            </div>
                            <a class="navbar-brand navbar-brand-mobile" href="index.html">
                                <img src="images/logo.png" alt="TheDir">
                            </a>
                            <a class="mobile-button-search" href="#search-popup"
                               data-gtf-mfp="true"
                               data-mfp-options='{"type":"inline","mainClass":"mfp-move-from-top mfp-align-top search-popup-bg","closeOnBgClick":false,"showCloseBtn":false}'><i
                                    class="far fa-search"></i></a>
                        </div>
                        <div class="collapse navbar-collapse" id="navbar-main-menu">
                            <a class="navbar-brand d-none d-lg-block mr-auto" href="index.html">
                                <img src="images/logo.png" alt="TheDir">
                            </a>

                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Demos <span class="caret"><i
                                            class="fas fa-angle-down"></i></span></a>
                                    <ul class="sub-menu x-animated x-fadeInUp">
                                        <li class="nav-item"><a class="nav-link" href="index.html">main</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="demo/automotive-service/home-automotive-services.html">
                                            automotive service</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="demo/food-and-restaurant/home-food-and-restaurant.html">
                                            food and restaurant</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="demo/health-and-medical/home-health-and-medical.html">
                                            health and medical</a></li>
                                        <li class="nav-item"><a class="nav-link" href="demo/hotel/home-hotels.html">hotel</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="demo/job/home-jobs.html">jobs</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="demo/service-finder/home-services-finder.html">
                                            service finder</a></li>
                                        <li class="nav-item"><a class="nav-link"
                                                                href="demo/shopping/home-shopping.html">
                                            shopping</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Element<span class="caret"><i
                                            class="fas fa-angle-down"></i></span></a>
                                    <div class="sub-menu x-menu-mega x-animated x-fadeInUp width-800">
                                        <div class="container">
                                            <div class="row w-100">
                                                <div class="col-lg-4">
                                                    <h5>Group 01</h5>
                                                    <ul class="mega-menu-col">
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/button.html">Buttons</a>
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/social-icons.html">Socical
                                                            icon</a></li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/client-logo.html">Client
                                                            logo</a></li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/counter.html">Counter</a>
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/cta.html">CTA</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h5>Group 02</h5>
                                                    <ul class="mega-menu-col">
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/heading.html">Heading</a>
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/icon-box.html">Icon
                                                            box</a></li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/image-box.html">Image
                                                            box</a></li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/listing.html">Listing</a>
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/post.html">Post</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h5>Group 03</h5>
                                                    <ul class="mega-menu-col">
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/store.html">Store</a>
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/tab.html">Tab</a>
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/table-listing.html">Table
                                                            listing</a></li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/testimonial.html">Testimonial</a>
                                                        </li>
                                                        <li class="nav-item"><a class="nav-link"
                                                                                href="elements/widget.html">Widget</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pages
                                        <span class="caret"><i
                                                class="fas fa-angle-down"></i></span>
                                    </a>
                                    <ul class="sub-menu x-animated x-fadeInUp">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Shop <span class="caret"><i
                                                    class="fas fa-angle-down"></i></span></a>
                                            <ul class="sub-menu x-animated x-fadeInUp">
                                                <li class="nav-item"><a class="nav-link" href="shop-listing.html">Shop
                                                    listing</a></li>
                                                <li class="nav-item"><a class="nav-link" href="shop-checkout.html">Shop
                                                    checkout</a></li>
                                                <li class="nav-item"><a class="nav-link" href="shop-my-account.html">Shop
                                                    my account</a></li>
                                                <li class="nav-item"><a class="nav-link" href="shop-shopping-cart.html">Shop
                                                    shopping cart</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="shop-single-product.html">Shop single
                                                    product</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Panel <span class="caret"><i
                                                    class="fas fa-angle-down"></i></span></a>
                                            <ul class="sub-menu x-animated x-fadeInUp">
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="panel-dashboard.html">
                                                    dashboard</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="panel-ad-campaigns-active.html">
                                                    ad campaigns active</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="panel-ad-campaigns-start-new.html">
                                                    ad campaign start new</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="panel-invoice-details.html">
                                                    invoice details</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="panel-invoice-listing.html">
                                                    invoice listing</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="panel-my-favourite.html"> my
                                                    favourite</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="panel-my-listing.html"> my
                                                    listing</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="panel-my-profile.html"> my
                                                    profile</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="panel-package.html">
                                                    package</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="panel-review-received.html">
                                                    review received</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="panel-review-submitted.html">
                                                    review submitted</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Other pages <span class="caret"><i
                                                    class="fas fa-angle-down"></i></span></a>
                                            <div class="sub-menu x-menu-mega x-animated x-fadeInUp">
                                                <div class="container">
                                                    <div class="row w-100">
                                                        <div class="col-lg-6">
                                                            <ul class="mega-menu-col">
                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="page-404.html">
                                                                    404</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="page-about.html">
                                                                    about</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="page-coming-soon.html">
                                                                    comming soon</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="page-contact.html">
                                                                    contact</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="page-faqs.html">
                                                                    faqs</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="page-how-it-work.html">
                                                                    how it work</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="page-pricing-plan.html">
                                                                    pricing plan</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <ul class="mega-menu-col">
                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="page-privacy-policy.html">
                                                                    privacy
                                                                    policy</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="page-submit-listing.html">submit
                                                                    listing</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="page-terms-and-condition.html">Term
                                                                    and condition</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="page-typography.html">
                                                                    typography</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="page-common-elements.html">
                                                                    Common elements</a></li>
                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="page-under-construction.html">
                                                                    under
                                                                    construction</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Explore<span class="caret"><i
                                            class="fas fa-angle-down"></i></span></a>
                                    <ul class="sub-menu x-animated x-fadeInUp">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#"> layout
                                                <span class="caret"><i class="fas fa-angle-down"></i></span>
                                            </a>
                                            <ul class="sub-menu x-animated x-fadeInUp">
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="explore-full-map-grid.html"> full
                                                    map grid</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="explore-full-map-list.html"> full
                                                    map list</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="explore-half-map-grid.html"> half
                                                    map grid</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="explore-half-map-list.html"> half
                                                    map list</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="explore-sidebar-grid.html"> sidebar
                                                    grid</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="explore-sidebar-list.html"> sidebar
                                                    list</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Listing details
                                                <span class="caret"><i class="fas fa-angle-down"></i></span>
                                            </a>
                                            <ul class="sub-menu x-animated x-fadeInUp">
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="listing-details-full-gallery.html">
                                                    full gallery</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="listing-details-full-image.html">
                                                    full image</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="listing-details-full-map.html">
                                                    full map</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="listing-details-gallery.html">gallery</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="listing-details-image.html"> image</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="listing-details-no-image.html"> no
                                                    image</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Blog <span class="caret"><i
                                            class="fas fa-angle-down"></i></span></a>
                                    <ul class="sub-menu x-animated x-fadeInUp">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Blog layout<span class="caret"><i
                                                    class="fas fa-angle-down"></i></span></a>
                                            <ul class="sub-menu x-animated x-fadeInUp">
                                                <li class="nav-item"><a class="nav-link" href="blog-listing-grid.html">
                                                    grid</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="blog-listing-large-image.html">
                                                    large image</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="blog-listing-with-sidebar.html">
                                                    with sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Post
                                                <span class="caret"><i class="fas fa-angle-down"></i></span>
                                            </a>
                                            <ul class="sub-menu x-animated x-fadeInUp">
                                                <li class="nav-item"><a class="nav-link" href="blog-single-audio.html">
                                                    audio</a></li>
                                                <li class="nav-item"><a class="nav-link"
                                                                        href="blog-single-gallery.html">
                                                    gallery</a></li>
                                                <li class="nav-item"><a class="nav-link" href="blog-single-image.html">
                                                    image</a></li>
                                                <li class="nav-item"><a class="nav-link" href="blog-single-video.html">video</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Docs <span class="caret"><i
                                            class="fas fa-angle-down"></i></span></a>
                                    <ul class="sub-menu x-animated x-fadeInUp">
                                        <li class="nav-item">
                                            <a class="nav-link" href="document/introduction.html">Documentation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="starter/introduction.html">Get started
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <div class="header-customize justify-content-end align-items-center d-none d-xl-flex">
                                <div class="header-customize-item">
                                    <a href="#login-popup" class="link" data-gtf-mfp="true"
                                       data-mfp-options='{"type":"inline"}'>
                                        <svg class="icon icon-user-circle-o">
                                            <use xlink:href="#icon-user-circle-o"></use>
                                        </svg>
                                        Log in</a>
                                </div>
                                <div class="header-customize-item">
                                    <!-- .header-customize-cart start -->
                                    <div class="header-customize-cart">
                                        <a class="mini-cart-icon d-flex align-items-end link" href="#"
                                           title="Shopping Cart">
                                            <svg class="icon icon-bag-1">
                                                <use xlink:href="#icon-bag-1"></use>
                                            </svg>
                                            <span>(2)</span> </a>

                                        <div class="shopping-cart-popup animated fadeIn">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item bg-transparent px-0 pb-4 d-flex align-items-start">
                                                    <a href="shop-single-product.html"
                                                       class="media align-items-start text-dark text-decoration-none">
                                                        <div class="image mr-3">
                                                            <img src="images/shop/cart-1.jpg"
                                                                 title="Product 01">
                                                        </div>
                                                        <div class="media-body lh-14">
                                                            <span class="d-block font-size-md text-capitalize font-weight-normal">Black Printed T-shirt</span>
                                                            <span class="font-weight-normal">$39.00</span>
                                                        </div>

                                                    </a>
                                                    <a href="#" class="close ml-auto link-hover-darker-light-dark"><i
                                                            class="fal fa-times"></i></a>
                                                </li>
                                                <li class="list-group-item bg-transparent px-0 pt-3 pb-4 d-flex align-items-start">
                                                    <a href="shop-single-product.html"
                                                       class="media align-items-start text-dark text-decoration-none">
                                                        <div class="image mr-3">
                                                            <img src="images/shop/cart-2.jpg" title="Product 02">
                                                        </div>
                                                        <div class="media-body lh-14">
                                                            <span class="d-block font-size-md text-capitalize font-weight-normal">White Retro Sneaker</span>
                                                            <span class="font-weight-normal">$29.00</span>
                                                        </div>
                                                    </a>
                                                    <a href="#" class="close ml-auto link-hover-darker-light-dark"><i
                                                            class="fal fa-times"></i></a>
                                                </li>
                                                <li class="list-group-item bg-transparent px-0 d-flex align-items-center py-5">
                                                    <span class="text-uppercase font-size-md text-dark">Sub total</span>
                                                    <span class="ml-auto text-primary h5 mb-0">$55.00</span>
                                                </li>
                                            </ul>
                                            <div class="mt-6 row mx-n2">
                                                <div class="col-6 px-2">
                                                    <a href="shop-shopping-cart.html"
                                                       class="btn btn-primary btn-icon-right btn-block font-size-base py-2">View
                                                        cart <i class="fal fa-chevron-right"></i></a>
                                                </div>
                                                <div class="col-6 px-2">
                                                    <a href="shop-checkout.html"
                                                       class="btn btn-gray btn-icon-right btn-block text-white font-size-base py-2">Checkout
                                                        <i class="fal fa-chevron-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="header-customize-item button">
                                    <a href="page-submit-listing.html" class="btn btn-primary btn-icon-right">Add
                                        Listing
                                        <i
                                                class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- #header end -->
        <!-- #page-title start -->
        <div id="page-title" class="page-title page-title-style-background">
            <div class="container">
                <div class="h-100 d-flex align-items-center">
                    <div class="heading">
                        <h1 class="mb-0 lh-1 mb-2" data-animate="fadeInDown">
                            <span>Thedir </span>
                            <span class="font-weight-light">Store</span>
                        </h1>
                        <ul class="breadcrumb breadcrumb-style-01 py-0" data-animate="fadeInUp">
                            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Help</a></li>
                            <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Pages</a></li>
                            <li class="breadcrumb-item"><span>Shop</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- #page-title end -->
        <!-- #wrapper-content start -->
        <div id="wrapper-content" class="wrapper-content pt-12">
            <div class="container">
                <div class="page-container row">
                    <div class="col-lg-3 mb-4 mb-lg-0">
                        <div class="sidebar shop-sidebar primary-sidebar sidebar-sticky" id="sidebar">
                            <div class="primary-sidebar-inner">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 pt-0 pb-8">
                                        <div class="card border-0 rounded-0 p-0">
                                            <div class="card-body product-category p-0">
                                                <h5 class="card-title mb-7 lh-1">Product Categories</h5>
                                                <ul class="list-group list-group-flush list-group-borderless mb-0">
                                                    <li class="list-group-item bg-transparent p-0 mb-1"><a href="#"
                                                                                                           class="link-hover-gray-dark">New
                                                        Arrivals</a></li>
                                                    <li class="list-group-item bg-transparent p-0 mb-1"><a href="#"
                                                                                                           class="link-hover-gray-dark">Clothings</a>
                                                    </li>
                                                    <li class="list-group-item bg-transparent p-0 mb-1"><a href="#"
                                                                                                           class="link-hover-gray-dark">Bags</a>
                                                    </li>
                                                    <li class="list-group-item bg-transparent p-0 mb-1"><a href="#"
                                                                                                           class="link-hover-gray-dark">Shoes</a>
                                                    </li>
                                                    <li class="list-group-item bg-transparent p-0"><a href="#"
                                                                                                      class="link-hover-gray-dark">Accessories</a>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-0">
                                        <div class="card border-0 rounded-0 p-0">
                                            <div class="card-body px-0 py-8">
                                                <h5 class="card-title mb-4 lh-1">Color</h5>
                                                <select class="form-control mb-2">
                                                    <option selected>Any color</option>
                                                    <option>Red</option>
                                                    <option>Blue</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-0">
                                        <div class="card border-0 rounded-0 p-0">
                                            <div class="card-body px-0 py-8">
                                                <h5 class="card-title mb-4 lh-1">Size</h5>
                                                <div class="mb-2">
                                                    <select class="form-control">
                                                        <option selected>Any size</option>
                                                        <option>Big</option>
                                                        <option>Small</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-0">
                                        <div class="card border-0 rounded-0 p-0">
                                            <div class="card-body px-0 py-8">
                                                <h5 class="card-title mb-6">Price</h5>
                                                <div class="form-group price-range mb-0">
                                                    <label class="form-label">
                                                    </label>
                                                    <div id="price" data-slider="true"
                                                         data-slider-options='{"min":0,"max":490,"values":[0,490]}'></div>
                                                    <div class="description mt-7 text-center">
                                                        <input type="text" readonly class="amount border-0 text-gray text-center">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item p-0">
                                        <div class="card border-0 rounded-0 p-0 tags">
                                            <div class="card-body px-0 py-8">
                                                <h5 class="card-title mb-7 lh-1">Product Tags</h5>
                                                <a href="#" class="link-hover-secondary-dark">tshirt, </a>
                                                <a href="#" class="link-hover-secondary-dark">sneaker, </a>
                                                <a href="#" class="link-hover-secondary-dark">herschuply, </a>
                                                <a href="#" class="link-hover-secondary-dark">charlie, </a>
                                                <a href="#" class="link-hover-secondary-dark">adidas, </a>
                                                <a href="#" class="link-hover-secondary-dark">zara, </a>
                                                <a href="#" class="link-hover-secondary-dark">mango, </a>
                                                <a href="#" class="link-hover-secondary-dark">jacket, </a>
                                                <br>
                                                <a href="#" class="link-hover-secondary-dark">snapback, </a>
                                                <a href="#" class="link-hover-secondary-dark">cat </a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="page-content">
                            <div class="filter row mb-7">
                                <span class="text-dark font-size-md col-sm-6 mb-2 mb-sm-0">Showing 1–12 of 23 results</span>
                                <div class="form-group col-sm-6 ml-0 ml-sm-auto d-flex align-items-center">
                                    <label for="filter" class="text-gray font-size-md text-nowrap mb-0 mr-2">Sort
                                        By: </label>
                                    <div class="select-custom">
                                        <select id="filter" class="border-0 w-100 pr-0">
                                            <option>Default</option>
                                            <option>Desc</option>
                                            <option>Asc</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="product-items pt-4">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="product card border-0 rounded-0 p-0">
                                            <div class="position-relative h-100">
                                                <a href="shop-single-product.html">
                                                    <img src="images/shop/product-1.jpg" alt="Product 1"
                                                         class="card-img-top">
                                                </a>
                                                <div class="image-content position-absolute">
                                                    <span class="badge badge-primary lh-11">Sale</span>
                                                </div>
                                            </div>
                                            <div class="card-body text-center position-relative">
                                                <a href="shop-single-product.html"
                                                   class="link-hover-secondary-primary font-size-md mb-1">Black Printed
                                                    T-Shirt</a>
                                                <div class="product-meta-wrapper position-relative">
                                                    <div class="product-meta position-absolute">
                                                        <div class="author-rate d-flex justify-content-center">
													<span class="rate-item checked">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>
                                                            <span class="rate-item checked">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>
                                                            <span class="rate-item checked">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>
                                                            <span class="rate-item checked">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>
                                                            <span class="rate-item">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>

                                                        </div>
                                                        <div class="font-size-md">
                                                            <span class="text-danger">$35.00</span>
                                                            <span class="text-dark text-decoration-line-through">$47.50</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-cart position-absolute w-100">
                                                        <a href="#"
                                                           class="link-hover-dark-primary font-weight-semibold text-uppercase">Add
                                                            to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="product card border-0 rounded-0 p-0">
                                            <div class="position-relative h-100">
                                                <a href="shop-single-product.html">
                                                    <img src="images/shop/product-2.jpg" alt="Product 2"
                                                         class="card-img-top">
                                                </a>
                                                <div class="image-content position-absolute">
                                                    <span class="badge badge-success lh-11">New</span>
                                                </div>
                                            </div>
                                            <div class="card-body text-center position-relative">
                                                <a href="shop-single-product.html"
                                                   class="link-hover-secondary-primary font-size-md mb-1">White Retro
                                                    Sneaker</a>
                                                <div class="product-meta-wrapper position-relative">
                                                    <div class="product-meta position-absolute">
                                                        <div class="author-rate d-flex justify-content-center">
													<span class="rate-item checked">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>
                                                            <span class="rate-item checked">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>
                                                            <span class="rate-item checked">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>
                                                            <span class="rate-item checked">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>
                                                            <span class="rate-item">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>

                                                        </div>
                                                        <div class="font-size-md">
                                                            <span class="text-danger">$35.00</span>
                                                            <span class="text-decoration-line-through text-dark">$47.50</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-cart position-absolute w-100">
                                                        <a href="#"
                                                           class="link-hover-dark-primary font-weight-semibold text-uppercase">
                                                            Add to cart</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="product card border-0 rounded-0 p-0">
                                            <div class="position-relative h-100">
                                                <a href="shop-single-product.html">
                                                    <img src="images/shop/product-3.jpg" alt="Product 3"
                                                         class="card-img-top">
                                                </a>
                                            </div>
                                            <div class="card-body text-center position-relative">
                                                <a href="shop-single-product.html"
                                                   class="link-hover-secondary-primary font-size-md mb-1">Herschuply
                                                    Snapback</a>
                                                <div class="product-meta-wrapper position-relative">
                                                    <div class="product-meta position-absolute">
                                                        <div class="author-rate d-flex justify-content-center">
													<span class="rate-item checked">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>
                                                            <span class="rate-item checked">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>
                                                            <span class="rate-item checked">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>
                                                            <span class="rate-item">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>
                                                            <span class="rate-item">
														<svg class="icon icon-ionicons_svg_md-star"><use
                                                                xlink:href="#icon-ionicons_svg_md-star"></use></svg>
													</span>

                                                        </div>
                                                        <div class="font-size-md">
                                                            <span class="text-dark">$25.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-cart position-absolute w-100">
                                                        <a href="#"
                                                           class="link-hover-dark-primary font-weight-semibold text-uppercase">Add
                                                            to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="product card border-0 rounded-0 p-0">
                                            <div class="position-relative h-100">
                                                <a href="shop-single-product.html">
                                                    <img src="images/shop/product-4.jpg" alt="Product 4"
                                                         class="card-img-top">
                                                </a>
                                            </div>
                                            <div class="card-body text-center position-relative">
                                                <a href="shop-single-product.html"
                                                   class="link-hover-secondary-primary font-size-md mb-1">Snake & Flower
                                                    T-Shirt</a>
                                                <div class="product-meta-wrapper position-relative">
                                                    <div class="product-meta position-absolute">
                                                        <div class="font-size-md">
                                                            <span class="text-dark">$32.90</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-cart position-absolute w-100">
                                                        <a href="#"
                                                           class="link-hover-dark-primary font-weight-semibold text-uppercase">Add
                                                            to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="product card border-0 rounded-0 p-0">
                                            <div class="position-relative h-100">
                                                <img src="images/shop/product-5.jpg" alt="Product 5"
                                                     class="card-img-top">
                                            </div>
                                            <div class="card-body text-center position-relative">
                                                <a href="shop-single-product.html"
                                                   class="link-hover-secondary-primary font-size-md mb-1">Dragonfly
                                                    T-Shirt</a>
                                                <div class="product-meta-wrapper position-relative">
                                                    <div class="product-meta position-absolute">
                                                        <div class="font-size-md">
                                                            <span class="text-danger">$27.00</span>
                                                            <span class="text-decoration-line-through text-dark">$32.50</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-cart position-absolute w-100">
                                                        <a href="#"
                                                           class="link-hover-dark-primary font-weight-semibold text-uppercase">Add
                                                            to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="product card border-0 rounded-0 p-0">
                                            <div class="position-relative h-100">
                                                <a href="shop-single-product.html">
                                                    <img src="images/shop/product-6.jpg" alt="Product 6"
                                                         class="card-img-top">
                                                </a>
                                                <div class="image-content position-absolute">
                                                    <span class="badge badge-success lh-11">New</span>
                                                </div>
                                            </div>
                                            <div class="card-body text-center position-relative">
                                                <a href="shop-single-product.html"
                                                   class="link-hover-secondary-primary font-size-md mb-1">Herschuply
                                                    Floral Duffles</a>
                                                <div class="product-meta-wrapper position-relative">
                                                    <div class="product-meta position-absolute">
                                                        <div class="font-size-md">
                                                            <span class="text-dark">$45.70</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-cart position-absolute w-100">
                                                        <a href="#"
                                                           class="link-hover-dark-primary font-weight-semibold text-uppercase">Add
                                                            to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="product card border-0 rounded-0 p-0">
                                            <div class="position-relative h-100">
                                                <a href="shop-single-product.html">
                                                    <img src="images/shop/product-7.jpg" alt="Product 7"
                                                         class="card-img-top">
                                                </a>
                                                <div class="image-content position-absolute">
                                                    <span class="badge badge-secondary lh-11">Out Of Stock</span>
                                                </div>
                                            </div>
                                            <div class="card-body text-center position-relative">
                                                <a href="shop-single-product.html"
                                                   class="link-hover-secondary-primary font-size-md mb-1">Basic Leather
                                                    Shoes</a>
                                                <div class="product-meta-wrapper position-relative">
                                                    <div class="product-meta position-absolute">
                                                        <div class="font-size-md">
                                                            <span class="text-dark">$59.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-cart position-absolute w-100">
                                                        <a href="#"
                                                           class="link-hover-dark-primary font-weight-semibold text-uppercase">Add
                                                            to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="product card border-0 rounded-0 p-0">
                                            <div class="position-relative h-100">
                                                <a href="shop-single-product.html">
                                                    <img src="images/shop/product-8.jpg" alt="Product 8"
                                                         class="card-img-top">
                                                </a>
                                            </div>
                                            <div class="card-body text-center position-relative">
                                                <a href="shop-single-product.html"
                                                   class="link-hover-secondary-primary font-size-md mb-1">Herschuply
                                                    Floral Backpack</a>
                                                <div class="product-meta-wrapper position-relative">
                                                    <div class="product-meta position-absolute">
                                                        <div class="font-size-md">
                                                            <span class="text-dark">$45.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-cart position-absolute w-100">
                                                        <a href="#"
                                                           class="link-hover-dark-primary font-weight-semibold text-uppercase">Add
                                                            to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 mb-5">
                                        <div class="product card border-0 rounded-0 p-0">
                                            <div class="position-relative h-100">
                                                <a href="shop-single-product.html">
                                                    <img src="images/shop/product-9.jpg" alt="Product 9">
                                                </a>
                                            </div>
                                            <div class="card-body text-center position-relative">
                                                <a href="shop-single-product.html"
                                                   class="link-hover-secondary-primary font-size-md mb-1">Basic Red
                                                    Shoes</a>
                                                <div class="product-meta-wrapper position-relative">
                                                    <div class="product-meta position-absolute">
                                                        <div class="font-size-md">
                                                            <span class="text-dark">$35.00</span>
                                                        </div>
                                                    </div>
                                                    <div class="add-to-cart position-absolute w-100">
                                                        <a href="#"
                                                           class="link-hover-dark-primary font-weight-semibold text-uppercase">Add
                                                            to
                                                            cart</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="pagination pagination-style-01 justify-content-center mt-6">
                                <li class="page-item"><a href="#"
                                                         class="page-link bg-transparent link-hover-dark-primary px-3">1</a>
                                </li>
                                <li class="page-item"><a href="#"
                                                         class="page-link bg-transparent link-hover-dark-primary px-3">2</a>
                                </li>
                                <li class="page-item"><a href="#"
                                                         class="page-link bg-transparent link-hover-dark-primary px-3"><i
                                        class="fal fa-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #wrapper-content end -->
        <!-- #footer start -->
        <footer class="main-footer main-footer-style-01 bg-pattern-01 pt-12 pb-8">
            <div class="footer-second">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4 mb-6 mb-lg-0">
                            <div class="mb-8"><img src="images/logo.png" alt="Thedir"></div>
                            <div class="mb-7">
                                <div class="font-size-md font-weight-semibold text-dark mb-4">Global Headquaters</div>
                                <p class="mb-0">
                                    90 Fifth Avenue, 3rd Floor<br>
                                    New York NY 10011<br>
                                    212.913.9058</p>
                            </div>
                            <div class="region pt-1">
                                <div class="font-size-md font-weight-semibold text-dark mb-2">Recent Region</div>
                                <form>
                                   <div class="select-custom bg-white">
                                        <select class="form-control bg-transparent">
                                            <option value="1">San Fracisco, CA</option>
                                            <option value="1">New York</option>
                                            <option value="1">LA</option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg mb-6 mb-lg-0">
                            <div class="font-size-md font-weight-semibold text-dark mb-4">
                                Company
                            </div>
                            <ul class="list-group list-group-flush list-group-borderless">
                                <li class="list-group-item px-0 lh-1625 bg-transparent py-1">
                                    <a href="page-about.html" class="link-hover-secondary-primary">About Us</a>
                                </li>
                                <li class="list-group-item px-0 lh-1625 bg-transparent py-1">
                                    <a href="#" class="link-hover-secondary-primary">Team</a>
                                </li>
                                <li class="list-group-item px-0 lh-1625 bg-transparent py-1">
                                    <a href="#" class="link-hover-secondary-primary">Careers</a>
                                </li>
                                <li class="list-group-item px-0 lh-1625 bg-transparent py-1">
                                    <a href="#" class="link-hover-secondary-primary">Investors</a>
                                </li>
                                <li class="list-group-item px-0 lh-1625 bg-transparent py-1">
                                    <a href="page-contact.html" class="link-hover-secondary-primary">Contact Us</a>
                                </li>
                                <li class="list-group-item px-0 lh-1625 bg-transparent py-1">
                                    <a href="#" class="link-hover-secondary-primary">Offices</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg mb-6 mb-lg-0">
                            <div class="font-size-md font-weight-semibold text-dark mb-4">
                                Quick Links
                            </div>
                            <ul class="list-group list-group-flush list-group-borderless">
                                <li class="list-group-item px-0 lh-1625 bg-transparent py-1">
                                    <a href="page-faqs.html" class="link-hover-secondary-primary">FAQS</a>
                                </li>
                                <li class="list-group-item px-0 lh-1625 bg-transparent py-1">
                                    <a href="#" class="link-hover-secondary-primary">Support</a>
                                </li>
                                <li class="list-group-item px-0 lh-1625 bg-transparent py-1">
                                    <a href="#" class="link-hover-secondary-primary">Sitemap</a>
                                </li>
                                <li class="list-group-item px-0 lh-1625 bg-transparent py-1">
                                    <a href="#" class="link-hover-secondary-primary">Community</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-lg-4 mb-6 mb-lg-0">
                            <div class="pl-0 pl-lg-9">
                                <div class="font-size-md font-weight-semibold text-dark mb-4">Our Newsletter</div>
                                <div class="mb-4">Subscribe to our newsletter and<br>
                                    we will inform you about newset directory and promotions
                                </div>
                                <div class="form-newsletter">
                                    <form>
                                        <div class="input-group bg-white">
                                            <input type="text"
                                                   class="form-control border-0"
                                                   placeholder="Email Address... ">
                                            <button type="button"
                                                    class="input-group-append btn btn-white bg-transparent text-dark border-0">
                                                <i class="fas fa-arrow-right"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-last mt-8 mt-md-11">
                <div class="container">
                    <div class="footer-last-container position-relative">
                        <div class="row align-items-center">
                            <div class="col-lg-4 mb-3 mb-lg-0">
                                <div class="social-icon text-dark">
                                    <ul class="list-inline">
                                        <li class="list-inline-item mr-5">
                                            <a target="_blank" title="Twitter" href="#">
                                                <i class="fab fa-twitter">
                                                </i>
                                                <span>Twitter</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mr-5">
                                            <a target="_blank" title="Facebook" href="#">
                                                <i class="fab fa-facebook-f">
                                                </i>
                                                <span>Facebook</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mr-5">
                                            <a target="_blank" title="Google plus" href="#">
                                                <svg class="icon icon-google-plus-symbol">
                                                    <use xlink:href="#icon-google-plus-symbol"></use>
                                                </svg>
                                                <span>Google plus</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mr-5">
                                            <a target="_blank" title="Instagram" href="#">
                                                <svg class="icon icon-instagram">
                                                    <use xlink:href="#icon-instagram"></use>
                                                </svg>
                                                <span>Instagram</span>
                                            </a>
                                        </li>
                                        <li class="list-inline-item mr-5">
                                            <a target="_blank" title="Rss" href="#">
                                                <i class="fas fa-rss"></i>
                                                <span>Rss</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5 mb-3 mb-lg-0">
                                <div>
                                    &copy; 2020 <a href="index.html"
                                                   class="link-hover-dark-primary font-weight-semibold">The Dir.</a> All
                                    Rights Resevered. Design
                                    by <a href="http://g5plus.net/"
                                          class="link-hover-dark-primary font-weight-semibold">G5Theme</a>
                                </div>
                            </div>
                            <div class="back-top text-left text-lg-right">
                                <a href="#" class="gtf-back-to-top link-hover-secondary-primary"><i
                                        class="fal fa-arrow-up"></i><span>Back To Top</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- #footer end -->
    </div>
    <!-- #site-wrapper end-->
    <div id="login-popup" class="mfp-hide">
        <div class="form-login-register">
            <div class="tabs mb-8">
                <ul class="nav nav-pills tab-style-01 text-capitalize justify-content-center"
                    role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="login-tab" data-toggle="tab"
                           href="#login"
                           role="tab"
                           aria-controls="login" aria-selected="true"><h3>Log In</h3></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register"
                           role="tab"
                           aria-controls="register" aria-selected="false"><h3>Register</h3></a>
                    </li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="login" role="tabpanel"
                     aria-labelledby="login-tab">
                    <div class="form-login">
                        <form>
                            <div class="font-size-md text-dark mb-5">Log In Your Account</div>
                            <div class="form-group mb-2">
                                <label for="username" class="sr-only">Username</label>
                                <input id="username" type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group mb-3">
                                <div class="input-group flex-nowrap align-items-center">
                                    <label for="password" class="sr-only">Password</label>
                                    <input id="password" type="text" class="form-control" placeholder="Password">
                                    <a href="#" class="input-group-append text-decoration-none">Forgot?</a>
                                </div>
                            </div>
                            <div class="form-group mb-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check">
                                    <label class="custom-control-label text-dark" for="check">Remember</label>
                                </div>
                            </div>
                            <button type="submit"
                                    class="btn btn-primary btn-block font-weight-bold text-uppercase font-size-lg rounded-sm mb-8">
                                Log In
                            </button>
                        </form>
                        <div class="font-size-md text-dark mb-5">Or Log In With</div>
                        <div class="social-icon origin-color si-square">
                            <ul class="row no-gutters list-inline text-center">
                                <li class="list-inline-item si-facebook col-3">
                                    <a target="_blank" title="Facebook" href="#">
                                        <i class="fab fa-facebook-f">
                                        </i>
                                        <span>Facebook</span>
                                    </a>
                                </li>
                                <li class="list-inline-item si-twitter col-3">
                                    <a target="_blank" title="Twitter" href="#">
                                        <i class="fab fa-twitter">
                                        </i>
                                        <span>Twitter</span>
                                    </a>
                                </li>
                                <li class="list-inline-item si-google col-3">
                                    <a target="_blank" title="Google plus" href="#">
                                        <svg class="icon icon-google-plus-symbol">
                                            <use xlink:href="#icon-google-plus-symbol"></use>
                                        </svg>
                                        <span>Google plus</span>
                                    </a>
                                </li>
                                <li class="list-inline-item si-rss col-3">
                                    <a target="_blank" title="RSS" href="#">
                                        <i class="fas fa-rss"></i>
                                        <span>RSS</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </div>
                <div class="tab-pane fade " id="register" role="tabpanel"
                     aria-labelledby="register-tab">
                    <div class="form-register">
                        <form>
                            <div class="font-size-md text-dark mb-5">Create Your Account</div>
                            <div class="form-group mb-2">
                                <label for="username-rt" class="sr-only">Username</label>
                                <input id="username-rt" type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group mb-2">
                                <label for="email" class="sr-only">Email</label>
                                <input id="email" type="text" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group mb-2">
                                <label for="password-rt" class="sr-only">Username</label>
                                <input id="password-rt" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group mb-3">
                                <label for="r-password" class="sr-only">Username</label>
                                <input id="r-password" type="password" class="form-control"
                                       placeholder="Retype password">
                            </div>

                            <div class="form-group mb-8">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="check-term">
                                    <label class="custom-control-label text-dark" for="check-term">You agree with our
                                        Terms Privacy Policy and</label>
                                </div>
                            </div>
                            <button type="submit"
                                    class="btn btn-primary btn-block font-weight-bold text-uppercase font-size-lg rounded-sm">
                                Create an
                                account
                            </button>
                        </form>
                    </div>

                </div>
            </div>
            <form>

            </form>
        </div>
    </div>
    <div id="search-popup" class="mfp-hide">
        <div class="search-popup text-center">
            <h2 class="mb-8">Search</h2>
            <div class="form-search">
                <form>
                    <div class="row align-items-end">
                        <div class="form-search-item col-md-7 mb-4 mb-md-0 text-left bg-white">
                            <label for="key-word-02" class="pt-4 mb-0 text-dark font-weight-semibold font-size-lg lh-1">What</label>
                            <div class="input-group dropdown show pr-0 bg-transparent align-items-start">
                                <input type="text" autocomplete="off" id="key-word-02"
                                       class="form-control bg-transparent border-0 p-0 font-size-md lh-1"
                                       data-toggle="dropdown"
                                       aria-haspopup="true"
                                       placeholder="Ex: food, service, barber, hotel">
                                <button type="submit"
                                        class="btn text-dark btn-link input-group-append font-weight-normal p-0">
                                    <i class="fal fa-search"></i>
                                </button>
                                <ul class="dropdown-menu form-search-ajax" aria-labelledby="key-word-02">
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-pizza">
                                                <use xlink:href="#icon-pizza"></use>
                                            </svg>
                                            <span class="font-size-md">Foods & Restaurants</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-bed">
                                                <use xlink:href="#icon-bed"></use>
                                            </svg>
                                            <span class="font-size-md">Hotels & Resorts</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-pharmaceutical">
                                                <use xlink:href="#icon-pharmaceutical"></use>
                                            </svg>
                                            <span class="font-size-md">Healths & Medicals</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-cog">
                                                <use xlink:href="#icon-cog"></use>
                                            </svg>
                                            <span class="font-size-md">Services</span>
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            <svg class="icon icon-car">
                                                <use xlink:href="#icon-car"></use>
                                            </svg>
                                            <span class="font-size-md">Automotive</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="form-search-item col-md-5 mb-4 mb-md-0 text-left bg-white">
                            <label for="region-02" class="pt-4 mb-0 text-dark font-weight-semibold font-size-lg lh-1">Where</label>
                            <div class="input-group dropdown show pr-0 bg-transparent align-items-start">
                                <input type="text" autocomplete="off" id="region-02"
                                       class="form-control bg-transparent border-0 p-0 font-size-md lh-1"
                                       data-toggle="dropdown"
                                       aria-haspopup="true" placeholder="San Francisco">
                                <a href="#" class="input-group-append text-decoration-none" data-toggle="dropdown">
                                                <i class="fal fa-chevron-down"></i>
                                            </a>
                                <ul class="dropdown-menu form-search-ajax" aria-labelledby="region-02">
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Austin
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Boston
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Chicago
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Denver
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Los Angeles
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            New York
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            San Francisco
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Seattle
                                        </a>
                                    </li>
                                    <li class="dropdown-item item">
                                        <a href="#" class="link-hover-dark-white">
                                            Washington
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
            <div class="heading mb-4">
                <div class="pt-8 font-size-lg mb-5">
                    Or browse the highlights
                </div>
            </div>
            <div class="list-inline flex-wrap my-n2">
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html"
                       class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-pizza">
                                <use xlink:href="#icon-pizza"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
											Foods
										</span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html"
                       class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-bed">
                                <use xlink:href="#icon-bed"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block ">
											Hotels
										</span>
                        </div>

                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html"
                       class="card icon-box-style-01 link-hover-dark-white">
                        <div class="card-body p-0">
                            <svg class="icon icon-brush2">
                                <use xlink:href="#icon-brush2"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
											Jobs
										</span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html"
                       class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-pharmaceutical">
                                <use xlink:href="#icon-pharmaceutical"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
											Medicals
										</span>
                        </div>
                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html"
                       class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-cog">
                                <use xlink:href="#icon-cog"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
											Services
										</span>
                        </div>

                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html"
                       class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-bag">
                                <use xlink:href="#icon-bag"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
											Shopping
										</span>
                        </div>

                    </a>
                </div>
                <div class="list-inline-item py-2">
                    <a href="explore-sidebar-grid.html"
                       class="card link-hover-dark-white icon-box-style-01">
                        <div class="card-body p-0">
                            <svg class="icon icon-car">
                                <use xlink:href="#icon-car"></use>
                            </svg>
                            <span class="card-text font-size-md font-weight-semibold mt-2 d-block">
											Automotive
										</span>
                        </div>
                    </a>
                </div>
            </div>
            <a href="#"
               class="d-inline-block button-close mt-11 pt-1 text-dark font-size-lg font-weight-semibold text-decoration-none">
                <span class="d-block"><i class="fal fa-times"></i></span>
                <span class="d-block">Close</span>
            </a>
        </div>
    </div>

    
@endsection