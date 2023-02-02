@extends('layouts.dashboard')
@section('content')
                    <div class="container-fluid">
                        <div class="page-content-wrapper d-flex flex-column justify-content-center">
                            <div class="features card-deck">
                                    <div class="card rounded-0 border-0 bg-transparent mb-6">
                                        <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                                            
                                            <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 text-primary lh-1">{{$VendorsCount}}</span>
                                            <a href="{{route('hivendors')}}">

                                            <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Vendors <br> 
</a>
                                            <!-- Listings -->
                                        </span>
                                        </div>
                                    </div>
                                <div class="card rounded-0 border-0 bg-transparent mb-6">
                                    <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                                        <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 text-darker-light lh-1">{{$Verifications}}</span>
                                        <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Pending Vendor<br> Verifications</span>
                                    </div>
                                </div>
                                <div class="card rounded-0 border-0 bg-transparent mb-6">
                                    <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                                        <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 lh-1 published">{{$ComplaintsCount}}</span>
                                        <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">New Complaints<br> 
                                        <!-- Listings -->
                                    </span>
                                    </div>
                                </div>

                                <div class="card rounded-0 border-0 bg-transparent mb-6">
                                    <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                                        <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 lh-1 published">{{$ComplaintsUnderReviewCount}}</span>
                                        <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Unresolved Complaints<br> 

                                        <!-- Listings -->
                                    </span>
                                    </div>
                                </div>

                                <div class="card rounded-0 border-0 bg-transparent mb-6">
                                    <div class="card-body d-flex align-items-center py-6 px-8 bg-white">
                                        <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 lh-1 experied">2</span>
                                        <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Experied<br> Listings</span>
                                    </div>
                                </div>
                                <div class="card rounded-0 border-0 bg-transparent mb-6">
                                    <div class="card-body d-flex align-items-center p-6 bg-white">
                                        <span class="font-size-h1 font-weight-semibold d-inline-block mr-2 lh-1 active">1</span>
                                        <span class="font-size-md font-weight-semibold text-uppercase text-dark lh-13">Active campaign <br> Listings</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex two-column mb-13 mx-n3">
                                <div class="page-left mb-6 px-3">
                                    <div class="alert alert-success mb-6 alert-dismissible fade show d-flex align-items-center pr-3">
                                        <div class="font-size-lg py-0 mr-6">
                                            Your notification from <a
                                                href="listing-details-full-image#"
                                                class="font-weight-semibold link-hover-dark-primary">Admin</a>
                                            will flash here!
                                        </div>
                                        <div class="ml-auto">
                                            <a href="#" class="alert-button py-0 font-size-h3 lh-1" data-dismiss="alert"
                                               aria-label="Close"><i class="fal fa-times"></i></a>
                                        </div>
                                    </div>
                                    <div class="facts-box mb-6 row">
                                        <div class="col-lg-4 mb-6 mb-xl-0">
                                            <div class="card view rounded-0 border-0 text-white">
                                                <div class="card-body d-flex align-items-center p-0">
                                                    <div class="content mr-auto">
                                                        <span class="font-size-h1 font-weight-semibold lh-1 d-block">{{$ComplaintsCount}}</span>
                                                        <span class="font-size-lg">Complaints</span>

                                                    </div>
                                                    <div class="fact-icon">
                                                        <svg class="icon icon-eye">
                                                            <use xlink:href="#icon-eye"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-6 mb-xl-0">
                                            <div class="card review rounded-0 border-0 text-white">
                                                <div class="card-body d-flex align-items-center p-0">
                                                    <div class="content mr-auto">
                                                        <span class="font-size-h1 font-weight-semibold lh-1 d-block">{{$ReviewCount}}</span>
                                                        <span class="font-size-lg">Total Reviews</span>
                                                    </div>
                                                    <div class="fact-icon">
                                                        <i class="fal fa-star"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card time-bookmark rounded-0 border-0 text-white">
                                                <div class="card-body d-flex align-items-center p-0">
                                                    <div class="content mr-auto">
                                                            <span class="font-size-h1 font-weight-semibold lh-1 d-block">{{$TotalAmount}}</span>
                                                            <span class="font-size-lg">Amount Received</span>
                                                    </div>
                                                    <div class="fact-icon">
                                                        <i class="fal fa-bookmark"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row tables">
                                        <div class="col-xl-6 mb-6 mb-xl-0">
                                            <!-- <div class="card rounded-0 border-0 reccent-activities">
                                                <div class="card-body"> -->
                                                    <!-- <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
                                                        Recent
                                                        Activities</h5> -->
                                                    <div class="table-responsive">
                                                        <!-- <table>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="icon-box no-shape icon-box-style-03 d-flex">
																	<span class="icon-box-icon">
																		<svg class="icon icon-layers"><use
                                                                                xlink:href="#icon-layers"></use></svg>
																	</span>
                                                                            <div class="content-box">Your listing <a
                                                                                    href="listing-details-full-image#"
                                                                                    class="font-weight-semibold link-hover-dark-primary">Hotel
                                                                                Govendor</a>
                                                                                has
                                                                                been approved!
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>8 Hours ago</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="icon-box no-shape icon-box-style-03 d-flex">
																	<span class="icon-box-icon">
																		<i class="fal fa-bookmark"></i>
																	</span>
                                                                            <div class="content-box"><a href="#"
                                                                                                        class="font-weight-semibold link-hover-dark-primary">David
                                                                                Eggsy</a>
                                                                                bookmarked your <a
                                                                                        href="listing-details-full-image#"
                                                                                        class="font-weight-semibold link-hover-dark-primary">Thai
                                                                                    Taste’s Restaurant</a>
                                                                                listing!
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>15 Hours ago</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="icon-box no-shape icon-box-style-03 d-flex">
																	<span class="icon-box-icon">
																		<i class="fal fa-star"></i>
																	</span>
                                                                            <div class="content-box"><a href="#"
                                                                                                        class="font-weight-semibold link-hover-dark-primary">Kathy
                                                                                Brown</a>
                                                                                left a review <a
                                                                                        href="panel-review-submitted#"
                                                                                        class="font-weight-semibold link-hover-dark-primary">5
                                                                                    Star</a>
                                                                                on
                                                                                <a href="listing-details-full-image#"
                                                                                   class="font-weight-semibold link-hover-dark-primary">Roman
                                                                                    Kraft Hotel</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>1 days ago</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="icon-box no-shape icon-box-style-03 d-flex">
																	<span class="icon-box-icon">
																		<svg class="icon icon-layers"><use
                                                                                xlink:href="#icon-layers"></use></svg>
																	</span>
                                                                            <div class="content-box">Your listing <a
                                                                                    href="listing-details-full-image#"
                                                                                    class="font-weight-semibold link-hover-dark-primary">Hotel
                                                                                Govendor</a>
                                                                                has
                                                                                been approved!
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>8 Hours ago</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="icon-box no-shape icon-box-style-03 d-flex">
																	<span class="icon-box-icon">
																		<i class="fal fa-bookmark"></i>
																	</span>
                                                                            <div class="content-box"><a href="#"
                                                                                                        class="font-weight-semibold link-hover-dark-primary">David
                                                                                Eggsy</a>
                                                                                bookmarked your <a
                                                                                        href="listing-details-full-image#"
                                                                                        class="font-weight-semibold link-hover-dark-primary">Thai
                                                                                    Taste’s Restaurant</a>
                                                                                listing!
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>15 Hours ago</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <div class="icon-box no-shape icon-box-style-03 d-flex">
																	<span class="icon-box-icon">
																		<i class="fal fa-star"></i>
																	</span>
                                                                            <div class="content-box"><a href="#"
                                                                                                        class="font-weight-semibold link-hover-dark-primary">Kathy
                                                                                Brown</a>
                                                                                left a review <a
                                                                                        href="panel-review-submitted#"
                                                                                        class="font-weight-semibold link-hover-dark-primary">5
                                                                                    Star</a>
                                                                                on
                                                                                <a href="listing-details-full-image#"
                                                                                   class="font-weight-semibold link-hover-dark-primary">
                                                                                    Roman Kraft Hotel</a>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>1 days ago</td>
                                                                </tr>
                                                            </tbody>
                                                        </table> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-xl-6">
                                            <div class="card rounded-0 border-0 invoices">
                                                <div class="card-body">
                                                    <h5 class="card-title text-capitalize border-bottom pb-2 mb-2">
                                                        Invoices</h5>
                                                    <div class="table-responsive-sm">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Date</th>
                                                                    <th>Plan</th>
                                                                    <th>Amount</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <a href="panel-invoice-details#"
                                                                           class="link-hover-dark-blue">INV-00001</a>
                                                                    </td>
                                                                    <td>22/10/2017</td>
                                                                    <td>Basic</td>
                                                                    <td>$264.00</td>
                                                                    <td><span class="status paid">Paid</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="panel-invoice-details#"
                                                                           class="link-hover-dark-blue">INV-00002</a>

                                                                    </td>
                                                                    <td>15/16/2016</td>
                                                                    <td>Premium</td>
                                                                    <td>$528.00</td>
                                                                    <td><span class="status overdue">Overdue</span></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <a href="panel-invoice-details#"
                                                                           class="link-hover-dark-blue">INV-00003</a>
                                                                    </td>
                                                                    <td>18/10/2017</td>
                                                                    <td>Ultimate</td>
                                                                    <td>$1,528.00</td>
                                                                    <td><span class="status pending">Pending</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div> -->
                                <div class="page-right px-3">
                                    <div class="card rounded-0 border-0 contact py-6 px-3">
                                        <div class="card-body text-center p-0">
                                            <div class="contact-icon text-dark mb-3">
                                                <svg class="icon icon-headset">
                                                    <use xlink:href="#icon-headset"></use>
                                                </svg>
                                            </div>
                                            <div class="text-dark font-size-md mb-5">
                                                <p class="mb-2">Have any problem and<br> need support? Call Us directly
                                                </p>
                                                <p class="font-weight-semibold h5 mb-2">(+91) 877-989-0755</p>
                                            </div>
                                            <a href="#" class="btn btn-primary font-size-md px-8 lh-15">Contact Us</a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="copy-right mt-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>        

@endsection