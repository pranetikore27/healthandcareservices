@extends('layouts.dashboard')
@section('content')

<!-- #site-wrapper start -->
<div id="site-wrapper" class="site-wrapper page-shop shop-listing">
        <!-- #page-title start -->
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
                            </svg>s
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