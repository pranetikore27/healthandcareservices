@extends('layouts.appwithoutnav')

@section('content')
<style>
    .center {
  text-align: center;
}
    .card:hover {
        background-color: #ff5a5f ; 
        color: white; 

    }
    .card {
  border: 0;
  border-radius: 0;
  padding: 3em 0;
  background-color: white;
  color: #000;
}
</style>
<h1>
    I am a 
</h1>
<div class="row">
    <div class="card col-md-6">
    <a href= "{{url('profile/vendor')}}">

            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">            
                   <img class="card-img-top" src="{{asset('/svg/seller-svgrepo-com.svg')}}" 
                    alt="Vendor" height="5%" width="5%">
                </div>
            </div>
        <div class="card-body center">
            <h5 class="card-title">Vendor</h5>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            <!-- <a href="#" class="btn btn-primary">Begin</a> -->
        </div>
    </a>
    </div>

    <div class="card col-md-6">
    <a href= "{{url('partners/create')}}">

            <div class="row">
                <div class="col-md-4">

                </div>
                <div class="col-md-4">            
                   <img class="card-img-top" src="{{asset('/svg/team-svgrepo-com.svg')}}" 
                    alt="Partners" height="5%" width="5%">
                </div>
            </div>
        <div class="card-body center">
            <h5 class="card-title">Partner</h5>
            <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            <!-- <a href="#" class="btn btn-primary">Begin</a> -->
        </div>
    </a>
    </div>


</div>
@endsection
