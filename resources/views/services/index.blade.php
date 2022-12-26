@extends('layouts.dashboard')


@section('content') 
<div class="page-container">
                    <div class="container-fluid">
                        <div class="page-content-wrapper d-flex flex-column">
                            <a href="{{url('services/create')}}">
                            <h1 class="font-size-h4 mb-4 font-weight-normal">Add new service</h1>
                            </a>
                            <div class="page-content">
                                <div class="tabs">
                                    <ul class="nav nav-pills tab-style-01 font-size-lg" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all"
                                               role="tab"
                                               aria-controls="all" aria-selected="true">All Listings ({{$services->count()}}) </a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a class="nav-link" id="active-tab" data-toggle="tab" href="#active"
                                               role="tab"
                                               aria-controls="active" aria-selected="false">Active Listings ({{$services->count()}}) </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pending-tab" data-toggle="tab" href="#pending"
                                               role="tab" aria-controls="pending" aria-selected="false"> Pending
                                                Listings
                                                ({{$services->count()}}) </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="expires-tab" data-toggle="tab" href="#expires"
                                               role="tab" aria-controls="expires" aria-selected="false"> Expires
                                                Listings
                                                ({{$services->count()}}) </a>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="tab-content">
                                @foreach($services as $service)
                                    <!-- <div class="tab-pane fade" id="active" role="tabpanel" aria-labelledby="active-tab"> -->
                                    
                                    <!-- @if($service->Service_isactive == 0)
                                    <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                                    pending approval
                                    
                                    @elseif($service->Service_isactive == 2)
                                    <div class="tab-pane fade" id="expires" role="tabpanel" aria-labelledby="expires-tab">
                                        expired

                                    @elseif($service->Service_isactive == 3)
                                    <div class="tab-pane fade show active" id="all" role="tabpanel"
                                         aria-labelledby="all-tab">
                                    @endif -->
                                        <div class="store-listing-style-04">
                                            <div class="store-listing-item">
                                                <div class="d-flex align-items-center flex-wrap flex-lg-nowrap border-bottom py-4 py-lg-0">
                                                    <div class="store media align-items-stretch py-4">
                                                        <a href="listing-details-full-image.html" class="store-image">
                                                            <img src="images/shop/favourite-01.jpg" alt="Favourite 1">
                                                        </a>
                                                        <div class="media-body px-0 pt-4 pt-md-0">
                                                            <a href="{{ route('offer-services.show',$service->Service_id) }}"
                                                               class="font-size-lg font-weight-semibold text-dark d-inline-block mb-2 lh-1"><span
                                                                    class="letter-spacing-25">{{$service->Service_name}}</span>
                                                            </a>
                                                            <ul class="list-inline store-meta mb-3 font-size-sm d-flex align-items-center flex-wrap">
                                                                <li class="list-inline-item"><span
                                                                        class="badge badge-success d-inline-block mr-1">5.0</span><span
                                                                        class="number">4 rating</span>
                                                                </li>
                                                                <li class="list-inline-item separate"></li>
                                                                <li class="list-inline-item"><span
                                                                        class="mr-1">From</span><span
                                                                        class="text-danger font-weight-semibold">{{$service->Service_charge}} INR</span>
                                                                </li>
                                                                <li class="list-inline-item separate"></li>
                                                                <li class="list-inline-item"><a href="#"
                                                                                                class="link-hover-secondary-primary">
                                                                    <svg class="icon icon-cog">
                                                                        <use xlink:href="#icon-cog"></use>
                                                                    </svg>
                                                                    <span>Service</span>
                                                                </a></li>
                                                            </ul>
                                                            <div class="border-top pt-2 d-flex">
															<span
                                                                    class="d-inline-block mr-1"><i
                                                                    class="fal fa-map-marker-alt">
															</i>
																</span>
                                                                <a href="#"
                                                                   class="text-secondary text-decoration-none">Valid until {{$service->Service_validity}}</a>
                                                                <div class="ml-0 ml-sm-auto">
                                                                    <span class="label">Status:</span>
                                                                    @if($service->Service_isactive == 1)
                                                                    <span class="status active">Active</span>
                                                                    @else
                                                                    <span class="status inactive">Inactive</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="action ml-0 ml-lg-auto mt-3 mt-lg-0 align-items-center flex-wrap flex-sm-nowrap w-100 w-lg-auto">
                                                        <a href="page-submit-listing.html"
                                                           class="btn btn-light btn-icon-left mb-2 mb-sm-0 font-size-md">
                                                            <i class="fal fa-edit"></i>
                                                            Edit
                                                        </a>
                                                        <a href="#"
                                                           class="btn btn-primary btn-icon-left mb-2 mb-sm-0 px-5 font-size-md">
                                                            <i class="fal fa-trash-alt"></i>
                                                            Delete
                                                        </a>
                                                    </div> -->
                                                </div>
                                            </div>
                                            
                                    </div>
                                

                                </div>
                                @endforeach

                            </div>
                            <div class="mt-5">
                                &copy; 2020 Thedir. All Rights Reserved.
                            </div>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
            @endsection