@extends('layouts.dashboard')
@section('content')

        <!-- #wrapper-content start -->
        <div id="wrapper-content" class="wrapper-content pt-0 pb-0">
            <div class="page-wrapper d-flex flex-wrap flex-xl-nowrap">
                <div class="page-container">
                    <div class="container-fluid h-100">
                        <div class="page-content-wrapper d-flex flex-column h-100">
                            <a href="{{route('hivendors.create')}}">
                                <h1 class="font-size-h4 mb-4 font-weight-normal">
                                    Register a Vendor
                                </h1>
                            </a>
                            <div class="page-content">
                                <div class="font-size-lg text-dark font-weight-semibold border-bottom mb-3 pb-2 lh-1">
                                    Vendors Listings
                                </div>
                                <div class="table-responsive-md">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 11%">Owner name</th>
                                                <th style="width: 15%">Business name</th>
                                                <!-- <th style="width: 13%">Address</th> -->
                                                <th style="width: 10%">Plan</th>
                                                <th style="width: 10%">Amount</th>
                                                <th style="width: 20%">Verification Status</th>
                                                <th>Account Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($vendors as $v)
                                            <tr>
                                                <td>
                                                    <a href="{{route('hivendors.show', $v->id)}}" class="link-hover-dark-blue">
                                                        {{$v->name}}
                                                    </a>
                                                </td>
                                                <td>{{$v->Vendor_businessname}}</td>
                                                <td>{{$v->Vendor_businessaddress}}</td>
                                                <td>Basic</td>
                                                <td>$264.00</td>
                                                <td><span class="status paid">Paid</span></td>
                                            </tr>
                                            @endforeach
                                            <tr>
                                                <td><a href="panel-invoice-details.html" class="link-hover-dark-blue">INV-00002</a>
                                                </td>
                                                <td>15/16/2016</td>
                                                <td>Doris R.</td>
                                                <td>Premium</td>
                                                <td>$528.00</td>
                                                <td><span class="status overdue">Overdue</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="panel-invoice-details.html" class="link-hover-dark-blue">INV-00003</a>
                                                </td>
                                                <td>18/10/2017</td>
                                                <td>Andrew D.</td>
                                                <td>Ultimate</td>
                                                <td>$1,528.00</td>
                                                <td><span class="status pending">Pending</span></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <div class="mt-auto pt-6">
                                &copy; 2020 Thedir. All Rights Reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection