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
                                    <table id="example">
                                        <thead>
                                            <tr>
                                                <th style="width: 11%">Vendor Name</th>
                                                <th style="width: 15%">Category</th>
                                                <th style="width: 15%">Details Status</th>
                                                <th style="width: 13%">Online Verification Status</th>
                                                <th style="width: 10%">Offline Verification Status</th>
                                                <!-- <th style="width:50%">Action</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($vendors as $v)
                                            <tr>
                                                <td> {{$v->name}} 
                                                </td>
                                            
                                                <td>{{$v->Category_name}}
                                                </td>

                                                <td> 
                                                    @if($v->Vendor_Category_Fields == NULL)
                                                    <a class="btn btn-primary" href="{{ route('hivendors.edit',$v->Vendor_id) }}">
                                                        Yet to receive </a>
                                                    @else
                                            
                                                    Form is filled 
                                                    @endif

                                                </td>
                                                <td>
                                                    @if($v->Vendor_online_verification_status == 0)
                                                 Unverified   <!-- <a class="btn btn-info" href="{{ route('hivendors.edit',$v->Vendor_id) }}">Click here to verify</a> -->
                                                    @else 
                                                    Verified
                                                    @endif
                                                </td>
                                                <td>
                                                @if($v->Vendor_offline_verification_status == 0)
                                                Unverified
                                                    <!-- <a class="btn btn-success" href="{{ route('hivendors.edit',$v->Vendor_id) }}">Click here to verify</a> -->
                                                    @else 
                                                    Verified
                                                    @endif
                                                </td>
                                                <!-- <td>Action
                                                </td> -->
                                            </tr>
                                            @endforeach                                            
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